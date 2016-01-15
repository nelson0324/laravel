<?php
namespace NelsonPHP;

class User{
 /**
  *
  * @var type 
  */
  private $email;
  private $password;
  private $firtsname;
  private $lastname;

  public function __construct($email, $password){

    $this->email=$email;
    $this->password=password_hash( $password, PASSWORD_DEFAULT);
    

  }
  
  public function setName($firtsname, $lastname){
      
      $this->firtsname=$firtsname;
      $this->lastname=$lastname;
      
  }


}
