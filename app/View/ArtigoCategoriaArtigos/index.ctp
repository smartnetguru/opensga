<div class="artigoCategoriaArtigos index">
	<h2><?php echo __('Artigo Categoria Artigos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('artigo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('artigo_categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($artigoCategoriaArtigos as $artigoCategoriaArtigo): ?>
	<tr>
		<td><?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($artigoCategoriaArtigo['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $artigoCategoriaArtigo['Artigo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($artigoCategoriaArtigo['ArtigoCategoria']['name'], array('controller' => 'artigo_categorias', 'action' => 'view', $artigoCategoriaArtigo['ArtigoCategoria']['id'])); ?>
		</td>
		<td><?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['created']); ?>&nbsp;</td>
		<td><?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['modified']); ?>&nbsp;</td>
		<td><?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['modified_by']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($artigoCategoriaArtigo['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $artigoCategoriaArtigo['EstadoObjecto']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Artigo Categoria Artigo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Categorias'), array('controller' => 'artigo_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Categoria'), array('controller' => 'artigo_categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
