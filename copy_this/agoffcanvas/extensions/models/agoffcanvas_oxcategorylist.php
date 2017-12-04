<?php

class agoffcanvas_oxcategorylist extends agoffcanvas_oxcategorylist_parent {
    
    protected $_blLoadSubList = false;
    
    public function setLoadSubList($blLoadSubList){
        $this->_blLoadSubList = $blLoadSubList;
    }
    
    public function getLoadSubList(){
        return $this->_blLoadSubList;
    }
    
    public function loadSubCats($sActCat = null){
               
        $this->_sActCat = $sActCat;
        
        if(!$sActCat) $sActCat = 'oxrootid';
        
        $sViewName = $this->getBaseObject()->getViewName();
        $sFieldList = $this->_getSqlSelectFieldsForTree($sViewName);
        
        $sOrdDir = 'asc';
        $sOrder = "oxsort $sOrdDir, oxrootid $sOrdDir, oxleft $sOrdDir";
        $sSql =  "select $sFieldList from $sViewName where $sViewName.oxparentid = ".oxDb::getDb()->quote($sActCat)." order by $sOrder";
        $aParentData = oxDb::getDb(oxDb::FETCH_MODE_ASSOC)->getAll($sSql);
        
        $aParentKeys = array_map(function($item){ return oxDb::getDb()->quote($item['oxid']); },$aParentData);
        $sSql =  "select $sFieldList from $sViewName where $sViewName.oxparentid IN(". implode(",", $aParentKeys).") order by $sOrder";
        $aChildData = oxDb::getDb(oxDb::FETCH_MODE_ASSOC)->getAll($sSql);
        $aData = array_merge($aParentData, $aChildData);

        $this->assignArray($aData);
        
        // remove inactive categories
        $this->_ppRemoveInactiveCategories();

        // builds navigation path
        $this->_ppAddPathInfo();

        // add content categories
        $this->_ppAddContentCategories();

        // build tree structure
        $aTree = array();
        foreach ($this->_aArray as $oCat) {
            $sParentId = $oCat->oxcategories__oxparentid->value;
            if ($sParentId != $sActCat) {
                if (isset($this->_aArray[$sParentId])) {
                    $this->_aArray[$sParentId]->setSubCat($oCat, $oCat->getId());
                }
            } else {
                $aTree[$oCat->getId()] = $oCat;
            }
        }

        $this->assign($aTree);
       
    }
    
}