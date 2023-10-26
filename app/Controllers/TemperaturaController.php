<?php

namespace App\Controllers;

use App\Models\Modelo_Temperatura;

class TemperaturaController extends BaseController
{
    public function index()
    {
        $modelo = new Modelo_Temperatura();
        $datos = $modelo->obtenerTemperaturas();

        $temperaturaData = [['Fecha', 'Temperatura', '']];

        foreach ($datos as $row) {
            $temperaturaData[] = [$row->fecha, (float) $row->temperatura, 0];
        }

        $data['temperatura'] = json_encode($temperaturaData);
        return view('temperatura_view', $data);
    }
    
}