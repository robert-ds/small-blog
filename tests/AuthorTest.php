<?php

class AuthorTest extends PHPUnit\Framework\TestCase{
  
  /** @test */
  function it_should_construct(){
    $author = new \codePHP\Author(
      'ra@foo.dev',
      'plat',
      'AUTHOR_DE_PLAT'
    );
    $this->assertInstanceOf(\codePHP\Author::class, $author);
  }

  /** @test */
  function it_should_fail_when_no_key_is_given(){
    $this->setExpectedException(\InvalidArgumentException::class);
    $author = new \codePHP\Author(
      'ame@foo.dev',
      '1214',
      'Rob'
    );
  }
}