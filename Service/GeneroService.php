<?php
require_once '../dao/GeneroDAO.php';

class GeneroService {
    private $generoDAO;

    public function __construct() {
        $this->generoDAO = new GeneroDAO();
    }

    public function cadastrarGenero($nome) {
        if (empty($nome)) {
            throw new Exception("O nome do gênero é obrigatório!");
        }

        $this->generoDAO->insert($nome);
    }

    public function listarGeneros() {
        return $this->generoDAO->getAll();
    }

    public function editarGenero($id, $nome) {
        if (empty($nome)) {
            throw new Exception("O nome do gênero é obrigatório!");
        }

        $this->generoDAO->update($id, $nome);
    }

    public function excluirGenero($id) {
        $this->generoDAO->delete($id);
    }
}
?>
