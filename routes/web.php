<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['domain' => 'admin.myrepairest.com'], function () {
    Route::get('', function () {
        return view('admin.layouts.home');
    });
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/',function(){
    return view('template.home.index');
});
Route::get('/about',function(){
    return view('template.home.about');
});
Route::get('/team',function(){
    return view('template.home.team');
});
Route::get('/career',function(){
    return view('template.home.career');
});
Route::get('/error',function(){
    return view('template.home.error');
});

Route::get('/service',function(){
    return view('template.home.service');
});
Route::get('/service-detail',function(){
    return view('template.home.service-detail');
});
Route::get('/project',function(){
    return view('template.home.project');
});
Route::get('/project-detail',function(){
    return view('template.home.project-detail');
});
Route::get('/blog',function(){
    return view('template.home.blog');
});
Route::get('/blog-detail',function(){
    return view('template.home.blog-detail');
});
Route::get('/contact',function(){
    return view('template.home.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout', function(){
    Auth::logout();
    return redirect()->route('login');
 });
 
