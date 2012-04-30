######################################
Instalação e Configuração do OpenSGA
######################################

=====================================
Instalação do OpenSGA
=====================================

------------------------------
Pré-requisitos
------------------------------
Para poder instalar e executar o OpenSGA, são necessários os seguintes pré-requisitos:

#. Servidor Web com Apache, PHP e MySQL instalados
#. Suporte a mod_rewrite habilitado no servidor
#. Framework CakePHP 2.x
#. Gerador de Relatórios TCPdf
#. Gerador de gráficos JPGraph

.. versionchanged:: 1.0.0
   Por agora todos os requisitos serão incluidos no pacote

------------------------
Instalando o OpenSGA
------------------------
Assumindo que já possui o ambiente de instalação de um sistema web em PHP e MySQL preparado, poderá passar directo para a  instalação do OpenSGA. A forma mais prática de ter um ambiente web preparado é instalado o XAMPP, que é um pacote que já traz o Servidor Apache, o PHP e MySQL imbutidos e configurados.

Para instalar o OpenSGA, extraia o arquivo zip que contém o sistema, para o directório raiz do seu servidor web, que normalmente chama-se htdocs ou então www. Após a extração, apenas precisará criar uma base de dados no mysql e importar o ficheiro opensga.sql que se encontra no directório opensga/app/config para a base de dados que acabou de criar. Este ficheiro contém todas as definições de tabelas e dados de inicialização do OpenSGA.

O último passo na instalação do OpenSGA é a configuração do arquivo do banco de dados, que se encontra em opensga/app/config/database.php. Altere os dados do servidor, nome de usuário e a senha do acesso á base de dados que acabou de criar.

Depois disso já terá o OpenSGA pronto para ser executado. Para acessar o sistema, basta apenas usar um navegador, de preferência Google Chrome ou Mozilla Firefox. O endereço, se estiver usando um servidor local, será http://localhost/opensga
