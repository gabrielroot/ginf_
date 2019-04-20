<?php include '../../header.php';?>

<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="../../header.css">
<link rel="stylesheet" type="text/css" href="index.css">

<body> 
    <div class="container-fluid col-sm-12">
        <div class="container">
            <form class="form align-midle" method="post" action="login.php">
            <div class="form-group">
                <label for="nome">Login</label>
                <input type="login" class="form-control" name="nome" id="nome" aria-describedby="info" placeholder="Digite seu login">
                <small id="info" class="form-text text-muted">Seu nome de usuário</small>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="check">Lembrar de Mim</label>
                <a href="#" style="text-align:right;"><b><p>Esqueceu a senha?</b></a>
                <!--CONFIGURAR PARA VOLTAR PARA ONDE ESTAVA, E NAO PARA ELA INICIAL-->
                <div class="container" style="text-align:center;">
                    <br><a href="#"><button type="button" class="btn btn-secondary" style="">Voltar</button></a>
                    <input type="submit" class="btn btn-primary" value="Entrar">
                </div>
            </div>
            </form>
        </div>
    </div>
</body>