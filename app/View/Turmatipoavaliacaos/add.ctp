<?php
/**
 * View para nova avaliação, OpenSGA - Sistema de Gestão Académica
 *   
 * View para criar novas avaliações para uma turma
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.avaliacoes.view
 * @since         OpenSGA v 0.10.0.0
 *  @version $Id: tags.version.pkg,v 1.2 2006-04-29 04:08:27 cellog Exp $;

 * @todo Adicionar a funcionalidade de peso e ordem da avaliacao
 * 
 */
 ?>
 <?php 
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');

$this->Html->addCrumb('Manutenção', '/anolectivos');
$this->Html->addCrumb('Turmas', '/turmas');
$this->Html->addCrumb($turma['Turma']['name'], '/turmas/view/'.$turma['Turma']['id']);
$this->Html->addCrumb('Adicionar Nova Avaliação', '/TurmaTipoAvaliacaos/add/'.$turma['Turma']['id']);

?>

			<div class="container_12">
			<div class="grid_6">
				<div class="block-border">
					<div class="block-header">
						<h1>Dados da Avaliação</h1><span></span>
					</div>
					<?php echo $this->Form->create('TurmaTipoAvaliacao',array('class'=>'block-content form'));?>
						<div class="_100">
							<p><label for="textfield">Tipo de Avaliação</label><?php echo $this->Form->input('tipoavaliacao_id',array('label'=>false,'div'=>false,'class'=>'required'));?></p>
						</div>
                                    <div class="_100">
							<p><label for="textfield">Data e Hora</label><?php  echo $this->Form->input('data',array('type'=>'text','label'=>false,'div'=>false,'id'=>'dataAvaliacao'));?></p>
                                    </div>
						<div class="_100">
							<p><label for="textfield">Ordem</label><?php echo $this->Form->input('ordem',array('label'=>false,'div'=>false));?></p>
						</div>
						<div class="_100">
							<p><label for="textfield">Peso</label><?php echo $this->Form->input('peso',array('label'=>false,'div'=>false));?></p>
						</div>                    

						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-left">
								<li><?php echo $this->Html->link(__('Ver Turma'),array('controller'=>'turmas','action'=>'view',$turma['Turma']['id']),array('class'=>'button red'))?></li>
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
        
<?php  $this->Html->scriptStart(array('inline' => false,'block'=>'scriptBottom'));?>
    $(function() {
        $( "#dataAvaliaca" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,showButtonPanel: true});$('#dataAvaliacao').datetimepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,showButtonPanel: true,stepMinute: 5});
    });	
<?php $this->Html->scriptEnd();?>