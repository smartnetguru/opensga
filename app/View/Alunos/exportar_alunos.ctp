<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->assign('form-title', 'Filtros de Importacao') ?>
<?php $this->start('form-elements') ?>
<?php
    echo $this->Form->create('Aluno', [
            'inputDefaults' => [
                    'div'       => 'form-group',
                    'wrapInput' => false,
                    'class'     => 'form-control',
            ],
    ]);
    echo $this->Form->input('ano_ingresso', [
            'label'       => 'Ano de Ingresso',
            'placeholder' => 'Ano de Ingresso…',
        'empty'=>'--Seleccione--',
            'options'     => $anoLectivos,
            'required'=>false,

    ]);
    echo $this->Form->input('curso_id', [
            'label'       => 'Curso',
            'placeholder' => 'Curso…',
            'empty'=>'--Seleccione--',
            'required'=>false,
    ]);

?>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-8">
        <?php
                echo $this->Form->end(['label' => __('EXPORTAR', true), 'class' => 'btn btn-blue btn-block']);

        ?>

    </div>


</div>
<?php $this->end(); ?>