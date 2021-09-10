<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Mostrar Produtos</title>
</head>

<body>
    <?php
    include 'conexao.php';

    //-> indica método
    $consulta = $con ->query("select * from vw_cat_prod");

    //método FETCH define como você quer extrair os dados da consulta
    //no caso do PDO: :FETCH_ASSOC retorna uma linha de cada vez da view    
    // $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    while($exibe = $consulta->fetch(PDO::FETCH_ASSOC))
    {
        echo $exibe['nome_prod'] . '<br/>';
        echo $exibe['preco_prod'] . '<br/>';
        echo $exibe['desc_prod'] . '<br/>';
        echo $exibe['quant_prod'] . '<br/>';
        echo $exibe['img_prod'] . '<br/>';

        //pra separar vamos colocar um <hr/>
        echo '<hr>';
        
    }
    

    ?>
</body>

</html>