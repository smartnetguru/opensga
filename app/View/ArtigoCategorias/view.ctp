<div class="artigoCategorias view">
<h2><?php echo __('Artigo Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigoCategoria['ArtigoCategoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($artigoCategoria['ArtigoCategoria']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($artigoCategoria['ArtigoCategoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($artigoCategoria['ArtigoCategoria']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($artigoCategoria['ArtigoCategoria']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($artigoCategoria['ArtigoCategoria']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoCategoria['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $artigoCategoria['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo Categoria'), array('action' => 'edit', $artigoCategoria['ArtigoCategoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo Categoria'), array('action' => 'delete', $artigoCategoria['ArtigoCategoria']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoCategoria['ArtigoCategoria']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Categoria Artigos'), array('controller' => 'artigo_categoria_artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Categoria Artigo'), array('controller' => 'artigo_categoria_artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artigo Categoria Artigos'); ?></h3>
	<?php if (!empty($artigoCategoria['ArtigoCategoriaArtigo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Artigo Id'); ?></th>
		<th><?php echo __('Artigo Categoria Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigoCategoria['ArtigoCategoriaArtigo'] as $artigoCategoriaArtigo): ?>
		<tr>
			<td><?php echo $artigoCategoriaArtigo['id']; ?></td>
			<td><?php echo $artigoCategoriaArtigo['artigo_id']; ?></td>
			<td><?php echo $artigoCategoriaArtigo['artigo_categoria_id']; ?></td>
			<td><?php echo $artigoCategoriaArtigo['created']; ?></td>
			<td><?php echo $artigoCategoriaArtigo['modified']; ?></td>
			<td><?php echo $artigoCategoriaArtigo['created_by']; ?></td>
			<td><?php echo $artigoCategoriaArtigo['modified_by']; ?></td>
			<td><?php echo $artigoCategoriaArtigo['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artigo_categoria_artigos', 'action' => 'view', $artigoCategoriaArtigo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artigo_categoria_artigos', 'action' => 'edit', $artigoCategoriaArtigo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artigo_categoria_artigos', 'action' => 'delete', $artigoCategoriaArtigo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoCategoriaArtigo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artigo Categoria Artigo'), array('controller' => 'artigo_categoria_artigos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
