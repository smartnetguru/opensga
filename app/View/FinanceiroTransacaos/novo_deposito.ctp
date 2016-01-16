<?php
/**
 * Pagina para adicionar faculdades
 * 
 * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.disciplinas
 * @since         OpenSGA v 0.5.0
 *@version        OpenSGA v 0.5.0
 * 
 */
$this->Html->addCrumb(__('Tesouraria'), '/financeiro_pagamentos');
$this->Html->addCrumb(__('Transações'), '/financeiro_transacaos');
$this->Html->addCrumb(__('Depósitos'), '/financeiro_depositos/index');
$this->Html->addCrumb(__('Novo Depósito'), '/financeiro_transacaos/novo_deposito');

?>
 



			<div class="container_12">
			 

			<div class="grid_6">
				<div class="block-border">
					<div class="block-header">
						<h1><?php echo __('Dados do Deposito')?></h1><span></span>
					</div>
					<?php echo $this->Form->create('FinanceiroTransacao',array('class'=>'block-content form'));?>
                        <div class="_100">
							<p><label for="textfield"><?php echo __('Número de Comprovativo')?></label><?php  echo $this->Form->input('FinanceiroDeposito.numero_comprovativo',array('label'=>false,'div'=>false,'class'=>'txt','size'=>45));?></p>
						</div>
						<div class="_50">
							<p><label for="textfield"><?php echo __('Forma de Depósito')?></label><?php echo $this->Form->input('FinanceiroDeposito.financeiro_forma_deposito_id',array('label'=>false,'div'=>false,'class'=>'required','empty'=>'--seleccione--'));?></p>
						</div>
						<div class="_50">
							<p><label for="textfield"><?php echo __('Banco Usado')?></label><?php echo $this->Form->input('FinanceiroDeposito.financeiro_banco_id',array('label'=>false,'div'=>false,'class'=>'required','empty'=>'--seleccione--'));?></p>
						</div>
						<div class="_75">
							<p><label for="textfield"><?php echo __('Valor Depositado')?></label><?php echo $this->Form->input('valor',array('label'=>false,'div'=>false,'class'=>'required','size'=>45));?></p>
						</div>
						<div class="_25">
							<p><label for="textfield"><?php echo __('Data de Depósito')?></label><?php echo $this->Form->input('FinanceiroDeposito.data_deposito',array('label'=>false,'div'=>false,'class'=>'required','type'=>'text','id'=>'dataDeposito'));?></p>
						</div>
						<div class="_100">
							<p><label for="textfield"><?php echo __('Detalhes')?></label><?php echo $this->Form->input('detalhes',array('label'=>false,'div'=>false,'class'=>'required','size'=>45));?></p>
						</div>
                        <?php echo $this->Form->input('aluno_id',array('type'=>'hidden','value'=>$aluno_id))?>
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-left">
								<li><?php echo $this->Html->link(__('Lista de Faculdades'),array('controller'=>'disciplinas','action'=>'index'),array('class'=>'button red'))?></li>
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
$( "#dataDeposito" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
<?php $this->Html->scriptEnd();?>
    
    