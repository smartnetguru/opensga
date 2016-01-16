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

<?php
echo $this->Form->input('HistoricoCurso.data_conclusao', [
        'label'              => ['class' => 'control-label', 'text' => 'Data de Conclusao'],
        'div'                => 'col-sm-12 form-group',
        'class'              => 'form-control date-picker',
        'id'                 => 'generoId',
        'empty'              => 'Seleccione o Sexo',
        'type'               => 'text',
        'data-date-viewmode' => 'years',
        'data-date-format'   => 'yyyy-mm-dd'
    ]
);
echo $this->Form->input('HistoricoCurso.nota_final', [
        'label' => ['class' => 'control-label', 'text' => 'Nota Final'],
        'div'   => 'col-sm-12 form-group',
        'class' => 'form-control',
        'id'    => 'generoId',
        'empty' => 'Seleccione o Sexo',
        'type'  => 'text'
    ]
);

echo $this->Form->input('anexo_url',
    [
        'type'  => 'file',
        'label' => ['class' => 'control-label', 'text' => 'Anexo'],
        'div'   => 'col-sm-12 form-group',
        'class' => 'form-control',
        'id'    => 'generoId',
        'empty' => 'Seleccione o Sexo',
    ]);
echo $this->Form->input('observacao', [
        'label' => ['class' => 'control-label', 'text' => 'Observacao'],
        'div'   => 'col-sm-12 form-group',
        'class' => 'form-control',
        'id'    => 'generoId',
        'empty' => 'Seleccione o Sexo',
        'type'  => 'textarea',
        'rows'=>2
    ]
);

?>


<?php echo $this->Form->hidden('aluno_id', ['value' => $aluno['Aluno']['id']]); ?>
<?php echo $this->Form->hidden('curso_id', ['value' => $aluno['Aluno']['curso_id']]); ?>
<?php echo $this->Form->hidden('HistoricoCurso.funcionario_id', ['value' => $funcionario['Funcionario']['id']]); ?>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-8">
        <?php
            echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']);
        ?>

    </div>


</div>
<?php
$this->end();
?>
