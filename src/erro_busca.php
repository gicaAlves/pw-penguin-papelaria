<!DOCTYPE html>
<html lang="pt-br">
<title>Penguin Papelaria</title>

<head>
  <meta charset="author" content="Giovanna Alves (Gica)">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--essa TAG META serve para a página permanecer responsiva. 
Viewport= área de visualização da página no browser;
Width, device width = (largura do dispositivo) largura da página conforme a largura do browser do usuário;
Initial Scala 1.0 é padrão (é o zoom da tela).             -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--agora refenciando os links do bootstrap e tal >-<-->
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery livraria -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- JavaScript compilado-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="shortcut icon" href="imagens/pingumaior.png" type="image/x-icon">
  <style type="text/css">
    .navbar {
      margin-bottom: 0;
    }

    body {
      font-family: "Bellota Text-Regular";
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

                <h3>Nenhum produto foi encontrado! 😢</h3> <br/>

            </div>
        </div>
    </div>
    <br/> <br/> <br/>

    <?php include 'rodape.html' ?>


</body>

</html>