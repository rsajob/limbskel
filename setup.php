<?php

set_include_path(implode(PATH_SEPARATOR,
  array(
    dirname(__FILE__) . '/lib/',
    dirname(__FILE__) . '/src/',
    dirname(__FILE__),
    get_include_path()
  )
));

require_once('limb/core/common.inc.php');

if(file_exists(dirname(__FILE__) . '/setup.override.php'))
  require_once(dirname(__FILE__) . '/setup.override.php');

lmb_env_setor('LIMB_CONTROLLERS_INCLUDE_PATH', 'src/controller;src/*/src/controller;src/*/src;limb/web_app/src/controller');
lmb_env_setor('LIMB_VAR_DIR', dirname(__FILE__) . '/var');
lmb_env_setor('LIMB_APP_MODE' , 'production');

lmb_env_setor('LIMB_CONF_INCLUDE_PATH', 'settings;src/*/settings;limb/*/settings');

// Загружаем нужные пакеты из limb
lmb_package_require('toolkit');
lmb_package_require('web_app');
lmb_package_require('config');
lmb_package_require('net');
lmb_package_require('fs');
lmb_package_require('log');

// Первым загружаем главный пфкет _main
lmb_package_require('_main', 'src');

// Загружаем остальные пакеты
auto_load_packages(dirname(__FILE__) . '/src');

/**
 * Функция авто-загрузки локальных пакетов (пробегает папку src и добавляет все пакеты автоматически)
 * @param $dir string папка пактов
 */
function auto_load_packages($dir){
	if (!$handle = opendir($dir)) return;
	while (false !== ($entry = readdir($handle)))
		if ($entry != "." && $entry != "..")
			lmb_package_require($entry, 	$dir);
	closedir($handle);
}

/**
 * @return lmbConfTools|lmbNetTools|lmbLogTools|lmbViewTools|lmbFsTools|lmbWebAppTools|UserTools|MainTools|MongoTools
 */
function toolkit(){return lmbToolkit::instance();}
function tk(){return toolkit();}
