<?php
/**
 * CakePHP DatabaseLog Plugin
 *
 * Licensed under The MIT License.
 *
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @link https://github.com/dereuromark/CakePHP-DatabaseLog
 */
?>
<div class="database_log_plugin">

	<div class="logs index">
		<h2><?php echo __('Logs').'-->'.$totalLogs;?></h2>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover table-full-width dataTable">
		<tr>
				<th><?php echo $this->Paginator->sort('created');?></th>
				<th><?php echo $this->Paginator->sort('type');?></th>
				<th><?php echo $this->Paginator->sort('message');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($logs as $log):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $this->Time->niceShort($log['Log']['created']); ?>&nbsp;</td>
			<td><?php echo $log['Log']['type']; ?>&nbsp;</td>
			<td><?php echo nl2br(h($log['Log']['message'])); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View Details'), array('action' => 'view', $log['Log']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $log['Log']['id']), null, __('Are you sure you want to delete this log # %s?', $log['Log']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>

	</div>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Remove %s', __('Duplicates')), array('action' => 'remove_duplicates')); ?></li>
			<li><?php echo $this->Form->postLink(__('Reset %s', __('Logs')), array('action' => 'reset')); ?></li>
		</ul>
	</div>
</div>