<?php

if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
	die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);

defined('YII_ENV') or define('YII_ENV', 'test');

require(__DIR__ . '/../vendor/yiisoft/yii2/yii/Yii.php');
require(__DIR__ . '/../vendor/autoload.php');

$config = require(__DIR__ . '/../config/web-test.php');

$application = new yii\web\Application($config);
$application->run();
