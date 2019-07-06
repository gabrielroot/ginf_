<?php
    include '../conection/conn.php'; include '../user/login/session.php';
    $id=$_POST["id"];
    $sql="DELETE FROM noticias WHERE id=$id";
    $conn->query($sql);
  
    mysqli_close($conn);
    header("Location: painel.php");
  
?> 