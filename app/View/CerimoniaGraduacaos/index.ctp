<?php
    $this->extend('/Common/CerimoniaGraduacaos/index');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>
<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Adicionar Cerimnonia',
                    ['controller' => 'cerimonia_graduacaos', 'action' => 'nova_cerimonia'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Manutenção',
                    ['controller' => 'cursos', 'action' => 'manutencao'], [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>
        </div>
    </div>
<?php $this->end() ?>