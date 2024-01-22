<?php 

require 'configbd.php';
$id = filter_input(INPUT_GET, 'id'); //recebendo o valor do ID da URL

if($id){
    $sql = $pdo->prepare('DELETE FROM usuarios WHERE id_user = :id');
    $sql->bindValue(':id', $id); //CARREGANDO O ID
    $sql->execute(); //nunca esquecer do EXECUTE
}

header("Location: index.php");
