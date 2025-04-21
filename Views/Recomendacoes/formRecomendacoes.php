<link rel="stylesheet" type="text/css" href="../Views/css/RecomendacoesStyle.css">

<div>
    <form action="index.php?page=cadastrarRecomendacoes" method="POST">
        <p>Fazer uma nova recomendação!</p><br><br>
        <label for="usuario">Usuário:</label>
        <select id="usuario" name="usuarioId" required>
            <?php foreach ($usuarios as $usuario): ?>
                <option value="<?= $usuario['id'] ?>"><?= $usuario['nome'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="generoId" required>
            <?php foreach ($generos as $genero): ?>
                <option value="<?= $genero['id'] ?>"><?= $genero['nome'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="livro">Livro Recomendado:</label>
        <input type="text" id="livro" name="livroRecomendado" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</div>
<a href="index.php" class="btnback">Voltar</a>