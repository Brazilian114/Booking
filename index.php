<?php
/*
// change the following paths if necessary
$yii = dirname(__FILE__) . '/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
Yii::createWebApplication($config)->run();*/


// change the following paths if necessary
$yii = dirname(__FILE__) . '/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

// แก้ไข ตัว error "get_room" ใส่ตรงนี้ครับ ตามนี้เลย
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE | E_STRICT | E_DEPRECATED);
error_reporting(E_ALL ^ E_NOTICE);

require_once($yii);
Yii::createWebApplication($config)->run();
