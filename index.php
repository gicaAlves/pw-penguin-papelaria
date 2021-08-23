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

    <link rel="shortcut icon" href="imagens/pingoooo.png" type="image/x-icon">
    <style type="text/css"> 
      .navbar{margin-bottom: 0;}
      body
      {
        font-family: "Bellota Text-Regular"; 
      }
    </style>
</head>

<body>
  <?php include 'nav.php' ?>
  <?php include 'cabecalho.html' ?>

  <div class="container-fluid"> 
<!--div para criar 4 colunas e 1 linha-->
    <div class="row">
      <div class="col-sm-3"> 
        <img src="https://i.pinimg.com/564x/82/27/6a/82276a33780922dfdb64fccddf730bfc.jpg" class="img-responsive" style="width: 100%;">
        <div> <h2>Caderno Pequeno Minimalista</h2> </div>
        <div> 
          <h4>R$:16,00</h4>
          <h5>Minimalismo, detalhes e cores suaves.                                    
              Este modelo possui um elástico e porta caneta laterais para melhor praticidade.</h5>
        </div>
      </div>

      <div class="col-sm-3"> 
        <img src="https://i.pinimg.com/564x/fb/87/7d/fb877d69d26ca8a3979c3d8eb09d67d3.jpg" class="img-responsive" style="width: 100%;">
        <div> <h2>Caneta Gatinho</h2> </div>
        <div> 
          <h4>R$:8,00</h4>
          <h5>Delicada, confortável e fofa.
              Possui cores pasteis, orelhinhas e gatinhos com diferentes expressões. </h5> 
        </div>
      </div>
    

      <div class="col-sm-3"> 
        <img src="https://i.pinimg.com/564x/42/dc/c6/42dcc6b349e80bd42ce886f3d2bd2887.jpg" class="img-responsive" style="width: 100%;">
        <div> <h2>Marca-texto Emoji</h2> </div>
        <div> 
          <h4>R$: 6,00</h4> 
          <h5>Coloridos, bonitinhos e pequenos.
              Pequenos, faceis de levar, divertidos e também colecionáveis.</h5> 
        </div>
      </div>
    

      <div class="col-sm-3"> 
        <img src="https://i.pinimg.com/564x/91/6e/29/916e29102f867b80446de90b324314a0.jpg" class="img-responsive" style="width: 100%;">
        <div> <h2>Marca Página Bichinho</h2> </div>
        <div> 
          <h4>R$:10,00</h4> 
          <h5>Artesanal, divertido e personalizado.
              Fofinhos e detalhados, são feitos de biscut com muito carinho e capricho.
          </h5>
        </div>
      </div>
    
    </div>

  </div>
<?php include 'rodape.html'; ?>

</body>

</html>

<!-- cabo valeu! penguin papelaria 🎀🐧💜
Agradecimentos: Lu e May
sala dos white people problems 🤗🤗🤗🥱😴😪😑😚😂🤣-->