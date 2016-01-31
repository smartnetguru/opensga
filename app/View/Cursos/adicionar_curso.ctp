<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php
    $this->extend('/Common/form_basic_common');
    $this->assign('form-title','Adicionar Novo Curso');
?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Curso', [
        'id'            => 'validate-form',
        'inputDefaults' => [
                'div'       => 'form-group',
                'wrapInput' => false,
                'class'     => 'form-control',
                'label'     => ['class' => 'control-label'],
        ],
]); ?>
<?php
    echo $this->Form->input('codigo', [
            'label'       => 'Código do Curso',
            'placeholder' => 'Código do Curso...',
            'after'       => '',
    ]);

    echo $this->Form->input('name', [
            'label'       => 'Nome do Curso',
            'placeholder' => 'Nome do Curso...',
            'after'       => '',
    ]);
    echo $this->Form->input('grau_academico_id', [
            'label'       => 'Grau Académico',
            'placeholder' => 'Grau Académico...',
            'after'       => '',
        'div'=>'form-group col-sm-6'
    ]);
    echo $this->Form->input('tipo_curso_id', [
            'label'       => 'Tipo de Curso',
            'placeholder' => 'Tipo de Curso...',
            'after'       => '',
            'div'=>'form-group col-sm-6'
    ]);
    echo $this->Form->input('unidade_organica_id', [
            'label'       => 'Unidade Organica',
            'placeholder' => 'Unidade Organica...',
            'after'       => '',
            'div'=>'form-group col-sm-6'
    ]);
    echo $this->Form->input('turno_id', [
            'label'       => 'Turno',
            'placeholder' => 'Turno...',
            'after'       => '',
            'div'=>'form-group col-sm-6'
    ]);

?>
<div class="form-group">
    <div class="col-sm-4">
        <?php echo $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-light-grey btn-block']) ?>


    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

    </div>


</div>
<?php $this->end(); ?>





