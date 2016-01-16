<div class="docenteDisciplinas view">
<h2><?php echo __('Docente Disciplina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docenteDisciplina['DocenteDisciplina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docenteDisciplina['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $docenteDisciplina['Disciplina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docenteDisciplina['Docente']['id'], array('controller' => 'docentes', 'action' => 'view', $docenteDisciplina['Docente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docenteDisciplina['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $docenteDisciplina['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($docenteDisciplina['DocenteDisciplina']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($docenteDisciplina['DocenteDisciplina']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($docenteDisciplina['DocenteDisciplina']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($docenteDisciplina['DocenteDisciplina']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente Disciplina'), array('action' => 'edit', $docenteDisciplina['DocenteDisciplina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docente Disciplina'), array('action' => 'delete', $docenteDisciplina['DocenteDisciplina']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $docenteDisciplina['DocenteDisciplina']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Disciplinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Disciplina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
