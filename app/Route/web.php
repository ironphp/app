<?php
/**
 * @package       IronPHP Application
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

use Friday\Http\Route;

/**
 *--------------------------------------------------------------------------
 * Web Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register web routes for your application. Now
 * create something great!
 *
 */

# Route with controller@method. IndexController@Index is default
Route::get('/');
Route::get('/index2', 'IndexController');
Route::get('/index3', 'IndexController@Index');

# Available Router Methods
//Route::get($uri, $callback);
//Route::post($uri, $callback);

# Route with optional multiple arguments - must pass default argument to all optioanl arguments
Route::get('/member/{name}/{?id}', function ($name, $id = 1) {
    echo "Name: [$id] $name";
    echo '<br>Num of Args: '.func_num_args();
    echo '<br>Args: ';print_r(func_get_args());
});

# Route with optional arguments - must pass default  argument
Route::get('/user/{?name}/', function ($name = 'GK') {
    echo "Name: $name";
    echo '<br>Num of Args: '.func_num_args();
    echo '<br>Args: ';print_r(func_get_args());
});

# Route with multiple arguments - must be in sequence
Route::get('/names/{id}/{name}', function ($id, $name) {
    echo "Name: [$id] $name";
});

# Route with arguments
Route::get('/name/{name}', function ($name) {
    echo 'Name: '.$name;
});

# Route with view only (always GET method)
Route::view('/view', 'index', ['name' => 'IronPHP']);

# Route with callable
Route::get('/callable', function () {
    echo 'callable';
});

# Route with rediect
Route::get('foo', function () {
    echo 'Hello';
    return ' World';
});

# Redirect Routes
Route::redirect('/here', '/there', 301);
