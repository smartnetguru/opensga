Instalando e Configurando o OpenSGA
====================================

O OpenSGA é um software concebido para ser usado no ambiente cliente servidor, pelo que para que possa usa-lo, deverá fazer a instalação do software no servidor, e a partir dai acessar o sistema a partir de um navegador web moderno(Internet Explorer 8+,Firefox 4+ ou Google Chrome).

Requisitos
-----------
Antes de instalar o OpenSGA, verifique que o computador(servidor) que vai usar para o OpenSGA possui os seguintes softwares instalados:
* Servidor Web (Apache)
* PHP 5.x+
* MySQL 5.x+

Todos estes softwares podem ser instalados a partir de um único pacote que é o XAMPP. Instalando o XAMPP no Windows ou Linux, você terá o ambiente completo para instalar o OpenSGA mas, por questões de segurança, é recomendado que configure cada um dos softwares acima mencionados manualmente.
Se pretende apenas instalar o OpenSGA para questões de teste, Instale o XAMPP no seu PC e veja a seguir como configurar o OpenSGA na sua máquina. Caso pretenda usar em ambiente de produção, então terá de configurar o Apache, PHP e MySQL para que garantam o máximo de segurança ao OpenSGA.

Baixando  e instalando o OpenSGA
---------------------------------
A versão mais recente do OpenSGA estará sempre disponível no repositório do projecto no Github, onde deverá fazer o download do Sistema: https://github.com/backstageel/opensga

O link directo para o download da última actualização do OpenSGA é https://github.com/backstageel/opensga/zipball/master .

Baixe o sistema e use o Winzip ou outro programa para descomprimir o arquivo no seu servidor(directório C:\Xampp\htdocs se tiver instalado o XAMPP com as configurações padrão).

Criando a Base de dados para o OpenSGA
---------------------------------------
Até a versão actual, o OpenSGA ainda não possui nenhum instalador automático para auxiliar nas tarefas de instalação e configuração por isso é necessário que se prepare tudo manualmente até que versões futuras incluam um instalador personalizado. Sendo assim, o passo seguinte é criar uma base de dados(banco de dados) no MySQL, onde serão armazenadas todos os dados do sistema. 

Para criar a base de dados, é mais prático usar o PHPMyAdmin, que é o gestor de bases de dados MySQL que é instalado junto com o XAMPP. Para acessar o PHPMyAdmin, apenas precisa ir ao endereço http://localhost/phpmyadmin.

Depois de criada a base de dados, basta executar o Script de criação de tabelas,database-master.sql que se encontra no directório app/Config/ do OpenSGA. Para excutar este script, use a função import do PHPMyAdmin para importar o conteúdo do ficheiro para a base de dados recém-criada.

Configurando o OpenSGA
------------------------
O OpenSGA possui dois ficheiros de configuração principais: 1 para a base de dados e outro para o próprio sistema.
Começaremos por configurar o ficheiro da base de dados, que é simplesmente colocar os dados de acesso á base de dados que acabou de criar. O ficheiro de configuração da base de dados encontra-se no directório app/Config/database.php

No ficheiro de configuração do sistema encontram-se vários detalhes que não são importantes por agora. Este ficheiro fica em app/Config/core.php

Acessando o OpenSGA
Depois de configurar todos os passos acima, o OpenSGA já estará pronto para ser usado em ambientes de testes. Para acessar o sistema, basta usar um navegador web moderno e aceder ao endereço http://localhost/opensga  se tiver descomprimido o sistema para o directório opensga dentro do htdocs do xampp, caso contrário, altere o nome do directório pelo correcto no endereço.

O usuário e a senha padrão para o sistema são:
Usuário:admin
Senha:admin

A partir daqui, é só prosseguir com o resto do manual para saber como usar o sistema.

