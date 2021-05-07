<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="social-brand";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 session_start();
 $eliminar=$_POST['eliminar'];

 $sql="DELETE FROM pedido WHERE id_pedido = '$eliminar'";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);

 if(!$ejecutar){
  echo"Hubo Algun Error";

 }else{
  // header("Location: administrador.php");

  echo '<script language="javascript">alert("Registro eliminado Correctamente");</script>';
 }
?>
