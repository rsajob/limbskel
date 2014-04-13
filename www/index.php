<?php

require_once(dirname(__FILE__) . '/../setup.php');
require_once('src/MyLimbApplication.class.php');

$application = new MyLimbApplication();
$application->process();


