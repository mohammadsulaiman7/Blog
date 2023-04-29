<?php

use App\Events\PostComment;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('home', function () {
//     return redirect()->route('posts.index');
// })->middleware('auth')->name('HOME');
Route::resource('posts',PostController::class)->middleware('auth');
Route::resource('comments',CommentController::class)->middleware('auth');
Route::get('profile/{post}',function(Post $post){
    return view('profile',compact('post'));
})->name('profile');
Route::get('profile-user',function(){
    return view('profile-user');
})->name('profile-user');
Route::get('message',function (){
    return view('messages.index');
});
// TODO : route for user delete account
Route::get('delete-account',[HomeController::class,'deleteUser'])->name('delete-account');
Auth::routes();
Route::get('demo',function(){
    return view('profile-user');
});

