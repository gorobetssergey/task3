<?php
/**
 * Created by PhpStorm.
 * User: Sergiy
 * Date: 16.09.2015
 * Time: 14:44
 */


class NewsController {

    public function actionAll()
    {
        $items=News::getAll();

        include __DIR__.'/../views/news/all.php';
    }

    public function actionOne()
    {

        $id=$_GET['id'];
        $item=News::getOne($id);
        include __DIR__.'/../views/news/one.php';
    }
} 