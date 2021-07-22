<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller{
    public function login()
    {
        
       return view('Home') . view('vcabecera') . view('vlogin'). view('vpie');

    }
}