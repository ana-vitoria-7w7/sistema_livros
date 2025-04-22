<?php
class RecomendacoesDAO {
    private $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=localhost;dbname=sistema_livros", "root", "");
    }

    public function insert($usuarioId, $generoId, $livroRecomendado) {
        $sql = "INSERT INTO recomendacoes (usuario_id, genero_id, livro_recomendado) VALUES (:usuario_id, :genero_id, :livro_recomendado)";
        $stmt = $this->connection->prepare($sql);
        
        $stmt->bindParam(':usuario_id', $usuarioId);
        $stmt->bindParam(':genero_id', $generoId);
        $stmt->bindParam(':livro_recomendado', $livroRecomendado);
    
        $stmt->execute();
    }

    public function getAll() {
        $sql = "SELECT r.id, u.nome AS usuario, g.nome AS genero, r.livro_recomendado
                FROM recomendacao r
                JOIN usuarios u ON r.usuario_id = u.id
                JOIN generos g ON r.genero_id = g.id";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $usuarioId, $generoId, $livroRecomendado) {
        $sql = "UPDATE recomendacao SET usuario_id = :usuarioId, genero_id = :generoId, livro_recomendado = :livroRecomendado WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':usuarioId', $usuarioId);
        $stmt->bindParam(':generoId', $generoId);
        $stmt->bindParam(':livroRecomendado', $livroRecomendado);
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM recomendacao WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getById($id) {
        $sql = "SELECT * FROM recomendacao WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>
