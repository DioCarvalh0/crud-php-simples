<?php

require 'configbd.php';

$nome = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($nome && $email && $password){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) values (:nome, :email, :senha)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $password);
        $sql->execute();
    }else{
        header("Location: cadastrar.php");
        exit;
    }

    header("Location: index.php");
    exit;
} else {
    header("Location: cadastrar.php");
}



