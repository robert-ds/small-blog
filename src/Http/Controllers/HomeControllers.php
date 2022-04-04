<?php
namespace codePHP\Http\Controllers;
use Illuminate\Http\Request;

class HomeControllers{

  public function index(Request $request){

    
    return 'Hello at ' .
    $request->getRequestUri() .
    ' From Controller';

  }

}
