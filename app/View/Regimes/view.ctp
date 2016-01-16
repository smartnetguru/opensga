<div class="regimes view">
<h2><?php echo __('Regime'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($regime['Regime']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($regime['Regime']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Regime'), array('action' => 'edit', $regime['Regime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Regime'), array('action' => 'delete', $regime['Regime']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $regime['Regime']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Regimes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regime'), array('action' => 'add')); ?> </li>
	</ul>
</div>
