<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about-us', [AboutController::class, 'about'])->name('about');

Route::get('/api/test/array', [TestController::class, 'arrayResponse'])->name('array-response');

Route::get('/api/test/model', [TestController::class, 'modelResponse'])->name('model-response');

Route::get('/api/test/collection', [TestController::class, 'collectionResponse'])->name('collection-response');

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('/book/{book_id}', [BookController::class, 'show'])->whereNumber('book_id')->name('book.detail');





Route::post('/book/{book_id}/review', [ReviewController::class, 'store'])->middleware('auth')->name('book.review');

//all admin routes
Route::group(['middleware' => 'can:admin'], function () {

  Route::get('admin/books', [AdminBookController::class, 'index']);

  Route::get('admin/users', [UserController::class, 'index']);
});
