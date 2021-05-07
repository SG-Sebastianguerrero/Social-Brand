<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="social-brand";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $usuario= $_POST['correo']; // PK EMAIL
 $usuario2= $_POST['correo_secundario'];
 $password=$_POST['contrasena'];
 $pass_c = sha1($password);

 $pnombre=$_POST['pnombre'];
 $snombre=$_POST['snombre'];
 $papellido=$_POST['papellido'];
 $sapellido=$_POST['sapellido'];

 $tipo_usuario= 3;
 $tipo_documento=$_POST['tipo_documento'];
 $documento=$_POST['documento'];
 $telefono_fijo=$_POST['telefono_fijo'];
 $celular=$_POST['celular'];

/*Holaaa*/
 //hacemos la sentencia de sql
/*  $sql="INSERT INTO usu_usuario VALUES(NULL,
                                   '$usuario',
                                   '$pass_c',
                                   '$nombre',
                                   '$tipo_usuario',
                                   '$tipo_documento',
                                   '$documento',
                                   '$telefono_fijo',
                                   '$celular')"; */
$sql="INSERT INTO `usu_usuario`  VALUES (NULL,'$pnombre', '$snombre', '$papellido', '$sapellido', '$pass_c', '$tipo_documento', '$documento', '$tipo_usuario')";
$con->query($sql);
$id_usuario = $con->insert_id;

/*$ejecutar=mysqli_query($con,$sql);
$sqlConsulta="SELECT id_usuario from  usu_usuario where numero_doc = '$documento'";
$resultUsuario = mysqli_query($con,$sqlConsulta);
$extraeUsuario=mysqli_fetch_array($resultUsuario);
$id_usuario = $extraeUsuario['id_usuario'];*/

$sqlContacto="INSERT INTO `usu_contacto`  VALUES (NULL,'$telefono_fijo','$celular','$usuario','$usuario2','$id_usuario')";
$con->query($sqlContacto);

/*$ejecutarContacto=mysqli_query($con,$sqlContacto);*/
/*
 //verificamos la ejecucion
 if(!$ejecutar or !$resultUsuario){
  echo"Hubo Algun Error";
  echo mysqli_query($con,$sql);
  echo $ejecutar;
  echo $resultUsuario;
 }else{
    header("Location: ../index.php");
    echo '<script language="javascript">alert("Datos Guardados Correctamente");</script>';
  // echo"Datos Guardados Correctamente<br><a href='../index.html'>Volver</a>";
 }*/
?>
