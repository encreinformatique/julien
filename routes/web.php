<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DownloadCvController;
use App\Http\Controllers\HomeController;
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

/**
 * Redirections..
 */

Route::get('/', function () {
    return redirect('/es', 301);
});

/**
 * Cached routes.
 */

Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    Route::get('/site.webmanifest', function () {
        return response()->json([
            'display' => 'standalone',
            'short_name' => env('APP_NAME'),
            "background_color" => "#ffffff",
            "theme_color" => "rgb(3, 105, 161)",
        ]);
    })->name('webmanifest');
});

/**
 * Regular routes.
 */

Route::get('/{locale}', HomeController::class)->name('homepage');
Route::get('/{locale}/blog/{slug}', BlogController::class)->name('blog');
Route::get('/cv/{locale}', DownloadCvController::class)->name('download');
Route::get('/cv-seo/{locale}', 'App\Http\Controllers\DownloadCvController@seo')->name('download_seo');
