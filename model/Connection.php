<?php

class Connection {
  
  private static $server = 'localhost';
  private static $dbname = 'db_aula1';
  private static $host = 'root';
  private static $password = '12345678';
  private static $pdo = null;
  
  private function __construct()
  {
  
  }

  public static function connect(){
    try {
      self::$pdo = new PDO("mysql:host=".self::$server . ";dbname=" . self::$dbname,self::$host,self::$password);
      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return self::$pdo;
    } 
    catch(PDOException $e){
      echo $e->getMessage();
    }
  }




}

?>
