<?php
require __DIR__.'/classes/DB.php';

$ob=new DB();
$res=$ob->query('SELECT * FROM news');
print_r($res);

