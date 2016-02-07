<?php
    echo $this->Html->css('/assets/plugins/bootstrap3-editable/css/bootstrap-editable.css');

    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->set('form-title', 'Dados do Plano de estudo'); ?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('PlanoEstudo',
        ['role' => 'form', 'class' => '', 'inputDefaults' => ['disabled' => true]]); ?>
<div class="form-group">
    <label>
        <?php echo __('Nome do Plano de Estudos') ?>
    </label>
    <?php echo $this->Form->input('name', ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
</div>
<div class="form-group">
    <label>
        <?php echo __('Curso') ?>
    </label>

    <div>
        <?php echo $this->Form->input('curso_id', [
                'type'  => 'text',
                'value' => $this->request->data['Curso']['name'],
                'label' => false,
                'div'   => false,
                'class' => 'form-control',
        ]); ?>
    </div>
</div>
<div class="form-group">
    <label>
        <?php echo __('Duracao(Anos)') ?>
    </label>

    <div>
        <?php echo $this->Form->input('duracao', ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
    </div>
</div>
<div class="form-group">
    <label>
        <?php echo __('Semestres por ano') ?>
    </label>

    <div>
        <?php echo $this->Form->input('semestres_ano',
                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
    </div>
</div>
<div class="form-group">
    <label>
        <?php echo __('Ano de Criacao'); ?>
    </label>

    <div>
        <?php echo $this->Form->input('ano_criacao', [
                'type'  => 'text',
                'value' => $this->request->data['PlanoEstudo']['ano_criacao'],
                'label' => false,
                'div'   => false,
                'class' => 'form-control',
        ]); ?>
    </div>
</div>
<div class="form-group">
    <label>
        <?php echo __('Total de Creditos'); ?>
    </label>

    <div>
        <?php echo $this->Form->input('total_creditos', [
                'type'  => 'text',
                'value' => $this->request->data['PlanoEstudo']['total_creditos'],
                'label' => false,
                'div'   => false,
                'class' => 'form-control',
        ]); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-2 col-sm-offset-8">
        <?php echo $this->Form->end(); ?>

    </div>


</div>

<?php $this->end(); ?>

<?php $this->start('right-panel') ?>
<div class="col-sm-6">
    <!-- start: SELECT BOX PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Adicionar Disciplinas ao Plano de Estudos
            <div class="panel-tools">
                <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                </a>
                <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                    <i class="fa fa-wrench"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-refresh">
                    <i class="fa fa-refresh"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-expand">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <?php echo $this->Form->create('DisciplinaPlanoEstudo', [
                    'url'           => [
                            'controller' => 'plano_estudos',
                            'action'     => 'editar_disciplina',
                            $disciplinaPlanoId,
                    ],
                    'role'          => 'form',
                    'class'         => '',
                    'inputDefaults' => [],
            ]); ?>
            <div class="form-group">
                <label>
                    <?php echo __('Nome da Disciplina') ?>
                </label>

                <div>
                    <?php echo $this->Form->input('disciplina_id',
                            [
                                    'label'    => false,
                                    'div'      => false,
                                    'class'    => 'form-control search-select',
                                    'selected' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['disciplina_id'],
                                    'disabled' => 'disabled',
                            ]); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label>
                        <?php echo __('Ano Curricular') ?>
                    </label>
                    <?php echo $this->Form->input('ano_curricular',
                            [
                                    'options' => $anos,
                                    'label'   => false,
                                    'div'     => false,
                                    'class'   => 'form-control',
                                    'value'   => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'],
                            ]); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label>
                        <?php echo __('Semestre Curricular') ?>
                    </label>
                    <?php echo $this->Form->input('semestre_curricular',
                            [
                                    'options' => $semestres,
                                    'label'   => false,
                                    'div'     => false,
                                    'class'   => 'form-control',
                                    'value'   => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'],
                            ]); ?>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label>
                        <?php echo __('Carga Horaria Teorica') ?>
                    </label>
                    <?php echo $this->Form->input('carga_horaria_teoricas',
                            [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'value' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['carga_horaria_teoricas'],
                            ]); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label>
                        <?php echo __('Carga Horaria Pratica') ?>
                    </label>
                    <?php echo $this->Form->input('carga_horaria_praticas',
                            [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'value' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['carga_horaria_praticas'],
                            ]); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label>
                        <?php echo __('Horas de Estudo Individual') ?>
                    </label>
                    <?php echo $this->Form->input('horas_individual',
                            [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'value' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['horas_individual'],
                            ]); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label>
                        <?php echo __('Horas de Estudo com o Docente') ?>
                    </label>
                    <?php echo $this->Form->input('horas_docente',
                            [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'value' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['horas_docente'],
                            ]); ?>
                </div>
            </div>
            <div class="form-group">

                <label>
                    <?php echo __('Creditos') ?>
                </label>
                <?php echo $this->Form->input('creditos',
                        [
                                'label' => false,
                                'div'   => false,
                                'class' => 'form-control',
                                'value' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['creditos'],
                        ]); ?>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                            ['class' => 'btn btn-light-grey btn-block']) ?>


                </div>
                <div class="col-sm-2 col-sm-offset-8">
                    <?php
                        echo $this->Form->input('id', [
                                'value' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['id'],
                                'type'  => 'hidden',
                                'div'   => false,
                        ]);
                        echo $this->Form->end([
                                'label' => __('GRAVAR', true),
                                'class' => 'btn btn-blue btn-block',
                        ]); ?>

                </div>


            </div>
        </div>
    </div>
    <!-- end: SELECT BOX PANEL -->
</div>
<?php $this->end(); ?>

