<?php
class Views {
    public static function showeAll($res)
    {
        foreach ($res as $arr) {
            echo $arr['id'].'-'.$arr['tittle'].'<br>';
        }
    }
}
class ViewsONE {
    public static function showeAll($res)
    {
        foreach ($res as $arr) {
            echo $arr['id'].'-'.$arr['tittle'].'<br>';
        }
    }
}

