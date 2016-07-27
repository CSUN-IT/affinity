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
$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers'], function() use ($app) {
	// badges requests
	$app->get('badges', 'BadgesController@badges');
	$app->get('badges/{email}', 'BadgesController@facultyBadge');
	$app->get('interests', 'InterestsController@listInterest');
	$app->get('interests/{type}', 'InterestsController@listInterest');

});

$app->get('/', function () use ($app) {
    return $app->version();
});
