<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// ไม่ให้คำเตือน Deprecated ของ PHP 8 (ส่วนใหญ่มาจากไลบรารีเก่าใน vendor) กลายเป็นหน้า error
// error จริง (Warning, Notice, Exception) ยังแสดงพร้อม stack trace ตามปกติ
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
