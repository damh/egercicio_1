<?php
/* hecho por:diego alexander martinez huertas.
ficha de programa: 2058969.*/
    include("class/nota_damh.php");
    $id = $_POST[ 'alumno' ];
    $nota = $_POST[ 'nota' ];
   
    if ($id == true && $nota== true )
    {
      
        alumnos_damh::ingresar_alumnos_damh(  $id, $nota );
        header( "location: c-inicio_damh.php" );
       

    }
    else{
       
       header( "location: c-alumnos_damh.php" );
    }