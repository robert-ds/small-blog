<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Illuminate\Http\Request;
use codePHP\Http\Controllers\HomeControllers;

$request = Request::capture();
$controller = new HomeControllers();

echo $controller->index($request);