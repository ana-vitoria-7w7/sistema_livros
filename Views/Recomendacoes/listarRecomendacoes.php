<link rel="stylesheet" type="text/css" href="../Views/css/GerenciarUsuario.css">

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Gênero</th>
            <th>Livro Recomendado</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($recomendacoes as $recomendacoes): ?>
            <tr>
                <td><?= $recomendacoes['id'] ?></td>
                <td><?= $recomendacoes['usuario'] ?></td>
                <td><?= $recomendacoes['genero'] ?></td>
                <td><?= $recomendacoes['livro_recomendado'] ?></td>
                <td>
                    <a href="index.php?page=editarRecomendacoes&id=<?= $recomendacoes['id'] ?>">Editar</a>
                    <a href="index.php?page=excluirRecomendacoes&id=<?= $recomendacoes['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="index.php" class="btnback">Voltar</a>
