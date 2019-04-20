<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
        
        <!-- CSS BOOTSTRAP -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="header.css">

    </head>
    <body>

        <div class="container-fluid corpo">
        
            <div class="row top">
                <nav class="container col-xs-3">                                                     <!-- IMAGEM -->
                    <div class="container col-xs-12 img">
                       <!-- <img src="/ginf/imagens/logo.png" alt="" class="">-->
                    </nav>
                </nav>
                <nav class="col-xs-5 lista">                                                      <!-- LISTA -->
                        <ul class="list-inline lista_top" style="margin-top:60px;">
                            <li>NOTÍCIAS</li>
                            <li>DOCUMENTOS ÚTEIS</li>
                            <li>SOBRE O SITE</li>
                        </ul>
                </nav>
                <nav class="col-xs-9 menu" style="margin-top:25px;">                         <!-- MENU -->
                        <button class="btn btn-default menuu" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                        </button>
                </nav>
                
                <nav class="col-xs-4">                         <!-- PESQUISA -->
                    <form method="post" action="/ginf/pesquisa.php" class="form-inline pesq2" style="margin-top:40px;margin-left:0px;">
                        <table>
                            <tr><input name='texto' class="form-control my-sm-0" type="search" style="width:54%;margin-top:-30px;" placeholder="Procurar" aria-label="Pesquisar" required></tr>
                            <tr><button class="btn  btn-success  my-2 my-sm-0" style="width:50px;margin-top:-30px;" type="submit">OK</button></tr>
                            <?php 
                                $url = $_SERVER['REQUEST_URI'];
                                $url = str_replace("ginf/user/login/", "", $_SERVER["REQUEST_URI"]);
                                if($url != '/index.php')
                                    echo "<tr><a href='/ginf/user/login/index.php' class='btn'><p class='login'><b>ENTRAR</b></p></a></tr>";
                            ?>
                        </table>
                    </form>
                </nav>
            </div>