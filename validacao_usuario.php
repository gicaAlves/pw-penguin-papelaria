<?php
include 'conexao.php';

$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];

//teste para ver se está funcionando: (e está 🥞:)//
//echo $email . '<br/>';//
//echo $senha . '<br/>';//

//nessa query usei o operador "and" ou seja o resultado só será verdadeiro caso as duas informações estiverem certas: "email" e "senha"//
$consulta = $con->query("select cod_usu, nome_usu, email_usu, senha_usu, zap_usu from usuario where email_usu ='$email' and senha_usu = '$senha'");

//se a minha variável consulta, tiver um número de linhas = 1, deu tudo certo já que o usuário vai ter apenas um email (1 linha no banco)
if ($consulta-> rowCount() == 1){

    echo 'O usuário possui cadastro! 🥳🐧';
}
else {
    echo 'O usuário não possui cadastro! 🥺🐧';
}


?>