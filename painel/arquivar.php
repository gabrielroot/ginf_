<?php
  include '../conection/conn.php'; include '../user/login/session.php';
  $id=$_POST["id"];
    $sql="SELECT arquivar FROM noticias where id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
             $test=$row["arquivar"];
             if($test==0)  
                $sql="UPDATE noticias SET arquivar=1 WHERE id=$id";
            else
                $sql="UPDATE noticias SET arquivar=0 WHERE id=$id";
        }
    } else {
        echo "0 results";
    }

    $conn->query($sql);
    mysqli_close($conn);
    header("Location: painel.php");
?>