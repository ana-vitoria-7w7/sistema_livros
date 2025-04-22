<?php
require_once '../dao/GeneroDAO.php';

class GeneroController {
    public function cadastrarGenero($nome) {
        $generoDAO = new GeneroDAO();
        $generoDAO->insert($nome);
        header("Location: index.php?page=listarGenero");
    }

    public function listarGeneros() {
        $generoDAO = new GeneroDAO();
        $generos = $generoDAO->getAll();
        include_once '../views/Genero/listarGenero.php';
    }

    public function editarGenero($id, $nome) {
        $generoDAO = new GeneroDAO();
        $generoDAO->update($id, $nome);
        header("Location: index.php?page=listarGenero");
    }

    public function excluirGenero($id) {
        $generoDAO = new GeneroDAO();
        $generoDAO->delete($id);
        header("Location: index.php?page=listarGenero");
    }
}
?>
