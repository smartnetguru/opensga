<h3>Cerimónia de Graduacao da Universidade Eduardo Mondlane</h3>
<h4>Bem Vindo a Pagina de Inscricao para a Cerimonia de Graduacao da UEM</h4>
<p> Para fazer a sua pré-inscricao para a cerimonia de graduacao da UEM, tera de ter uma conta, como estudante, no SIGA,
    Sistema integrado de Gestao Academica da UEM.</p>
<p>Por favor, siga os passos que se seguem para poder aceder a sua conta pessoal do SIGA</p>
<h4>Já alguma vez acedeu ao SIGA usando a sua conta pessoal?</h4>
<div
        class="col-sm-4">
    <?php echo $this->Html->link('Sim, já acedi ao SIGA e conheco meu Email Institucional e minha senha de acesso',
            ['controller' => 'users', 'action' => 'login'],
            ['class' => 'btn btn-success', 'id' => 'login']) ?>
</div>
<div class="col-sm-4"><?php echo $this->Html->link('Nao, nunca acedi ao SIGA, mas conheco meu numero de Estudante',
            ['action' => 'numeroEstudante'], ['class' => 'btn btn-info', 'id' => 'numeroEstudante']) ?>
</div>
<div class="col-sm-4"><?php echo $this->Html->link('Nao, nunca acedi ao SIGA, nem me lembro do meu numero de Estudante',
            ['action' => 'cadastro'], ['class' => 'btn btn-success']) ?>
</div>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
$('#login').click(
function() {
alert('Se ja conhece os seus dados de acesso, faca o login no SIGA e acesse a seccao de Cerimonias de Graduacao');
});
<?php $this->Html->scriptEnd(); ?>

