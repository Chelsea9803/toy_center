<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class AcercaController extends Controller{
    public function acerca()
    {
        
       return view('Home') . view('vcabecera') . view('vacerca'). view('vpie');

    }
}