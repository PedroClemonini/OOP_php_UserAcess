<?php
require_once '../controller/UserController.php';

class Router{
  private $userController;

  public function __construct()
  {
    $this->userController = new UserController();
  }


  public function takeTheRoad(){
    if(isset($_POST['cadastrar'])){
      $this->userController->createUser();

    } elseif(isset($_POST['entrar'])){
      $this->userController->login();
    } elseif(isset($_POST['entrar'])){
      $this->userController->login();
    } elseif(isset($_POST['reset'])){
      $this->userController->login();
    } 
  }
  

}
$router = new Router();
$router->takeTheRoad();

?>

