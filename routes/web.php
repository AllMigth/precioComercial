<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::view('/','welcome')->name('home');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::view('/about','about')->name('about');
Route::view('/contacto','contact')->name('contact');

