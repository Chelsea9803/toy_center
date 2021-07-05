<?php
namespace App\Controllers;

use App\Models\Mmarca;
use CodeIgniter\Controller;

class Cmarcas extends Controller
{

    public function index()
    {

        $listarMarcas = new Mmarca(); // se crea el objeto de la clase Mmarca

        $resultadodatos['lista'] = $listarMarcas->findAll(); // se crea un arreglo para aplicar el metodo findall

        return view('vmarcas', $resultadodatos);
    }

    public function edit($id)
    {

        $editardato = new Mmarca(); // se crea el objeto de la clase Mmarca
        //consultamos los datos
        // $datos['lista']=$editardato->where('id',$id)->first();
        $datos['marca'] = $editardato->where('ma_id', $id)->first();
        print_r($datos);

        return view('veditmarca', $datos);

    }

    public function update()
    {
        $updatemarca = new Mmarca(); // se crea el objeto de la clase Mmarca

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
        $nuevocontacto = new Mmarca(); // se crea el objeto de la clase Mmarca

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

        $borrarcontacto = new Mmarca(); // se crea el objeto de la clase Mmarca
        $borrarcontacto->where('ma_id', $id)->delete($id);
        return $this->response->redirect(base_url('/marcas'));

    }

}
