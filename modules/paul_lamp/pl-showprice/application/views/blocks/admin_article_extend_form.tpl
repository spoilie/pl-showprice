[{$smarty.block.parent}]
<tr>
    <td class="edittext" width="140">
        [{ oxmultilang ident="PL_SHOWPRICE_ARTICLE_EXTEND" }]
    </td>
    <td class="edittext">
        <input type="hidden" name="editval[oxarticles__plshowprice]" value='0'>
        <input class="edittext" type="checkbox" name="editval[oxarticles__plshowprice]" value='1' [{if $edit->oxarticles__plshowprice->value == 1}]checked[{/if}]>
        [{ oxinputhelp ident="PL_SHOWPRICE_HELP" }]
    </td>
</tr>
