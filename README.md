# 📝 Sistema de Comentários com CRUD em PHP

Este projeto implementa um sistema de comentários completo utilizando **PHP** e **MySQL**. A aplicação permite que usuários enviem comentários e que um administrador possa gerenciá-los por meio de uma interface simples com funcionalidades de **Criar, Ler, Atualizar e Excluir (CRUD)**.

---

## 🚀 Funcionalidades

- **Adicionar**: Formulário para envio de novos comentários.  
- **Listar**: Exibe todos os comentários em ordem cronológica (do mais recente para o mais antigo).  
- **Editar**: Permite editar comentários existentes.  
- **Excluir**: Remove permanentemente um comentário do banco de dados.  
- **Interface limpa**: Separação clara entre o formulário de envio e a listagem dos comentários.  

### 🔒 Segurança

- Uso de **prepared statements** nas operações de `UPDATE` e `DELETE` (prevenção de SQL Injection).  
- Utilização de `mysqli_real_escape_string` para tratar dados no formulário de criação.  
- Aplicação de `htmlspecialchars` na exibição dos dados para evitar **XSS (Cross-Site Scripting)**.

---

## 🛠️ Tecnologias Utilizadas

- **Backend**: PHP  
- **Banco de Dados**: MySQL / MariaDB  
- **Frontend**: HTML5, CSS3, JavaScript  

---

## ⚙️ Estrutura do Projeto

```
/comentarios-projeto/
├── index.php               # Formulário de envio de comentários
├── comentarios.php         # Listagem dos comentários com botões de ação
├── editar_comentario.php   # Edição de comentários
├── excluir_comentario.php  # Exclusão de comentários
├── conexao.php             # Conexão com o banco de dados
├── banco.sql               # Script SQL para criar banco e tabela
├── estilo.css              # Estilo da aplicação
└── script.js               # Interações simples com JS (ex: animações)
```

---

## 🧪 Como Executar

### 1. Banco de Dados

- Crie um banco chamado `comentarios` no seu MySQL.  
- Execute o script `banco.sql` para criar a tabela necessária.

### 2. Configuração

- Edite o arquivo `conexao.php` com suas credenciais de acesso ao MySQL:

```php
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "comentarios";
```

### 3. Execução

- Coloque a pasta do projeto no diretório raiz do seu servidor web local (ex: `htdocs` no XAMPP).
- Acesse via navegador:

```
http://localhost/nome-da-pasta-do-projeto/index.php
```

---

## 📌 Observações

- Este sistema foi feito com foco educativo e pode ser adaptado para projetos maiores.
- Não possui sistema de login/autenticação. Ideal adicionar para controle de acesso dos administradores.
