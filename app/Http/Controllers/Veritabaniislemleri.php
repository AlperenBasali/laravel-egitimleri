<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
    public function ekle()
     {
        DB::table("bilgiler")->insert([
            "metin"=>"aslan  yattığı yerden belli olur"
        ]);
     }

     public function guncelle(){
        DB::table("bilgiler")->where("id",1)->update([
            "metin"=>"metin updated"
        ]);
     }
     public function sil(){
        DB::table("bilgiler")->where("id",2)->delete();
     }

     public function bilgiler()
     {
        // $veriler=DB::table("bilgiler")->get();
       
        // foreach ($veriler as $key => $bilgi) {
        //   echo $bilgi->id."  ".$bilgi->metin; 
        //   echo "<br>"; 
        // }

        $veri=DB::table("bilgiler")->where("id",3)->first();
        echo $veri->metin;
     }
}
