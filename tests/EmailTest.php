<?php

use codePHP\Email;

class EmailTest extends PHPUnit\Framework\TestCase{

  function test_email_is_valid(){
    $email = new Email('fake.email@example.com');

    $this->assertInstanceOf(Email::class, $email);
  }

  function test_email_is_invalid(){
    $this->expectedException(\InvalidArgumentException::class);

    $this->expectedExceptionMessage('Esto no es un email');
    //$email = new Email('Esto no es un email');
  }

}