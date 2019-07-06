<?php
    $server = '192.168.160.21';
    $user   = 'murilo';
    $pass   = 'maradona';
    $db     = 'projeto_whatsapp';

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(! $conn ) { //ATIVAR SÓ PARA DEBUGAR A CONEXÃO
           die('Could not connect: ' . mysql_error());
        }

        echo 'Connected successfully';
  ?>
