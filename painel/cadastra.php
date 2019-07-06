<?php
  include '../conection/conn.php'; include '../user/login/session.php';
  /*
  session_start();

  if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    //  header('Location:logi/form.php');
    exit('<script>location.href = "../login/form.php"</script>');
  }*/

  $data=date('Y-m-d H:i:s');

  $novadata = $semana . ", " . substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,2,2);

  $nome=$_POST['nome'];
  $curso=$_POST['curso'];
  $email=$_POST['email'];
  $texto=$_POST['texto'];
//  $texto=nl2br($texto);
  $titulo=$_POST['titulo'];
  $id=$_POST['id'];
  
  $sql = "INSERT INTO noticias (nome, curso, email, data, titulo, texto) VALUES ('$nome', '$curso', '$email', '$data', '$titulo', '$texto')";
  if($conn->query($sql))
    header("Location: painel.php");
  else
    echo "<h1>ERRO NA QUERY</h1>";
  
?>
