<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2015
 * @version   OXID eShop CE
 */

/**
 * Smarty {oxhasrights}{/oxhasrights} block plugin
 *
 * Type:     block function<br>
 * Name:     oxhasrights<br>
 * Purpose:  checks if user has rights to view block of data
 *
 * @param array  $params  params
 * @param string $content contents of the block
 * @param Smarty &$smarty clever simulation of a method
 * @param bool   &$repeat repeat
 *
 * @return string $content re-formatted
 */
function smarty_block_oxhasrights( $params, $content, &$smarty, &$repeat )
{
    $sIdent  = isset( $params['ident'] )?$params['ident']:null;

//Gefilterte OxidKlassen
    $filterClassNames = array("oxwarticlebox","oxwarticledetails");

    if (isset($sIdent) && ($sIdent == "SHOWARTICLEPRICE" || $sIdent == "TOBASKET" )) {
        // Pruefe ob Kategorie ohne Preis konfiguriert
        if (!in_array($smarty->_tpl_vars['oView']->getClassName(),$filterClassNames)) {
            echo "DEBUG !!\n";
            echo $smarty->_tpl_vars['oView']->getClassName();
            echo "\n /DEBUG ";

            return $content;
        }


        $actCategory = $smarty->_tpl_vars['oView']->getActiveCategory();
        // Pruefe ob Artikel ohne Preisanzeige konfiguriert
        $actProduct = $smarty->_tpl_vars['oView']->getProduct();
        if ( (isset($actCategory->oxcategories__plshowprice->value) && !$actCategory->oxcategories__plshowprice->value || !$actProduct->getCategory()->oxcategories__plshowprice->value) || !$actProduct->oxarticles__plshowprice->value ) {
            return false;
        }
    }
    return $content;
}
