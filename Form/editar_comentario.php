<?php
include 'conexao.php';
$mensagem = '';

if (!isset($_GET['id'])) {
    header("Location: comentarios.php");
    exit();
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $comentario_texto = $_POST['comentario'];

    $stmt = $con->prepare("UPDATE comentarios SET nome = ?, comentario = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nome, $comentario_texto, $id);

    if ($stmt->execute()) {
        header("Location: comentarios.php");
        exit();
    } else {
        $mensagem = "<p class='erro'>Erro ao atualizar o comentário.</p>";
    }
    $stmt->close();
}

$stmt = $con->prepare("SELECT nome, comentario FROM comentarios WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$comentario = $result->fetch_assoc();

if (!$comentario) {
    echo "Comentário não encontrado!";
    exit();
}
$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Comentário</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" href="document.png">
</head>
<body>
    <div class="tudo">
        <h1>Editar Comentário</h1>
        <form action="editar_comentario.php?id=<?php echo $id; ?>" method="POST">
            <input type="text" name="nome" value="<?php echo htmlspecialchars($comentario['nome']); ?>" required><br>
            <textarea name="comentario" required><?php echo htmlspecialchars($comentario['comentario']); ?></textarea><br>
            <button type="submit">Salvar Alterações</button>
        </form>
        <?php echo $mensagem; ?>
        <a href="comentarios.php" class="voltar">Cancelar</a>
    </div>
</body>
</html>