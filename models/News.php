<?php
/**
 * Created by PhpStorm.
 * User: PTAHA
 * Date: 15.09.2015
 * Time: 22:52
 */

class News {
    public $id;
    public $title;
    public $news_text;

    public static function getAll()
    {
        $db=new DB();
        return $db->queryAll('SELECT * FROM news','News');
    }
    public static function getOne($id)
    {
        $db=new DB();
        return $db->queryOne('SELECT * FROM news WHERE id='.$id,'News');
    }
} 