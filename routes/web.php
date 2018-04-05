<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/books', 'BooksController@index');
$router->get('/hello/world', function() use ($router){
    return "hello world";
});
$router->get('/hello/{name}', function($name) use ($router) {
    return "hello {$name}";
});
$router->post('/login', 'LoginController@login');
$router->get('/request', function (Illuminate\Http\Request $request){
    return 'Hello '.$request->get('name', 'stranger');
});
$router->get('/response', function (Illuminate\Http\Request $request){
    if($request->wantsJson()){
        return response()->json(['greeting' => 'Hello stranger']);
    }
    return response()
        ->make('Hello stranger', 200, ['Content-type'=> 'text/plain']);
});
$router->post('/register', 'UserController@register');
$router->get('/user', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);