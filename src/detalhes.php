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

    session_start();

    include 'conexao.php';

    if (!empty($_GET['cd'])) {
        $cod_prod = $_GET['cd'];
        $consulta = $con->query("select * from vw_cat_prod where cod_prod = '$cod_prod'");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: /" );
    }

    include 'nav.php';
    include 'cabecalho.html';
    ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-1">

                <h1>Detalhes do Produto</h1>

                <img src="./imagens/produtos/<?php echo $exibe["img_prod"] ?>.jpg" class="img-responsive" style="width:100%;">
            </div>

            <div class="col-sm-7">
                <h1><?php echo $exibe["nome_prod"] ?></h1>

                <p><?php echo $exibe["desc_prod"] ?></p>

                <p><?php echo $exibe["quant_prod"] ?> quantidades disponíveis</p>

                <p>R$ <?php echo number_format($exibe["preco_prod"], 2, ',', '.') ?></p>

                <button class="btn btn-lg btn-success">Comprar</button>

            </div>
        </div>

        <?php include 'rodape.html'; ?>
</body>

</html>