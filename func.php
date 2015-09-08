<?php
function __autoload($ClassName)
{
    if(file_exists(__DIR__.'/views/views.php')){
        include __DIR__.'/views/views.php';
    }
    if(file_exists(__DIR__.'/models/DB.php')) {
        include __DIR__ . '/models/DB.php';
    }
}