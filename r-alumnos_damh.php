<?php
/* hecho por:diego alexander martinez huertas.
ficha de programa: 2058969.*/
    include("class/alumnos_damh.php");
    $nombre = $_POST[ 'nombre' ];
    $fecha = $_POST[ 'fecha' ];
    $genero = $_POST[ 'genero' ];
    if ($nombre == true && $fecha== true && $genero== true)
    {
      
        alumnos_damh::ingresar_alumnos_damh(  $nombre, $fecha, $genero );
        header( "location: c-inicio_damh.php" );
       

    }
    else{
       
       header( "location: c-alumnos_damh.php" );
    }