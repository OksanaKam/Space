<?php
// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors', '1');
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));

require ROOT . '/components/Debug.php';
require ROOT . '/components/Router.php';

// 3. Подключение к БД
require ROOT . '/components/DBConnect.php';

// 4. Вызываем методы класса Router
$newRout = new Router();
$newRout->run();