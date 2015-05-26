<?php


ini_set('display_errors', 1);
require "vendor/autoload.php";

$router = new App\Router\Router($_SERVER["REQUEST_URI"]);


$router->get('/',function(){
   echo 'home page';
});


$router->get('/posts','Blog#show');

$router->get('/posts/:id-:slug',function($id, $slug) use ($router){

    echo $router->url('Blog#show',['id'=>1,'slug'=>'slugsd-idads']);

},'posts.show')->with('id','[0-9]+')->with('slug','([a-z\-0-9]+)');

$router->get('/posts/:id','Blog#show');


$router->post('/posts/:id',function($id){

   print_r($_POST);
});

$router->run();
