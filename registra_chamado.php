<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $stmt = $db->prepare("INSERT INTO chamados (titulo, descricao, status) VALUES (?, ?, ?)");
    $stmt->execute([$titulo, $descricao, $status]);

    header("Location: home.php");
    exit;
}
?>
