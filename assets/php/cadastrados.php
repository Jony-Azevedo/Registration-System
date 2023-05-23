<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/normalizeMy.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <title>Listagem de Clientes</title>
</head>
<body>
    <header class="cabecalho">
        <a href="../../index.html">
            <figure class="logo">
                <img src="../img/registro.jpg" alt="Newm" >
            </figure>
        </a>
    </header>
    <hr>
    <main>
        <h1>Listagem Clientes</h1>
        <input type="search" id="search" class="input-pesquisa" name="search" placeholder="Nome ou E-mail">
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Celular</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Observação</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'read.php';
                    foreach ($clientes as $cliente) { ?>
                        <tr>
                            <th scope="row"><?php echo $cliente['id']; ?></th>
                            <td><?php echo $cliente['nome']; ?></td>
                            <td><?php echo $cliente['nascimento']; ?></td>
                            <td><?php echo $cliente['cpf']; ?></td>
                            <td><?php echo $cliente['celular']; ?></td>
                            <td><?php echo $cliente['email']; ?></td>
                            <td><?php echo $cliente['endereco']; ?></td>
                            <td><?php echo $cliente['observacao']; ?></td>
                            <td>
                                <button id="atualiza" class="btn_tabela" onclick="atualizarRegistro(<?php echo $cliente['id'];?>)">Atualizar</button>
                                <button id="deleta" class="btn_tabela" onclick="deletarRegistro(<?php echo $cliente['id']; ?>)">Deletar</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <span class="modificado">
            <a href="../../index.html" title="Cadastrar Cliente">CADASTRAR CLIENTE</a>
        </span>
    </main>
    <footer class="container-rodape">
        <div class="rodape">
            &copy; Copyrigth 2000-2023 Jony Azevedo
        </div>
    </footer> 
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> 
    <script src="../js/registrados.js"></script>
    <script src="../js/search.js"></script>

</body>
</html>
