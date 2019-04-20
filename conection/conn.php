<?php
    $server = 'localhost';
    $user   = 'gabriel';
    $pass   = '123';
    $db     = 'ginf';

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(! $conn ) { //ATIVAR SÓ PARA DEBUGAR A CONEXÃO
           die('Could not connect: ' . mysql_error());
        }

        echo 'Connected successfully';
  ?>
