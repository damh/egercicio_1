<?php
/* hecho por:diego alexander martinez huertas.
ficha de programa: 2058969.*/
include 'conexion_damh.php';
;


if(!isset($_POST['alumno'])){

    $_POST['alumno']= "";

    $alumno = $_POST['alumno'];
}



$alumno = $_POST['alumno'];
$alumno.=($string = "$alumno");

$SQL = "SELECT AVG(ALL nota ) as promedio FROM nota_damh WHERE id LIKE '$string[0]'";

$sql_query = mysqli_query($conexion, $SQL);


//echo $SQL_READ;
 