<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="social-brand";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

session_start();
// $sql = id, nombre, tipo_documento, documento, usuario, telefono_fijo, celular  FROM usuarios;
// $resultado = $mysqli->query($sql);

$nombre = $_SESSION['nombre'];
$tipo_documento = $_SESSION['tipo_documento'];
$documento = $_SESSION['documento'];
$usuario = $_SESSION['usuario'];
$telefono_fijo = $_SESSION['telefono_fijo'];
$celular = $_SESSION['celular'];

if(!isset($_SESSION['id'])){
  header("Location: ../index.php");
  }
 ?>


<!DOCTYPE html>
<html lang="en">
 <head>
   <link rel="stylesheet" type="text/css" href="../css/usuario.css">
   <meta charset="UTF-8">
   <title>Usuario</title>
 </head>

  <body>

    <div class="inicio">
      <!-- onclick="location.href='../index.html'" -->
      <a  class="cerrar_sesion" width="50" height="40"  href="../php/logout.php">Cerrar sesión</a>
    </div>
    <h1>Bienvenido  <?php echo $nombre?></h1>


    <div class="container_registro">
      <h2>Tus datos</h2>
      <div class="datos_registro">
        <p>Tipo documento: <?php echo $tipo_documento?></p>
        <p>Documento       <?php echo $documento?></p>
        <p>Correo:         <?php echo $usuario?></p>
        <p>Telefono fijo:  <?php echo $telefono_fijo?></p>
        <p>Numero celular: <?php echo $celular?></p>
      </div>
    </div>



    <form class="pedido" action="../php/pedido.php" method="POST">

      <h2>Realizar pedido</h2>
      <div class="pedido_container">
      <p>Tipo de trabajo:
            <select name="tipo_trabajo" required>
                <option value="marca_personal"> Marca Personal </option>
                <option value="pagina_web"> Pagina Web </option>
                <option value="publicidad"> Publicidad </option>
                <option value="todas"> Todas </option>
            </select>
         </p>

      <p>Diseñador de preferencia:
            <select name="disenador_preferencia" required>
                <option value="sin_preferencia">Sin Preferencia</option>
                <option value="carolina">Carolina</option>
                <option value="juliana">Juliana</option>
                <option value="daniel">Daniel</option>
                <option value="sebastian">Sebastian</option>
            </select>
          </p>

          <p>Comentarios sobre el pedido:
            <input type="text" name="comentarios_pedido">
          </p>


    </p>
    </div>

    <div class=pedido_container2>
      <h2>Valor Total:</h2>
        <input type="submit" name="register" value="Comprar" onclick="confirmacion()">
        <script language="JavaScript">
             function confirmacion(){
                 alert("Compra realizada exitosamente");
             }
        </script>



      <div>
  </form>


      <div class="lista">
          <h2>Lista de pedidos</h2>

          <table class="tabla">
                    <tr>
                    <td>Id pedido</td>
                    <td>Fecha</td>
                    <td>Tipo de trabajo</td>
                    <td>Diseñador</td>
                    <td>Comentarios pedido</td>
                    <td>Comentarios desarrollador</td>
                    <td>Estado</td>
                    <td>Link</td>
                    <td>Valor</td>
                    </tr>

                    <?php
                    // $sql="SELECT * from pedido";
                    $sql = "SELECT id_pedido, fecha, tipo_trabajo, disenador_preferencia, comentarios_pedido, comentarios_desarrollador, estado, link, valor, correo_usuario
                    FROM pedido WHERE correo_usuario= '$usuario'";
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
                    <?php
                    }
                    if($num==0){
                      echo "Aun no realizas ninguna compra";

                    }

                    else{
                          // echo "hubo algun error";
                          // echo $num;
                            }

                     ?>
                    </table>



      </div>
    <p>Necesitas soporte ? escribenos por whatsapp <a href="https://wa.me/573152122263?text=Hola,%20Necesito%20de%20tu%20ayuda">AQUI</a></p>
  </body>

</html>
