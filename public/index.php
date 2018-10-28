<?php
ini_set('display_errors',1);
session_start();
$script='';
use \src\AutoLoader;
use \src\App;

/**
 * Appel de l'autoloader
 */
require dirname(__DIR__).'/src/autoloader.php';
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
