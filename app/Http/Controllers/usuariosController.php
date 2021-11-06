<?php

namespace App\Http\Controllers;
use Http;
use DB;
use App\usuariosModel;
use Illuminate\Http\Request;

class usuariosController extends Controller{

    public function mostrarUsuarios(Request $request){
        $data = usuariosModel::mostrarUsuarios($acepto);
        dd($data);
        
    }

    public function obtenerUsuariosFecha(Request $request){
        $data = usuariosModel::obtenerUsuariosFecha("2020-06-01","2020-06-03","J");
        dd($data);
        
    }

    public function usuariosMayorPuntaje(Request $request){
        $data = usuariosModel::usuariosMayorPuntaje(2);
        dd($data);
        
    }

    public function PromedioTiempo(Request $request){
        $data = usuariosModel::PromedioTiempo(2);
        dd($data);
        
    }
}
