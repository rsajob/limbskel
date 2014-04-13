<?php

include_once('limb/view/settings/macro.conf.php');

// Recompiling templates is enabled only in debug mode.
$conf['forcecompile'] = lmbToolkit::instance()->isWebAppDebugEnabled();

$conf['tpl_scan_dirs'] 		= array('template',  'src/*/template',  'limb/*/src/template');
$conf['tags_scan_dirs'] 	= array('src/macro', 'src/*/src/macro', 'limb/*/src/macro', 	'limb/macro/src/tags');
$conf['filters_scan_dirs'] 	= array('src/macro', 'src/*/src/macro', 'limb/*/src/macro', 	'limb/macro/src/filters');
