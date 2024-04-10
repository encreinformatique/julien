<?php

use App\Http\Controllers\DownloadCvController;
use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return redirect('/es', 301);
});
Route::get('/site.webmanifest', function () {
    return response()->json([
        'display' => 'standalone',
        'short_name' => env('APP_NAME'),
        "background_color" => "#ffffff",
        "theme_color" => "rgb(3, 105, 161)",
    ]);
})->name('webmanifest');

Route::get('/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('welcome');
})->name('homepage');

Route::get('/cv/{locale}', DownloadCvController::class)->name('download');
