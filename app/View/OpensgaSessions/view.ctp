<div class="opensgaSessions view">
<h2><?php echo __('Opensga Sessiom'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($opensgaSessiom['OpensgaSessiom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($opensgaSessiom['OpensgaSessiom']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expires'); ?></dt>
		<dd>
			<?php echo h($opensgaSessiom['OpensgaSessiom']['expires']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Opensga Sessiom'), array('action' => 'edit', $opensgaSessiom['OpensgaSessiom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Opensga Sessiom'), array('action' => 'delete', $opensgaSessiom['OpensgaSessiom']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $opensgaSessiom['OpensgaSessiom']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Opensga Sessions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opensga Sessiom'), array('action' => 'add')); ?> </li>
	</ul>
</div>
