<?php
$aModule = array(
    'id'           => 'agoffcanvas',
    'title'        => 'Aggrosoft Off-Canvas Menü',
    'description'  => 'Ersetzt die mobile Navigation mit einem Off-Canvas Seitenmenü',
    'thumbnail'    => '',
    'version'      => '1.0',
    'author'       => 'Aggrosoft',
    'extend'      => array(
        'oxviewconfig' => 'agoffcanvas/extensions/core/agoffcanvas_oxviewconfig',
        'oxcategorylist' => 'agoffcanvas/extensions/models/agoffcanvas_oxcategorylist'        
    ),
    'files'       => array(
        'agoffcanvaslist'     => 'agoffcanvas/application/controllers/agoffcanvaslist.php'        
    ),
    'templates'   => array(
        'widget/header/agoffcanvas.tpl' => 'agoffcanvas/application/views/tpl/widget/header/agoffcanvas.tpl'
    ),
    'blocks' => array(
        array('template' => 'layout/base.tpl','block'=>'base_style','file'=>'/views/blocks/base_style.tpl'),
        array('template' => 'layout/base.tpl','block'=>'base_js','file'=>'/views/blocks/base_js.tpl')
    ),
    'settings' => array(
        array('group' => 'agoffcanvas_main', 'name' => 'sSidrStyle', 'type' => 'select', 'constrains' => 'light|dark|bare', 'value' => 'light'),
    )
);