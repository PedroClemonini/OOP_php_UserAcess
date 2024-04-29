<?php
require_once "../model/Connection.php";

class UserModel{
  private string $username;
  private string $email;
  private string $password;
  private $pdo;

  public function __construct(){
    
    $this->pdo = Connection::connect();
  }
  
  public function createUser($username,$email,$password) : bool
  {
    try{
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;

      $sql = "INSERT INTO tb_user (email,password,name) values (?,?,?)";
      $statement = $this->pdo->prepare($sql);

      $statement->execute([
        $this->email,
        $this->password,
        $this->username
      ]);
      
      return true;

    } catch(PDOException $e){
      throw new Exception($e->getMessage());
      return false;
    }
      
  }
  public function login($email,$password) : bool
  {
    try{
      $sql = "SELECT * from tb_user WHERE email = ? and password = ?";
      $statement = $this->pdo->prepare($sql);
      $statement->execute([$email,$password]);


      if($statement->fetch(PDO::FETCH_ASSOC)){
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
