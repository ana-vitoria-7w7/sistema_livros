
<link rel="stylesheet" type="text/css" href="../Views/css/GerenciarUsuario.css">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td>
                    <a href="index.php?page=editarUsuario&id=<?= $usuario['id'] ?>">Editar</a>
                    <a href="index.php?page=excluirUsuario&id=<?= $usuario['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php" class="btnback">Voltar</a>
