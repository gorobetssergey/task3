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
        $view=new View();

        $view->items=$items;

        foreach ($view as $k=>$k) {
            echo $k;
        }
        $view->display('all.php');
    }

    public function actionOne()
    {

        $id=$_GET['id'];
        $item=News::getOne($id);

        $vuew=new View();

        $vuew->item=$item;
        //$vuew->assign('item',$item);
        $vuew->display('one.php');

    }
} 