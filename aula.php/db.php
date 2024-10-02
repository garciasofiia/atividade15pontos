<?php
class Database {
    private $host = 'localhost';
    private $db = 'school';
    private $user = 'root';
    private $pass = '';
    private $port = 3307;
    private $pdo;

    public function connect() {
        try {
            $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->db";
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>
<!--terminei a etapa 1 às 9:00 do dia 30/09-->