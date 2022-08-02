<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteControlller extends Controller
{
    //
    public function index()
    {
        $nome = 'Everton';
        $sobrenome = 'Henrique';
        $idade = 19;
        $data_nasc = '10/09/2002';
        $data = [
            'apelido_nome' => $nome,
            'sobrenome' => $sobrenome,
            'idade' => $idade,
            'nascimento' => $data_nasc
        ];
        return view('bemvindo', $data);
    }
    public function sair() {
        return view('sair');
    }
}
