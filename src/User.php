<?php
namespace codePHP;

class User{
  /**
   * @type string
   */
  protected $firstName;
  /**
   * @type string
   */
  protected $lastName;
  /**
   * @type string
   */
  protected $email;
  /**
   * @type string
   */
  protected $password;

  public function __construct($email, $password){
    $this->email = $email;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  /**
   * @param string $firstName
   * @param string $lastName
   */
  public function setName($firstName, $lastName){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  /**
   * @return string
   */
  public function getFirstName(){
    return $this->firstName;
  }

  /**
   * @return string
   */
  public function getLastName(){
      return $this->lastName;
  }
}
