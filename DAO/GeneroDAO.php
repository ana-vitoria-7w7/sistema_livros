<?php
class GeneroDAO {
    private $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=localhost;dbname=sistema_livros", "root", "");
    }

    public function insert($nome) {
        $sql = "INSERT INTO generos (nome) VALUES (:nome)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }

    public function getAll() {
        $sql = "SELECT id, nome FROM generos";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
    

    public function update($id, $nome) {
        $sql = "UPDATE generos SET nome = :nome WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM generos WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
