<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb(h($aluno['Entidade']['name']), '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
    $this->BreadCumbs->addCrumb('Mudanca de Curso', '/alunos/index');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Aluno',
        ['role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => []]); ?>
    <div class="form-group">
        <label>
            <?php echo __('Escolha o Plano de Estudos') ?>
        </label>
        <?php echo $this->Form->input('plano_estudo_id',
                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
    </div>

    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-8">
            <?php echo $this->Form->hidden('aluno_id', ['value' => $aluno['Aluno']['id']]); ?>
            <?php
                echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']);
            ?>

        </div>


    </div>
<?php
    $this->end();
