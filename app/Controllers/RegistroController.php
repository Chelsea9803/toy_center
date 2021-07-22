<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class RegistroController extends Controller{
    public function register()
    {
        
       return view('Home') . view('vcabecera') . view('vregistro'). view('vpie');

    }
}