<?php
define('APP_ROOT', dirname(__FILE__, 2));

require APP_ROOT . '/src/functions.php';
require APP_ROOT . '/config/config.php';
require APP_ROOT . '/vendor/autoload.php';

if (DEV !== true) {
    set_exception_handler('handle_exception');
    set_error_handler('handle_error');
    register_shutdown_function('handle_shutdown');
}

$cms = new \AcademiaLondonEye\CMS\CMS($dsn, $username, $password); // Create CMS object
unset($dsn, $username, $password);                       // Remove database config data

$session = $cms->getSession();
