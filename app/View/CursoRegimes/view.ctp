<div class="cursoRegimes view">
<h2><?php echo __('Curso Regime'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cursoRegime['CursoRegime']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursoRegime['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursoRegime['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regime'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursoRegime['Regime']['name'], array('controller' => 'regimes', 'action' => 'view', $cursoRegime['Regime']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cursoRegime['CursoRegime']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cursoRegime['CursoRegime']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($cursoRegime['CursoRegime']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($cursoRegime['CursoRegime']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso Regime'), array('action' => 'edit', $cursoRegime['CursoRegime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso Regime'), array('action' => 'delete', $cursoRegime['CursoRegime']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cursoRegime['CursoRegime']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Curso Regimes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso Regime'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regimes'), array('controller' => 'regimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regime'), array('controller' => 'regimes', 'action' => 'add')); ?> </li>
	</ul>
</div>
