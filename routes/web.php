<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/donate', function () {
    return view('donate');
});

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/gallery', [App\Http\Controllers\WelcomeController::class, 'gallery'])->name('gallery');
Route::get('/blog', [App\Http\Controllers\WelcomeController::class, 'blog'])->name('blog');
Route::get('/show/{post}', [App\Http\Controllers\WelcomeController::class, 'show'])->name('post');
Route::get('our-events', [App\Http\Controllers\WelcomeController::class, 'events'])->name('our-events');
Route::get('/event_view/{event}', [App\Http\Controllers\WelcomeController::class, 'event_view'])->name('events');

// Route::get('blog/posts/{post}', [App\Http\Controllers\WelcomeController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{category}', [App\Http\Controllers\BlogController::class, 'Postcategory'])->name('category');
Route::get('/blog/tag/{tag}', [App\Http\Controllers\BlogController::class, 'Posttag'])->name('tag');

// send email
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('categories', App\Http\Controllers\CategoriesController::class);
    
    Route::resource('tags', App\Http\Controllers\TagsController::class);

    Route::resource('posts', App\Http\Controllers\PostsController::class);

    Route::resource('events', App\Http\Controllers\EventsController::class);

    Route::resource('albums', App\Http\Controllers\AlbumsController::class);

    // Route::resource('photos', App\Http\Controllers\PhotosController::class);
    Route::get('/photos/create/{id}', [App\Http\Controllers\PhotosController::class, 'create']);
    Route::get('/photos/index', [App\Http\Controllers\PhotosController::class, 'index'])->name('photos.index');
    Route::post('/photos/store', [App\Http\Controllers\PhotosController::class, 'store'])->name('photos.store');

    Route::get('trashed-posts', [App\Http\Controllers\PostsController::class, 'trashed'])->name('trashed-posts.index');
    Route::put('restore-posts/{post}', [App\Http\Controllers\PostsController::class, 'restore'])->name('restore-posts');

//    Event
    Route::get('trashed-events', [App\Http\Controllers\EventsController::class, 'trashed'])->name('trashed-events.index');
    Route::put('restore-events/{event}', [App\Http\Controllers\EventsController::class, 'restore'])->name('restore-events');

});

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('users/profile', [App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit-profile');
    Route::put('users/profile', [App\Http\Controllers\UsersController::class, 'update'])->name('user.update-profile');
    Route::get('users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
    Route::post('users/{user}/make-admin', [App\Http\Controllers\UsersController::class, 'makeAdmin'])->name('user.make-admin');
});

