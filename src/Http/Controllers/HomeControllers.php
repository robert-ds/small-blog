<?php
namespace codePHP\Http\Controllers;
use Illuminate\Http\Request;
use codePHP\Http\Views\View;

class HomeControllers{

  public function index(Request $request){

    $view = new View('home', [
      'message' => 'Hello from a view!'
    ]);
   
    $response = $view->render();
    $response->send();
  }

}
