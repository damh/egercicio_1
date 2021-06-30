<html>
<head>
<title><! hecho por:diego alexander martinez huertas.
        ficha de programa: 2058969.––></title>

</head>


<body>


       <br>

            <form   method="POST">
           
            <table> 

            <td><label for="imp"><h1>Promedio de notas</label></h1></td>
            <td><input type="button" onclick="history.back()"class="btn btn-primary btn-block" name="volver atrás" value="volver"></td>
            <tr>

            <td><label for="imp"><h1>alumno:</label></td></h1>
            <td>

            <select name="alumno">
            <?php
                //se realiza la conexion con la base de datos
                include('class/conexion_damh.php');
                $conexion = Conex_damh::conectar_damh();
                $sql = "select id, nombre, fecha_nacimiento,genero from alumnos_damh";
                echo $sql;
                $resultado = $conexion->query($sql);
                //se crea l alista de los ambientes
                while($fila = mysqli_fetch_array($resultado) )
                {
                    $alumno = $fila[ 'id'];
                    $alumno .= "  ";
                    $alumno .= $fila[ 'nombre'];
                    $alumno .= "  ";
                    $alumno .= $fila[ 'fecha_nacimiento'];
                    $alumno .= "  ";
                    $alumno .= $fila[ 'genero'];
                
                    echo "<option values =' $alumno'>  $alumno </option>";
                }
                ?>
                </select>

            </td><td><input type="submit" class="btn btn-primary btn-block" name="Enviar" value="Enviar"></td>

            <table class="table" border=2px>
      <thead><br>
      <div>
            
      <th>alumno</th>   
      <th>promedio</th>
            
            
        </div>
   </thead><tbody>


   
<?php

include "r-promedio_notas_damh.php";

while($row= mysqli_fetch_array($sql_query)){?>

<tr> 
<td><?=$alumno ?></td>
<td><?=$row['promedio'] ?></td>
                
                


<?php }

?>

            <tr>
            

            
      
   

            </form>

            </table>
  
          
         
           
</body>
</html>
