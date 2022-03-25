<?php

class PostTest extends PHPUnit\Framework\TestCase{

  /** @test */
  function it_gives_us_the_author_name(){
    $author = new \codePHP\Author('email@em.com','123123', 'AUTHOR_DE_PLAT');
    
    $author->setName('Robert', 'Vásquez');
    
    $post = new \codePHP\Post($author, 'A Title', 'A post body');

    $this->assertEquals('by Robert', $post->getAuthor());


  }
}