<?php
namespace App\Models;

use CodeIgniter\Model;

class Mtoys extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'prd_id';

    public function getEntradas()
    {

        $db      = db_connect();
        $builder = $db->table("toys_bd.products as p");
        $builder->join('toys_bd.proveedores pr', 'pr.pro_id=p.pro_id');
        $builder->join('toys_bd.marcas m', 'm.ma_id=p.ma_id');
        $aResult = $builder->get()->getResultArray();
        return $aResult;
    }

}
