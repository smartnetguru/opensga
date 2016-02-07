<?php
    $this->extend('/Common/Docentes/perfil_docente');
    $this->BreadCumbs->addCrumb('Docentes', '/faculdade/docentes');
    $this->BreadCumbs->addCrumb($docente['Entidade']['name'],
            '/faculdade/docentes/perfil_docente/' . $docente['Docente']['id']);
    $this->BreadCumbs->addCrumb('Perfil', '/faculdade/docentes/perfil_docente/' . $docente['Docente']['id']);

?>

<?php $this->start('main-actions') ?>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>Editar Perfil',
                ['controller' => 'docentes', 'action' => 'editar_docente', $docente['Docente']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Atribuir Turmas",
                ['controller' => 'docentes', 'action' => 'atribuir_turmas', $docente['Docente']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Atribuir Disciplinas",
                ['controller' => 'docentes', 'action' => 'atribuir_disciplinas', $docente['Docente']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Alterar Status",
                ['controller' => 'docentes', 'action' => 'alterar_status', $docente['Docente']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Enviar SMS",
                ['controller' => 'messages', 'action' => 'enviar_sms', $docente['Entidade']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Alterar Senha do Sistema",
                ['controller' => 'docentes', 'action' => 'alterar_nome', $docente['Docente']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Alterar Senha do Email",
                ['controller' => 'docentes', 'action' => 'alterar_nome', $docente['Docente']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
<?php $this->end(); ?>