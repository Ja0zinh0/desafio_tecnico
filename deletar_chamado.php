<?php
require 'conexao.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $db->prepare("DELETE FROM chamados WHERE id=?");
    $stmt->execute([$id]);
}

header("Location: home.php");
exit;
?>
