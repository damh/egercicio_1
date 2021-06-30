<?php
/* hecho por:diego alexander martinez huertas.
ficha de programa: 2058969.*/
class Conex_damh
{
    static function conectar_damh()
    {
         $conexion = mysqli_connect("localhost","root","","notas_damh");
         return $conexion;
         
    }
    
    
}