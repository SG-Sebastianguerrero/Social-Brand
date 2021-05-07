<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="social-brand";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 ?>


<!DOCTYPE html>
<html>
<head>
  <title>mostrar datos</title>
</head>

<body>
    <br>
        <table>
          <tr>
            <td>tipo_documento</td>
            <td>documento</td>
            <td>nombre</td>
            <td>correo</td>
            <td>contraseña</td>
            <td>telefono_fijo</td>
            <td>celular</td>
          </tr>
      <?php
      $sql="SELECT * from usuarios";
      $result=mysqli_query($con,$sql);
      while ($mostrar=mysqli_fetch_array($result)) {
       ?>
          <tr>
            <td><?php echo $mostrar['tipo_documento']?></td>
            <td><?php echo $mostrar['documento']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['correo']?></td>
            <td><?php echo $mostrar['contrasena']?></td>
            <td><?php echo $mostrar['telefono_fijo']?></td>
            <td><?php echo $mostrar['celular']?></td>
          </tr>
       <?php
        }
        ?>
        </table>

</body>


</html>
