<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class usuariosModel extends Model{
    
    public static function mostrarTodosUsuarios(){
        $sql = "SELECT * FROM usuarios";
        $result= DB::select($sql);
        return $result;
    }

    public static function mostrarUsuarios($acepto){
        $sql = "SELECT * FROM usuarios WHERE Acepto = ? LIMIT 10 ;";
        $result= DB::select($sql,[$acepto]);
        return $result;
    }

    public static function obtenerUsuariosFecha($letra,$fecha1,$fecha2){
        $sql = 'SELECT * FROM usuarios WHERE Nombre LIKE "?%" AND (fechaRegistro BETWEEN "?" AND "?" )   ';
        $result= DB::select($sql,[$letra,$fecha1,$fecha2]);
        return $result;
    }

    public static function usuariosMayorPuntaje($disfraz){
        $sql = "SELECT * FROM usuarios INNER JOIN partidas ON usuarios.id = partidas.idJugador WHERE usuarios.idDisfraz = ? ORDER BY partidas.puntos DESC LIMIT 10 ";
        $result= DB::select($sql,[$disfraz]);
        return $result;
    }

    public static function PromedioTiempo($id){
        $sql = "SELECT fechaFin - fechaInicio AS diferencia FROM partidas INNER JOIN usuarios ON partidas.idJugador = usuarios.id WHERE usuarios.id = ?";
        $result= DB::select($sql,[$id]);
        return $result;
    }

}
