<?php
$this->Html->addCrumb('OpenSGA', '/');
$this->Html->addCrumb('Página Inicial', '/');
?>
<div class='row'>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-group fa-2x"></i>	Estudantes',
                ['controller' => 'alunos', 'action' => 'index'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-group fa-2x"></i>	Candidatos',
                ['controller' => 'candidaturas', 'action' => 'index'], [
                    'escape' => false,
                    'class'  => 'btn btn-icon btn-block'
                ]) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-pencil fa-2x"></i>	Matriculas',
                ['controller' => 'matriculas', 'action' => 'index'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-gift  fa-2x"></i>Cartoes de Estudantes',
                ['controller' => 'requisicoes_pedidos', 'action' => 'cartao_estudantes', 'plugin' => 'requisicoes'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-gift  fa-2x"></i>Requisicoes',
                ['controller' => 'requisicoes_pedidos', 'action' => 'index', 'plugin' => 'requisicoes'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
</div>