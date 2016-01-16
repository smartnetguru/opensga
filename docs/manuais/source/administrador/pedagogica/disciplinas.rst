==================================
Gestão de disciplinas
==================================
A gestão de disciplinas é uma das funcionalidades mais básicas do |release|. Ela deve ser feita antes que se possa
usar o sistema efectivamente para se fazer a gestão académica. Uma disciplina representa apenas um nome que será
usado para a criação de turmas e planos de estudos. Em outras palavras, estudantes não estudam em disciplinas, mas
sim em turmas que são formadas por disciplinas que por sua vez fazem parte de algum plano de estudos.

No |release| uma disciplina é composta por apenas 2 campos que são o código da disciplina e o nome. A introducão do
código da disciplina durante o cadastro da mesma é opcional, uma vez que também podem ser introduzidos códigos de
disciplinas dentro dos planos de estudos. Assim, cada Faculdade ou Unidade Orgânica onde a disciplina é leccionada
poderá adoptar a sua própria codificaćão de disciplinas.

O nome de uma disciplina é uma entidade única no |release|, ou seja, a palavra Matemática representa sempre a mesma
disciplina, independentemente do curso ou do plano de estudo que faça parte num determinado momento.

O |release| inclui funcionalidades que permitem criar, editar, visualizar e remover disciplinas. A gestão de
disciplinas tanto pode ser feita pelo técnico de registo académico a nivel de faculdade, como pelo técnico de registo
 académico a nível central.

---------------------
Criando disciplinas
---------------------
Para criar uma disciplina, basta acessar a página de cadastro de disciplinas indo em
``Cadastros->Disciplinas->Adicionar Disciplina``.

Após preencher o formulário, clique no botão gravar para registrar os dados no sistema. Se não existir nenhum
problema, os dados da disciplinas serão armazenados na base de dados. Se ocorrer algum erro, o sistema irá indicar o
que fazer para ultrapassa-lo.

Não é obrigatório introduzir o código da disciplina neste formulário mas, caso seja introduzido, deve ser um código
que ainda não tenha sido usado para nenhuma outra disciplina no sistema.

O nome da disciplina é de introducão obrigatória.

Este processo deve ser repetido até que todas as disciplinas estejam cadastradas no sistema.
Não é possivel cadastrar uma disciplina mais de uma vez, e caso a disciplina em questão já esteja cadastrada, o
sistema emitirá um alerta informando que não é necessário cadastrar a disciplina novamente.

|Figura 1|
Figura 1: Interface de Cadastro de Disciplinas



----------------------
Editando disciplinas
----------------------
Os dados de uma disciplina podem ser editados, quer seja para mudar o nome, o código ou então a secção ou grupo de disciplinas a que a disciplina faz parte.

Para editar os dados da disciplina, basta acessar a página ``Pedagógica->Disciplinas`` e dai clicar no ícone de editar |Figura 2| correspondente a disciplina em questão. Os icones correspondentes as disciplinas listadas encontram-se no canto direito da da tabela de listagem de disciplinas.

Ao editar os dados de uma disciplina, estes serão verificados novamente para  garantir que não existam disciplinas repetidas repetidas no sistema.

----------------------------
Visualizando disciplinas
----------------------------
Para visualizar os dados completos de uma disciplina, incluindo a lista dos cursos que possuem esta disciplina no curriculo e outros detalhes adicionais, clique no icone de visualizar |Figura 3| na mesma linha da disciplina em ``Pedagógica->Disciplinas``.

.. todo::
   Inserir mais dados na página de visualização de disciplinas.

-----------------------
Removendo Disciplinas
-----------------------
Por gerar implicações irreversíveis no sistema, não é permitido remover disciplinas no OpenSGA. Uma vez que uma disciplina é registrada no sistema, ela não poderá mais ser removida, pois esta poderá estar ligada a turmas e planos de estudos que já foram frequentados por estudantes e remover gerará uma quebra total no sistema.

.. todo::
   Adicionar funcionalidade de activar e desactivar uma disciplina em vez de remover
   
.. todo::
   No futuro poderá se adicionar uma funcionalidade de remover apenas disciplinas não veiculadas a nenhum curso.

.. todo::
   No futuro, não permitir que nomes de disciplinas sejam modificados nem por administradores, para evitar fraudes diversas.


.. |Figura 1| image:: /_static/img/disciplinas_adicionar.png

.. |Figura 4| image:: \_static\img\disciplinas_add.jpg
              :width: 20cm
.. |Figura 2| image:: \_static\img\edit-icon.gif
              :width: 3mm
.. |Figura 3| image:: \_static\img\hr.gif
              :width: 3mm