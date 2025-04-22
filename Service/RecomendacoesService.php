<?php
require_once '../dao/RecomendacoesDAO.php';

class RecomendacoesService {
    private $recomendacoesDAO;

    public function __construct() {
        $this->recomendacoesDAO = new RecomendacoesDAO();
    }

    public function cadastrarRecomendacoes($usuarioId, $generoId, $livroRecomendado) {
        if (empty($usuarioId) || empty($generoId) || empty($livroRecomendado)) {
            throw new Exception("Todos os campos são obrigatórios!");
        }

        $this->recomendacoesDAO->insert($usuarioId, $generoId, $livroRecomendado);
    }

    public function listarRecomendacoes() {
        return $this->recomendacoesDAO->getAll();
    }

    public function editarRecomendacoes($id, $usuarioId, $generoId, $livroRecomendado) {
        if (empty($usuarioId) || empty($generoId) || empty($livroRecomendado)) {
            throw new Exception("Todos os campos são obrigatórios!");
        }

        $this->recomendacoesDAO->update($id, $usuarioId, $generoId, $livroRecomendado);
    }

    public function excluirRecomendacoes($id) {
        $this->recomendacoesDAO->delete($id);
    }
}
?>
