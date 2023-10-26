<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Modelo_Temperatura;

class APIcontroller extends ResourceController
{
    protected $modelName = Modelo_Temperatura::class;
    protected $format = 'json';

    public function index()
    {
        $temperaturas = $this->model->findAll();
        return $this->respond($temperaturas);
    }

    public function show($id = null)
    {
        $temperatura = $this->model->find($id);
        if ($temperatura === null) {
            return $this->failNotFound('Temperatura no encontrada');
        }

        return $this->respond($temperatura);
    }
}