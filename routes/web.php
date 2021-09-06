<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\QuestionnairesController;
use Illuminate\Support\Facades\Route;

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




$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');
    $router->get('/me', 'AuthController@me');
    $router->get('/questionnaires/{id}', 'QuestionnairesController@show');
    $router->post('/storageAnswers', 'QuestionnairesController@storageAnswers');
    $router->get('/groups', 'GroupsController@all');

    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('/users/{id}/group', 'GroupsController@getGroupByUser');
        $router->get('/results/group/{id}', 'QuestionnairesController@getAllResultsByGroup');
        $router->get('/results/students/group/{id}', 'QuestionnairesController@getStudentsByGroup');
        $router->get('/results/students/{id}', 'QuestionnairesController@getStudentsByid');
    });
});
