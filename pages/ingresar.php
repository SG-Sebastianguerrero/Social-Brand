<?php

require "conexion.php";
session_start();

if($_POST){

  $usuario = $_POST['usuario'];
  $password = sha1($_POST['password']);
  // $sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
  /* $sql = "SELECT ID_USUARIO , primer, password, nombre, tipo_usuario, tipo_documento, documento, telefono_fijo, celular FROM usuarios WHERE usuario='$usuario'"; */
  $sql = " SELECT
    user.id_usuario id
      ,contact.emaiL_principal usuario
      ,concat(user.primer_nombre,' ',user.primer_apellido,' ',user.segundo_apellido) nombre 
      ,doctype.tipodoc tipo_documento
      ,user.numero_doc documento
      ,user.password
      ,contact.tel_fijo telefono_fijo
      ,contact.tel_celular telefono_celular
      ,contact.email_secundario email_secundario
      ,usertype.id_tipousuario tipo_usuario
  FROM	
    usu_usuario			user
      ,usu_tipousuario	usertype
      ,usu_contacto		contact
      ,usu_tipodoc		doctype
  WHERE
    user.id_tipousuario = usertype.id_tipousuario
  AND user.id_usuario = contact.id_usuario
  AND user.id_tipodoc = doctype.id_tipodoc
AND contact.emaiL_principal ='$usuario'";
  $resultado = $mysqli->query($sql);
  $num = $resultado->num_rows;


        if($num>0){
          $row = $resultado->fetch_assoc();
          $password_bd = $row['password'];
          /* $pass_c = sha1($password);//shal1() */
          $pass_c = $password;


                  if($password_bd == $pass_c){

                        $_SESSION['id'] = $row['id'];
                        $_SESSION['usuario'] = $row['usuario'];
                        $_SESSION['nombre'] = $row['nombre'];
                        $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
                        $_SESSION['tipo_documento'] = $row['tipo_documento'];
                        $_SESSION['documento'] = $row['documento'];
                        $_SESSION['telefono_fijo'] = $row['telefono_fijo'];
                        $_SESSION['celular'] = $row['telefono_celular'];

                        $tipo_usuario = $row['tipo_usuario'];
                        if($tipo_usuario==1){
                        header("Location: administrador.php");
                        }
                        if($tipo_usuario==2){
                        header("Location: desarrollador.php");
                        }
                        if($tipo_usuario==3){
                        header("Location: usuario.php");
                        }else{
                        echo "tipo de usuario invalido";
                        }

                  }else{
                    echo "la contraseña no coincide";

                  }
        }else{
          echo "NO existe usuario";
          echo $num;
        }
  }



?>






<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
   <title>Social Brand</title>
     <link rel="stylesheet" href="../css/ingresar.css">

     <script src="../js/ingresar.js"></script>
 </head>

  <body>

   <div class="page">
     <div class="container">
       <div class="left">
         <div class="login">Login</div>
         <div class="eula">By logging in you agree to the ridiculously long terms that you didn't bother to read</div>
       </div>
       <div class="right">
         <svg viewBox="0 0 320 300">
           <defs>
             <linearGradient
                             inkscape:collect="always"
                             id="linearGradient"
                             x1="13"
                             y1="193.49992"
                             x2="307"
                             y2="193.49992"
                             gradientUnits="userSpaceOnUse">
               <stop
                     style="stop-color:#ff00ff;"
                     offset="0"
                     id="stop876" />
               <stop
                     style="stop-color:#ff0000;"
                     offset="1"
                     id="stop878" />
             </linearGradient>
           </defs>
           <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
         </svg>
         <div class="form">
          <form class="form2" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="email">Usuario</label>
            <input type="text" name="usuario">
            <label>Contraseña</label>
            <input type="password" name="password" id ="password">
            <input type="submit" id="submit">
            <!--<button  name="Link-Developer" width="32" height="32" onclick="location.href='desarrollador.php'">Developer</button>
            <button  name="Link-Developer" width="32" height="32" onclick="location.href='administrador.php'">Admin</button>
            <button  name="Link-Developer" width="32" height="32" onclick="location.href='usuario.php'">Usuario</button>-->
          </form>



         </div>
       </div>
     </div>
   </div>
  </body>
</html>
