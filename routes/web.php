<?php

use Illuminate\Support\Facades\Route;

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



use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\AdminActivityController;
use App\Http\Controllers\AdminPanel\AdminBlogController;
use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminMessageController;
use App\Http\Controllers\AdminPanel\AdminRegisterController;
use Illuminate\Foundation\Application;

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

// ANASAYFA ROUTES

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/iletisim', [HomeController::class, 'iletisim'])->name('iletisim');
Route::get('/komiteler', [HomeController::class, 'komiteler'])->name('komiteler');
Route::get('/etkinliklerimiz', [HomeController::class, 'etkinlik'])->name('etkinliklerimiz');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogsayfası/{id}', [HomeController::class, 'blogpage'])->name('blogpage');
Route::get('/ieee', [HomeController::class, 'ieee'])->name('ieee');
Route::get('/yonetim-kurulu', [HomeController::class, 'yonetim'])->name('yonetim');
Route::get('/idari-kurul', [HomeController::class, 'idari'])->name('idari');
Route::get('/denetim-kurulu', [HomeController::class, 'denetleme'])->name('denetleme');
Route::get('/uyeol', [HomeController::class, 'üyelik'])->name('uyeol');
Route::get('/komite-icerik', [HomeController::class, 'komiteicerik'])->name('komiteicerik');
Route::get('/komiteler/cs', [HomeController::class, 'cs'])->name('cs');
Route::get('/komiteler/wie', [HomeController::class, 'wie'])->name('wie');
Route::get('/komiteler/comsoc', [HomeController::class, 'comsoc'])->name('comsoc');
Route::get('/komiteler/robotic', [HomeController::class, 'robotic'])->name('robotic');




// ADMİN PANEL ROUTES
Route::middleware('auth')->group(function () {

Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
Route::get('/admin/mesajlar', [AdminMessageController::class, 'index'])->name('mesajlar');
Route::post('/admin/storemessage', [AdminMessageController::class, 'storemessage'])->name('storemessage');
Route::get('/admin/uyeler', [AdminRegisterController::class, 'index'])->name('uyeler');
Route::post('/admin/storeregister', [AdminRegisterController::class, 'storeregister'])->name('storeregister');
Route::get('/admin/blogs', [AdminBlogController::class, 'index'])->name('index');
Route::get('/admin/blogs/createblog', [AdminBlogController::class, 'create'])->name('blogscreate');
Route::post('/admin/blogs/storeblog', [AdminBlogController::class, 'storeblog'])->name('storeblog');
Route::get('admin/blogs/delete/{id}', [AdminBlogController::class, 'destroy'])->name('blogsdelete');
Route::get('admin/blogs/edit/{id}', [AdminBlogController::class, 'edit'])->name('blogsedit');
Route::post('admin/blogs/update/{id}', [AdminBlogController::class, 'update'])->name('blogsupdate');
Route::get('admin/blogs/show/{id}', [AdminBlogController::class, 'show'])->name('blogsshow');
Route::get('/admin/etkinlikler', [AdminActivityController::class, 'index'])->name('etkinlikler');
Route::get('/admin/etkinlikler/create', [AdminActivityController::class, 'create'])->name('etkinlikcreate');
Route::get('/admin/etkinlikler/edit/{id}', [AdminActivityController::class, 'edit'])->name('etkinlikedit');
Route::post('/admin/etkinlikler/store', [AdminActivityController::class, 'store'])->name('etkinlikstore');
Route::post('/recaptcha', [AdminRegisterController::class, 'recaptcha'])->name('recaptcha');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
