<?php
  include ('../conection/conn.php'); include '../user/login/session.php';

  $nome=$_POST['nome'];
  $curso=$_POST['curso'];
  $email=$_POST['email'];
  $texto=$_POST['texto'];
  $titulo=$_POST['titulo'];
  $id=$_POST['id'];
  $texto=nl2br($texto);//PARA PRESERVAR A QUEBRA DE LINHA DO HTML PARA BD

  
  $sql = "UPDATE  noticias SET nome='$nome', curso='$curso', email='$email', titulo='$titulo', texto='$texto' WHERE id=$id";
  $conn->query($sql);

  header("Location: painel.php");
?>
