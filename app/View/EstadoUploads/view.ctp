<div class="estadoUploads view">
<h2><?php echo __('Estado Upload'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estadoUpload['EstadoUpload']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($estadoUpload['EstadoUpload']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado Upload'), array('action' => 'edit', $estadoUpload['EstadoUpload']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado Upload'), array('action' => 'delete', $estadoUpload['EstadoUpload']['id']), null, __('Are you sure you want to delete # %s?', $estadoUpload['EstadoUpload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Uploads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Upload'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Uploads'); ?></h3>
	<?php if (!empty($estadoUpload['Upload'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Tipo Upload Id'); ?></th>
		<th><?php echo __('Data Upload'); ?></th>
		<th><?php echo __('Estado Upload Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('File Url'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoUpload['Upload'] as $upload): ?>
		<tr>
			<td><?php echo $upload['id']; ?></td>
			<td><?php echo $upload['name']; ?></td>
			<td><?php echo $upload['tipo_upload_id']; ?></td>
			<td><?php echo $upload['data_upload']; ?></td>
			<td><?php echo $upload['estado_upload_id']; ?></td>
			<td><?php echo $upload['created']; ?></td>
			<td><?php echo $upload['modified']; ?></td>
			<td><?php echo $upload['created_by']; ?></td>
			<td><?php echo $upload['modified_by']; ?></td>
			<td><?php echo $upload['file_url']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'uploads', 'action' => 'view', $upload['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'uploads', 'action' => 'edit', $upload['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'uploads', 'action' => 'delete', $upload['id']), null, __('Are you sure you want to delete # %s?', $upload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
