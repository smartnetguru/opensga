<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');

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


<div class="row">
    <h2 class="StepTitle">Matricula Concluida</h2>
    <h3>Dados do Estudante Matriculado</h3>
    <div class="form-group">

        <div class="col-sm-7">
            <label class="col-sm-3 control-label">
                Numero de Estudante:
            </label>
            <p data-display="data[Aluno][codigo]"
               class="form-control-static display-value"><?php echo $aluno['Aluno']['codigo'] ?></p>
        </div>
    </div>

    <div class="form-group">

        <div class="col-sm-7">
            <label class="col-sm-3 control-label">
                Nome Completo:
            </label>
            <p data-display="email"
               class="form-control-static display-value"><?php echo $aluno['Entidade']['name'] ?></p>
        </div>
    </div>

    <div class="form-group">

        <div class="col-sm-7">
            <label class="col-sm-3 control-label">
                Curso:
            </label>
            <p data-display="full_name"
               class="form-control-static display-value"><?php echo $aluno['Curso']['name'] ?></p>
        </div>
    </div>

    <div class="form-group">

        <div class="col-sm-7">
            <label class="col-sm-3 control-label">
                Email Institucional:
            </label>
            <p data-display="gender"
               class="form-control-static display-value"><?php echo $aluno['Entidade']['User']['username'] ?></p>
        </div>
    </div>
    <div class="space12">
        <div class="btn-group btn-group-justified">
            <?php echo $this->Html->link('Imprimir Boletim de Matricula',
                    ['controller' => 'alunos', 'action' => 'print_boletim_matricula', $aluno['Aluno']['id']],
                    ['class' => 'btn btn-purple', 'target' => 'blank']) ?>
            <?php echo $this->Html->link('Imprimir Comprovativo de Matricula',
                    ['controller' => 'alunos', 'action' => 'print_comprovativo_matricula', $aluno['Aluno']['id']],
                    ['class' => 'btn btn-green', 'target' => 'blank']) ?>
            <?php echo $this->Html->link('Matricular outro Candidato',
                    ['controller' => 'alunos', 'action' => 'busca_candidato'], ['class' => 'btn btn-red']) ?>

        </div>
    </div>
</div>
<?php debug($aluno) ?>
<?php
    echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', ['block' => 'scriptBottom']);


    echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/select2/select2.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker',
            ['block' => 'scriptBottom']);
    //echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', array('block' => 'scriptBottom'));
    echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/summernote/build/summernote.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/ckeditor/ckeditor', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/ckeditor/adapters/jquery', ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.widget'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.position'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.menu'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.autocomplete'], ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-matricular-candidato-elements', ['block' => 'scriptBottom'],
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-matricular-candidato-wizard', ['block' => 'scriptBottom'],
            ['block' => 'scriptBottom']);
?>


<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>


$(document).ready(function() {
$(window).keydown(function(event){
if(event.keyCode == 13) {
event.preventDefault();
return false;
}
});

FormElements.init();
FormWizard.init();
});

$( "#naturalidade" ).autocomplete({
source: "<?php echo $this->Html->url(['controller' => 'ajax', 'action' => 'get_naturalidades_autocomplete']) ?>",
minLength: 2,
delay: 2
});
$( "#bairroMorada" ).autocomplete({
source: "<?php echo $this->Html->url(['controller' => 'ajax', 'action' => 'get_bairros_autocomplete']) ?>",
minLength: 2,
delay: 2
});

<?php $this->Html->scriptEnd(); ?>
