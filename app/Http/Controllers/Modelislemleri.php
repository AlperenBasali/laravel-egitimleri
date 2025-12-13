<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
    public function liste(){
        $bilgi=Bilgiler::where("id",2)->first();
        echo $bilgi->metin;
    }
};
