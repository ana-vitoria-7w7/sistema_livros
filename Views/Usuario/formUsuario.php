<link rel="stylesheet" type="text/css" href="../Views/css/UsuarioStyle.css">

<div>
    <form action="index.php?page=cadastrarUsuario" method="POST">
        <p> Cadastre seu usuário!</p><br><br>
        <label for="nome">Nome:</label>
        <input class="tamanhoCampo" type="text" placeholder="Digite o seu nome" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input class="tamanhoCampo" type="email" placeholder="Digite o seu email" id="email" name="email" required><br><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</div>
<a href="index.php" class="btnback">Voltar</a>
