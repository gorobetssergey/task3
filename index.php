<?php

require_once __DIR__.'/func.php';

if(isset($_GET['News']) AND $_GET['News']=='All'){
    require __DIR__.'/controllers/NewsAll.php';
    $ob=new NewsAll('news');
    NewsAll::All();
}
if((isset($_GET['News']) AND $_GET['News']=='One') AND (isset($_GET['Num'])))
{
    require __DIR__.'/controllers/NewsOne.php';
    $ob=new NewsONE('News',$_GET['Num']);
    NewsONE::ONE();
}
