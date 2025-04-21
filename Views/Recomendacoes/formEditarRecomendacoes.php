<link rel="stylesheet" type="text/css" href="../Views/css/RecomendacoesStyle.css">

<div>
    <form action="index.php?page=editarRecomendacoes" method="POST">
        <input type="hidden" name="id" value="<?= $recomendacao['id'] ?>">

        <p>Editar Recomendação</p><br><br>

        <label for="usuario">Usuário:</label>
        <select id="usuario" name="usuarioId" required>
            <?php foreach ($usuarios as $usuario): ?>
                <option value="<?= $usuario['id'] ?>" <?= ($usuario['id'] == $recomendacao['usuario_id']) ? 'selected' : '' ?>>
                    <?= $usuario['nome'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="generoId" required>
            <?php foreach ($generos as $genero): ?>
                <option value="<?= $genero['id'] ?>" <?= ($genero['id'] == $recomendacao['genero_id']) ? 'selected' : '' ?>>
                    <?= $genero['nome'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label for="livro">Livro Recomendado:</label>
        <input type="text" id="livro" name="livroRecomendado" value="<?= $recomendacao['livro_recomendado'] ?>" required><br><br>

        <button type="submit">Atualizar</button>
    </form>
</div>

<a href="index.php?page=listarRecomendacoes" class="btnback">Voltar</a>
