<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Comentários</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" href="document.png">
    <style>
        body {
            background-color: #f7f9fb;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .comentarios {
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
            list-style-type: none;
        }

        .comentario {
            background-color: #ffffff;
            border-left: 5px solid rgb(74, 82, 87);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 15px 20px;
            border-radius: 5px;
        }

        .comentario h3 {
            margin: 0 0 10px;
            color: #2c3e50;
        }

        .comentario p {
            margin: 0 0 10px;
            line-height: 1.6;
        }

        .comentario small {
            color: #7f8c8d;
            font-size: 0.85em;
        }

        .acoes {
            margin-top: 10px;
        }

        .acoes a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            margin-right: 10px;
        }

        .btn-editar {
            background-color: #28a745;
        }

        .btn-excluir {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    

    <div class="comentarios">
        <h1>Comentários recebidos</h1>
        <a href="index.php" class="voltar">Voltar</a>
        <?php
        include 'conexao.php';

        $sql = "SELECT id, nome, comentario, data_envio FROM comentarios ORDER BY data_envio DESC";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='comentario'>";
                echo "<h3>" . htmlspecialchars($row['nome']) . "</h3>";
                echo "<p>" . nl2br(htmlspecialchars($row['comentario'])) . "</p>";
                echo "<small>Enviado em: " . $row['data_envio'] . "</small>";
                echo "<div class='acoes'>";
                echo "<a href='editar_comentario.php?id=" . $row['id'] . "' class='btn-editar'>Editar</a>";
                echo "<a href='excluir_comentario.php?id=" . $row['id'] . "' onclick='return confirm(\"Tem certeza que deseja excluir este comentário?\");' class='btn-excluir'>Excluir</a>";
                echo "</div>";

                echo "</div>";
            }
        } else {
            echo "<p>Nenhum comentário ainda.</p>";
        }

        mysqli_close($con);
        ?>
        <a href="index.php" class="voltar">Voltar</a>
    </div>
</body>

</html>