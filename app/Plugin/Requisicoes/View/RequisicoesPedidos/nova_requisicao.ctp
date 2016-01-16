<?php
$this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
$this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
$this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->assign('form-title', 'Para Estudantes da UEM') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('RequisicaoPedido', array('role' => 'form', 'class' => '', 'inputDefaults' => array())); ?>
<div class="form-group">
	<label>
		<?php echo __('Numero de Estudante') ?>
	</label>
	<?php echo $this->Form->input('codigo', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
</div>
<div class="form-group">
	<label>
		<?php echo __('Ou Apelido') ?>
	</label>
	<div>
		<?php echo $this->Form->input('apelido', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group">
	<label>
		<?php echo __('Ou Nomes') ?>
	</label>
	<div>
		<?php echo $this->Form->input('nomes', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-2">
		<?php echo $this->Html->link('Voltar', array('action' => 'index'), array('class' => 'btn btn-light-grey btn-block')) ?>


	</div>
	<div class="col-sm-2 col-sm-offset-8">
		<?php echo $this->Form->hidden('tipo_pesquisa', array('value' => 'estudante')) ?>
		<?php echo $this->Form->end(array('label' => __('PESQUISAR', true), 'class' => 'btn btn-blue btn-block')); ?>

	</div>


</div>
<?php $this->end(); ?>

<?php $this->start('right-panel'); ?>
<div class="col-sm-6">
	<!-- start: SELECT BOX PANEL -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-external-link-square"></i>
			Para outras Entidades
			<div class="panel-tools">
				<a href="#" class="btn btn-xs btn-link panel-collapse collapses">
				</a>
				<a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
					<i class="fa fa-wrench"></i>
				</a>
				<a href="#" class="btn btn-xs btn-link panel-refresh">
					<i class="fa fa-refresh"></i>
				</a>
				<a href="#" class="btn btn-xs btn-link panel-expand">
					<i class="fa fa-resize-full"></i>
				</a>
				<a href="#" class="btn btn-xs btn-link panel-close">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('RequisicaoPedido', array('role' => 'form', 'class' => '', 'inputDefaults' => array())); ?>
			<div class="form-group">
				<label>
					<?php echo __('Codigo da Entidade') ?>
				</label>
				<?php echo $this->Form->input('codigo', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<label>
					<?php echo __('Numero de Documento de Identificacao') ?>
				</label>
				<div>
					<?php echo $this->Form->input('documento_identificacao_numero', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label>
					<?php echo __('Apelido') ?>
				</label>
				<div>
					<?php echo $this->Form->input('apelido', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label>
					<?php echo __('Outros Nomes') ?>
				</label>
				<div>
					<?php echo $this->Form->input('nomes', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
					<?php echo $this->Html->link('Voltar', array('action' => 'index'), array('class' => 'btn btn-light-grey btn-block')) ?>


				</div>
				<div class="col-sm-2 col-sm-offset-8">
					<?php echo $this->Form->hidden('tipo_pesquisa', array('value' => 'outros')) ?>
					<?php echo $this->Form->end(array('label' => __('PESQUISAR', true), 'class' => 'btn btn-blue btn-block')); ?>

				</div>


			</div>
		</div>
	</div>
	<!-- end: SELECT BOX PANEL -->
</div>
<?php $this->end(); ?>



<?php if (isset($resultado_estudantes)) { ?>
	<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1><?php echo __('Estudantes') ?></h1><span></span>
			</div>
			<div class="block-content">
				<table id="tabela-ajax" class="table">
					<thead>
						<tr>


							<th ><?php echo __('Codigo'); ?></th>
							<th><?php echo __('Nome'); ?></th>
							<th><?php __('Curso'); ?></th>
							<td class="tc last"><?php echo __('Acção'); ?></td>

						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;

						foreach ($estudantes as $aluno):
							$class = "first";
							if ($i++ % 2 == 0) {
								$class = ' class="even"';
							}
							?>
							<tr<?php echo $class; ?>>


								<td><?php echo $this->Html->link($aluno['Aluno']['codigo'], array('plugin' => 'requisicoes', 'controller' => 'requisicoes_pedidos', 'action' => 'registar_requisicao_estudante', $aluno['Aluno']['id'])); ?>&nbsp;</td>
								<td><?php echo $aluno['Entidade']['name']; ?>&nbsp;</td>
								<td><?php echo $aluno['Curso']['name']; ?>&nbsp;</td>




								<td class="accoes">
								</td>

							</tr>

						<?php endforeach;
						?>						</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="clear height-fix"></div>

<?php } ?>
<div class="clear height-fix"></div>

</div>
<!--! end of #main-content -->


<?php if (isset($resultado_entidades)) { ?>
	<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1><?php echo __('Estudantes') ?></h1><span></span>
			</div>
			<div class="block-content">
				<table id="tabela-ajax" class="table">
					<thead>
						<tr>


							<th ><?php echo __('Codigo'); ?></th>
							<th><?php echo __('Nome'); ?></th>
							<th><?php echo __('Numero de Identificacao'); ?></th>
							<th><?php echo __('Telemovel'); ?></th>
							<th><?php echo __('Email'); ?></th>
							<td class="tc last"><?php echo __('Acção'); ?></td>

						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;

						foreach ($entidades as $entidade):
							$class = "first";
							if ($i++ % 2 == 0) {
								$class = ' class="even"';
							}
							?>
							<tr<?php echo $class; ?>>


								<td><?php echo $this->Html->link($entidade['Entidade']['codigo'], array('plugin' => 'requisicoes', 'controller' => 'requisicoes_pedidos', 'action' => 'registar_requisicao_entidade', $entidade['Entidade']['id'])); ?>&nbsp;</td>
								<td><?php echo $entidade['Entidade']['name']; ?>&nbsp;</td>
								<td><?php echo $entidade['Entidade']['documento_identificacao_numero']; ?>&nbsp;</td>
								<td><?php echo $entidade['Entidade']['telemovel']; ?>&nbsp;</td>
								<td><?php echo $entidade['Entidade']['email']; ?>&nbsp;</td>




								<td class="accoes">
								</td>

							</tr>

						<?php endforeach;
						?>						</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="clear height-fix"></div>

<?php } ?>
<div class="clear height-fix"></div>

</div>
<!--! end of #main-content -->


