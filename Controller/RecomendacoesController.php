<?php
require_once '../dao/RecomendacoesDAO.php';

class RecomendacoesController {
    public function formCadastrarRecomendacoes() {
        $usuarioDAO = new UsuarioDAO();
        $generoDAO = new GeneroDAO();
    
        $usuarios = $usuarioDAO->getAll();
        $generos = $generoDAO->getAll();

        echo "<pre>";
        var_dump($usuarios);
        var_dump($generos);
        echo "</pre>";

        include_once '../Views/Recomendacoes/formRecomendacoes.php';
    
    }
    
    
    public function cadastrarRecomendacoes($usuario, $genero, $livroRecomendado) {
        try {
            $recomendacoesDAO = new RecomendacoesDAO();
            $recomendacoesDAO->insert($usuario, $genero, $livroRecomendado);
            header("Location: index.php?page=listarRecomendacoes");
            exit();
        } catch (Exception $e) {
            echo "<p style='color:red;'>Erro ao cadastrar recomendação: " . $e->getMessage() . "</p>";
        }
    }

    public function listarRecomendacoes() {
        $recomendacoesDAO = new RecomendacoesDAO();
        $recomendacoes = $recomendacoesDAO->getAll();
        include_once '../views/Recomendacoes/listarRecomendacoes.php';
    }
    

    public function formEditarRecomendacoes($id) {
        $recomendacoesDAO = new RecomendacoesDAO();
        $recomendacao = $recomendacoesDAO->getById($id);
    
        $usuarioDAO = new UsuarioDAO();
        $usuarios = $usuarioDAO->getAll();
    
        $generoDAO = new GeneroDAO();
        $generos = $generoDAO->getAll();
    
        include_once '../views/Recomendacoes/formEditarRecomendacoes.php';
    }
    

    public function excluirRecomendacoes($id) {
        $recomendacoesDAO = new RecomendacoesDAO();
        $recomendacoesDAO->delete($id);
        header("Location: index.php?page=listarRecomendacoes");
    }
}
?>
