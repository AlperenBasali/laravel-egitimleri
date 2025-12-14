<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet; // <-- BU SATIRI EKLEMELİSİNİZ
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;


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

Route::get("/iletisim", [Iletisim::class, 'index']);
Route::post("/iletisim-sonuc", [Iletisim::class, 'ekleme'])->name("iletisim-sonuc");

Route::get("/upload", function(){
    return view('upload');
} );

Route::post('/resim-ilet',[ResimYukle::class,'resimYukleme'])->name('yukle');


Route::get("/uye", function(){
    return view('uyelik');
} );

Route::post('/uye-kayit', [App\Http\Controllers\Uyelikislemleri::class,'uyekayit'] )->name('uyekayit');


Route::get("/tema", function(){
    return view('sayfalar.home');
} );

Route::get("/galeri", function(){
    return view('sayfalar.galeri');
} );
Route::get("/resim", function(){
    // Check if class exists
    if (class_exists('Intervention\Image\Facades\Image')) {
        $img = \Intervention\Image\Facades\Image::make('245.png');
        return $img->response('png');
    } else {
        return "Intervention Image package not found. Run: composer require intervention/image";
    }
});