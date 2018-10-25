<?php
ini_set('display_errors',1);
session_start();

use \app\AutoLoader;
use \app\App;

/**
 * Appel de l'autoloader
 */
require dirname(__DIR__).'/app/autoloader.php';
AutoLoader::register();

if (!isset($_GET['page'])) $_GET['page'] = 'home';

if (is_file('../controllers/'.$_GET['page'].'.controller.php'))
{
	include '../controllers/'.$_GET['page'].'.controller.php';
}
else
{
	header('Location:/home');
}
