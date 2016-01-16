<h3>Como Renovar a sua Matricula?</h3>

<p>É possivel renovar a sua matricula nos seguintes locais:</p>
<ul>
    <li>1. ATM do Millennium BIM(É necessário ter um cartão do BIM)</li>
    <li>2. Internet Banking do Millennium BIM (É necessário ter o servico activo)</li>
    <li>3. Millennium IZI(*181#, é necessário ter o servico activo)</li>
    <li>4. Balcão do Millennium BIM</li>
</ul>

<p>Para renovar a matricula usando as 3 primeiras opcoes, use a opcao <b>Pagamento de Servico</b>(Disponivel na ATM,
    Internet Banking e IZI).
    Dai, basta apenas indicar o codigo da Entidade, a Referencia e o valor da Renovacao, dispniveis a seguir nesta
    pagina.</p>

<p>Caso nao tenha uma conta bancaria no Millennium BIM, dirija-se a um balcao do Millennium BIM e informe ao agente que
    deseja efectuar um <strong>Pagamento de Servico</strong>
    O agente ira solicitar o codigo da entidade, referencia e valor da renovacao, que podem ser obtidos abaixo.</p>

<h4>Dados a usar</h4>
<p>Codigo da Entidade: <strong>77001</strong></p
<p>Referencia: <strong><?= $referenciaRenovacao ?></strong></p>
<p>Valor da Renovacao: <strong><?= $valorRenovacao ?>MT</strong></p>

<h3>Como confirmar a Renovacao de Matricula</h3>
<p>Apos a realizacao do pagamento de servico no Millennium BIM, o banco irá notificar a Direccao de Registo Academico sobre o pagamento em 24h úteis.</p>
<p>Sendo assim, o estudante deve aceder ao SIGA 48h  depois de fazer o pagamento, para verificar se a renovacao foi confirmada.</p>
<p>Se a renovacao não estiver confirmada no sistema, o estudante deverá entrar em contacto com a Direccao de Registo Academico</p>

<?php echo $this->Html->link('Voltar',array('action'=>'index'),array('class'=>'btn btn-green'))?>