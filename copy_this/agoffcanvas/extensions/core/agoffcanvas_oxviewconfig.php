<?php

class agoffcanvas_oxviewconfig extends agoffcanvas_oxviewconfig_parent {
    
    public function getSidrStyle(){
        return $this->getConfig()->getShopConfVar('sSidrStyle',null,'module:agoffcanvas');
    }
    
}