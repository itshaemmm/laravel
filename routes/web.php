<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\AnggotaController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\AnggotaController as FrontAnggotaController;
use App\Http\Controllers\Front\BanmedController;
use App\Http\Controllers\Front\LandingPageController as FrontLandingPageController;
use App\Http\Controllers\Front\PenyewaanController;

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

Route::get('/', [FrontLandingPageController::class, 'show']);
Route::get('/blog', [HomeController::class, 'index']);
Route::get('/bantuan_medis', [BanmedController::class, 'show']);
Route::get('/penyewaan', [PenyewaanController::class, 'show']);
Route::post('/articles/search', [HomeController::class, 'index'])->name('search');
Route::get('/blog/p/{slug}', [FrontArticleController::class, 'show']);
Route::get('/database', [FrontAnggotaController::class, 'show']);

Route::get('/pendaftaran', function () {
    return redirect('https://forms.gle/fWdcUKDfPDcNbdWTA');
});


Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('article', ArticleController::class);

    Route::resource('/categories', CategoryController::class)->only([
        'index', 'store', 'update', 'destroy'
    ])->middleware('UserAccess:1');

    Route::resource('/users', UserController::class);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::resource('anggota', AnggotaController::class);

});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
