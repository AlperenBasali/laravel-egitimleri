<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet; // <-- BU SATIRI EKLEMELİSİNİZ
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;


/* ... diğer kodlar ... */

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ornek', function(){return view('ornek');});

Route::get("/phpturkiye/{isim}", [Ornek::class, 'test']);

Route::get("/web", [Yonet::class, 'site'])->name('bilgi') ;

Route::get("/form", [Formislemleri::class, 'gorunum']);

Route::middleware('arakontrol')->post("/form-sonuc", [Formislemleri::class, 'sonuc'])->name('sonuc');

Route::get("/ekle", [Veritabaniislemleri::class, 'ekle']);

Route::get("/guncelle", [Veritabaniislemleri::class, 'guncelle']);

Route::get("/sil", [Veritabaniislemleri::class, 'sil']);

Route::get("/listele", [Veritabaniislemleri::class, 'bilgiler']);

Route::get("/modelliste", [Modelislemleri::class, 'liste']);