<?php
    $this->extend('/Common/Funcionarios/perfil_funcionario');


?>

<?php $this->start('main-actions') ?>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Editar Perfil',
            ['controller' => 'funcionarios', 'action' => 'editar_perfil', $funcionario['Funcionario']['id']],
            ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Alterar Unidade Organica',
            ['controller' => 'funcionarios', 'action' => 'alterar_unidade_organica', $funcionario['Funcionario']['id']],
            ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-mobile fa-2x"></i>Enviar SMS',
            ['controller' => 'messages', 'action' => 'enviar_sms', $funcionario['Entidade']['id']],
            ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
<?php $this->end(); ?>