<?php
    include "../../conection/conn.php";

    session_start();

    $nome = $_POST['nome'];
    $senha= $_POST['senha'];
    echo "$nome | $senha";
    $sql = "SELECT nome, senha FROM user WHERE nome = '$nome' AND senha = '$senha'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result,MYSQLI_ASSOC);
  
    if (mysqli_num_rows($result)>0)
    {
      $_SESSION['login'] = $nome;
      $_SESSION['senha'] = $senha;
      header("Location: ../../painel/painel.php");
    }
    else
    {
      unset ($_SESSION['login']);
      unset ($_SESSION['senha']);
      header ('location:index.php');
      echo ('<p>Login Incorreto!');
    }
    mysqli_close($conn);
?>