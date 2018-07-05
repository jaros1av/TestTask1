<?php
class Db
{
//    private $_conn; //соединение с БД
//    private static $_instance; // будущий экземляр класса
    private function __clone()
    {
        
    }
    private function __wakeup()
    {
        
    }
    public static function getConnection() 
    {
        $dsn = 'mysql:host=localhost;dbname=test_task;charset=utf8';
        $pdo = new PDO($dsn, 'task', '123321');
        return $pdo;
    }
}
$pdo = Db::getConnection();