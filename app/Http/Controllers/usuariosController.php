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
        // return view('index',compact('data2'));
    }

    public function obtenerUsuariosFecha(Request $request){
        $data = usuariosModel::obtenerUsuariosFecha("2020-06-01","2020-06-03","J");
        dd($data);
        // return view('index',compact('data2'));
    }

    public function usuariosMayorPuntaje(Request $request){
        $data = usuariosModel::usuariosMayorPuntaje(2);
        dd($data);
        // return view('index',compact('data2'));
    }
}
