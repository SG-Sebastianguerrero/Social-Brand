<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="social-brand";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
;

session_start();
$nombre = $_SESSION['nombre'];

if(!isset($_SESSION['id'])){
  header("Location: ../index.php");
  }
 ?>


<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="../css/desarrollador.css">
   <title>Desarrollador</title>

 </head>

  <body>
    <div class="inicio">
      <a  class="cerrar_sesion" width="50" height="40"  href="../php/logout.php">Cerrar sesión</a>
    </div>


    <h1>Bienvenido <?php echo $nombre?></h1>

    <form class="lista_pedidos" action="../php/modificar.php" method="POST">

    <div class="text_pedido_container">
        <h2>Modificar pedido</h2>
      <div class="pedido_container">


          <p>ID del pedido:
                <select name="id_pedido" required>
                  <?php
                  // $sql="SELECT * from pedido";
                  $sql2 = "SELECT id_pedido, disenador_preferencia, correo_usuario  FROM pedido WHERE disenador_preferencia= '$nombre'";
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

          <p>Estado del pedido
                <select name="estado" required>
                    <option value="1">Completado</option>
                    <option value="2">Cancelado</option>
                    <option value="3">Pendiente</option>
                </select>
              </p>

          <p>Agregar comentario:
            <input type="text" name="comentarios_desarrollador">
          </p>

          <p>Link:
            <input type="text" name="link">
          </p>
    </p>
            <div class="modificar_container">
          <input type="submit" name="register" value="Modificar">
        </div>
    </div>
  </div>

  </form>


      <div class="lista_pendientes">
          <h2>Lista de pedidos pendientes</h2>

          <table class="tabla_pedidos">

                    <?php
                    // $sql="SELECT * from pedido";
                    $sql = "SELECT id_pedido, fecha, tipo_trabajo, disenador_preferencia, comentarios_pedido, comentarios_desarrollador, estado, link, valor, correo_usuario
                    FROM pedido WHERE disenador_preferencia= '$nombre'";
                    $result=mysqli_query($con,$sql);
                    $num = $result->num_rows;
                    if($num>0){
                    while ($mostrar=mysqli_fetch_array($result)) {
                     ?>
                        <tr>
                          <td><?php echo $mostrar['id_pedido']?></td>
                          <td><?php echo $mostrar['fecha']?></td>
                          <td><?php echo $mostrar['tipo_trabajo']?></td>
                           <!-- remover cuando tenga bien hecho el condicional -->
                          <td><?php echo $mostrar['disenador_preferencia']?></td>
                          <td><?php echo $mostrar['correo_usuario']?></td>
                          <td><?php echo $mostrar['comentarios_pedido']?></td>
                          <td><?php echo $mostrar['comentarios_desarrollador']?></td>
                          <td><?php echo $mostrar['estado']?></td>
                          <td><?php echo $mostrar['link']?></td>
                        </tr>
                     <?php
                      }
                      ?>
                    </table>
                    <?php
                  }else{
                          echo "Buen trabajo NO existen pedidos pendientes";
                          // echo $num;
                        }

                     ?>



            <input type="submit" value="Consultar">
  </body>

</html>
