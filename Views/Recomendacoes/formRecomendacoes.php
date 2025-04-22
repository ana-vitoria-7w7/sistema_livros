<link rel="stylesheet" type="text/css" href="../Views/css/RecomendacoesStyle.css">

<div>
    <form action="index.php?page=cadastrarRecomendacoes" method="POST">
        <p>Fazer uma nova recomendação!</p><br><br>
        <label for="usuario">Usuário:</label>
        <input type="text" placeholder="Digite seu ID de usuário" id="usuario" name="usuario_id" required><br><br>

        <label for="genero">Gênero:</label>
        <input type="text" placeholder="Digite o ID do gênero" id="genero" name="genero_id" required><br><br>

        <label for="livro">Livro Recomendado:</label>
        <input type="text" id="livro" name="livroRecomendado" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</div>
<a href="index.php" class="btnback">Voltar</a>
