<?php
// conexao.php
try {
    $db = new PDO("sqlite:app_help_desk.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // cria a tabela se não existir
    $db->exec("CREATE TABLE IF NOT EXISTS chamados (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo TEXT NOT NULL,
        descricao TEXT NOT NULL,
        status TEXT NOT NULL,
        data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
        data_atualizacao DATETIME
    )");
} catch (Exception $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}
?>

