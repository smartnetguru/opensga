
			<div class="container_12">
			
			<div class="grid_6">
				<div class="block-border">
					<div class="block-header">
						<h1>Dados do Curso</h1><span></span>
					</div>
					<?php echo $this->Form->create('Matricula',array('class'=>'block-content form'));?>
						<div class="_100">
							<p><label for="textfield">Nome do Curso</label><?php echo $this->Form->input('curso_id',array('label'=>false,'div'=>false,'class'=>'required','empty'=>'---Seleccione---','id'=>'cursoID'));?></p>
						</div>
                                    <div class="_100">
							<p><label for="textfield">Plano de Estudos</label><?php  echo $this->Form->input('plano_estudo_id',array('label'=>false,'div'=>false,'empty'=>'---Seleccione---','id'=>'planoestudoID'));?></p>
                                    </div>
                                    
                                    <div class="_100">
							<p><label for="textfield">Regime</label><?php  echo $this->Form->input('turno_id',array('label'=>false,'div'=>false,'empty'=>'---Seleccione---'));?></p>
                                    </div>
                                    <div class="_100">
							<p><label for="textfield">Nivel</label><?php  echo $this->Form->input('nivel',array('label'=>false,'div'=>false));?></p>
                                    </div>
                                    <div class="_100">
							<p><label for="textfield">Data da Matricula</label><?php  echo $this->Form->input('data',array('label'=>false,'div'=>false,'id'=>'dataMatricula','type'=>'text'));?></p>
                                    </div>
                                            <?php /**
                                             * @TODO ainda falta implementar o conceito de seccao/Grupo de Disciplinas
                                             */?>
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-left">
								<li><?php echo $this->Html->link(__('Lista de Cursos'),array('controller'=>'cursos','action'=>'index'),array('class'=>'button red'))?></li>
							</ul>
							<ul class="actions-right">
								<li><?php echo $this->Form->end(array('label'=>__('GRAVAR', true),'class'=>'button'));?> </li>
							</ul>
						</div>
					</form>
				</div>
                        </div>
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->

       <?php
$this->Js->get('#cursoID')->event('change', 
	$this->Js->request(array(
		'controller'=>'planoestudos',
		'action'=>'getByCurso'
		), array(
		'update'=>'#planoestudoID',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
    
    
?>

<?php  $this->Html->scriptStart(array('inline' => false,'block'=>'scriptBottom'));?>
$(function() {

    $( "#dataMatricula" ).datepicker({ dateFormat: 'yy-mm-dd' });
    
});	
<?php $this->Html->scriptEnd();?>         
                
