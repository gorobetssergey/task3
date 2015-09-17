<?php
/**
 * Created by PhpStorm.
 * User: PTAHA
 * Date: 17.09.2015
 * Time: 20:09
 */

class View
    implements Iterator{

    protected $data=[];



    public function __set($k, $v)
    {
        $this->data[$k]=$v;
    }
    public function __get($k)
    {
        return $this->data[$k];
    }

    public function display($template)
    {
        foreach ($this->data as $key=>$value) {
            $$key=$value;
        }

        include __DIR__.'/../views/news/'.$template;
    }


    public function current()
    {
    }


    public function next()
    {
    }


    public function key()
    {
    }


    public function valid()
    {
    }


    public function rewind()
    {
    }
}