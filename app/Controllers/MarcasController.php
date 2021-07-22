<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MarcaModel;

class MarcasController extends Controller{
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
    
    public function index()
    {

        $items = self::getresponse('http://localhost/api-toycenter/public/marcas');

        $response = $items->Marcas;

        $response['lista'] = json_decode(json_encode($response), true);

        return view('Home'). view('vcabecera'). view('vmarcas', $response). view('vpie');
          
    }

    public function edit($id)
    {

        $url = "http://localhost/api-toycenter/public/marcas/" . $id;

        $lista = self::getresponse($url);

        $reslista = $lista->Marca;

        $datos['lista'] = json_decode(json_encode($reslista), true);      
       // print_r($datos);

   

        return view('veditmarca', $datos);

    }
    

    public function create()
    {

        return view('vcreatemarca');
    }  

   

}