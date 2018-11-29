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

Route::redirect('/admin', '/admin/home', 301);

Route::prefix('admin')->group(function () {
    Route::get('home', 'AdminController@index');
    Route::get('category', 'AdminController@category');
    Route::get('comment', 'AdminController@comment');
    Route::get('download', 'AdminController@download');
    Route::get('ip', 'AdminController@ip');
    Route::get('login', 'AdminController@login');
    Route::get('message', 'AdminController@message');
    Route::get('pic/{?category}', 'AdminController@pic');
    Route::get('tag', 'AdminController@tag');
    Route::get('upload', 'AdminController@upload');
    Route::get('user', 'AdminController@user');

    Route::post('category/add', 'AdminController@addCategory');
    Route::post('category/del', 'AdminController@delCategory');
    Route::post('login', 'AdminController@loginCheck');
    Route::post('pic/del', 'AdminController@picDel');
    Route::post('upload', 'AdminController@uploadProcess');
    #Route::get('users', function () {
    #     Matches The "/admin/users" URL
    #});
});

Route::get('/{?category}/{?image}', 'SiteController@index');

Route::get('/download/{?image}', 'SiteController@download');

Route::get('/about', 'SiteController@dbout');

Route::get('/contact', 'SiteController@contact');
Route::post('/contact', 'SiteController@addContact');

Route::get('/search', 'SiteController@search');
Route::get('/tag/{?tag}', 'SiteController@tag');
 */

Route::get('/', 'IndexController@Index');
/*
//route with controller@method
// Using the static method.
Route::get('/page1', 'IndexController@Index');

//route with optional multiple arguments - must pass default argument to all optioanl arguments
Route::get('/member/{name}/{?id}', function ($name, $id = 1) {
    echo "Name: [$id] $name";
    echo '<br>Num of Ars: '.func_num_args();
    echo '<br>Ars: ';print_r(func_get_args());
});

//route with optional arguments - must pass default  argument
Route::get('/user/{?name}/', function ($name = 'GK') {
    echo "Name: $name";
    echo '<br>Num of Ars: '.func_num_args();
    echo '<br>Ars: ';print_r(func_get_args());
});

//route with multiple arguments - must be in sequence
Route::get('/names/{id}/{name}', function ($id, $name) {
    echo "Name: [$id] $name";
});

//route with arguments
Route::get('/name/{name}', function ($name) {
    echo 'Name: '.$name;
});

//route with view only (always GET method)
Route::view('/view', 'index', ['name' => 'IronPHP']);

//route with callable
Route::get('/callable', function () {
    echo 'callable';
});

//route with rediect
Route::get('foo', function () {
    echo 'Hello';
    return ' World';
});
*/