<?php
require_once '../dao/UsuarioDAO.php';

class UsuarioController {
    public function cadastrarUsuario($nome, $email) {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->insert($nome, $email);
        header("Location: index.php?page=listarUsuario");
    }

    public function listarUsuarios() {
        $usuarioDAO = new UsuarioDAO();
        $usuarios = $usuarioDAO->getAll();
        include_once '../views/Usuario/listarUsuario.php';
    }

    public function editarUsuario($id, $nome, $email) {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->update($id, $nome, $email);
        header("Location: index.php?page=listarUsuario");
    }

    public function excluirUsuario($id) {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->delete($id);
        header("Location: index.php?page=listarUsuario");
    }
}
?>
