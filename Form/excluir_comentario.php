<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $con->prepare("DELETE FROM comentarios WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: comentarios.php");
        exit();
    } else {
        echo "Erro ao excluir o comentário.";
    }

    $stmt->close();
}

mysqli_close($con);
?>