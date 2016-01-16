<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.5.0.0

 *
 */
?>


<div class="container_12">
	<div class="grid_12">
		<div class="block-border">
			<div class="block-content">
				<ul class="shortcut-list">
					<li><?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Cursos"), array('controller' => 'cursos', 'action' => 'index'), array('escape' => false)) ?>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>
					<?php echo __('Para Estudantes da UEM')?>
				</h1>
				<span></span>
			</div>
			<?php echo $this->Form->create('RequisicaoPedido', array('class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>
			<?php echo $this->Form->input('codigo', array('label' => __('Número de Estudante'), 'div' => '_100', 'class' => 'text')); ?>
			<?php echo $this->Form->input('apelido', array('label' => __('Apelido'), 'div' => '_100', 'class' => 'required', 'size' => 45)); ?>
			<?php echo $this->Form->input('nomes', array('label' => __('Um dos Nomes'), 'div' => '_100', 'empty' => true, 'data-placeholder' => 'Seleccione')); ?>
			<?php echo $this->Form->hidden('tipo_pesquisa',array('value'=>'estudante'))?>
			<div class="clear"></div>
			<div class="block-actions">
				<ul class="actions-left">
					<li><?php echo $this->Html->link(__('Nova Requisição'), array('plugin'=>'requisicoes','controller' => 'requisicoes_pedidos', 'action' => 'nova_requisicao'), array('class' => 'button red')) ?>
					</li>
				</ul>
				<ul class="actions-right">
					<li><?php echo $this->Form->end(array('label' => __('PESQUISAR', true), 'class' => 'button')); ?>
					</li>
				</ul>
			</div>
			</form>
		</div>
	</div>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>
					<?php echo __('Para outras Entidades')?>
				</h1>
				<span></span>
			</div>
			<?php echo $this->Form->create('RequisicaoPedido', array('class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>
			<?php echo $this->Form->input('documento_identificacao_id', array('label' => __('Código'), 'div' => '_100', 'class' => 'text')); ?>
			<?php echo $this->Form->input('documento_identificacao_numero', array('label' => __('Nome'), 'div' => '_100', 'class' => 'required', 'size' => 45)); ?>
			<?php echo $this->Form->input('apelido', array('label' => __('Grau Académico'), 'div' => '_100', 'empty' => true, 'data-placeholder' => 'Seleccione')); ?>
			<?php echo $this->Form->input('nomes', array('label' => __('Tipo de Curso'), 'div' => '_100', 'empty' => true, 'data-placeholder' => 'Seleccione')); ?>
			<?php echo $this->Form->hidden('tipo_pesquisa',array('value'=>'outros'))?>

			<div class="clear"></div>
			<div class="block-actions">
				<ul class="actions-left">
					<li><?php echo $this->Html->link(__('Lista de Requisições'), array('controller' => 'cursos', 'action' => 'index'), array('class' => 'button red')) ?>
					</li>
				</ul>
				<ul class="actions-right">
					<li><?php echo $this->Form->end(array('label' => __('PESQUISAR', true), 'class' => 'button')); ?>
					</li>
				</ul>
			</div>
			</form>
		</div>
	</div>


	<div class="clear height-fix"></div>

</div>

<!--! end of #main-content -->



