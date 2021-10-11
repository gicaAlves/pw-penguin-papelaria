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
    include 'nav.php'; 
    include 'cabecalho.html'; 
    include 'conexao.php'; 

    //chamando a váriavel da categoria, que foi editada no nav//
    $cat= $_GET['cat'];

    $consulta = $con->query("select img_prod, nome_prod, preco_prod, quant_prod, nov_prod, nome_cat from vw_cat_prod where nome_cat= '$cat'");
  ?>


  <div class="container-fluid">
    <!--div para criar 4 colunas e 1 linha-->
    <div class="row">
      <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>

        <div class="col-sm-3">
          <img src="./imagens/produtos/<?php echo $exibe["img_prod"] ?>.jpg" class="img-responsive" style="width: 100%;">
          <div>
            <h2><?php echo mb_strimwidth($exibe["nome_prod"], 0, 30, '...') ?></h2>
          </div>
          <div>
            <h4>R$ <?php echo number_format($exibe["preco_prod"], 2, ',', '.') ?></h4>
            <!-- <h5><?php echo $exibe["desc_prod"] ?></h5>  -->
          </div>
          <!-- botões: -->
          <div class="text-center">
            <button class="btn btn-primary btn-block btn-info">
              <span style="color:black; font-family:Bellota Text-Regular"><span class="glyphicon glyphicon-info-sign"></span> Detalhes </span>
            </button>
          </div>
          <!--botão de compra com if e else para consulta de disponibilidade -->
          <div class="text-center" style="margin-top:5px; margin-bottom:5px;">
            <?php if ($exibe['quant_prod'] > 0) { ?>
              <button class="btn btn-primary btn-block btn-danger">
                <span style="color:black; font-family:Bellota Text-Regular"><span class="glyphicon glyphicon-gift"></span> Comprar </span>
              </button>


            <?php } else { ?>
              <button class="btn btn-primary btn-block btn-danger" disabled>
                <span style="color:black; font-family:Bellota Text-Regular"><span class="glyphicon glyphicon-remove-circle"></span> Indisponível </span>
              </button>


            <?php } ?>

          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include 'rodape.html'; ?>

</body>

</html>

<!-- cabo valeu! penguin papelaria 🎀🐧💜 -->
<!--AGORA A CÓPIA É PRA CATTTT CATOGORIA COMUNICADO DE ACIDENTE DE TRABALHOOO -->
<!--sala dos white people problems 🤗🤗🤗🥱😴😪😑😚😂🤣-->