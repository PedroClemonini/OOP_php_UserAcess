<?php
class User{
  private string $username;
  private string $email;
  private string $password;

  public function __construct($username, $email,$password){
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
  }

}
?>
