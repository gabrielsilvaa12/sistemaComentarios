<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Deixe um comentário</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js" defer></script>
    <link rel="icon"  href="document.png">
</head>
<body>
    <div class="tudo">
        <h1>Enviar comentário</h1>
        <form action="index.php" method="POST">
            <input type="text" name="nome" placeholder="Seu nome" required><br>
            <textarea name="comentario" placeholder="Seu comentário" required></textarea><br>
            <button type="submit">Enviar</button>
        </form>
        <a href="comentarios.php" class="btn_comentario">Ver comentários</a>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'conexao.php'; 

        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $comentario = mysqli_real_escape_string($con, $_POST['comentario']);

        $sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$nome', '$comentario')";

        if (mysqli_query($con, $sql)) {
            echo "<p id='mensagem' class='sucesso'>Comentário enviado com sucesso!</p>";
        } else {
            echo "<p id='mensagem' class='erro'>Erro: " . mysqli_error($con) . "</p>";
        }
        mysqli_close($con);
    }
    ?>
    </div>
</body>
</html>