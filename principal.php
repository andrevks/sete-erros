<?php
    session_start();
    if(empty($_SESSION)){
        session_start();
        header("Location: index.php");
        exit();
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Estudos</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="principal.php">Sete-Erros</a>
                </div>
                <div class="collapse navbar-collapse" id="navbartext">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inserir Imagem<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item a">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <p style="color: white;"><?php echo isset($_SESSION); ?></p>
                    </span>
                </div>
            </div>
        </nav>

    <main>
        <?php
            if(isset($_SESSION['prof'])):
        ?>
        <!-- Container do Modal -->
        <div class="container-modal">
            <div class="modal" id="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Teste!</h2>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label>Inserir um erro</label>
                                    <input type="radio" name="resposta">
                                </div>
                            </div>
                        </div>
                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label>Inserir um erro</label>
                                    <input type="radio" name="resposta">
                                </div>
                            </div>
                        </div>
                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label>Inserir um erro</label>
                                    <input type="radio" name="resposta">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secundary" data-dismiss="modal" onclick="inserirErro()">Okay!</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endif;
        ?>


        <div class="container-modal">
            <div class="modal" id="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Teste!</h2>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label>Marcar um erro</label>
                                    <input type="radio" name="resposta">
                                </div>
                            </div>
                        </div>
                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label>Marcar um erro</label>
                                    <input type="radio" name="resposta">
                                </div>
                            </div>
                        </div>
                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label>Marcar um erro</label>
                                    <input type="radio" name="resposta">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secundary" data-dismiss="modal" onclick="marcarErro()">Okay!</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container da Imagem-->
        <div class="container-img">
            <div class="content-img">
                <img src="img/imagem.jpg">
                <div class="erros">
                    <!-- Primeira Linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('1 13')"></div>
                    <!-- Segunda linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('2 13')"></div>
                    <!-- Terceira Linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('3 13')"></div>
                    <!-- Quarta linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('4 13')"></div>
                    <!-- Quinta Linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('5 13')"></div>
                    <!-- Sexta linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('6 13')"></div>
                    <!-- Setima linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('7 13')"></div>
                    <!-- Oitava linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('8 13')"></div>
                    <!-- Nona Linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('9 13')"></div>
                    <!-- Decima linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('10 13')"></div>
                    <!-- Decima 1 linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('11 13')"></div>
                    <!-- Decima 2 linha -->
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('12 13')"></div>
                    <!-- Decima 3 linha --> 
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 1')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 2')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 3')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 4')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 5')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 6')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 7')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 8')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 9')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 10')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 11')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 12')"></div>
                    <div class="box" data-toggle="modal" data-target="#modal" onclick="pegarId('13 13')"></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </main>
</body>

</html>