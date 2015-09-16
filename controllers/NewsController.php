<?php
/**
 * Created by PhpStorm.
 * User: Sergiy
 * Date: 16.09.2015
 * Time: 14:44
 */

require_once __DIR__.'/../models/News.php';
class NewsController {

    public function actionAll()
    {
        $items=News::getAll();

        include __DIR__.'/../views/news/all.php';
    }

    public function actionOne()
    {
        $id=$_GET['id'];
        $item=News::getOne();
        include __DIR__.'/../views/news/one.php';
    }
} 