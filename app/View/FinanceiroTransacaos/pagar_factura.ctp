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
			 
			<div class="container_12">
			 

			<div class="grid_6">
				<div class="block-border">
					<div class="block-header">
						<h1><?php echo __('Situação do Estudante')?></h1><span></span>
					</div>
                    <div class="block-content form">
                        <div class="_50">
							<p><label for="textfield"><?php echo __('Saldo Actual')?></label><?php  echo $this->Number->currency($saldo_actual,'MZN')?></p>
						</div>
						<div class="_50">
							<p><label for="textfield"><?php echo __('Valor Total em Dívida')?></label><?php echo $this->Number->currency($total_divida[0][0]['valor'],'MZN');?></p>
						</div>
						<div class="_100">
							<p><label for="textfield"><?php echo __('Pagamentos Pendentes')?></label></p>
                        
                            <table id="table-exampl" class="table">
                                <thead>
                                    <tr>
                                        <td>Codigo</td>
                                        <td>Tipo de Pagamento</td>
                                        <td>Valor</td>
                                        <td>Data Limite</td>
                                        <td>Opções</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($pagamentos_pendentes as $pp){
                                            echo "<tr>";
                                            echo "<td>".$pp['FinanceiroPagamento']['codigo']."</td>";
                                            echo "<td>".$pp['FinanceiroTipoPagamento']['name']."</td>";
                                            echo "<td>".$pp['FinanceiroPagamento']['valor']."</td>";
                                            echo "<td>".$pp['FinanceiroPagamento']['data_limite']."</td>";
                                            echo "<td>".$this->Form->postLink('Pagar',array('controller'=>'financeiro_transacaos','action'=>'pagar_factura',$pp['FinanceiroPagamento']['id'],$aluno_id))."</td>";
                                            echo "</tr>";
                                        }
                                        
                                    ?>
                                    
                                </tbody>
                               
                            </table>
						</div>
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-left">
								<li><?php echo $this->Html->link(__('Novo Tipo de Pagamento'),array('controller'=>'financeiro_pagamentos','action'=>'novo_tipo_pagamento'),array('class'=>'button red'))?></li>
							</ul>
							
						</div>
                    </div>
				</div>
			</div>	
                
			<div class="grid_6">
				<div class="block-border">
					<div class="block-header">
						<h1><?php echo __('Pagamentos Adicionais')?></h1><span></span>
					</div>
					<?php echo $this->Form->create('FinanceiroTransacao',array('class'=>'block-content form'));?>
                        <div class="_100">
							<p><label for="textfield"><?php echo __('Pagamento a efectuar')?></label><?php  echo $this->Form->input('FinanceiroPagamento.financeiro_tipo_pagamento_id',array('label'=>false,'div'=>false,'class'=>'txt','options'=>$financeiro_tipo_pagamentos));?></p>
						</div>
						<div class="_75">
							<p><label for="textfield"><?php echo __('Valor a Pagar')?></label><?php echo $this->Form->input('FinanceiroPagamento.valor',array('label'=>false,'div'=>false,'class'=>'required','empty'=>'--seleccione--'));?></p>
						</div>
						<div class="_25">
							<p><label for="textfield"><?php echo __('Data')?></label><?php echo $this->Form->input('FinanceiroPagamento.data_pagamento',array('label'=>false,'div'=>false,'class'=>'required','type'=>'text','id'=>'dataPagamento'));?></p>
						</div>
						<div class="_100">
							<p><label for="textfield"><?php echo __('Detalhes')?></label><?php echo $this->Form->input('FinanceiroTransacao.detalhes',array('label'=>false,'div'=>false,'class'=>'required','type'=>'text'));?></p>
						</div>
                        <?php echo $this->Form->input('FinanceiroPagamento.aluno_id',array('type'=>'hidden','value'=>$aluno_id))?>
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-left">
								
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
$( "#dataPagamento" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
<?php $this->Html->scriptEnd();?>
    
    