<?php
namespace codePHP;

class Author extends User{

  public function __construct($email, $password, $key){
    parent::__construct($email, $password);

    if($key != 'AUTHOR_DE_PLAT'){
      throw new \InvalidArgumentException("Ivalid key given");
    }
  }

  /**
   * @return string
   */
  public function getLastName(){
    return $this->lastName;
  }
}