<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos()
    {
        #Carregar View
        return view('site.sobreNos');
    }
}
