<?php
require 'configbd.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount()>0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
    <h1>Listagem dos Usuários</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
        <?php foreach($lista as $usuarios): ?>
            <tr>
                <td><?=$usuarios['id_user'];?></td>
                <td><?=$usuarios['nome'];?></td>
                <td><?=$usuarios['email'];?></td>
                <td><?=$usuarios['senha'];?></td>
                <td>
                    <a href="editar.php?id=<?=$usuarios['id_user'];?>">[EDITAR]</a>
                    <a href="excluir.php?id=<?=$usuarios['id_user'];?>">[EXCLUIR]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="cadastrar.php">Cadastrar Usuários</a>
</body>
</html>