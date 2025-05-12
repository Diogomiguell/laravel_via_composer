<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        //var_dump($_GET);
        //var_dump($_POST);
        
        #Carregar View
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
