<div class="cooperacaoAcordoObservacaos view">
<h2><?php echo __('Cooperacao Acordo Observacao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooperacao Acordo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cooperacaoAcordoObservacao['CooperacaoAcordo']['name'], array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordoObservacao['CooperacaoAcordo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cooperacao Acordo Observacao'), array('action' => 'edit', $cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cooperacao Acordo Observacao'), array('action' => 'delete', $cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Observacaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Observacao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
