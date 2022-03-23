<?php

class UserTest extends PHPUnit\Framework\TestCase{

  /** @test */
  function it_should_be_able_to_construct(){
    $user = new \codePHP\User('fake@email.dev','platzi');

    $this->assertInstanceOf(\codePHP\User::class, $user);
  }

  /** @test */
  function it_should_have_a_first_name(){
    $user = new \codePHP\User('email@example.com','12345');

    $user->setName('Robert','Vásquez');

    $name = $user->getFirstName();

    $this->assertEquals('Robert', $name);

  }
  
}
