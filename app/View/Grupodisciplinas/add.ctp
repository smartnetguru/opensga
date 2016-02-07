<?php $this->Html->addCrumb('Administra��o', '/contas'); ?>
<?php $this->Html->addCrumb('Usu�rios', '/contas'); ?>
<?php $this->Html->addCrumb('Adicionar Usu�rios', '/contas/add'); ?>

<div class="actions" id="left-column">
    <h3><?php echo __('Detalhes Adicionais'); ?></h3>
    <br/>
    <?php echo $this->Html->link(sprintf(__('Cursos', true)), ['controller' => 't0003cursos', 'action' => 'index'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Disciplinas', true)),
            ['controller' => 't0004disciplinas', 'action' => 'index'], ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Plano de Estudos', true)),
            ['controller' => 't0005planoestudos', 'action' => 'index'], ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Grupo de Disciplinas', true)),
            ['controller' => 't0007grupodisciplinas', 'action' => 'index'], ['class' => 'link']); ?>
</div>


<div class="projectos form" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Grupo de Disciplinas', true)), ['action' => 'index'],
                ['class' => 'button']); ?>
        <h1><?php echo __('Grupo de Disciplinas'); ?></h1>
        <div class="breadcrumbs"><?php echo $this->Html->getCrumbs(' > ', 'Home'); ?></div>
    </div>
    <div class="table">
        <?php echo $this->Form->create('T0007grupodisciplina'); ?>
        <table class="listingform" cellpadding="0" cellspacing="0">
            <tr>
                <th class="full" colspan="2">Dados da Associa��o</th>
            </tr>
            <?php
                echo $this->Form->input('ordem', [
                        'label'   => 'Ordem',
                        'before'  => '<tr><td>',
                        'between' => '</td><td>',
                        'after'   => '</td></tr>',
                        'div'     => false,
                ]);
                echo $this->Form->input('t0004disciplina_id', [
                        'label'   => 'Disciplina',
                        'before'  => '<tr><td>',
                        'between' => '</td><td>',
                        'after'   => '</td></tr>',
                        'div'     => false,
                ]);
                echo $this->Form->input('cargahorariateoricas', [
                        'label'   => 'Carga Horaria Teorica',
                        'before'  => '<tr><td>',
                        'between' => '</td><td>',
                        'after'   => '</td></tr>',
                        'div'     => false,
                ]);
                echo $this->Form->input('cargahorariapraticas', [
                        'label'   => 'Carga Horaria Pratica',
                        'before'  => '<tr><td>',
                        'between' => '</td><td>',
                        'after'   => '</td></tr>',
                        'div'     => false,
                ]);
                echo $this->Form->input('creditos', [
                        'label'   => 'Creditos',
                        'before'  => '<tr><td>',
                        'between' => '</td><td>',
                        'after'   => '</td></tr>',
                        'div'     => false,
                ]);
                echo $this->Form->input('grupodisciplinasprec', [
                        'label'   => 'Grupo Disciplar',
                        'before'  => '<tr><td>',
                        'between' => '</td><td>',
                        'after'   => '</td></tr>',
                        'div'     => false,
                ]);
            ?>
            <tr>
                <td></td>
                <td><?php echo $this->Form->end(__('Gravar', true)); ?></td>
            </tr>
        </table>
    </div>
</div>