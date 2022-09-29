<?php
require_once '../vendor/autoload.php';

define('APP_ROOT', dirname(__FILE__, 2));
const SITE_NAME = 'EducacionCristiana';

\App\Session::remove('loggedIn');

$application = new App\Application();
$application->run();

