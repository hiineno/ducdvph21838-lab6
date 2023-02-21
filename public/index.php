<?php
const ROOT_PATH = "/thithu/public/";
require_once __DIR__ . "/../vendor/autoload.php";

    use App\Request;
    use App\Router;
    use App\Controllers\Controller;
    use App\Controllers\ProductController;
    $router = new Router();
    Router::get('/',[ProductController::class,'index']);
      
    Router::get('/index',[ProductController::class,'index']);
    Router::get('/delete',[ProductController::class,'delete']);
    Router::get('/them',[ProductController::class,'themget']);
    Router::get('/edit',[ProductController::class,'edit']);
    //post product
    Router::post('/editpost',[ProductController::class,'editpost']);   
    Router::post('/index',[ProductController::class,'thempost']);
    $router->resolve();