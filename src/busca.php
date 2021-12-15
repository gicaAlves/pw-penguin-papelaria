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

    if (empty($_GET['txtBuscar'])) {
        header("Location: index.php");
    }

    $pesquisa = $_GET['txtBuscar'];
    $consulta = $con->query("select * from vw_cat_prod where nome_prod like concat ('%', '$pesquisa', '%') or desc_prod like concat ('%', '$pesquisa', '%')");

    if ($consulta->rowCount() == 0) {
        header("Location: erro_busca.php");
    }

    include 'nav.php';
    include 'cabecalho.html';
    ?>

    <div class="container-fluid">

        <!--ABERTURA DA CHAVE DO WHILE-->
        <!--essa variável foi RECORTADA de cima  -->
        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="row" style="margin-top: 15px;">

                <div class="col-sm-1 col-sm-offset-1"><img src="./imagens/produtos/<?php echo $exibe["img_prod"] ?>" class="img-responsive"></div>
                <div class="col-sm-5">
                    <h4 style="padding-top:20px"><?php echo $exibe["nome_prod"]; ?></h4>
                </div>
                <div class="col-sm-2">
                    <h4 style="padding-top:20px">R$ <?php echo number_format($exibe["preco_prod"], 2, ',', '.') ?></h4>
                </div>
                <!--button detalhes:-->
                <div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
                    <a href="detalhes.php?cd=<?php echo $exibe['cod_prod']; ?>">
                        <button type="submit" class="btn btn-lg btn-default" style="font-family:Bellota Text-Regular">

                            <span style="color:#171614; font-family:Bellota Text-Regular"><span class="glyphicon glyphicon-info-sign" style="color:#8EC3DB;"></span> Detalhes</span>

                        </button>

                    </a>
                </div>
            </div>
            <!--FECHAMENTO DA CHAVE DO WHILE-->
        <?php } ?>



    </div>

    <?php

    include 'rodape.html';

    ?>

</body>

</html>