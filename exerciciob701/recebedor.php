<?php 
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha =  filter_input(INPUT_POST, 'senha');

if($nome && $email && $senha){

    $expiracao =  time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);
    
    echo 'NOME: '.$nome."<br/>";
    echo 'EMAIL: '.$email."<br/>";
    echo 'IDADE: '.$senha;
} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';

    header("Location: index.php");
    exit;
}

?>