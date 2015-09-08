<?php

class NewsAll
{
    public static $sql='555';
    private static $news;
    public function __construct($table)
    {
        self::$sql='SELECT id,tittle FROM '.$table;
    }
    public static function All()
    {
        echo '111';die;
        /*
        $ob=new DB();
        self::$news=$ob->get(NewsAll::$sql);
        ViewsONE::showeAll(self::$news);
        */
    }
}
