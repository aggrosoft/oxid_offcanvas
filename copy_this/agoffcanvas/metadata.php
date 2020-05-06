<?php

$sMetadataVersion = '1.1';

$aModule = array(
    'id'           => 'agoffcanvas',
    'title'        => 'Aggrosoft Off-Canvas Menü',
    'description'  => 'Ersetzt die mobile Navigation mit einem Off-Canvas Seitenmenü',
    'thumbnail'    => '',
    'version'      => '2.0.3',
    'author'       => 'Aggrosoft',
    'extend'      => array(
        'oxcategorylist' => 'agoffcanvas/extensions/models/agoffcanvas_oxcategorylist'        
    ),
    'files'       => array(
        'agoffcanvaslist'     => 'agoffcanvas/application/controllers/agoffcanvaslist.php'        
    ),
    'templates'   => array(
        'widget/header/agoffcanvas.tpl' => 'agoffcanvas/application/views/tpl/widget/header/agoffcanvas.tpl',
        'widget/header/agoffcanvasheader.tpl' => 'agoffcanvas/application/views/tpl/widget/header/agoffcanvasheader.tpl',
        'widget/header/agoffcanvasnavigation.tpl' => 'agoffcanvas/application/views/tpl/widget/header/agoffcanvasnavigation.tpl',
        'widget/header/agoffcanvasfooter.tpl' => 'agoffcanvas/application/views/tpl/widget/header/agoffcanvasfooter.tpl'
    ),
    'blocks' => array(
        array('template' => 'layout/base.tpl','block'=>'base_style','file'=>'/views/blocks/base_style.tpl'),
        array('template' => 'layout/base.tpl','block'=>'base_js','file'=>'/views/blocks/base_js.tpl')
    )
);