<h3>Acessando o SIGA pela primeira vez</h3>
<p> Para estudantes que nunca acederam ao seu Perfil no SIGA, Sistema Integrado de Gestao Academica, o seu perfil
    encontra-se inicialmente desactivado.</p>
<p> Para poder activar o seu perfil precisa fazer o login pela primeira vez no Sistema. Para tal, use o seu numero de
    estudante nos dois campos de autenticacao na pagina de login.</p>

<?= $this->Html->image('https://s3-eu-west-1.amazonaws.com/public.siga.uem.mz/siga-login.png',
    ['url' => ['controller' => 'users', 'action' => 'login']]) ?>

<p>A imagem acima ilustra o local onde deve introduzir seu numero de estudante. Seu numero de estudante devera ser
    introduzido em ambos os campos.</p>
<p>Após fazer o login, será direccionado para uma pagina onde saberá o seu email institucional e definirá a sua senha
    pessoal</p>
<p> Só depois de definir a sua senha pessoal é que poderá aceder a seccao de Cerimonias de Graduacao, dentro do SIGA,
    para poder fazer a inscricao</p>

<?= $this->Html->link('Clique Aqui para Ir a pagina de Login do SIGA', ['controller' => 'users', 'action' => 'login'],
    ['class' => 'btn btn-success']) ?>

<br/>
<br/>
<br/>
<br/>
<br/>
