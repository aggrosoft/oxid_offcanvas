[{$smarty.block.parent}]
[{oxscript add="var SIDR_BASE_URL='"|cat:$oViewConf->getSelfLink()|cat:"cl=agoffcanvaslist"|cat:"';"}]
[{oxscript include=$oViewConf->getModuleUrl('agoffcanvas')|cat:'out/src/js/sidr.oxid.js'}]