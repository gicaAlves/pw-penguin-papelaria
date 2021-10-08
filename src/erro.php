<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Minha Loja - Logon de usuário</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style type="txt/css">
        .navbar {
            margin-bottom: 0;
        }
        body {
            font-family: "Bellota Text-Regular";
            color: #171614;

  }
    </style>

</head>

<body>

    <?php

    include 'conexao.php';
    include 'nav.php';
    include 'cabecalho.html';

    ?>


    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 text-center">

                <h2 style="font-size: 180%;">Usuário ou senha inválidos😡🐧!</h2>
                <br/>

                <a href="form_login.php" class="btn btn-lg btn-block btn-default" role="button">Tentar Novamente</a>

                
                <a href="form_novo_usu.php">
                    <button type="button" class="btn btn-lg btn-link">

                        Ainda não sou cadastrado
                        <img src="./imagens/mais um.jpg" style="width: 12%;"/>

                    </button>
                </a>
            </div>
        </div>
    </div>

    <?php include 'rodape.html' ?>




</body>

</html>