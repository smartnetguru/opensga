<div class="cooperacaoAcordoAreas view">
<h2><?php echo __('Cooperacao Acordo Area'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooperacao Acordo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cooperacaoAcordoArea['CooperacaoAcordo']['name'], array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordoArea['CooperacaoAcordo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooperacao Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cooperacaoAcordoArea['CooperacaoArea']['name'], array('controller' => 'cooperacao_areas', 'action' => 'view', $cooperacaoAcordoArea['CooperacaoArea']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cooperacao Acordo Area'), array('action' => 'edit', $cooperacaoAcordoArea['CooperacaoAcordoArea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cooperacao Acordo Area'), array('action' => 'delete', $cooperacaoAcordoArea['CooperacaoAcordoArea']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordoArea['CooperacaoAcordoArea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Areas'), array('controller' => 'cooperacao_areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Area'), array('controller' => 'cooperacao_areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
