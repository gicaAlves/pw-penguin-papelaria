<!--navbar da página -->
<style type="text/css">
    body
      {
        font-family: "Bellota Text-Regular";
        color: #171614;
      }

</style>

<nav class="navbar navbar-default" style="background-color:#8EC3DB; border-color:#171614">
<!--cria uma margem-->  
<div class="container-fluid">
<!--Menu hambúrguer -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="border-color:#171614;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand pull-left"><img src="imagens/pingoooo.png" style="width: 30px;" /></a>
    </div>

<!--Conteúdos do navbar -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="color:#171614;"> Home🏡 <span class="sr-only">(current)</span></a></li>
        <li><a href="lancamentos.php" style="color:#171614;"> Lançamentos✨</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#171614;">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#CA80B2";>
            <li><a href="#" style="color:#171614;">Escolar📘</a></li>
            <li><a href="#" style="color:#171614;">Escritório📁</a></li>
            <li><a href="#" style="color:#171614;">Universitário📓</a></li>
            <li role="separator" class="divider"> </li>
            <li><a href="#" style="color:#171614;">Presentes🎁</a></li>
            <li><a href="#" style="color:#171614;">Mochilas e Bolsas🎒</a></li>          
          </ul>
        </li>
      </ul>
<!--Form no navbar-->
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Procure aqui 🖌🐧">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>

<!--Glyphicon do contato-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color:#171614;">Contato💌 </a></li>
        <li><a href="#" style="color:#171614; font-family: Bellota Text;"><span class="glyphicon glyphicon-user"></span> Login </a></li>
      </ul>
    
    </div>
  
</div>

</nav>