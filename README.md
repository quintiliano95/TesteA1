# Teste A1 Engenharia 
 
 Neste projeto foi criado um banco de dados em um servidor MariaDB e feitas as devidas conexões utilizando PHP e MySQL para acessá-lo.

 Para executar o projeto, será necessário usar as seguintes ferramentas:

- Servidor local [(recomendado o XAMPP)](https://www.apachefriends.org/pt_br/index.html)

- Editor de código [(recomendado VS Code)](https://code.visualstudio.com/)

- Gerenciador de Banco de Dados [(recomendado MySQL Workbench)](https://dev.mysql.com/downloads/workbench/)

## Desenvolvimento 

- Para iniciar, é necessário clonar o projeto do GitHub em um diretório de sua preferência. 
- Inicie o servidor local.
- Abra a pasta com respositório clonado no VS Code. 
- No arquivo "conexao.php", verificar as variáveis "$localhost", "$user" e "$senha". Caso esteja igual, vá para o próximo passo. 
- No arquivo "testeA1.php", na variável "$bancoA1", colocar o diretório de onde está o arquivo .csv que foi clonado.
- Abra o Gerenciador de Banco de Dados.
- Entre no ambiente que foi indicado no arquivo "conexao.php".
- No canto superior esquerdo, clique em "File" > "Open SQL Script" > Selecione o arquivo "a1.sql".
- Execute o comando "create database". Em seguida, execute o comando "create table". 
- Volte para o arquivo "testeA1.php" e execute-o. 
- Volte para o gerenciador de banco de dados e execute o comanda "select * from".


## Dúvidas

Em caso de dúvidas, bugs, problemas em geral, enviar um e-mail para: alexandretrabalhobg@gmail.com