<?php
require 'conexao.php';

$id = $_GET['id'] ?? null;
if (!$id) { die("Chamado não encontrado."); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $stmt = $db->prepare("UPDATE chamados SET titulo=?, descricao=?, status=?, data_atualizacao=CURRENT_TIMESTAMP WHERE id=?");
    $stmt->execute([$titulo, $descricao, $status, $id]);

    header("Location: home.php");
    exit;
}

$stmt = $db->prepare("SELECT * FROM chamados WHERE id=?");
$stmt->execute([$id]);
$chamado = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Editar Chamado</h2>
<form method="post">
    <input type="text" name="titulo" value="<?= htmlspecialchars($chamado['titulo']) ?>" required><br>
    <textarea name="descricao" required><?= htmlspecialchars($chamado['descricao']) ?></textarea><br>
    <select name="status">
        <option <?= $chamado['status']=="Aberto"?"selected":"" ?>>Aberto</option>
        <option <?= $chamado['status']=="Em Andamento"?"selected":"" ?>>Em Andamento</option>
        <option <?= $chamado['status']=="Fechado"?"selected":"" ?>>Fechado</option>
    </select><br>
    <button type="submit">Salvar</button>
</form>
