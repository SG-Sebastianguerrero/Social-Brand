<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="social-brand";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 session_start();

 /*Tipo documento
 Documento
 Nombre
 Correo:
 Contraseña
 Telefono fijo:
 Tipo de trabajo:
 Diseñador de preferencia: */
//holaaaaaaaaaaaaaaaaaaaaaaaa
 //recuperar las variables

 $fecha =date("d")."/".date("m")."/".date("Y");
 $tipo_trabajo=$_POST['tipo_trabajo'];
 $disenador_preferencia=$_POST['disenador_preferencia'];
 $comentarios_pedido=$_POST['comentarios_pedido'];
 $comentarios_desarrollador= "Pendiente";
 $estado ="Pendiente";
 $link="Pendiente";
 $valor=10000000;
 $correo=$_SESSION['usuario'];
 // $correo= $row['usuario'];
 //$valor= funcion dependiendo del tipo de pedido


 $sql="INSERT INTO pedido VALUES( NULL,
                                 '$fecha',
                                 '$tipo_trabajo',
                                 '$disenador_preferencia',
                                 '$comentarios_pedido',
                                 '$comentarios_desarrollador',
                                 '$estado',
                                 '$link',
                                 '$valor',
                                 '$correo')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
  echo $_SESSION['usuario'];

 }else{
   header("Location: ../pages/usuario.php");
  //echo"Datos Guardados Correctamente<br><a href='../index.html'>Volver</a>";
  // print_r($hoy);
  // echo '<script language="javascript">alert("Pedido realizado exitosamente");</script>';
 }
?>
