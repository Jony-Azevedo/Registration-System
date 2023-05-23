<?php
include 'conect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos necessários foram enviados
    if (isset($_POST['id'], $_POST['nome'], $_POST['nasc'], $_POST['cpf'], $_POST['phone'], $_POST['email'], $_POST['endereco'], $_POST['obs'])) {

        $id = $_POST['id'];
        $nome = $_POST["nome"];
        $nascimento = $_POST["nasc"];
        $cpf = $_POST["cpf"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $obs = $_POST["obs"];

        // Atualiza os dados no banco de dados
        $sql = "UPDATE clientes SET nome = :nome, nascimento = :nascimento, cpf = :cpf, celular = :celular, email = :email, endereco = :endereco, observacao = :obs WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':nascimento', $nascimento);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':celular', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':obs', $obs);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            // Atualização bem sucedida
            echo "Dados Atualizados com sucesso";
            echo "<br>";
            echo "<button><a href='cadastrados.php'>Listagem clientes</a></button>";
        } else {
            // Erro ao atualizar
            echo "Erro ao atualizar o registro.";
        }
    } else {
        // Campos não enviados
        echo "Todos os campos devem ser preenchidos";
    }
} else {
    // Verifica se o ID do registro foi passado na URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Consulta o registro do cliente com base no ID
        $sql = "SELECT * FROM clientes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $regAtualiza = $stmt->fetch();

        if ($regAtualiza) {
            // Formulário para atualização dos dados
            ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/normalizeMy.css">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <title>Atualizar Registro</title>
            </head>
            <body>
                <header class="cabecalho">
                    <figure class="logo">
                        <img src="../img/logo-new-m.svg" alt="Logo Newm">
                    </figure>
                </header>
                <hr>
                <main>
                    <div class="container-form">
                        <h1>Atualizar Registro</h1>
                        <form id="cadastro-form" method="post">
                            <div>
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="nome" value="<?php echo $regAtualiza['nome'] ?>" minlength="4">
                            </div>
                            <div>
                                <label for="nasc">Nascimento</label>
                                <input type="date" id="nasc" name="nasc" value="<?php echo $regAtualiza['nascimento'] ?>">
                            </div>
                            <div>
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" value="<?php echo $regAtualiza['cpf'] ?>" maxlength="14">
                            </div>
                            <div>
                                <label for="phone">Celular</label>
                                <input type="phone" id="phone" name="phone" value="<?php echo $regAtualiza['celular'] ?>">
                            </div>
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" value="<?php echo $regAtualiza['email'] ?>">
                            </div>
                            <div>
                                <label for="endereco">Endereço</label>
                                <input type="text" id="endereco" name="endereco" value="<?php echo $regAtualiza['endereco'] ?>" minlength="5">
                            </div>
                            <div id="area_obs">
                                <label for="obs">Observação</label>
                                <textarea id="obs" name="obs" maxlength="300" placeholder="Máximo 300 caracteres"><?php echo $regAtualiza['observacao'] ?></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="submit" id="btn_atualizar" value="Atualizar">
                        </form>
                    </div>
                    <div id="resposta"></div>
                    <span class="modificado">
                        <a href="cadastrados.php" title="Listagem Clientes">LISTAGEM DE CLIENTES</a>
                    </span>
                    <div class="links">
                        <ul class="lista_links">
                            <li><a href="https://github.com/Jony-Azevedo" target="_blank"><img src="../img/github.png" alt="GitHub" title="GitHub"></a></li>
                            <li><a href="https://www.linkedin.com/in/jony-azevedo-36b751190/" target="_blank"><img src="../img/linkedin.png" alt="LinkedIn" title="LinkedIn"></a></li>
                        </ul>
                    </div>
                </main>
                <footer class="container-rodape">
                    <div class="rodape">
                        &copy; Copyrigth 2000-2023 Jony Azevedo
                    </div>
                </footer>
                <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
                <script src="../js/registrados.js"></script>
            </body>
            </html>
            <?php
        } else {
            // Registro não encontrado
            echo "Registro não encontrado.";
        }
    } else {
        // ID do registro não fornecido
        echo "ID do registro não fornecido.";
    }
}
?>
