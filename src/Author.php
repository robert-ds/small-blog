<?php
namespace codePHP;

class Author extends User{

  /**
   * @return string
   */
  public function getLastName(){
    return $this->lastName;
  }
}