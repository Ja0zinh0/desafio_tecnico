# 📄 Documentação do Projeto App Help Desk

## 🛠️ Tecnologias escolhidas

- **Linguagem:** PHP  
  Escolhida pela simplicidade, por já possuir servidor embutido e por ser amplamente utilizada em aplicações web.  

- **Banco de Dados:** SQLite  
  Optamos pelo SQLite por ser leve, simples de configurar e não exigir servidor dedicado de banco de dados. Isso facilita a execução em qualquer ambiente local.  

- **Framework/CSS:** Bootstrap 4  
  Utilizado para agilizar a construção da interface, garantindo responsividade e um layout limpo.  

---

## 🏗️ Decisões de Design e Arquitetura

- O sistema foi estruturado em páginas PHP separadas para cada funcionalidade (`login`, `home`, `abrir_chamado`, `consultar_chamado`, etc.), de forma simples e modular.  
- Foi criada uma tabela única de **chamados**, contendo todos os campos necessários (id, título, descrição, status, data de criação e atualização).  
- O CRUD foi implementado em páginas específicas, permitindo **criação, leitura, edição e exclusão** de chamados.  
- O acesso é controlado por um login básico, validado no servidor.  

---

## 🚧 Dificuldades encontradas e soluções

1. **Registrar corretamente a data de criação dos chamados**  
   - Desafio: incluir a data/hora automaticamente no momento do cadastro.  
   - Solução: pesquisei na documentação do PHP e SQLite para usar funções de data (`datetime('now')` no SQL) e campos `DATETIME` na tabela.  

2. **Primeiro contato com o SQLite**  
   - Desafio: nunca tinha utilizado SQLite antes.  
   - Solução: consultei a documentação oficial do SQLite e exemplos em PHP para entender como conectar (`PDO`) e executar comandos.  

---

## ✅ Conclusão

O projeto cumpriu os requisitos, oferecendo um sistema simples e funcional de Help Desk, com autenticação, dashboard e CRUD completo de chamados.  
As dificuldades iniciais foram resolvidas com estudo da documentação oficial, permitindo entregar uma aplicação web funcional e de fácil execução.  
