<?php
require_once 'db.php';
$database = new Database();
$database->connect();
$pdo = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    //criação da tabela no banco de dados; etapa 2: terminei às 9:40 do dia 30/09
    
    $stmt = $pdo->prepare("INSERT INTO alunos (nome, idade, email, curso) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nome, $idade, $email, $curso]);
    
    //etapa 4-inserção dos dados teste: terminei às 10:50 do dia 30/09

    // Redireciona para a página principal
    header("Location: index.php");
    exit();
}
?>
<!-- etapa 8: fui fazendo ao longo da programação do código-->