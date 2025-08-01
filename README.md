Sistema de Comentários com CRUD em PHP
Este projeto implementa um sistema de comentários completo utilizando PHP e MySQL. A aplicação permite que usuários submetam comentários a um banco de dados e que um administrador gerencie esses comentários através de uma interface simples, com funcionalidades de Criar, Ler, Atualizar e Excluir (CRUD).

🚀 Funcionalidades
Sistema de Comentários Completo:

Adicionar: Formulário para que novos usuários possam enviar seus comentários.

Listar: Página que exibe todos os comentários em ordem cronológica, do mais recente para o mais antigo.

Editar: Funcionalidade que permite a edição de comentários já existentes.

Excluir: Opção para remover permanentemente um comentário do banco de dados.

Interface Limpa: Um design funcional que separa claramente o formulário de envio da lista de comentários.

Segurança:

Uso de prepared statements nas operações de UPDATE e DELETE para prevenir injeções de SQL.

Utilização de mysqli_real_escape_string para tratar os dados de entrada no formulário de criação.

Função htmlspecialchars aplicada na exibição dos dados para prevenir ataques de Cross-Site Scripting (XSS).

🛠️ Tecnologias Utilizadas
Backend: PHP

Banco de Dados: MySQL / MariaDB

Frontend: HTML5, CSS3, JavaScript

⚙️ Estrutura do Projeto
O código-fonte está organizado da seguinte forma:

index.php: Página inicial com o formulário para submissão de novos comentários.

comentarios.php: Página que exibe a lista de todos os comentários e os botões de ação (Editar/Excluir).

editar_comentario.php: Página com o formulário para editar um comentário selecionado.

excluir_comentario.php: Script responsável por processar a exclusão de um comentário.

conexao.php: Script de conexão com o banco de dados MySQL.

banco.sql: Script para a criação da base de dados e da tabela comentarios.

estilo.css: Folha de estilos CSS para o design da aplicação.

script.js: Script JavaScript para efeitos de interface, como o desaparecimento suave das mensagens de status.

🚀 Como Executar
Banco de Dados:

Crie um banco de dados chamado comentarios em seu servidor MySQL.

Execute o script do arquivo banco.sql para criar a tabela comentarios com os campos necessários.

Configuração:

Verifique se as credenciais no arquivo conexao.php (servidor, usuario, senha) correspondem às do seu ambiente.

Execução:

Coloque a pasta do projeto no diretório raiz do seu servidor web (ex: htdocs para XAMPP).

Acesse http://localhost/nome-da-pasta-do-projeto/Form/ no seu navegador.
