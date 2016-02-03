
<?php
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');

    $this->extend('/Common/Alunos/matricular_candidato');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');
echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');
echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css');
echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css');
echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
echo $this->Html->css('/assets/plugins/summernote/build/summernote.css');
echo $this->Html->css('/assets/plugins/ckeditor/contents.css');
?>

<?php $this->start('nomes')?>
<div class="col-sm-4">
    <?php echo $this->Form->input('Entidade.apelido', [
        'value' => $candidato['Candidatura']['apelido'],
        'label' => 'Apelido',
        'class' => 'form-control',
        'id'    => 'codigo',
        'readonly'=>true,
    ]); ?>
</div>
<div class="col-sm-4">
    <?php echo $this->Form->input('Entidade.nomes', [
        'value' => $candidato['Candidatura']['nomes'],
        'label' => 'Outros Nomes',
        'class' => 'form-control',
        'id'    => 'codigo',
        'readonly'=>true,
    ]); ?>
</div>

<?php $this->end();?>
