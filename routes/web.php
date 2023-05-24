<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
//use session;

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
    return view('login');
});

Route::get('/register',[UserController::class,'register']);

Route::get('/login',[UserController::class,'login']);
Route::post('/register-user',[UserController::class,'registerUser'])->name('register-user');

Route::post('/login-user',[UserController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[UserController::class,'dashboard']);

Route::get('/logout', [UserController::class,'logout']);

Route::post('/create-post',[PostController::class,'createPost'])->name('create-post');

Route::get('/try',[PostController::class,'try']);

Route::get('/viewblogs',function(){
//Route::get('/viewblogs',[PostController::class,'viewblogs']);
$posts = Post::all();
return view('/viewblogs', ['posts' => $posts]);

});

Route::get('/viewblogs',function(){
    $var = session()->all();
    $sessionId = $var['loginId'];
        
    $posts = Post::where('user_id',$sessionId) ->get();
    return view('/viewblogs',['posts'=> $posts]);

});
Route::get('/edit-post/{post}',[PostController::class,'editPost']);
Route::put('/edit-post/{post}',[PostController::class,'updatePost']);

Route::delete('/delete-post/{post}',[PostController::class,'deletePost']);
