<div class="navbar">
    <a class="navbar-brand" href="[{$oViewConf->getHomeLink()}]" title="[{$oxcmp_shop->oxshops__oxtitleprefix->value}]">
        [{assign var="slogoImg" value=$oViewConf->getViewThemeParam('sLogoFile')}]
        <img src="[{$oViewConf->getImageUrl($slogoImg)}]" alt="[{$oxcmp_shop->oxshops__oxtitleprefix->value}]">
    </a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link offcanvas-close" href="#"><i class="fas fa-times"></i> <span class="sr-only">(schliessen)</span></a>
        </li>
    </ul>
</div>