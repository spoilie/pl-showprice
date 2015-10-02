<?php

/**
 * Paul Lamp
 * Show Price Erweiterung fuer Oxid Esales
 * Copyright (C) 2015  Paul Lamp
 * info:  pl@paul-lamp.de
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */


$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'pl-showprice',
    'title'       => '<strong>Paul Lamp</strong> ShowPrice',
    'description' => '',
    'thumbnail'   => '',
    'version'     => '0.1.0 (2015-10-02)',
    'author'      => 'Paul Lamp',
    'email'       => 'pl@paul-lamp.de',
    'url'         => 'https://github.com/spoilie/pl-showprice',
    'extend'      => array(
        'oxutilsview' => 'paul_lamp/pl-showprice/extend/oxutilsview_pl',
    ),
    'files'       => array(
        'pl_showprice' => 'paul_lamp/pl-showprice/application/pl_showprice.php',
    ),
    'events'      => array(
        'onActivate'   => 'pl_showprice::onActivate',
        'onDeactivate' => 'pl_showprice::onDeactivate',
    ),
    'blocks'      => array(
        array(
            'template' => 'article_extend.tpl',
            'block'    => 'admin_article_extend_form',
            'file'     => '/application/views/blocks/admin_article_extend_form.tpl'
        ),
        array(
            'template' => 'category_main.tpl',
            'block'    => 'admin_category_main_form',
            'file'     => '/application/views/blocks/admin_category_main_form.tpl'
        ),
    )
);
