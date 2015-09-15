<?php
/**
 * Created by PhpStorm.
 * User: PTAHA
 * Date: 15.09.2015
 * Time: 22:52
 */
require_once __DIR__.'/../classes/DB.php';
class News {
    public $id;
    public $title;
    public $news_text;

    public static function getAll()
    {
        $db=new DB();
        return $db->query('SELECT * FROM news','News');
    }
} 