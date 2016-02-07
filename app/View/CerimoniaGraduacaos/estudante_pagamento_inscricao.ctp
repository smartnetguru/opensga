<h3>Instrucoes para Pagamento da Cerimonia de Graduacao</h3>
<p> Para fazer o Pagamento da Inscricao para a Cerimonia de Graduacao devera fazer um <b>Pagamento de Servicos</b> no
    Millenium BIM com os seguintes dados</p>
<p>Entidade:<b>77001</b><br/>
    Referencia: <b><?php if ($candidatoGraduacao['CandidatoGraduacao']['referencia_pagamento'] == 0) {
            echo $referenciaPagamento;
        } else {
            echo $candidatoGraduacao['CandidatoGraduacao']['referencia_pagamento'];
        } ?></b><br/>
    Valor:<b>Licenciatura(3.500.00 Mt), Mestrado(4.000.00 Mt), Doutoramento(4.500.00 Mt)</b></p>

<p></p>
<hr/>
<p>Saiba como fazer Pagamento de Servicos nos diferentes Canais do BIM</p>
<div
        class="col-sm-3">
    <?php echo $this->Html->link('Desejo fazer o Pagamento na ATM do BIM(Preferido)',
            "#",
            ['class' => 'btn btn-success', 'id' => 'login']) ?>
</div>
<div class="col-sm-3"><?php echo $this->Html->link('Desejo fazer o Pagamento via Internet Banking',
            "#", ['class' => 'btn btn-info', 'id' => 'numeroEstudante']) ?>
</div>
<div class="col-sm-3"><?php echo $this->Html->link('Desejo fazer o Pagamento via IZI',
            "#", ['class' => 'btn btn-success']) ?>
</div>
<div class="col-sm-3"><?php echo $this->Html->link('Desejo fazer o Pagamento no Balcao',
            "#", ['class' => 'btn btn-success']) ?>
</div>
<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
$('#login').click(
function() {
alert('Se ja conhece os seus dados de acesso, faca o login no SIGA e acesse a seccao de Cerimonias de Graduacao');
});
<?php $this->Html->scriptEnd(); ?>

