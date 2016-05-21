<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Plano de Estudos', '/faculdade/plano_estudos');
    $this->Html->addCrumb('Adicionar Plano de Estudos', '#');
?>

<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Turma', ['role' => 'form', 'class' => '', 'inputDefaults' => []]); ?>
    <div class="form-group">
        <label>
            <?php echo __('Curso') ?>
        </label>
        <div>
            <?php echo $this->Form->input('curso_id', [
                    'label' => false,
                    'div'   => false,
                    'class' => 'form-control',
                    'empty' => '---Seleccione---',
                    'id'    => 'cursoID',
            ]); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Plano de Estudos') ?>
        </label>
        <div>
            <?php echo $this->Form->input('plano_estudo_id', [
                    'label' => false,
                    'div'   => false,
                    'class' => 'form-control',
                    'empty' => '---Seleccione o Curso---',
                    'id'    => 'planoEstudoID',
            ]); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Disciplina') ?>
        </label>
        <div>
            <?php echo $this->Form->input('disciplina_id',
                    ['label' => false, 'div' => false, 'class' => 'form-control','id'=>'disciplinaID']); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Ano Lectivo') ?>
        </label>
        <div>
            <?php echo $this->Form->input('ano_lectivo_id',
                    ['label' => false, 'div' => false, 'class' => 'form-control','empty'=>'---Seleccione---','id'=>'anoLectivoID']); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Semestre Lectivo') ?>
        </label>
        <div>
            <?php echo $this->Form->input('semestre_lectivo_id',
                    ['label' => false, 'div' => false, 'class' => 'form-control','id'=>'semestreLectivoID']); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Turno') ?>
        </label>
        <div>
            <?php echo $this->Form->input('turno_id', ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2">
            <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                    ['class' => 'btn btn-light-grey btn-block']) ?>


        </div>
        <div class="col-sm-2 col-sm-offset-8">
            <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

        </div>


    </div>
<?php $this->end(); ?>

<?php
    $this->Js->get('#cursoID')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_plano_estudos_by_curso',
    ], [
            'update'         => '#planoEstudoID',
            'complete'       => '$("#planoEstudoID").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );

    $this->Js->get('#planoEstudoID')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_disciplinas_by_plano_estudo',
    ], [
            'update'         => '#disciplinaID',
            'complete'       => '$("#disciplinaID").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );

    $this->Js->get('#anoLectivoID')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_semestre_lectivos_by_ano_lectivo',
    ], [
            'update'         => '#semestreLectivoID',
            'complete'       => '$("#semestreLectivoID").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );

