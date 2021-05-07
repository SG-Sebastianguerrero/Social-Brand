<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="social-brand";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 session_start();


 $id_pedido=$_POST['id_pedido'];
 $estado =$_POST['estado'];
 $comentarios_desarrollador =$_POST['comentarios_desarrollador'];
 if($estado =1){
    $estado ="Completado";
  }
  if($estado =2){
     $estado ="Pendiente";
   }
   if($estado=3){
      $estado ="Cancelado";
    }


 $link=$_POST['link'];

 $sql="UPDATE pedido SET estado = '$estado', comentarios_desarrollador = '$comentarios_desarrollador', link = '$link' WHERE id_pedido = '$id_pedido'";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);

 if(!$ejecutar){
  echo"Hubo Algun Error";
  echo $id_pedido;
  echo "--";
  echo $estado;
  echo "--";
  echo $comentarios_desarrollador;
  echo "--";
  echo $link;
 }else{
 echo"Datos Guardados Correctamente";

 // echo $id_pedido;
 // echo "--";
 // echo $estado;
 // echo "--";
 // echo $comentarios_desarrollador;
 // echo "--";
 // echo $link;
 echo '<script language="javascript">alert("Datos Modificados Correctamente");</script>';
 }
?>
