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

function createUrl($courseId, $route) {
	$ivle = config('site.ivle');
	
	return implode('', [
		$ivle['prefix'],
		$ivle['route'][$route],
		$ivle['suffix'],
		$courseId
	]);
}

function createRedirection($code, $action) {
	$module = app('db')->table('modules')
		->where('code', strtoupper($code))
		->get();
	
	if (empty($module)) {
		abort(404);
	}
	
	$action = strtolower($action);
	$routes = config('site.routes');
	
	if (!array_key_exists($action, $routes)) {
		abort(404);
	}
	
	$route = $routes[$action];
	$url = createUrl($module['course_id'], $route);
	return redirect($url);
}

$handleUrl = function ($module, $action = 'module') use ($app) {
	return createRedirection($module, $action);
};

$app->get('/{module}', $handleUrl);
$app->get('/{module}/{action}', $handleUrl);
