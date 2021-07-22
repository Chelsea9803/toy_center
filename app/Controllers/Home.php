<?php
namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        $items = self::getresponse('http://localhost/api-toycenter/public/products');

        $response = $items->lista;

        $response['lista'] = json_decode(json_encode($response), true);


       //print_r($response);
        
       
        $vistas = view('Home') .
        view('vcabecera') .
        view('vbody', $response) . 
        view('vpie');
        
        return $vistas;

    }

    public function acerca()
    {
        return view('Home') . view('vcabecera') . view('vacerca').view('vpie');

    }

    public static function getresponse($url)
    {
        #set HTTP header
        $headers = array('Content-Type: application/json');

        #Open connection
        $ch = curl_init();

        #Set the url, number of GET vars, GET data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        #Execute request
        $result = curl_exec($ch);

        #Close connection
        curl_close($ch);

        #get the result and parse to JSON
        $items = json_decode($result);

        return $items;

    }
   
}
