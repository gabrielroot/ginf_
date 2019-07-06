<?php
    include 'conection/conn.php';
    include 'header.php';
?>

<head>
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="pesquisa.css">
</head>

<?php
    $texto=$_POST['texto'];
    echo "<h1>Resultados de \"".$texto."\"</h1>";
    $sql=mysqli_query($conn,"SELECT * FROM noticias WHERE ((texto LIKE '%$texto%') or (titulo LIKE '%$texto%') or (nome LIKE '%$texto%') or (curso LIKE '%$texto%') or (data LIKE '%$texto%')) and (arquivar=0) ORDER BY data DESC");
    echo "<nav class='container'>";
        while ($exibe = mysqli_fetch_assoc($sql) )
        { // Obtém os dados da linha atual e avança para o próximo registro
            if($i % 2 == 0)
                echo "<nav class='col-md-10 blocosx'>";
            else
                echo "<nav class='col-md-10 blocosy'>";
                    echo "<h2 class='titulo'>".str_replace($texto,"<b class='marca'>$texto</b>",$exibe["titulo"])."  </h2> ";
                    echo "<p class='nome'>". str_replace($texto,"<b class='marca'>$texto</b>",$exibe["nome"])." [ ".str_replace($texto,"<b class='marca'>$texto</b>",$exibe["data"])." ]</br>";
                    echo "<p>".str_replace($texto,"<b class='marca'>$texto</b>",$exibe["curso"])."</br>";
                    echo "<p class='txt'>".str_replace($texto,"<b class='marca'>$texto</b>",$exibe["texto"])."<br/> <br/> <br/>";
                echo "</nav>";
            $i++;
        }
    echo "</nav>";
?>