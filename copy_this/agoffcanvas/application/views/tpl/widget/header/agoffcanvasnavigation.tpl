<div class="list-group list-group-flush">
    [{if $oActCat}]
        <a href="[{$oActCat->getLink()}]" data-cnid="[{$oActCat->oxcategories__oxparentid->value}]" class="list-group-item list-group-item-action active offcanvas-ajax-link offcanvas-parent-link">
            <i class="fas fa-angle-left"></i> [{$oActCat->oxcategories__oxtitle->value}]
        </a>
        <a href="[{$oActCat->getLink()}]" data-cnid="[{$oActCat->oxcategories__oxparentid->value}]" class="list-group-item list-group-item-action offcanvas-current-link">
            [{oxmultilang ident="OFFCANVAS_SHOW_ALL"}]
        </a>
    [{/if}]
    [{foreach from=$oCategories item=cat}]
        [{if $cat->getIsVisible()}]
        <a href="[{$cat->getLink()}]" data-cnid="[{$cat->getId()}]" class="list-group-item list-group-item-action  d-flex justify-content-between align-items-center [{if $cat->getSubCats()}]offcanvas-ajax-link[{/if}]">
            [{$cat->oxcategories__oxtitle->value}] [{if $cat->getSubCats()}]<i class="fa fa-angle-right pull-right"></i>[{/if}]
        </a>
        [{/if}]
    [{/foreach}]
</div>