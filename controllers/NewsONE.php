<?php


class NewsONE {
    public static $sql='555';
    private static $news;
    public function __construct($table,$id)
    {
        self::$sql='SELECT id,tittle FROM '.$table.' WHERE id='.$id;
    }
    public static function ONE()
    {
        //echo self::$sql;die;
        $ob=new DB();
        self::$news=$ob->get(NewsONE::$sql);
        Views::showeAll(self::$news);
    }
} 