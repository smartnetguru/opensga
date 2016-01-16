<div class="docenteUnidadeOrganicas view">
<h2><?php echo __('Docente Unidade Organica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docenteUnidadeOrganica['Docente']['id'], array('controller' => 'docentes', 'action' => 'view', $docenteUnidadeOrganica['Docente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidade Organica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docenteUnidadeOrganica['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $docenteUnidadeOrganica['UnidadeOrganica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docenteUnidadeOrganica['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $docenteUnidadeOrganica['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inicio'); ?></dt>
		<dd>
			<?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['data_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Fim'); ?></dt>
		<dd>
			<?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['data_fim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create By'); ?></dt>
		<dd>
			<?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['create_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente Unidade Organica'), array('action' => 'edit', $docenteUnidadeOrganica['DocenteUnidadeOrganica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docente Unidade Organica'), array('action' => 'delete', $docenteUnidadeOrganica['DocenteUnidadeOrganica']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $docenteUnidadeOrganica['DocenteUnidadeOrganica']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Unidade Organicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Unidade Organica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
