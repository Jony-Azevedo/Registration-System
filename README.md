Sistema de cadastro e atualização de clientes

1 - Descrição do Projeto:

Um sistema de cadastro que possui um visual agradável e intuitivo, facilitando o cadastro de clientes. Pode ser usado para cadastro de clientes de qualquer nicho.

2 - Funcionalidades do Projeto:

TELA INICIAL:

Na tela inicial é apresentado um formulário para realizar o cadastro de clientes. Quando os campos do formulário não atendem a certas validações, o usuário é alertado para corrigi-los. Ao cadastrar os clientes, é possível visualizá-los clicando no botão 'Listagem de Clientes'.

TELA CLIENTES REGISTRADOS:

Nesta tela é possível visualizar os clientes já cadastrados no sistema. É possível atualizar os dados dos clientes clicando no botão 'Atualizar'. Também é possível excluir clientes já cadastrados clicando no botão 'Deletar'. A tela também possui um campo que filtra os clientes por 'nome' ou 'e-mail'. Ao clicar na logo ou no botão 'Cadastrar Cliente', o usuário volta para a primeira tela do sistema, a tela de Cadastro.

TELA ATUALIZAR:

É apresentado um formulário com os dados do cliente que deseja alterar. Após realizar as alterações do cliente e o sistema efetuar com sucesso, os dados são enviados para o banco. Ao enviar, é apresentada na tela a mensagem 'Dados atualizados com sucesso' juntamente com o botão 'Listagem de Clientes', onde ao clicar, o usuário é redirecionado para a tela de Clientes Registrados.

3 - Tecnologias usadas:

HTML, CSS, JavaScript, jQuery, Ajax, Bootstrap, PHP, SQL,
IDE: Visual Studio Code
Servidor: XAMPP

4 - Como iniciar o projeto:

Antes de tudo, é necessário ter o XAMPP instalado. Você pode baixá-lo neste site: https://www.apachefriends.org/pt_br/download.html. Após a instalação, acesse a pasta PHP e procure pelo arquivo 'php.ini'. Abra esse arquivo em um editor de texto e descomente a linha que contenha 'extension=pdo_mysql', removendo o ';' da linha. Isso é necessário para habilitar a extensão PDO, que dá acesso ao banco de dados.

Em seguida, coloque a pasta do projeto dentro da pasta 'htdocs' do XAMPP. Após isso, inicie o XAMPP e ligue o MySQL.

No navegador, digite localhost/prova_NewM para abrir a tela inicial do projeto.
	