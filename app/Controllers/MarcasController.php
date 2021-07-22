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

        return view('vmarcas', $response);
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

    public function update()
    {
        $updatemarca = new MarcaModel(); // se crea el objeto de la clase MarcaModel

        $datos = [

            'ma_nombre' => $this->request->getVar('nombre'),
            'ma_active' => $this->request->getVar('activo')

        ];
        $id = $this->request->getVar('idmarca');
        $updatemarca->update($id, $datos);
        echo "actualizado a la base de datos";
        return $this->response->redirect(base_url('/marcas'));
    }

    public function create()
    {

        return view('vcreatemarca');
    }

    public function save()
    {
        $nuevocontacto = new MarcaModel(); // se crea el objeto de la clase MarcaModel

        $datos = [
            'ma_nombre' => $this->request->getVar('nombre'),
            'ma_active' => $this->request->getVar('activo')

        ];

        $nuevocontacto->insert($datos);
        echo "ingresado a la base de datos";
        return $this->response->redirect(base_url('/marcas'));

    }

    public function delete($id)
    {

        $borrarcontacto = new MarcaModel(); // se crea el objeto de la clase MarcaModel
        $borrarcontacto->where('ma_id', $id)->delete($id);
        return $this->response->redirect(base_url('/marcas'));

    }

}