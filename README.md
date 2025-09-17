# 📌 App Help Desk

Este é um sistema simples de Help Desk desenvolvido em **PHP** com **SQLite** como banco de dados relacional.  
O objetivo é permitir o cadastro, consulta, atualização e exclusão de chamados de suporte técnico.

---

## 🚀 Funcionalidades

- **Login simples** (usuário e senha pré-definidos).
- **Dashboard** com os últimos 10 chamados.
- **CRUD de Chamados**:
  - Criar novo chamado.
  - Listar chamados.
  - Atualizar informações.
  - Excluir chamados.
- **Impressão da lista** de chamados.

---

## 📂 Estrutura do Banco de Dados

O banco utilizado é o `app_help_desk.db` (SQLite).  
A tabela principal é `chamados` com os campos:

- `id` (INTEGER, PK, autoincremento)
- `titulo` (TEXT)
- `descricao` (TEXT)
- `data_criacao` (DATETIME)
- `status` (TEXT)
- `data_atualizacao` (DATETIME, opcional)

Script de criação está disponível em **bancodedados.sql**.

---

## ⚙️ Dependências

- **PHP 7.4+** (ou superior)
- **SQLite3** (já incluso na maioria das instalações do PHP)
- Servidor embutido do PHP ou **Apache/Nginx** com suporte a PHP.

---

## ▶️ Como rodar o projeto

1. Clone este repositório:
   ```bash
   git clone https://github.com/seuusuario/app_help_desk.git
   cd app_help_desk
   ```

2. Verifique se o banco já existe (`app_help_desk.db`).  
   Caso contrário, crie usando:
   ```bash
   sqlite3 app_help_desk.db < bancodedados.sql
   ```

3. Inicie o servidor PHP embutido:
   ```bash
   php -S localhost:8000
   ```

4. Acesse no navegador:
   ```
   http://localhost:8000/index.php
   ```

---

## 🔑 Credenciais de Acesso

- **Usuário:** admin  
- **Senha:** 1234  

*(pode ser alterado em `valida_login.php`)*

---

## 📝 Observações

- As imagens da interface (`logo.png`, `formulario_abrir_chamado.png`, etc.) devem estar na raiz do projeto.
- Caso use Apache/Nginx, configure o **DocumentRoot** para a pasta do projeto.

---

## 📄 Licença

Este projeto é apenas para fins de estudo e testes.  
