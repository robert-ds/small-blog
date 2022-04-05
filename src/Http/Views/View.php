<?php
namespace codePHP\Http\Views;

use Illuminate\Http\Client\Response;

class View{

  private $template;
  private $params;

  public function __construct($template, array $params = []){
    $this->template = $template;
    $this->params = $params;
  }

  /** @return Response */

  public function render(){
    $content = $this->loadTemplate();
    
    $response = new Response($content);
    return $response;
  }

  public function loadTemplate(){
    $path = dirname(dirname(dirname(__DIR__))) . '/resources/views';

    $templatePath = "$path/{$this->template}.php";

    return $this->includeTemplateFromFile(
      $templatePath,
      $this->params
    );

  }

  private function includeTemplateFromFile($path, $params){
      
    if(file_exists($path)){
      extract($params);
      return include $path;
    }
  }
}