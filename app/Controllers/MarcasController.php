<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MarcaModel;

class MarcasController extends Controller{
    public function index()
    {

        $listarMarcas = new MarcaModel(); // se crea el objeto de la clase MarcaModel

        $resultadodatos['lista'] = $listarMarcas->findAll(); // se crea un arreglo para aplicar el metodo findall

        return view('vmarcas', $resultadodatos);
    }

    public function edit($id)
    {

        $editardato = new MarcaModel(); // se crea el objeto de la clase MarcaModel
        //consultamos los datos
        // $datos['lista']=$editardato->where('id',$id)->first();
        $datos['marca'] = $editardato->where('ma_id', $id)->first();
        //print_r($datos);

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