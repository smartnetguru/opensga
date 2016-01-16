<div class="entidadeIdentificacaos view">
<h2><?php  echo __('Entidade Identificacao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidadeIdentificacao['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $entidadeIdentificacao['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento Identificacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidadeIdentificacao['DocumentoIdentificacao']['name'], array('controller' => 'documento_identificacaos', 'action' => 'view', $entidadeIdentificacao['DocumentoIdentificacao']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Emissao'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['data_emissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Validade'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['data_validade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidadeIdentificacao['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $entidadeIdentificacao['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local Emissao'); ?></dt>
		<dd>
			<?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['local_emissao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entidade Identificacao'), array('action' => 'edit', $entidadeIdentificacao['EntidadeIdentificacao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entidade Identificacao'), array('action' => 'delete', $entidadeIdentificacao['EntidadeIdentificacao']['id']), null, __('Are you sure you want to delete # %s?', $entidadeIdentificacao['EntidadeIdentificacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidade Identificacaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade Identificacao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documento Identificacaos'), array('controller' => 'documento_identificacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento Identificacao'), array('controller' => 'documento_identificacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
