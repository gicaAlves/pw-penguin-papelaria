<?php
include 'conexao.php';

//adicionando session 
session_start(); 

$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];

//teste para ver se está funcionando: (e está 🥞:)//
//echo $email . '<br/>';//
//echo $senha . '<br/>';//

//nessa query usei o operador "and" ou seja o resultado só será verdadeiro caso as duas informações estiverem certas: "email" e "senha"//
$consulta = $con->query("select cod_usu, nome_usu, email_usu, senha_usu, zap_usu from usuario where email_usu ='$email' and senha_usu = '$senha'");

//se a minha variável consulta, tiver um número de linhas = 1, deu tudo certo já que o usuário vai ter apenas um email (1 linha no banco)//
if ($consulta-> rowCount() == 1){
    //criação da variavel de sessão//
    $exibeUsuario= $consulta->fetch(PDO::FETCH_ASSOC);

    if($exibeUsuario['zap_usu'] == 0){
        $_SESSION['ID'] =$exibeUsuario['cod_usu'];
        $_SESSION['Status']=0;
        //se sim, o usuário será redirecionado para o index de novo//
        header('location:index.php');
    }
    else{
        $_SESSION['ID'] =$exibeUsuario['cod_usu'];
        $_SESSION['Status']=1;
        header('location:index.php');
    }
    
   //echo 'O usuário possui cadastro! 🥳🐧';//
}
//e se o usuário não for válido, ou seja, não possuir cadastro..//
else {
    //echo 'O usuário não possui cadastro! 🥺🐧';//
    header('location:erro.php');
}


?>