<?php
//phpinfo();
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello/{name}', function($name){
//     echo "Hello, " . $name;
// })->where('name', '\w+');

// Route::get('/hello', function () {
//     return view('hello');
// });

Route::get('/{info}', function ($info) {
    return view($info);
});

Route::get('/news/{name}', function ($name) {
    return view($name);
});