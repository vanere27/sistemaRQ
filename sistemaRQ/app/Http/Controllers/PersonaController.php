<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function generar()
    {
        $data = [];

        for ($i = 1; $i <= 500000; $i++) {
            $data[] = [
                'nombre' => 'Persona_ ' . $i,
                'estudios' => 'Estudio_'.$i ,
                
            ];
        }

        Persona::insert($data);

        return response()->json([
            'message' => '500000 equipos insertados correctamente',
            'data' => $data
        ]);
    }
}
