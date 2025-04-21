<link rel="stylesheet" type="text/css" href="../Views/css/GerenciarUsuario.css">

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($generos as $genero): ?>
            <tr>
                <td><?= $genero['id'] ?></td>
                <td><?= $genero['nome'] ?></td>
                <td>
                    <a href="index.php?page=editarGenero&id=<?= $genero['id'] ?>">Editar</a>
                    <a href="index.php?page=excluirGenero&id=<?= $genero['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="index.php" class="btnback">Voltar</a>
