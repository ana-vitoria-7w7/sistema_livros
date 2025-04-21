<?php
class Recomendacoes {
    private $id;
    private $usuarioId;
    private $generoId;
    private $livroRecomendado;

    public function __construct($id = null, $usuarioId = null, $generoId = null, $livroRecomendado = null) {
        $this->id = $id;
        $this->usuarioId = $usuarioId;
        $this->generoId = $generoId;
        $this->livroRecomendado = $livroRecomendado;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsuarioId() {
        return $this->usuarioId;
    }

    public function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    public function getGeneroId() {
        return $this->generoId;
    }

    public function setGeneroId($generoId) {
        $this->generoId = $generoId;
    }

    public function getLivroRecomendado() {
        return $this->livroRecomendado;
    }

    public function setLivroRecomendado($livroRecomendado) {
        $this->livroRecomendado = $livroRecomendado;
    }
}
?>
