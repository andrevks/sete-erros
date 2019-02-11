<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- META TAGS -->
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login 2.0</title>

        <!-- CSS LINKS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
    </head>

    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Login</a>
                </div>
            </div>
        </nav>

        <div class="container login">
            
            <!-- FORM LOGIN -->
            <form class="form-estilo" method="post" action="login.php">
                <h2 class="form-estilo-titulo"><img src="img/logo.png"></h2>

                <!-- AVISO SEM SESSAO -->
                    <?php
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>  
                        <div class="alert alert-danger" role="alert">
                            <p>ERRO! Usuário ou senha inválidos!</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                    ?>

                <label for="inputUser" class="sr-only">Usuário</label>
                <input id="inputUser" name = "usuario" class="form-control" placeholder="Usuário" required="" autofocus="" type="text">
                <label for="inputPassword" class="sr-only">Senha</label>
                <input id="inputPassword" name="senha" class="form-control" placeholder="Senha" required="" autofocus="" type="password">

                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                <div class="row">
                    <div class="col-md-6"><a href="#" class="btn btn-link">Esqueci a senha</a></div>
                    <div class="col-md-6"><a href="pagecadastro.php" class="btn btn-link pull-right">Cadastrar</a></div>
                </div>
            </form>
        </div>
    </body>
</html>