<div class="aulas view">
<h2><?php echo __('Aula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aula['Turma']['name'], array('controller' => 'turmas', 'action' => 'view', $aula['Turma']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aula['Docente']['id'], array('controller' => 'docentes', 'action' => 'view', $aula['Docente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tema Aula'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['tema_aula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio Aula'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['inicio_aula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fim Aula'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['fim_aula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala Aula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aula['SalaAula']['name'], array('controller' => 'sala_aulas', 'action' => 'view', $aula['SalaAula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aula'), array('action' => 'edit', $aula['Aula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aula'), array('action' => 'delete', $aula['Aula']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $aula['Aula']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sala Aulas'), array('controller' => 'sala_aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala Aula'), array('controller' => 'sala_aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
