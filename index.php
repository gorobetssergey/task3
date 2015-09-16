<?php

$ctrl=isset($_GET['ctrl'])?$_GET['ctrl']:'News';
$act=isset($_GET['act'])?$_GET['ctrl']:'All';

$controllerclassName=$ctrl.'Controller';

require_once __DIR__.'/controllers/'.$controllerclassName.'.php';

$controller=new $controllerclassName;
$method='action'.$act;

$controller->$method();

