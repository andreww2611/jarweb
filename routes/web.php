<?php

use Illuminate\Support\Facades\Route;
// Hapus atau komentari baris ini jika Anda menggunakan fully qualified namespace di route
use App\Http\Controllers\ContactController; // <--- HAPUS ATAU KOMENTARI INI
use Illuminate\Support\Facades\Mail; // Mungkin tidak diperlukan di web.php
use App\Mail\ContactFormMail; // Mungkin tidak diperlukan di web.php

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

// Rute untuk menampilkan halaman
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/graphicdesign', function () {
    return view('graphicdesign');
});

Route::get('/uiuxdesign', function () {
    return view('uiuxdesign');
});

// Rute untuk submit formulir kontak
// Menggunakan fully qualified namespace untuk ContactController
// dan menambahkan nama rute 'contact.submit'
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');