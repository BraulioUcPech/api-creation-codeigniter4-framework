<?php


namespace App\Models;

use CodeIgniter\Model;

class Modelo_Temperatura extends Model
{

    protected $table = 'datos_temperatura';

    public function obtenerTemperaturas()
    {
        $builder = $this->db->table('datos_temperatura');
        $builder->select('*');
        $builder->orderBy('id', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }


}