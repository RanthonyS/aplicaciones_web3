<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
 

    public function editar() {
        return view("estudiantes.editar");
    }

    public function eliminar() {
        return view("estudiantes.eliminar");
    }

    public function mostrar() {
        return view("estudiantes.mostrar");
    }    

        public function crear() {
         return view("estudiantes.crear");
    }
}
