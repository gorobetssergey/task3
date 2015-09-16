<?php

require_once __DIR__.'/autoload.php';

$ctrl=isset($_GET['ctrl'])?$_GET['ctrl']:'News';
$act=isset($_GET['act'])?$_GET['act']:'All';

$controllerclassName=$ctrl.'Controller';



$controller=new $controllerclassName;
$method='action'.$act;

$controller->$method();

