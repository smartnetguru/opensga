<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Plano de Estudos', '/faculdade/plano_estudos');
    $this->Html->addCrumb('Adicionar Plano de Estudos', '#');
?>

<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php
    echo $this->Form->create('PlanoEstudo', [
            'role'          => 'form',
            'class'         => '',
            'inputDefaults' => [
                    'div'       => 'form-group',
                    'wrapInput' => false,
                    'class'     => 'form-control',
            ],
    ]); ?>
<?php echo $this->Form->input('duracao', [
        'label'       => 'Duracao(Anos)',
        'placeholder' => 'Duracao do Curso, em ano…',
        'after'       => '<span class="help-block"></span>',
]); ?>
<?php echo $this->Form->input('semestres_ano', [
        'label'       => 'Semestres Por ano',
        'placeholder' => 'Semestres por ano',
        'after'       => '<span class="help-block"></span>',
]); ?>
<?php echo $this->Form->input('ano_criacao', [
        'label'       => 'Ano de Criacao',
        'placeholder' => 'Ano de Criacao do Plano de Estudos',
        'after'       => '<span class="help-block">Ano em que o plano de estudos entrou em vigor</span>',
        'type'        => 'text',
]); ?>
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