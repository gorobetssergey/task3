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
        //var_dump($vuew->items);die;


        foreach ($view as $k=>$k) {
            echo $k;
        }
        die;
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