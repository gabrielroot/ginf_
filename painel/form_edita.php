<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="cadastra.css">


<?php
    include '../conection/conn.php';include '../user/login/session.php';

    $id=$_POST["id"];
    $sql = mysqli_query($conn,"SELECT * FROM noticias WHERE id=$id");
    if ($exibe = mysqli_fetch_assoc($sql) )
    {
        $titulo=$exibe["titulo"];
        $nome=$exibe["nome"];
        $email=$exibe["email"];
        $texto=$exibe["texto"];
        $data=$exibe["data"];//---MUDAR PARA PEGAR DATA E HORA ATUAL
        $hora=$exibe["hora"];//
        $curso=$exibe["curso"];
        $texto=$exibe["texto"];
    }
    else
    {
        echo "<h1>ERRO: ID NÃO ENCONTRADO!</h1>";
    }
    
?>

   <html>
    <head>
    </head>
    <div class="container-fluid col-sm-12">
        <div class="container">
            <h1>EDITANDO...</h1>
            <hr><br>
            
            <form action='edita.php' method='post' class='form align-midle'> 
                <h3>DADOS DA NOTÍCIA<h3><br>
                <div class="form-group">
                    <label for='titulo'>TÍTULO</label>
                    <input class='form-control' name='titulo' type='text' id=titulo size=40 required value="<?php echo $titulo ;?>"> <br>
                </div>
                <div class="form-group">
                    <label for='texto'>TEXTO</label>
                    <textarea id='texto' class="form-control text" name='texto' rows=10 cols=48 required><?php echo strip_tags($texto) ;?></textarea>
                    <hr>
                </div>

                <h3>DADOS DA FONTE<h3><br>
                <div class="form-group">
                    <label for='nome'>NOME</label>
                    <input class='form-control' id='nome' name='nome' type='text' size=30 required value="<?php echo $nome ;?>"> <br>
                </div>
                <div class="form-group">
                    <label for='curso'>CURSO/CARGO</label>
                    <select name="curso" class="form-control" required> <?php echo $curso ; ?>
                        <option value=""></option>
                        <option value="Sistemas de Informação">BSI</option>
                        <option value="Engenharia Civíl">ENGCIV</option>
                        <option value="Física">FIS</option>
                        <option value="Admnistração">ADM</option>
                        <option value="Engenharia Agrícola e Ambiental">ENGAMB</option>
                        <option value="Agronomia">ENGAGR</option>
                        <option value="Ciências Biológicas">BIO</option>
                        <option value="Análise e Desenvolvimento de Sistemas">TADS</option>
                        <option value="Técnico em Manutenção e Suporte em Informática">Tec. Man. Sup.</option>
                        <option value="Técnico em Enefermagen">Tec. Enefermagen</option>
                        <option value="Técnico em Edificações">Tec. Edificações</option>
                        <option value="3° Ano">3° ANO</option>
                        <option value="2° Ano">2° ANO</option>
                        <option value="1° Ano">1° ANO</option>
                        <option value="*SERVIDOR(A)* do Campus">SERVIDOR</option>
                    </select>
                    <?php echo "<input type='hidden' name='id' value='$id'>";?>
                </div>
                <div class="form-group">
                    <label for='email'>EMAIL</label>
                    <input class='form-control' id='email' name='email' type='email' size=20 required value="<?php echo $email ;?>"><br><br>
                </div>
                <div class="form-group">
                    <a href="../painel/painel.php"><input class="btn btn-danger" type="button" value="Cancelar"></a>
                    <input  class="btn btn-primary" type='submit' value='Publicar'>
                </div>
            </form>
        </div>
    </div>
</nav>
