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

    public static function obtenerUsuariosFecha($fecha1,$fecha2,$letra){
        
        $sql = "SELECT * FROM usuarios WHERE DATE(fechaRegistro) between '?' AND '2020-06-03' ";
        // $sql = 'SELECT * FROM usuarios WHERE (fechaRegistro BETWEEN "?" AND "?" ) AND Nombre LIKE "?%" ';
        $result= DB::select($sql,[$fecha1]);
        return $result;
    }

    public static function usuariosMayorPuntaje($disfraz){
        $sql = "SELECT * FROM usuarios INNER JOIN partidas ON usuarios.id = partidas.idJugador WHERE usuarios.idDisfraz = ? ORDER BY partidas.puntos DESC LIMIT 10 ";
        $result= DB::select($sql,[$disfraz]);
        return $result;
    }

}
