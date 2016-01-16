<div class="entidadeContactos view">
<h2><?php  echo __('Entidade Contacto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entidadeContacto['EntidadeContacto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidadeContacto['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $entidadeContacto['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Contacto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidadeContacto['TipoContacto']['name'], array('controller' => 'tipo_contactos', 'action' => 'view', $entidadeContacto['TipoContacto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($entidadeContacto['EntidadeContacto']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidadeContacto['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $entidadeContacto['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($entidadeContacto['EntidadeContacto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($entidadeContacto['EntidadeContacto']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($entidadeContacto['EntidadeContacto']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($entidadeContacto['EntidadeContacto']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entidade Contacto'), array('action' => 'edit', $entidadeContacto['EntidadeContacto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entidade Contacto'), array('action' => 'delete', $entidadeContacto['EntidadeContacto']['id']), null, __('Are you sure you want to delete # %s?', $entidadeContacto['EntidadeContacto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidade Contactos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade Contacto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Contactos'), array('controller' => 'tipo_contactos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Contacto'), array('controller' => 'tipo_contactos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
