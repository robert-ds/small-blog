<?php
namespace codePHP;

class Email{

  private $address;

  public function __construct($address){
    //Utilizando funcion filter_var para validar email
    if(!filter_var($address, FILTER_VALIDATE_EMAIL)){
      throw new \InvalidArgumentException("Ivalid email address: [$address]");
    }
    $this->addres = $address;
  }

  public function getAddress(){
    return $this->address;
  }
}