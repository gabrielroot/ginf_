<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="home.css">
<div class="container-fluid col-md-12 barra"></div>
        <div class="row">   
            <div class="col-sm-10 back_news">
                <h1><b>NOTÍCIAS<b></h1>
                <?php
                    include ('conection/conn.php');
                    $sql = mysqli_query($conn,"SELECT * FROM noticias where arquivar=0 ORDER BY data DESC");
                    echo "<nav class='container'>";
                    while ($exibe = mysqli_fetch_assoc($sql) )
                    { // Obtém os dados da linha atual e avança para o próximo registro
                        if($i % 2 == 0)
                            echo "<nav class='col-md-10 blocosx'>";
                        else
                            echo "<nav class='col-md-10 blocosy'>";
                                
                                echo "<h2 class='titulo'>".$exibe["titulo"]."  </h2> ";
                                echo "<p class='nome'>". $exibe["nome"]." [ ".$exibe["data"]."]</br>"; //FORMATAR DATA
                                echo "<p>".$exibe["curso"]."</br>";
                                echo "<p class='txt'>".$exibe["texto"]."<br/> <br/> <br/>";
                            echo "</nav>";
                        $i++;
                    }
                    echo "</nav>";

                    ?>
            </div>
            <div class="col-sm-2 side_bar">
            
                <div class="row items" >
                    <div class="container">
                        
                    </div>
                </div>
                <div class="row items" >
                    <div class="container">
                        
                    </div>
                </div>
                <div class="row items" >
                    <div class="container">
                        
                    </div>
                </div>
                <div class="row items" >
                    <div class="container">
                        
                    </div>
                </div>
            
            </div>
        
        </div>
        
        </div>

        <footer>
            <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
            <script src="bootstrap/js/jquery.js" type="text/javascript"></script>
            <script src="bootstrap/js/bootstrap.mim.js" type="text/javascript"></script>
        </footer>
    </body>
</html>