<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    #Criando a action principal
    public function principal() 
    {
        echo "Olá, seja bem-vindo(a)!";
    }
}
