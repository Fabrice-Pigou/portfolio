<?php
ini_set('display_errors',1);
session_start();
$script='';
$css='';
use \src\AutoLoader;
use \src\App;
use src\app\game\Sessions;

/**
 * Appel de l'autoloader
 */
require dirname(__DIR__).'/src/boot.php';
require dirname(__DIR__).'/src/autoloader.php';
AutoLoader::register();

$oSessions = new Sessions;

if (!isset($_GET['page'])) $_GET['page'] = 'home';

if (is_file('../controllers/'.$_GET['page'].'.controller.php'))
{
	include '../controllers/'.$_GET['page'].'.controller.php';
}
else
{
	header('Location:/home');
}
