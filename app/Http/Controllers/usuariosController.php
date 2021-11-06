<?php

namespace App\Http\Controllers;
use Http;
use DB;
use App\usuariosModel;
use Illuminate\Http\Request;

class usuariosController extends Controller{

    public function mostrarUsuarios(Request $request,$acepto){
        $data = usuariosModel::mostrarUsuarios($acepto);
        dd($data);
        
    }

    public function obtenerUsuariosFecha(Request $request,$fecha1,$fecha2,$letra){
        $data = usuariosModel::obtenerUsuariosFecha($letra,$fecha1,$fecha2);
        dd($data);
        
    }

    public function usuariosMayorPuntaje(Request $request,$disfraz){
        $data = usuariosModel::usuariosMayorPuntaje($disfraz);
        dd($data);
        
    }

    public function PromedioTiempo(Request $request,$id){
        $data = usuariosModel::PromedioTiempo($id);
        dd($data);
        
    }
}
