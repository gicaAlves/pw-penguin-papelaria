<?php
$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$cep = $_POST['txtcep'];
$num = $_POST['txtnum'];
//a variável global $_POST é usada pois o método do formulário é post.
/*
echo $nome .'<br>';
echo $email .'<br>';
echo $senha .'<br>';
echo $cep .'<br>';
echo $num . '<br>';
*/

$consulta = $con->query("select email_usu from usuario where email_usu ='$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount()==1){
    header('location:erro1.php');
} 
    
    else{
        $incluir = $con->query("
        insert into usuario(nome_usu,ds_email, senha_usu, zap_usu, cep_usu, num_end_usu)
        values('$nome','$email','$senha','0','$cep', '$num')");
        header('location:ok.php');

    //agora, a página inserir os dados no banco. Lá no MySQL, basta dar um select na tabela
    //e serão visíveis os novos dados.
    //as duas páginas serão criadas na próxima aula
}
    
?>