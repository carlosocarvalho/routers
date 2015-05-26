# routers
[![Latest Stable Version](https://poser.pugx.org/carlosocarvalho/router/v/stable)](https://packagist.org/packages/carlosocarvalho/router) [![Total Downloads](https://poser.pugx.org/carlosocarvalho/router/downloads)](https://packagist.org/packages/carlosocarvalho/router) [![Latest Unstable Version](https://poser.pugx.org/carlosocarvalho/router/v/unstable)](https://packagist.org/packages/carlosocarvalho/router) [![License](https://poser.pugx.org/carlosocarvalho/router/license)](https://packagist.org/packages/carlosocarvalho/router)
## Simple Routers PHP 

>Examples

<?php
use App\Router\Router;


   $router = new App\Router\Router($_SERVER["REQUEST_URI"]);
   $router->get('/',function(){
    echo 'home page';
   });
  
  $router->get('/posts/:id-:slug',function($id, $slug) use ($router){
    echo $router->url('Blog#show',['id'=>1,'slug'=>'slugsd-idads']);
},'posts.show')->with('id','[0-9]+')->with('slug','([a-z\-0-9]+)');

$router->get('/posts/:id','Blog#show');


$router->post('/posts/:id',function($id){

   print_r($_POST);
});

$router->run();

### Use Custom Controllers

$router->get('/posts','Blog#show');

Create new Controller 
BlogController.php

