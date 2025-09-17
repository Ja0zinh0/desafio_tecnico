<?php 
require_once "validador_acesso.php";
require 'conexao.php'; // conexão com SQLite
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamados
            </div>
            
            <div class="card-body">
              <?php
                // Busca todos os chamados do banco
                $stmt = $db->query("SELECT * FROM chamados ORDER BY data_criacao DESC");
                $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($chamados) === 0) {
                  echo "<p>Nenhum chamado encontrado.</p>";
                }

                foreach ($chamados as $c) {
              ?>
                  <div class="card mb-3 bg-light">
                    <div class="card-body">
                      <h5 class="card-title"><?= htmlspecialchars($c['titulo']) ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                        Criado em: <?= $c['data_criacao'] ?> 
                        <?= $c['data_atualizacao'] ? " (Atualizado: ".$c['data_atualizacao'].")" : "" ?>
                      </h6>
                      <p class="card-text"><?= htmlspecialchars($c['descricao']) ?></p>
                      <span class="badge badge-info"><?= $c['status'] ?></span>
                    </div>
                  </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
