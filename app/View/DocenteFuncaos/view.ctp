<div class="docenteFuncaos view">
<h2><?php  echo __('Docente Funcao');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docenteFuncao['DocenteFuncao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($docenteFuncao['DocenteFuncao']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente Funcao'), array('action' => 'edit', $docenteFuncao['DocenteFuncao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docente Funcao'), array('action' => 'delete', $docenteFuncao['DocenteFuncao']['id']), null, __('Are you sure you want to delete # %s?', $docenteFuncao['DocenteFuncao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Funcaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Funcao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docentes');?></h3>
	<?php if (!empty($docenteFuncao['Docente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Seccao Id'); ?></th>
		<th><?php echo __('Docente Categoria Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Docente Funcao Id'); ?></th>
		<th><?php echo __('Unidade Organica Id'); ?></th>
		<th><?php echo __('Regime Trabalho Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($docenteFuncao['Docente'] as $docente): ?>
		<tr>
			<td><?php echo $docente['id'];?></td>
			<td><?php echo $docente['entidade_id'];?></td>
			<td><?php echo $docente['seccao_id'];?></td>
			<td><?php echo $docente['docente_categoria_id'];?></td>
			<td><?php echo $docente['name'];?></td>
			<td><?php echo $docente['docente_funcao_id'];?></td>
			<td><?php echo $docente['unidade_organica_id'];?></td>
			<td><?php echo $docente['regime_trabalho_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docentes', 'action' => 'view', $docente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docentes', 'action' => 'edit', $docente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docentes', 'action' => 'delete', $docente['id']), null, __('Are you sure you want to delete # %s?', $docente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
