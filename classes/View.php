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
    private $position = 0;

    public function __construct() {
        $this->position = 0;
    }

    public function __set($k, $v)
    {
        $this->data[$k]=$v;
    }
    public function __get($k)
    {
        //return $this->data[$k];
    }

    public function current()
    {
        return $this->array[$this->position];
    }


    public function next()
    {
        ++$this->position;
    }


    public function key()
    {
        return $this->position;
    }


    public function valid()
    {
        return isset($this->array[$this->position]);
    }


    public function rewind()
    {
        $this->position = 0;
    }

    public function render($template)
    {

        foreach ($this->data as $key=>$value) {
            $$key=$value;
        }
        ob_start();
        include __DIR__.'/../views/news/'.$template;
        $content=ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($tamplate)
    {
        echo $this->render($tamplate);
    }
}