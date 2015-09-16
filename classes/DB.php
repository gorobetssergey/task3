<?php
class DB
{
    /* private $link = null;
     public function __construct($host, $user, $pass, $db_name, $port=3306)
     {
         $this->link = mysqli_connect($host, $user, $pass, $db_name, $port);
         if (mysqli_connect_errno())
             die("Ошибка подключения (".mysqli_connect_errno()."): ".mysqli_connect_error());
     }

     public function query($query_string)
     {
         $result = mysqli_query($this->link, $query_string);
         if (!$result)
             die("Ошибка запроса (".mysqli_errno($this->link)."): ".mysqli_error($this->link));
         return $result;
     }

     public function close()
     {
         if ($this->link) mysqli_close($this->link);
     }
 }

 $db = new DB('localhost', 'root', 'qscvhuki', 'news');
 $result = $db->query('SELECT * FROM news');

 $ret=[];
 foreach($result as $a)
 {
     foreach($a as $b) {
         echo $b.'///';
     }
     echo '<br>';*/
    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=news', 'root', 'qscvhuki');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec('SET NAMES "utf8"');
        } catch (PDOException $e) {
            exit('Невозможно подключиться к серверу баз данных: ' . $e->getMessage());
        }
    }

    public function queryAll($sql, $class='stdClass')
    {

        $res= $this->pdo->query($sql);
        $result=$res->fetchAll(PDO::FETCH_CLASS,$class);

         $ret=[];
         foreach($result as $row){
             $ret[]=$row;
         }
         return $ret;
    }
    public function queryOne($sql,$class='atdClass')
    {
        return $this->queryAll($sql,$class)[0];
    }
}

