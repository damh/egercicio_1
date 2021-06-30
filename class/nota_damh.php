<?php
/* hecho por:diego alexander martinez huertas.
        ficha de programa: 2058969.*/
include_once('conexion_damh.php');
class alumnos_damh extends conex_damh
{
    static function ingresar_alumnos_damh($id,$nota)
    {
       
        $conexion = conex_damh::conectar_damh();
        $sql= " insert into nota_damh (id, nota) values ('$id','$nota')";
        $resultado = $conexion->query($sql);
         
        
    }
 
   

}