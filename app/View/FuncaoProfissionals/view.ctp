<div class="funcaoProfissionals view">
<h2><?php  echo __('Funcao Profissional'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($funcaoProfissional['FuncaoProfissional']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($funcaoProfissional['FuncaoProfissional']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcao Profissional'), array('action' => 'edit', $funcaoProfissional['FuncaoProfissional']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Funcao Profissional'), array('action' => 'delete', $funcaoProfissional['FuncaoProfissional']['id']), null, __('Are you sure you want to delete # %s?', $funcaoProfissional['FuncaoProfissional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcao Profissionals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcao Profissional'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($funcaoProfissional['Funcionario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Grau Academico Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Superior Hierarquico'); ?></th>
		<th><?php echo __('Data Inicio'); ?></th>
		<th><?php echo __('Tipo Funcionario Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Unidade Organica Id'); ?></th>
		<th><?php echo __('Funcao Profissional Id'); ?></th>
		<th><?php echo __('Categoria Funcionario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($funcaoProfissional['Funcionario'] as $funcionario): ?>
		<tr>
			<td><?php echo $funcionario['id']; ?></td>
			<td><?php echo $funcionario['user_id']; ?></td>
			<td><?php echo $funcionario['grau_academico_id']; ?></td>
			<td><?php echo $funcionario['cargo_id']; ?></td>
			<td><?php echo $funcionario['superior_hierarquico']; ?></td>
			<td><?php echo $funcionario['data_inicio']; ?></td>
			<td><?php echo $funcionario['tipo_funcionario_id']; ?></td>
			<td><?php echo $funcionario['codigo']; ?></td>
			<td><?php echo $funcionario['created']; ?></td>
			<td><?php echo $funcionario['modified']; ?></td>
			<td><?php echo $funcionario['entidade_id']; ?></td>
			<td><?php echo $funcionario['unidade_organica_id']; ?></td>
			<td><?php echo $funcionario['funcao_profissional_id']; ?></td>
			<td><?php echo $funcionario['categoria_funcionario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funcionarios', 'action' => 'view', $funcionario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']), null, __('Are you sure you want to delete # %s?', $funcionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
