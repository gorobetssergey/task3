<?php
/**
 * Created by PhpStorm.
 * User: PTAHA
 * Date: 15.09.2015
 * Time: 22:52
 */

class News extends AbstractModel{
    public $id;
    public $title;
    public $news_text;

    protected static $table='news';
    protected static $class='News';



} 