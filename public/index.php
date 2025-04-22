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
        $usuarioController->cadastrarUsuario($_POST['nome'], $_POST['email']);
        break;
    case 'editarUsuario':
        $usuarioController->editarUsuario($_POST['id'], $_POST['nome'], $_POST['email']);
        break;
    case 'excluirUsuario':
        $usuarioController->excluirUsuario($_GET['id']);
        break;
    case 'listarGenero':
        $generoController->listarGeneros();
        break;
    case 'cadastrarGenero':
        $generoController->cadastrarGenero($_POST['nome']);
        break;
    case 'editarGenero':
        $generoController->editarGenero($_POST['id'], $_POST['nome']);
        break;
    case 'excluirGenero':
        $generoController->excluirGenero($_GET['id']);
        break;
    case 'listarRecomendacoes':
        $recomendacoesController->listarRecomendacoes();
        break;
    case 'formCadastrarRecomendacoes':
        $recomendacoesController->formCadastrarRecomendacoes();
        break;
    case 'cadastrarRecomendacoes':
        $recomendacoesController->cadastrarRecomendacoes($_POST['usuarioId'], $_POST['generoId'], $_POST['livroRecomendado']);
        break;
    case 'editarRecomendacoes':
        $recomendacoesController->editarRecomendacoes($_POST['id'], $_POST['usuarioId'], $_POST['generoId'], $_POST['livroRecomendado']);
        break;
    case 'excluirRecomendacoes':
        $recomendacoesController->excluirRecomendacoes($_GET['id']);
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
        $recomendacoesController->formEditarRecomendacoes($_GET['id']);
        break;
        
    default:
        echo "Página não encontrada!";
        break;
}
?>
