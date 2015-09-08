<?php

class DB {
    private static function db_connect()
    {
        try
        {
            $pdo=new PDO('mysql:host=localhost;dbname=news','root','qscvhuki');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec('SET NAMES "utf8"');
        }
        catch(PDOException $e)
        {
            return $outpute='Невозможно подключиться к серверу баз данных: '.$e->getMessage();
            exit();
        }
        return $pdo;
    }
    public function get($sql)
    {
        $res=DB::db_connect();
        $result=$res->query($sql);
        return $result;
    }
}