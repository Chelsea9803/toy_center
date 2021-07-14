<?php

namespace App\Controllers;

use App\Models\Mtoys;

class Home extends BaseController
{
    public function index()
    {
        $toysList = new Mtoys(); // se crea el objeto de la clase mcontacts

        $result['lista'] = $toysList->getEntradas();

        $vistas = view('Home') .
        view('vcabecera') .
        view('vbody', $result) .
        view('vpie').
        view('vregistro');
        return $vistas;

    }

    public function acerca()
    {
        return view('Home') . view('vcabecera') . view('vacerca');

    }
   
}
