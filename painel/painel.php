<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="../header.css">
<link rel="stylesheet" type="text/css" href="painel.css">
<?php include '../header.php'; include '../user/login/session.php'?>
<body>
        <div class="row lo">
                <div class="col-md-2 sidebar">
                    <div class="row">
                        <div class="col-md-12 float">

                        </div>
                    </div>
                </div>
                <div class="col-md-10 corpo">
                <div class="row">   
                    <div class="col-sm-10 back_news">
                        <h1><b>BEM VINDO(A) DE VOLTA, <?php echo strtoupper($_SESSION['login'])?>!!<b></h1>
                        <?php
                            include ('../conection/conn.php');
                            $sql = mysqli_query($conn,"SELECT * from noticias ORDER BY data DESC");
                            echo "<nav class='container-fluid'>";
                            while ($exibe = mysqli_fetch_assoc($sql) )
                            { // Obtém os dados da linha atual e avança para o próximo registro
                                if($i % 2 == 0)
                                    echo "<nav class='col-md-12 blocosx'>";
                                else
                                    echo "<nav class='col-md-12 blocosy'>";
                                    
                                        echo "<h2 class='titulo'>".$exibe["titulo"]."  </h2> ";
                                        echo "<p class='nome'>". $exibe["nome"]." [ ".$exibe["data"]." ]</br>"; //FORMATAR DATA 
                                        echo "<p>".$exibe["curso"]."</br>";
                                        echo "<p class='txt'>".$exibe["texto"]."<br/> <br/> <br/>";
                                        $id=$exibe["id"];

                                        echo "<div class='col-md-1'>";
                                            echo "<form method='post' action='deletar.php'>";
                                                echo "<input name='id' type='hidden' value=$id>";
                                                echo "<input class='btn btn-danger' type='submit' value='Deletar'>";
                                            echo "</form>";
                                        echo "</div>";
                                        echo "<div class=col-md-1>";
                                            echo "<form method='post' action='form_edita.php' class='form-inline'>";
                                                echo "<input name='id' type='hidden' value=$id>";
                                                echo "<input class='btn btn-primary' type='submit' value='Editar'>";
                                            echo "</form>";
                                        echo "</div>";
                                        
                                            echo "<div class=col-md-1>";
                                                echo "<form method='post' action='arquivar.php' class='form-inline'>";
                                                    echo "<input name='id' type='hidden' value=$id>";
                                                    if($exibe["arquivar"]==0)
                                                        echo "<input class='btn btn-warning' type='submit' value='Arquivar'>";
                                                    else
                                                        echo "<input class='btn btn-primary' type='submit' value='Desarquivar'>";
                                                echo "</form>";
                                            echo "</div>";
                                    echo "</nav>";
                                    $i++;
                                    
                                }
                            echo "</nav>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
</body>