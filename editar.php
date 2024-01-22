<?php 

require 'configbd.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id'); //recebendo o valor do ID da URL

if($id){
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE id_user = :id');
    $sql->bindValue(':id', $id); //CARREGANDO O ID
    $sql->execute(); //nunca esquecer do EXECUTE

    if($sql->rowCount()>0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
}

?>

<h1>EDITAR USUÁRIO</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario['id_user'];?>"/>

    <label for="nome">
        Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"/> <br>
    </label>
    <label for="email">
        Email: <input type="text" name="email" value="<?=$usuario['email'];?>"/> <br>
    </label>
    <label for="senha">
        Senha: <input type="text" name="senha" value="<?=$usuario['senha'];?>"/>
    </label>
    <input type="submit" value="Atualizar">
</form>
