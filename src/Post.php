<?php
namespace codePHP;

class Post{
  protected $author;
  protected $title;
  protected $body;

  public function __construc(Author $author, $title, $body){
    $this->author = $author;
    $this->title = $title;
    $this->body = $body;
  }

  public function getTitle()
  {
      return $this->title;
  }

  public function getBody(){
    return $this->body;
  }

  public function getAuthor(){
    return 'by ' . $this->author->getFirstName();
  }
}