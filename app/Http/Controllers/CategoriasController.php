<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ACA LE INDICO Q USE EL MODELO CATEGORIA PARA COMUNICARSE
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index()
    {
        //select * (all)  from   categorias;

        $categorias= Categoria::all();
        return view('controllerView', ['categorias' => $categorias]);   //Arreglo tipo "mapa" , le paso la vista y un arreglo con data q lo llamo 'categorias'
    }
}
