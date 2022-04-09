<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers;
use App\Http\Middleware;

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

Route::get('login',Auth\LoginViewController::class)->name('login');
Route::post('login/store',Auth\LoginController::class)->name('login.store');

Route::get('register',Auth\RegisterViewController::class)->name('register');
Route::post('register/store',Auth\RegisterController::class)->name('register.store');

Route::get('logout',Auth\LogoutController::class)->name('logout');

Route::group(['prefix'=>'admin','name'=>'admin.','middleware'=>[Middleware\Authenticate::class,Middleware\AdminMiddleware::class]],function(){
    Route::resource('question_category',Controllers\QuestionCategoryController::class);
    Route::resource('question',Controllers\QuestionController::class);
    Route::resource('user',Controllers\UserController::class);
    Route::get('/',function(){
        return view('layouts.admin_layout');
    });
});

Route::group(['prefix'=>'guest','name'=>'guest.','middleware'=>[Middleware\Authenticate::class,
    Middleware\GuestMiddleware::class]],function(){
    Route::get('quest',Controllers\ChooseQuestionController::class)->name('quest');
    Route::get('quest/show',Controllers\ShowQuestionController::class)->name('quest.show');
    Route::resource('answer',Controllers\AnswerController::class);
});
