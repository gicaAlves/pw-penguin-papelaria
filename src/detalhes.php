<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- meu ícone de pinguim:-->
    <link rel="shortcut icon" href="./imagens/penguinn.png" type="image/x-icon">

    <style>
        .navbar {
            margin-bottom: 0;
        }
    </style>



</head>

<body>

    <?php

    session_start();

    include 'conexao.php';
    include 'nav.php';
    include 'cabecalho.html';


    ?>

    <div class="container-fluid">



        <div class="row">

            <div class="col-sm-4 col-sm-offset-1">

                <h1>Detalhes do Produto</h1>

                <img src="https://dummyimage.com/900x640" class="img-responsive" style="width:100%;">
            </div>

            <div class="col-sm-7">
                <h1>Nome do Produto</h1>

                <p>Descrição do Produto</p>

                <p>Marca</p>

                <p>R$ 0,00</p>

                <button class="btn btn-lg btn-success">Comprar</button>

            </div>
        </div>

        <?php include 'rodape.html';?>
</body>
</html>