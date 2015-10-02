[{$smarty.block.parent}]
<tr>
    <td class="edittext" width="140">
        [{ oxmultilang ident="PL_SHOWPRICE_CATEGORY_EXTEND" }]
    </td>
    <td class="edittext">
        <input type="hidden" name="editval[oxcategories__plshowprice]" value='0'>
        <input class="edittext" type="checkbox" name="editval[oxcategories__plshowprice]" value='1' [{if $edit->oxcategories__plshowprice->value == 1}]checked[{/if}]>
        [{ oxinputhelp ident="PL_SHOWPRICE_HELP" }]
    </td>
</tr>
