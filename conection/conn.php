<?php
    $server = 'localhost';
    $user   = 'gabriel';
    $pass   = '123';
    $db     = 'ginf';

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(! $conn ) { //ATIVAR S脫 PARA DEBUGAR A CONEX脙O
           die('Could not connect: ' . mysql_error());
        }

        echo 'Connected successfully';
  ?>
