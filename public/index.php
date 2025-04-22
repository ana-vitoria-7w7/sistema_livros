<?php
require_once '../Generic/autoload.php';
require_once '../Controller/UsuarioController.php';
require_once '../Controller/GeneroController.php';
require_once '../Controller/RecomendacoesController.php';

$usuarioController = new UsuarioController();
$generoController = new GeneroController();
$recomendacoesController = new RecomendacoesController();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include_once '../Views/home.php';
        break;
        
    case 'listarUsuario':
        $usuarioController->listarUsuarios();
        break;
        
    case 'cadastrarUsuario':
        if (isset($_POST['nome']) && isset($_POST['email'])) {
            $usuarioController->cadastrarUsuario($_POST['nome'], $_POST['email']);
        } else {
            echo "<p style='color:red;'>Erro: Dados insuficientes para cadastro de usuário.</p>";
        }
        break;
        
    case 'editarUsuario':
        if (isset($_POST['id'], $_POST['nome'], $_POST['email'])) {
            $usuarioController->editarUsuario($_POST['id'], $_POST['nome'], $_POST['email']);
        } else {
            echo "<p style='color:red;'>Erro: Dados insuficientes para edição de usuário.</p>";
        }
        break;
        
    case 'excluirUsuario':
        if (isset($_GET['id'])) {
            $usuarioController->excluirUsuario($_GET['id']);
        } else {
            echo "<p style='color:red;'>Erro: ID do usuário não informado.</p>";
        }
        break;
        
    case 'listarGenero':
        $generoController->listarGeneros();
        break;
        
    case 'cadastrarGenero':
        if (isset($_POST['nome'])) {
            $generoController->cadastrarGenero($_POST['nome']);
        } else {
            echo "<p style='color:red;'>Erro: Nome do gênero não informado.</p>";
        }
        break;
        
    case 'editarGenero':
        if (isset($_POST['id'], $_POST['nome'])) {
            $generoController->editarGenero($_POST['id'], $_POST['nome']);
        } else {
            echo "<p style='color:red;'>Erro: Dados insuficientes para edição do gênero.</p>";
        }
        break;
        
    case 'excluirGenero':
        if (isset($_GET['id'])) {
            $generoController->excluirGenero($_GET['id']);
        } else {
            echo "<p style='color:red;'>Erro: ID do gênero não informado.</p>";
        }
        break;
        
    case 'listarRecomendacoes':
        $recomendacoesController->listarRecomendacoes();
        break;
        
    case 'formCadastrarRecomendacoes':
        $recomendacoesController->formCadastrarRecomendacoes();
        break;
        
    case 'cadastrarRecomendacoes':
        if (isset($_POST['usuario_id'], $_POST['genero_id'], $_POST['livroRecomendado'])) {
            $recomendacoesController->cadastrarRecomendacoes($_POST['usuario_id'], $_POST['genero_id'], $_POST['livroRecomendado']);
        } else {
            echo "<p style='color:red;'>Erro: Dados insuficientes para cadastrar recomendação.</p>";
        }
        break;
        
    case 'editarRecomendacoes':
        if (isset($_POST['id'], $_POST['usuario_id'], $_POST['genero_id'], $_POST['livroRecomendado'])) {
            $recomendacoesController->editarRecomendacoes($_POST['id'], $_POST['usuario_id'], $_POST['genero_id'], $_POST['livroRecomendado']);
        } else {
            echo "<p style='color:red;'>Erro: Dados insuficientes para edição da recomendação.</p>";
        }
        break;
        
    case 'excluirRecomendacoes':
        if (isset($_GET['id'])) {
            $recomendacoesController->excluirRecomendacoes($_GET['id']);
        } else {
            echo "<p style='color:red;'>Erro: ID da recomendação não informado.</p>";
        }
        break;
        
    case 'formUsuario':
        include_once '../views/Usuario/formUsuario.php';
        break;
        
    case 'formGenero':
        include_once '../views/Genero/formGenero.php';
        break;
        
    case 'formRecomendacoes':
        include_once '../views/Recomendacoes/formRecomendacoes.php';
        break;

    case 'formEditarRecomendacoes':
        if (isset($_GET['id'])) {
            $recomendacoesController->formEditarRecomendacoes($_GET['id']);
        } else {
            echo "<p style='color:red;'>Erro: ID da recomendação não informado.</p>";
        }
        break;
        
    default:
        echo "<p style='color:red;'>Página não encontrada!</p>";
        break;
}
?>
