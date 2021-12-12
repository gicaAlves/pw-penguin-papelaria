<<<<<<< HEAD:src/formProduto.php
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

    <script src="jquery.mask.js"></script>

    <script>
        $(document).ready(function() {

            $('#txtpreco').mask('000.000.000.000.000,00', {
                reverse: true
            });

        });
    </script>
</head>

<body>

    <?php

    session_start();

    // se não estiver logado ou se não for um usuário administrador,
    // redireciona para a página de login
    if (empty($_SESSION['Status']) || $_SESSION['Status'] != 1) {
        header("Location: index.php");
    }

    include 'conexao.php';
    include 'nav.php';
    include 'cabecalho.html';

    $consultaCat = $con->query("select * from categoria");
    ?>


    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4">

                <h2>Inclusão de Produtos</h2>

                <form method="post" action="insprod.php" name="incluiProd" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="txtproduto">Nome do Produto</label>
                        <input name="txtproduto" type="text" class="form-control" required id="txtproduto">
                    </div>

                    <div class="form-group">

                        <label for="sltcat">Categoria</label>

                        <select class="form-control" name="sltcat">
                            <option value="">Selecione</option>
                            <?php while ($listaCat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $listaCat['cod_cat']; ?>"><?php echo $listaCat['nome_cat']; ?></option>
                            <?php } ?>
                        </select>

                    </div>


                    <div class="form-group">

                        <label for="txtpreco">Preço</label>

                        <input type="text" class="form-control" name="txtpreco" required id="txtpreco">

                    </div>


                    <div class="form-group">

                        <label for="txtqtde">Quantidade em Estoque</label>

                        <input type="number" class="form-control" name="txtqtde" required id="txtqtde">

                    </div>


                    <div class="form-group">

                        <label for="txtdescricao">Descrição do Produto</label>

                        <textarea rows="3" class="form-control" name="txtdescricao"></textarea>


                    </div>


                    <div class="form-group">

                        <label for="txtfoto1">Foto Principal</label>

                        <input type="file" accept="image/*" class="form-control" name="txtfoto1" required id="txtfoto1">

                    </div>

                    <div class="form-group">

                        <label for="sltlanc">Lançamento?</label>

                        <select class="form-control" name="sltlanc">
                            <option value="">Selecione</option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                        </select>


                    </div>


                    <button type="submit" class="btn btn-lg btn-info">

                    <span style="color:#171614; font-family:Bellota Text-Regular"><span class="glyphicon glyphicon-info-sign"></span> Incluir</span>

                    </button>

                    
               <!--se caso eu mudar de ideia: <img src="./imagens/pingoooo.png" style="width: 7%;"/> -->
            
                </form>

            </div>
        </div>
    </div>

    <?php include 'rodape.html' ?>




</body>

=======
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

    <script src="jquery.mask.js"></script>

    <script>
        $(document).ready(function() {

            $('#txtpreco').mask('000.000.000.000.000,00', {
                reverse: true
            });

        });
    </script>
</head>

<body>

    <?php

    session_start();

    // se não estiver logado ou se não for um usuário administrador,
    // redireciona para a página de login
    if (empty($_SESSION['Status']) || $_SESSION['Status'] != 1) {
        header("Location: index.php");
    }

    include 'conexao.php';
    include 'nav.php';
    include 'cabecalho.html';

    $consultaCat = $con->query("select * from categoria");
    ?>


    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4">

                <h2>Inclusão de Produtos</h2>

                <form method="post" action="novo_prod.php" name="incluiProd" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="txtproduto">Nome do Produto</label>
                        <input name="txtproduto" type="text" class="form-control" required id="txtproduto">
                    </div>

                    <div class="form-group">

                        <label for="sltcat">Categoria</label>

                        <select class="form-control" name="sltcat">
                            <option value="">Selecione</option>
                            <?php while ($listaCat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $listaCat['cod_cat']; ?>"><?php echo $listaCat['nome_cat']; ?></option>
                            <?php } ?>
                        </select>

                    </div>


                    <div class="form-group">

                        <label for="txtpreco">Preço</label>

                        <input type="text" class="form-control" name="txtpreco" required id="txtpreco">

                    </div>


                    <div class="form-group">

                        <label for="txtqtde">Quantidade em Estoque</label>

                        <input type="number" class="form-control" name="txtqtde" required id="txtqtde">

                    </div>


                    <div class="form-group">

                        <label for="txtdescricao">Descrição do Produto</label>

                        <textarea rows="3" class="form-control" name="txtdescricao"></textarea>


                    </div>


                    <div class="form-group">

                        <label for="txtfoto1">Foto Principal</label>

                        <input type="file" accept="image/*" class="form-control" name="txtfoto1" required id="txtfoto1">

                    </div>

                    <div class="form-group">

                        <label for="sltlanc">Lançamento?</label>

                        <select class="form-control" name="sltlanc">
                            <option value="">Selecione</option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                        </select>


                    </div>


                    <button type="submit" class="btn btn-lg btn-block btn-info">

                    <span style="color:#171614; font-family:Bellota Text-Regular"><span class="glyphicon glyphicon-info-sign"></span> Incluir</span>

                    </button>

                    
               <!--se caso eu mudar de ideia: <img src="./imagens/pingoooo.png" style="width: 7%;"/> -->
            
                </form>

            </div>
        </div>
    </div>

    <?php include 'rodape.html' ?>




</body>

>>>>>>> 2e75c37ce46c7273aa6c7e565fb30c22c776299b:src/form_prod.php
</html>