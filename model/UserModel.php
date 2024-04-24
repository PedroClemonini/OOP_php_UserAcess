<?php
require_once "../model/Connection.php";
require_once "../model/User.php";

class UserModel{
  private $pdo;

  public function __construct(){
    $this->pdo = Connection::connect();
  }
  
  public function createUser($username,$email,$password){
    try{
      $sql = "INSERT INTO tb_user (email,password,name) values (?,?,?)";
      $statement = $this->pdo->prepare($sql);
      $statement->execute([$email,$password,$username]);
      return true;
    } catch(PDOException $e){
      echo 'Erro:' . $e->getMessage();
      return false;
    }
      
  }
  public function login($email,$password){
    try{
      $sql = "SELECT * from tb_user WHERE email = ? and password = ?";
      $statement = $this->pdo->prepare($sql);
      $statement->execute([$email,$password]);

      if($statement->fetch(PDO::FETCH_ASSOC) == TRUE){
        return true;
      }else{
        echo 'Erro, usuário não encontrado';
        return false;
      }
    } catch(PDOException $e){
      echo 'Erro:' . $e->getMessage();
      return false;
    }
  }
  

}
?>
