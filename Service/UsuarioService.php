<?php
require_once '../dao/UsuarioDAO.php';

class UsuarioService {
    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function cadastrarUsuario($nome, $email) {
        if (empty($nome) || empty($email)) {
            throw new Exception("Nome e e-mail são obrigatórios!");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Formato de e-mail inválido!");
        }

        $this->usuarioDAO->insert($nome, $email);
    }

    public function listarUsuarios() {
        return $this->usuarioDAO->getAll();
    }

    public function editarUsuario($id, $nome, $email) {
        if (empty($nome) || empty($email)) {
            throw new Exception("Nome e e-mail são obrigatórios!");
        }

        $this->usuarioDAO->update($id, $nome, $email);
    }

    public function excluirUsuario($id) {
        $this->usuarioDAO->delete($id);
    }
}
?>
