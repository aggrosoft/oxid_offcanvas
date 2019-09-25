[{$smarty.block.parent}]
[{capture assign=pageScript}]
    var OFFCANVAS_BASE_URL = "[{$oViewConf->getSelfLink()|cat:"cl=agoffcanvaslist"}]";
    var OFFCANVAS_CURRENT_CNID = "[{if $actCategory}][{$actCategory->getId()}][{/if}]";
    var OFFCANVAS_STYLE = ""
[{/capture}]
[{oxscript add=$pageScript}]
[{oxscript include=$oViewConf->getModuleUrl('agoffcanvas')|cat:'out/src/js/agoffcanvas.js'}]