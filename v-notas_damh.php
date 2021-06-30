<html>
<head>
<title><! hecho por:diego alexander martinez huertas.
        ficha de programa: 2058969.––>
    </title>

</head>


<body>


            
  

       <br>

            <form action="r-notas_damh.php" method="POST">
           
            <table> 

            <td><label for="imp"><h1>Agregar notas</label></h1></td>
            <td><input type="button" onclick="history.back()"class="btn btn-primary btn-block" name="volver atrás" value="volver"></td>
            <tr>

            <td><label for="imp"><h1>nota:</label></td></h1>
            <td><input type="number" name="nota" id="imp"></td></tr>


            <td><label for="imp"><h1>alumno:</label></td></h1>
            <td>

            <select name="alumno">
            <?php
                //se realiza la conexion con la base de datos
                include('class/conexion_damh.php');
                $conexion = Conex_damh::conectar_damh();
                $sql = "select id, nombre from alumnos_damh";
                echo $sql;
                $resultado = $conexion->query($sql);
                //se crea l alista de los ambientes
                while($fila = mysqli_fetch_array($resultado) )
                {
                    $alumno = $fila[ 'id'];
                    $alumno .= "  ";
                    $alumno .= $fila[ 'nombre'];
                
                    echo "<option values =' $alumno'>  $alumno </option>";
                }
                ?>
                </select>

            </td>

            <tr>
            

            <td><input type="submit" class="btn btn-primary btn-block" name="Enviar" value="Enviar"></td>
            <td></td>
</tr>

            
      
   

            </form>

            </table>
  
          
         
           
</body>
</html>
