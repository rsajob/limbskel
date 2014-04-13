<?php
set_include_path(implode(PATH_SEPARATOR,
  array(
    dirname(__FILE__),
    get_include_path()
  )
));

require_once('limb/core/common.inc.php');
$toolkitinc = dirname(__FILE__).'/toolkit.inc.php';
if (file_exists($toolkitinc)) lmb_require($toolkitinc);
lmb_package_register(basename(dirname(__FILE__)), dirname(__FILE__));

