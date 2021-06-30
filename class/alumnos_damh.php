<?php
/*hecho por:diego alexander martinez huertas.
ficha de programa: 2058969.*/
include_once('conexion_damh.php');
class alumnos_damh extends conex_damh
{
    static function ingresar_alumnos_damh($nombre,$fecha, $genero)
    {
       
        $conexion = conex_damh::conectar_damh();
        $sql= " insert into alumnos_damh (nombre, fecha_nacimiento, genero) values ('$nombre','$fecha', '$genero')";
        $resultado = $conexion->query($sql);
         
        
    }
 
   

}