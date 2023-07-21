<?php
define('DEV', true);
define('DOMAIN', 'http://localhost:8888'); // Domain (used to create links in emails)
//define('DOC_ROOT', '/AcademiaLondonEye/public_html/');
define('ROOT_FOLDER', 'public_html');

// DOC_ROOT is created because the download code has several versions of the sample site
// On a live site a single forward slash / would indicate the document root folder
$this_folder   = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
$parent_folder = dirname($this_folder);
define("DOC_ROOT", $parent_folder . DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR);

// DATABASE SETTINGS
$username = "employee";
$password = "lLtdGF@/56f1HzW";
$db = "academia";
$type = 'mysql';
$server = 'localhost';
$charset = 'utf8mb4';
$dsn = "$type:host=$server;dbname=$db;charset=$charset";

// SMTP server settings
$email_config = [
    'server'      => '',
    'port'        => '',
    'username'    => '',
    'password'    => '',
    'security'    => '',
    'admin_email' => '',
    'debug'       => (DEV) ? 2 : 0,
];

// FILE UPLOAD SETTINGS
define('MEDIA_TYPES', ['image/jpeg', 'image/png', 'image/gif',]);
define('FILE_EXTENSIONS', ['jpeg', 'jpg', 'png', 'gif']);
define('MAX_SIZE', '5242880');
define('UPLOADS', dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR);
