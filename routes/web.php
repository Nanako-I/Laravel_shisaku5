<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonController;//追記
use App\Http\Controllers\PhotoController;//追記
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ToiletController;
use App\Http\Controllers\RecordController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Book用の一括ルーティング
Route::resource('people', PersonController::class);
// Route::resource('peopleregister',  PersonController::class);

Route::get('peopleregister', [PersonController::class, 'create']);
Route::post('peopleregister', [PersonController::class, 'store']);
// Route::get('peopleregister', [PersonController::class, 'create']); 
//   Route::resource('/photos', 'App\Http\Controllers\PhotoController')->only(['create','store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('peopleregister', [PersonController::class, 'uploadForm'])->name('photos.create.form');
// Route::post('peopleregister', [PersonController::class, 'upload'])->name('photos.create');

// Route::get('peopleregister', [PhotoController::class, 'uploadForm'])->name('photos.create.form');
// Route::post('peopleregister', [PhotoController::class, 'upload'])->name('photos.create');
// 動いてたやつ↑

// Route::get('/photos/create', [PhotoController::class, 'uploadForm'])->name('photos.create.form');
// Route::post('/photos/create', [PhotoController::class, 'upload'])->name('photos.create');
// postはこちら側が情報を投げる　getは情報をとってくる


// Route::resource('temperature', TemperatureController::class);
// Route::resource('temperature', TemperatureController::class)->parameters(['temperature' => 'temperature'])->except(['show']);

Route::get('temperature/{people_id}/edit', [TemperatureController::class, 'edit'])->name('temperature.edit');
// Route::resource('temperature/{people_id}/edit', [TemperatureController::class])->name('temperature.edit');
// Route::resource('temperature/{people_id}/edit', TemperatureController::class);

Route::post('temperature/{people_id}/edit', [TemperatureController::class,'store'])->name('temperature.post');

Route::get('food/{people_id}/edit', [FoodController::class, 'edit'])->name('food.edit');
Route::post('food/{people_id}/edit', [FoodController::class,'store'])->name('food.post');

Route::get('toilet/{people_id}/edit', [ToiletController::class, 'edit'])->name('toilet.edit');
Route::post('toilet/{people_id}/edit', [ToiletController::class,'store'])->name('toilet.post');
// Route::get('people/{id}/edit', [TemperatureController::class, 'index'])->name('temperatures.index');

Route::get('record/{id}/edit', [RecordController::class, 'show'])->name('record.edit');


Route::get('people/{id}/edit', [PersonController::class, 'edit'])->name('people.edit');


// Route::get('/photo/upload', PhotoController::class, 'uploadForm')->name('photo.upload.form');

// Route::post('/photo/upload', PhotoController::class, 'upload')->name('photo.upload');



Route::get('businesscard', 'BusinessCardController@index');
Route::post('businesscard/extract', 'BusinessCardController@extract');


require __DIR__.'/auth.php';