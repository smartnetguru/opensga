<?php
    $this->extend('/Common/Funcionarios/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user-plus fa-2x"></i>Adicionar Funcionario',
                ['controller' => 'funcionarios', 'action' => 'adicionar_funcionario'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>

<?php $this->start('panel-top-actions') ?>
<?php echo $this->Html->link('<i class="fa fa-user-plus "></i>',
        ['controller' => 'funcionarios', 'action' => 'adicionar_funcionario'],
        ['escape' => false, 'class' => 'btn btn-green pull-right tooltips', 'data-original-title'=>'Adicionar Novo Funcionario']) ?>
<?php $this->end() ?>
