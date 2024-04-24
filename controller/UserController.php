<?php
require_once '../model/UserModel.php';

class UserController
{
  private $userModel;

  public function __construct()
  {
    $this->userModel = new UserModel();
  }

  public function createUser()
  {

    if (!isset($_POST['cadastrar'])) {
      $username = $_POST['cxname'];
      $email = $_POST['cxmail'];
      $password = $_POST['cxpassword'];

      $this->userModel->createUser($username, $email, $password);
      header("Location: ../view/acess.php");
    } else {
      echo 'Erro ao cadastrar usuário';
    }
  }

  public function login()
  {
    session_start();

    if(!isset($_SESSION['userTry'])){
      $_SESSION['userTry'] = $_POST['cxmail'];
    }

    $email = $_POST['cxmail'];

    if($_SESSION['userTry'] != $email){
      session_destroy();
      $_SESSION['LoginTryQty'] = 0;
    }

    $_SESSION['userTry'] = $_POST['cxmail'];
    $password = $_POST['cxpassword'];

    if(!$this->userModel->login($email, $password)){
      $_SESSION['LoginTryQty']++;
      header("Location: ../view/login.php");
    }
    header("Location: ../view/acess.php");
    $_SESSION['loginSucess'] = true;
}

  public function resetSession(){
    session_destroy();
    header("Location: ../view/login.php");
  }
}

