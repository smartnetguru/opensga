<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Disciplina', [
        'inputDefaults' => [
                'div'       => 'form-group',
                'wrapInput' => false,
                'class'     => 'form-control',
        ],
        'class'         => '',
]); ?>
<?php echo $this->Form->input('codigo', [
        'label'       => 'Código da Disciplina',
        'placeholder' => 'Digite o Código da Disciplina',
        'after'       => '<span class="help-block"></span>',
]); ?>
<?php echo $this->Form->input('name', [
        'label'       => 'Nome da Disciplina',
        'placeholder' => 'Digite o Nome da Disciplina aqui...',
        'after'       => '<span class="help-block"></span>',
]); ?>
    <div class="form-group">
        <div class="col-sm-2">
            <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                    ['class' => 'btn btn-light-grey btn-block']) ?>


        </div>
        <div class="col-sm-4 col-sm-offset-6">
            <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

        </div>


    </div>
<?php $this->end(); ?>