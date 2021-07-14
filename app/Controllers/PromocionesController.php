<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class PromocionesController extends Controller{
    public function promo()
    {
        
       return view('Home') . view('vcabecera') . view('vpromociones');

    }
}