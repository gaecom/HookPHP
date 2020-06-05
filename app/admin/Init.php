<?php
declare(strict_types=1);

define('APP_NAME', 'iot');
define('APP_CONFIG', Yaconf::get('admin'.YAF\ENVIRON));
define('APP_TABLE', Yaconf::get('adminTable') + Yaconf::get(APP_NAME.'Table'));

require __DIR__.'/../../vendor/autoload.php';

$app = new Yaf\Application(['application' => APP_CONFIG['application']]);