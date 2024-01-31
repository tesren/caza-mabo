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

Route::get('/', [PublicPagesController::class, 'home'])->name('home');

Route::get('/avances-de-obra', [PublicPagesController::class, 'construction'])->name('construction');

Route::get('/sobre-nosotros', function(){return view('about');})->name('about');

Route::get('/contacto', function(){return view('contact');})->name('contact');

Route::get('/inventario-condominios', [PublicPagesController::class, 'inventory'] )->name('inventory');

Route::get('/condominio-en-venta/{unit}', [PublicPagesController::class, 'unit'] )->name('unit');


Route::post('/send-message', [PublicPagesController::class, 'sendMail'])->name('send.email')->middleware(ProtectAgainstSpam::class);
