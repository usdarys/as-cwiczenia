<?php
// załaduj i ustaw konfigurację
require_once dirname(__FILE__) . '/core/Config.class.php';
$conf = new core\Config();
include dirname(__FILE__) . '/config/config.php'; 

function &getConf() { 
    global $conf; 
    return $conf; 
}

// załaduj definicję klasy Messages i stwórz obiekt
require_once getConf()->rootPath . '/core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages() { 
    global $msgs; 
    return $msgs; 
}

// przygotuj Smarty, twórz tylko raz - wtedy kiedy potrzeba
$smarty = null;	
function &getSmarty() {
    global $smarty;
    
	if (!isset($smarty)) {
		// stwórz Smarty i przypisz konfigurację i messages
		include_once getConf()->rootPath . '/vendor/smarty/smarty/libs/Smarty.class.php';
		$smarty = new Smarty();	
		// przypisz konfigurację i messages
		$smarty->assign('conf', getConf());
		$smarty->assign('messages', getMessages());
		// zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'one' => getConf()->rootPath . '/app/views',
			'two' => getConf()->rootPath . '/app/views/templates'
		));
	}
	return $smarty;
}

require_once getConf()->rootPath . '/core/utils.php';

// załaduj i stwórz loader klas
require_once getConf()->rootPath . '/core/ClassLoader.class.php';
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

// załaduj i stwórz router
require_once getConf()->rootPath . '/core/Router.class.php';
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

// uruchom lub kontynuuj sesję
session_start(); 
// wczytaj role
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); 

$router->setAction(getFromRequest('action'));