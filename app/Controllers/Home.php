<?php

namespace App\Controllers;

use App\Models\ToysModel;

class Home extends BaseController
{
    public function index()
    {
        $toysList = new ToysModel(); // se crea el objeto de la clase mcontacts

        $result['lista'] = $toysList->getEntradas();

        $vistas = view('Home') .
        view('vcabecera') .
        view('vbody', $result) .
        view('vpie');
        
        return $vistas;

    }

    public function acerca()
    {
        return view('Home') . view('vcabecera') . view('vacerca');

    }
   
}
