==========================================================
Manual do Desenvolvedor do SIGA
==========================================================


-----------------------------------------------
Ferramentas Usadas no Desenvolvimento do SIGA
-----------------------------------------------

No desenvolvimento do SIGA, Sistema Integrado de Gestão Académica, foram usadas as seguintes ferramentas de
desenvolvimento:

* Linguagem de Programação: PHP v.5.4
* FrameWork: CakePHP v.2.5
* Sistema de Gestão de Base de Dados: MySQL v.5.5

Para o Desenvolvimento da Interface foram usadas as seguintes tecnologias:

* HTML 5
* CSS 3
* Javascript (JQuery)

Além destas ferramentas, também são usados no SIGA:

* Redis - Para o processamento Offline

--------------------------------------------------------
Repositório de desenvolvimento do SIGA
--------------------------------------------------------

Para o controle de versões do código-fonte do SIGA, é usado um repositório privado do Github. Apenas desenvolvedores
autorizados tem acesso ao código-fonte do SIGA actualmente. Esta é uma medida temporária,
até que se tenha a certeza que todos os pontos críticos do sistema já estão assegurados. Dai,
o código-fonte do SIGA será tornado público e qualquer interessado poderá ter acesso para diversos fins(contribuir
para o desenvolvimento, implementar em outras instituições, etc).

O repositório actual do siga é: https://github.com/backstageel/opensga.

-----------------------------------------------------------
Gestão de Tarefas e Bugs do SIGA
-----------------------------------------------------------
Além do repositório do codigo-fonte, que é privado, existe também um repositório aberto para a gestão de tarefas e
controle de bugs do Sistema. Assim, qualquer utilizador do SIGA, mesmo que não seja desenvolvedor do mesmo,
poderá monitorar e reportar erros e requisitar novas funcionalidades atravês deste repositório.

O repositório de tarefas do SIGA fica localizado em: github.com/backstageel/siga/issues

É a partir dali que a equipa de desenvolvimento vai coordenar todas as actividades por desenvolver neste projecto.

----------------------------------------------------------
Regras de Desenvolvimento do SIGA
----------------------------------------------------------
Está claro que o SIGA usa Git como Sistema de Controle de Versão, e todas as alterações devem ser sincronizadas entre
  todos os desenvolvedores atravês do Github. Sendo assim, devem ser seguidas certas regras para que o desenvolvimento
  em equipe não seja afectado durante a sincronização do código:

* Antes de fazer qualquer alteração no seu código-fonte, sincronize com o servidor remoto para garantir que está a
  desenvolver sobre a ultima versão do mesmo.

  * A sincronização deve ser feita usando **Git Fetch** seguido de **Git Merge**. Nunca use **Git Pull**,
  para o desenvolvimento não perder a graça. Google pode ajudar a entender melhor esses comandos.

* Depois de executar uma alteração útil no código fonte, faça o commit e envie os dados para o servidor,
  sempre indicando na mensagem do commit quais as alterações que fez e porque!

  * Note que **Git Commit** não envia os dados para o Github, apenas faz o commit no seu repositório local. Para
  enviar os dados para o Github use **Git Push origin master**.

* O SIGA adoptará os padrões de desenvolvimento do CakePHP, que podem ser encontradas no link que se segue:
http://book.cakephp.org/2.0/en/contributing/cakephp-coding-conventions.html
