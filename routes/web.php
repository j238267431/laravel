<?php
//phpinfo();
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\NewsController;


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



Route::get('/', [Controller::class, 'showStartingPage'])
    ->name('/');
//Route::group(['prefix' => 'admin'], function() {
//    Route::get('/news', [NewsController::class, 'index']);
//    Route::get('/news/create', [NewsController::class, 'create']);
//    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])
//        ->where('id', '\d+');
//    Route::get('/news/delete/{id}', [NewsController::class, 'destroy'])
//        ->where('id', '\d+');
//});

Route::group(['prefix' => 'news'], function() {
    Route::get('/', [Controller::class, 'index'])
    ->name('news');
    Route::get('/{category}', [Controller::class, 'showCategoryList'])
        ->name('news.category');
    Route::get('/{category}/{id}', [Controller::class, 'showNewsList'])
        ->name('news.category.id');
});
Route::get('/about', [Controller::class, 'greetUser'])
    ->name('about');
Route::get('/auth', [AuthController::class, 'auth'])
    ->name('auth');
Route::get('admin/create', [App\Http\Controllers\admin\NewsController::class, 'create'])
    ->name('admin.create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
