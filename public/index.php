<?php
require_once('../vendor/autoload.php');
require_once('../functions/Functions.php');


use app\controller\TesteController;
use \app\core\RouterCore;

//(new \app\core\RouterCore);

$controller = new TesteController();
$routeCore =  new RouterCore();