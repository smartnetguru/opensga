
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
    <div class="col-sm-12">
        <!-- start: FORM WIZARD PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                Editar Perfil
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="icon-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="icon-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="icon-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="icon-remove"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
				<?php echo $this->Form->create('Aluno', array('role' => "form", 'novalidade' => 'novalidate', 'class' => '', 'id' => 'form', 'inputDefaults' => array('empty' => 'Seleccione', 'placeholder' => 'Seleccione'))); ?>
				<div id="step-3">
					<div class="form-group">
						<fieldset>
							<legend><?php echo __('Contactos') ?></legend>
							<div class="row">
								<div class="col-sm-4">
									<?php echo $this->Form->label('EntidadeContacto.11', 'Pais Onde Mora'); ?>
									<?php echo $this->Form->input('EntidadeContacto.11', array('default' => $morada['pais_morada'], 'label' => false, 'div' => false, 'class' => 'form-control search-select', 'id' => 'paisMorada', 'options' => $paises, 'data-placeholder' => "Seleccione...", 'empty' => true)); ?>
								</div>
								<div class="col-sm-4">
									<?php echo $this->Form->label('EntidadeContacto.10', 'Provincia onde Mora'); ?>
									<?php echo $this->Form->input('EntidadeContacto.10', array('default' => $morada['provincia_morada'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'provinciaMorada', 'options' => $provincias, 'data-placeholder' => "Seleccione...", 'empty' => true)); ?>
								</div>
								<div class="col-sm-4">
									<?php echo $this->Form->label('EntidadeContacto.9', 'Distrito/Cidade onde Mora'); ?>
									<?php echo $this->Form->input('EntidadeContacto.9', array('default' => $morada['cidade_morada'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'cidadeMorada', 'options' => $cidades, 'data-placeholder' => "Seleccione...", 'empty' => true)); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<?php echo $this->Form->label('EntidadeContacto.6', 'Bairro'); ?>
									<?php
                                        if(isset($aluno['Entidade']['Bairro']['name'])){
                                            $bairroMorada = $aluno['Entidade']['Bairro']['name'];
                                        } else{
                                            $bairroMorada = null;
                                        }
                                        echo $this->Form->input('EntidadeContacto.6', array('default' => $bairroMorada, 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'bairroMorada', 'type' => 'text')); ?>
								</div>
								<div class="col-sm-3">
									<?php echo $this->Form->label('EntidadeContacto.5', 'Avenida/Rua'); ?>
									<?php
                                        if(isset($aluno['Entidade']['Rua']['name'])){
                                            $ruaMorada = $aluno['Entidade']['Rua']['name'];
                                        } else{
                                            $ruaMorada = null;
                                        }
                                        echo $this->Form->input('EntidadeContacto.5', array('default' => $ruaMorada, 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'avenidaMorada')); ?>
								</div>
								<div class="col-sm-3">
									<?php echo $this->Form->label('EntidadeContacto.7', 'Quarteirao'); ?>
									<?php echo $this->Form->input('EntidadeContacto.7', array('default' => $morada['quarteirao'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'quarteiraoMorada')); ?>
								</div>
								<div class="col-sm-3">
									<?php echo $this->Form->label('EntidadeContacto.8', 'Numero da Casa'); ?>
									<?php echo $this->Form->input('EntidadeContacto.8', array('default' => $aluno['Entidade']['caixa_postal_morada'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'caixaPostalMorada')); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<?php echo $this->Form->label('EntidadeContacto.2', 'Telemovel'); ?>
									<?php echo $this->Form->input('EntidadeContacto.2', array('default' => $aluno['Entidade']['telemovel'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
								</div>
								<div class="col-sm-6">
									<?php echo $this->Form->label('EntidadeContacto.1', 'Email Pessoal'); ?>
									<?php echo $this->Form->input('EntidadeContacto.1', array('default' => $aluno['Entidade']['email'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<?php echo $this->Form->label('Aluno.nome_emergencia', 'Pessoa para Casos de Emergencia'); ?>
									<?php echo $this->Form->input('Aluno.nome_emergencia', array('value' => $aluno['Aluno']['nome_emergencia'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
								</div>
								<div class="col-sm-4">
									<?php echo $this->Form->label('Aluno.telemovel_emergencia', 'Contacto da pessoa para Emergencias'); ?>
									<?php echo $this->Form->input('Aluno.telemovel_emergencia', array('value' => $aluno['Aluno']['telemovel_emergencia'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'type' => 'text')); ?>
								</div>
								<div class="col-sm-4">
									<?php echo $this->Form->label('Aluno.parentesco_encarregado', 'Grau de Parentesco'); ?>
									<?php echo $this->Form->input('Aluno.parentesco_encarregado', array('default' => $aluno['Aluno']['parentesco_encarregado'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'options' => $grauParentescos)); ?>
								</div>

							</div>
						</fieldset>
					</div>
					<div class="form-group">

						<?php echo $this->Form->input('Aluno.aluno_id', array('type' => 'hidden', 'value' => $aluno['Aluno']['id'], 'label' => false, 'div' => false, 'class' => 'form-control')); ?>
						<?php echo $this->Form->input('Aluno.entidade_id', array('type' => 'hidden', 'value' => $aluno['Aluno']['entidade_id'], 'label' => false, 'div' => false, 'class' => 'form-control')); ?>
						<?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-success finish-step btn-block', 'div' => 'col-sm-2 col-sm-offset-8')); ?>

					</div>



				</div>


			</div>

			</form>
		</div>
	</div>
	<!-- end: FORM WIZARD PANEL -->
</div>


<?php
$this->Js->get('#provinciaNascimento')->event('change', $this->Js->request(array(
			'controller' => 'ajax',
			'action' => 'get_cidades_by_provincia'
				), array(
			'update' => '#cidadeNascimento',
			'complete' => '$("#cidadeNascimento").trigger("liszt:updated")',
			'async' => true,
			'method' => 'post',
			'dataExpression' => true,
			'data' => $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
);

$this->Js->get('#provinciaMorada')->event('change', $this->Js->request(array(
			'controller' => 'ajax',
			'action' => 'get_cidades_by_provincia',
			'estudante' => false
				), array(
			'update' => '#cidadeMorada',
			'complete' => '$("#cidadeMorada").trigger("liszt:updated")',
			'async' => true,
			'method' => 'post',
			'dataExpression' => true,
			'data' => $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
);
$this->Js->get('#cidadeOrigem')->event('change', $this->Js->request(array(
			'controller' => 'ajax',
			'action' => 'get_escolas_by_distrito'
				), array(
			'update' => '#escolaOrigem',
			'complete' => '$("#escolaOrigem").trigger("liszt:updated")',
			'async' => true,
			'method' => 'post',
			'dataExpression' => true,
			'data' => $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
);
?>
<?php
echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', array('block' => 'scriptBottom'));


echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker', array('block' => 'scriptBottom'));
//echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/summernote/build/summernote.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/ckeditor/ckeditor', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/ckeditor/adapters/jquery', array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.widget'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.position'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.menu'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.autocomplete'), array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/form-matricular-candidato-elements', array('block' => 'scriptBottom'), array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/form-matricular-candidato-wizard', array('block' => 'scriptBottom'), array('block' => 'scriptBottom'));
?>


<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>


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
source: "<?php echo $this->Html->url(array('controller' => 'ajax', 'action' => 'get_naturalidades_autocomplete')) ?>",
minLength: 2,
delay: 2
});
$( "#bairroMorada" ).autocomplete({
source: "<?php echo $this->Html->url(array('controller' => 'ajax', 'action' => 'get_bairros_autocomplete')) ?>",
minLength: 2,
delay: 2
});

<?php
$this->Html->scriptEnd();
