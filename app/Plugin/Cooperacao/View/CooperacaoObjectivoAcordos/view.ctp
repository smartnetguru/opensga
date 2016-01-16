<div class="cooperacaoObjectivoAcordos view">
<h2><?php echo __('Cooperacao Objectivo Acordo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooperacao Acordo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cooperacaoObjectivoAcordo['CooperacaoAcordo']['name'], array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoObjectivoAcordo['CooperacaoAcordo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cooperacao Objectivo Acordo'), array('action' => 'edit', $cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cooperacao Objectivo Acordo'), array('action' => 'delete', $cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoObjectivoAcordo['CooperacaoObjectivoAcordo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Objectivo Acordos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Objectivo Acordo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
