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
?>

<?php echo $this->Form->create('Inscricao', array(
    'role' => 'form',
    'class' => 'form-horizontal form',
    'id' => 'validate-form',
    'url' => array('controller' => 'inscricaos', 'action' => 'inscrever2', $aluno_id, $matricula_id))); ?>
<div class="row">

	<?php
	$ano_actual = 0;
	$semestre_actual = 0;
	foreach ($planoEstudos as $planoEstudo) {
        echo '<div class="col-sm-12"><fieldset><legend> Plano De Estudos: ' . $planoEstudo['PlanoEstudo']['name'] . "</legend>";
        foreach($planoEstudo['DisciplinaPlanoEstudo'] as $disciplina){
            $ano_anterior = $ano_actual;
            $semestre_anterior = $semestre_actual;
            $ano_actual = $disciplina['ano_curricular'];
            $semestre_actual = $disciplina['semestre_curricular'];
            if ($ano_anterior != $ano_actual || $semestre_anterior != $semestre_actual) {
                if ($ano_anterior != 0) {
                    echo "</fieldset></div>";
                }
                echo '<div class="col-sm-3"><fieldset><legend> Ano Curricular ' . $disciplina['ano_curricular'] . ", Semestre Curricular" . $disciplina['semestre_curricular'] . "</legend>";
            }
            ?>
            <div class="checkbox24">
                <label><?php
                    echo $this->Form->input('disciplina.'.$planoEstudo['PlanoEstudo']['id'].'.'. $disciplina['Disciplina']['id'], array('type' => 'checkbox', 'value' => $disciplina['Disciplina']['id'], 'label' => false, 'div' => false));
                    echo $disciplina['Disciplina']['name'] . "(" . $disciplina['ano_curricular'] . "," . $disciplina['semestre_curricular'] . "," . $disciplina['Disciplina']['id'] . ")"
                    ?>
                </label>
            </div>
        <?php
        }
        echo "</fieldset></div>";

	}

	?>
</div>
<div class="clear"></div>

		<?php echo $this->Form->input('aluno_id', array('type' => 'hidden', 'value' => $aluno_id, 'label' => false, 'div' => false)); ?>
		<?php echo $this->Form->input('matricula_id', array('type' => 'hidden', 'value' => $matricula_id, 'label' => false, 'div' => false)); ?>

		<div class="form-group">
			<div class="col-sm-2 col-sm-offset-8">
				<?php echo $this->Form->end(array('class' => 'btn btn-blue next-step btn-block', 'label' => __('Inscrever Aluno'))); ?></li>
			</div>
		</div>

</div>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>
$(document).ready(function() {
$('input').iCheck({
checkboxClass: 'icheckbox_minimal-green',
radioClass: 'iradio_minimal',
increaseArea: '20%' // optional
});
});
<?php $this->Html->scriptEnd(); ?>