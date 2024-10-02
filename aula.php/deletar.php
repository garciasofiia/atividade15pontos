<?php
require_once 'db.php';
$database = new Database();
$database->connect();
$pdo = $database->getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM alunos WHERE id = ?");
    $stmt->execute([$id]);

    // Redireciona para a página principal; conclusão da etapa 6 às 11:40 do dia 30/09
    header("Location: index.php");
    exit();
}
?>
    
