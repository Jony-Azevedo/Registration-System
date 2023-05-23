<?php
include 'conect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o ID do registro foi fornecido
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Deleta o registro do cliente com base no ID
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            // Exclusão bem-sucedida
            echo "Registro deletado com sucesso!";
        } else {
            // Erro ao deletar
            echo "Erro ao deletar o registro.";
        }
    } else {
        // ID do registro não fornecido
        echo "ID do registro não fornecido.";
    }
} else {
    // Requisição inválida
    echo "Requisição inválida.";
}
?>
