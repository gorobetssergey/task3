<?php
/**
 * Created by PhpStorm.
 * User: PTAHA
 * Date: 16.09.2015
 * Time: 20:42
 */

abstract class AbstractModel implements IModel
{
    protected static $table;
    protected static $class;
    public static function getAll()
    {
        $db=new DB();

        return $db->queryAll('SELECT * FROM '.static::$table,static::$class);
    }

    public static function getOne($id)
    {
        $db=new DB();
        return $db->queryOne('SELECT * FROM '.static::$table.' WHERE id='.$id,static::$class);
    }
} 