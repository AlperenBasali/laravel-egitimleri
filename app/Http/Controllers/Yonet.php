<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
        $data["yazi1"]= "PHP Türkiye";
        $data["yazi2"]= "Web sitemize hosgeldiniz.";
        return view('web',$data);    
    }
}
