<?php

$host ="localhost";
$user ="root";
$pass ="";
$db="social-brand";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

session_start();
$nombre = $_SESSION['nombre'];


if(!isset($_SESSION['id'])){
  header("Location: ../index.php");
  }

?>




<!DOCTYPE html>
<html lang="en">
 <head>
   <link rel="stylesheet" href="../css/administrador.css">
   <meta charset="UTF-8">
   <title>Administrador</title>
 </head>

  <body>

    <div class="inicio">
        <a  class="cerrar_sesion" width="50" height="40"  href="../php/logout.php">Cerrar sesión</a>
    </div>
  <h1>Bienvenido <?php echo $nombre?></h1>
  <div class="lista_pedidos">
     <h1>Vista pedidos por desarrollador</h1>
      
      <table class="lista_pedidos">

        <tr>
          <td>Id pedido</td>
          <td>Fecha</td>
          <td>Correo</td>
          <td>Tipo de trabajo</td>
          <td>Diseñador</td>
          <td>Comentarios pedido</td>
          <td>Comentarios desarrollador</td>
          <td>Estado</td>
          <td>Link</td>
          <td>Valor</td>
        </tr>

    <?php
    $sql="SELECT * from pedido";
    $result=mysqli_query($con,$sql);
    while ($mostrar=mysqli_fetch_array($result)) {
     ?>
        <tr>
          <td><?php echo $mostrar['id_pedido']?></td>
          <td><?php echo $mostrar['fecha']?></td>
          <td><?php echo $mostrar['correo_usuario']?></td>
          <td><?php echo $mostrar['tipo_trabajo']?></td>
          <td><?php echo $mostrar['disenador_preferencia']?></td>
          <td><?php echo $mostrar['comentarios_pedido']?></td>
          <td><?php echo $mostrar['comentarios_desarrollador']?></td>
          <td><?php echo $mostrar['estado']?></td>
          <td><?php echo $mostrar['link']?></td>
          <td><?php echo $mostrar['valor']?></td>
        </tr>
     <?php
      }
      ?>
      </table>

<button  class="Consultar">Consultar</button>
<h2>Valor total generado: (suma valor total)</h2>

  </div>
<form class="eliminar" action="../php/eliminar.php" method="post">
<div class="eliminar_container">
  <p>Para eliminar pedido seleccióne el id
        <select name="eliminar" required>
          <?php
          // $sql="SELECT * from pedido";
          $sql2 = "SELECT id_pedido FROM pedido";
          $result2=mysqli_query($con,$sql2);
          $num2 = $result2->num_rows;
          if($num2>0){
          while ($mostrar2=mysqli_fetch_array($result2)) {
           ?>
                echo '<option><?php echo $mostrar2['id_pedido'];?></option>';
           <?php
            }
            ?>
          <!-- </option> -->
          <?php
        }else{
                echo '<script language="javascript">alert("No es posible modificar, datos inexistentes");</script>';
                // echo $num;
                  }

           ?>
        </select>
     </p>
     <input type="submit" name="btn_eliminar" value="Eliminar">
</div>

</form>
  </body>

</html>
