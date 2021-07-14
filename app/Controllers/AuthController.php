<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller{
    public function register()
    {
        
       return view('Home') . view('vcabecera') . view('vregistro');

    }
}