<?php 

require 'configbd.php';

$usuario = [];
$id = filter_input(INPUT_POST, 'id'); //recebendo o valor do ID por post pelo FORM
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

if($id && $nome &&$email &&$senha){
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id_user = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':id', $id);
    $sql->execute();
    header("Location: index.php");
    exit;
} else {
    header("Location: editar.php");
    exit;
}