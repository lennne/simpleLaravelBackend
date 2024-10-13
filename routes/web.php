<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $allPosts = [];
    if(auth()->check()){
        $allPosts = auth()->user()->userPosts()->latest()->get();    
    }
    
    //$allPosts = Post::where('user_id',auth()->id())->get();
    return view('home', ['posts'=> $allPosts]);
});

//user related options
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login',[UserController::class, 'login']);

//Post related Options
Route::post('/create-post',[PostController::class, 'createPost']);
Route::get('/edit-post/{post}',[PostController::class,'showEditScreen']);
Route::put('/edit-post/{post}',[PostController::class,'editScreen']);
Route::delete('/delete-post/{post}',[PostController::class,'deletePost']);