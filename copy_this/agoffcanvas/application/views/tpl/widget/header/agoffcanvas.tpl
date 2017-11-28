<ul>
    [{if $oActCat}]
    <li><a href="[{$oActCat->getLink()}]" data-cnid="[{$oActCat->oxcategories__oxparentid->value}]" class="sidr-ajax-link sidr-parent-link"><i class="fa fa-angle-left"></i> [{$oActCat->oxcategories__oxtitle->value}]</a></li>
    [{/if}]
    [{foreach from=$oCategories item=cat}]
    <li><a href="[{$cat->getLink()}]" data-cnid="[{$cat->getId()}]" [{if $cat->getSubCats()}]class="sidr-ajax-link"[{/if}]>[{$cat->oxcategories__oxtitle->value}]  [{if $cat->getSubCats()}]<i class="fa fa-angle-right pull-right"></i>[{/if}]</a></li>
    [{/foreach}]
</ul>