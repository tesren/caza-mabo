<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\PublicPagesController;

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

Route::localized(function () {

    Route::get('/', [PublicPagesController::class, 'home'])->name('home');

    Route::get( Lang::uri('/avances-de-obra') , [PublicPagesController::class, 'construction'])->name('construction');

    Route::get( Lang::uri('/sobre-nosotros') , function(){return view('about');})->name('about');

    Route::get( Lang::uri('/contacto') , function(){return view('contact');})->name('contact');

    Route::get( Lang::uri('/inventario-condominios') , [PublicPagesController::class, 'inventory'] )->name('inventory');

    Route::get( Lang::uri('/condominio-en-venta').'/{unit}', [PublicPagesController::class, 'unit'] )->name('unit');

    Route::get( Lang::uri('/aviso-de-privacidad'), function(){return view('privacy-policy');} )->name('privacy');

});


Route::post('/send-message', [PublicPagesController::class, 'sendMail'])->name('send.email')->middleware(ProtectAgainstSpam::class);
