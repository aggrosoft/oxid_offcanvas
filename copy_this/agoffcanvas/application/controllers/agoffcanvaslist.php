<?php

class agoffcanvaslist extends oxUBase {
    
    protected $_sThisTemplate = 'widget/header/agoffcanvas.tpl';
    
    public function render(){
        
        $cnid = oxRegistry::getConfig()->getRequestParameter('cnid');
        $oList = oxNew('oxcategorylist');
        $oList->loadSubCats( $cnid );
        
        $this->_aViewData['oCategories'] = $oList;
        
        if($cnid && $cnid != 'oxrootid'){
            $oActCat = oxNew('oxcategory');
            if($oActCat->load($cnid)){
                $this->_aViewData['oActCat'] = $oActCat;
            }            
        }
        
        return $this->_sThisTemplate;        
    }
    
}
