<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Usuário</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        .navbar {
            margin-bottom: 0;
        }
    </style>
</head>

<body>


</body>
    <?php

        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';

    ?>


<div class="container-fluid">

    <div class="row">

        <div class="col-sm-4 col-sm-offset-4">

            <h2>Login de Usuário</h2>
            <form name="form_usuario" method="POST" action="validacao_usuario.php">

            <div class="form-group">

                <label for="email">Email</label>
                <input name="txtemail" type="email" class="form-control" required id="email">
            </div>

            <div class="form-group">

                <label for="senha">Senha</label>
                <input name="txtsenha" type="password" class="form-control" required id="senha">
            </div>

            <br/> 
            <button type="submit" class="btn btn-lg btn-block btn-default">

               <span style="color:black; font-family:Bellota Text-Regular"><span class="glyphicon glyphicon-ok"></span> Entrar </span>

               <!--se caso eu mudar de ideia: <img src="./imagens/pingoooo.png" style="width: 7%;"/> -->
            </button>

            <button type="submit" class="btn btn-lg btn-link">

                Não tenho cadastro 
                <img src="./imagens/mais um.jpg" style="width: 12%;"/>

            </button>
            </form>
        </div>
    </div>
</div>
<br/> <br/>

<?php include 'rodape.html' ?>

</html>