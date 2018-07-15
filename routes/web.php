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


$router->post('/posts/{id}', 'PostsController@postPost');
$router->patch('/posts/{id}', 'PostsController@patchPost');
$router->delete('/posts/{id}', 'PostsController@deletePost');
$router->get('/posts/{id}', 'PostsController@getPost');
$router->get('/posts', 'PostsController@getPosts');


$router->post('/comments/{id}', 'CommentsController@postComment');
$router->patch('/comments/{id}', 'CommentsController@patchComment');
$router->delete('/comments/{id}', 'CommentsController@deleteComment');
$router->get('/comments/{id}', 'CommentsController@getComment');
$router->get('/comments', 'CommentsController@getComments');


$router->post('/users/{id}', 'CommentsController@postUser');
$router->patch('/users/{id}', 'CommentsController@patchUser');
$router->delete('/users/{id}', 'CommentsController@deleteUser');
$router->get('/users/{id}', 'CommentsController@getUser');
$router->get('/users', 'CommentsController@getUsers');