<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        #Carregar View
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
