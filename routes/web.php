<?php

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

use Illuminate\Routing\Router;

Router::get('/', function () {
    return view('welcome');
});



// Router::any('insertnv/','StudentController@insert');

// Router::get('/updatenv/{name}','StudentController@update');

// Router::get('/deletenv/{id}','StudentController@delete');

Router::get('student',function() {
    return view('student');
});

Router::get('qlnv','QlnvController@index');

Router::post('uploadfile','UploadFileController@uploadFile');

Router::get('/select','QlnvController@selectall');

Router::get('/insertnv','QlnvController@insertnv');

Router::get('/deletenv','QlnvController@deletenv');

Router::get('/updatenv','QlnvController@updatenv');

Router::any('/checknv','QlnvController@checkForm');
