<div class="artigoEstadoArtigos view">
<h2><?php echo __('Artigo Estado Artigo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigoEstadoArtigo['ArtigoEstadoArtigo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($artigoEstadoArtigo['ArtigoEstadoArtigo']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo Estado Artigo'), array('action' => 'edit', $artigoEstadoArtigo['ArtigoEstadoArtigo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo Estado Artigo'), array('action' => 'delete', $artigoEstadoArtigo['ArtigoEstadoArtigo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoEstadoArtigo['ArtigoEstadoArtigo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Estado Artigos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Estado Artigo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artigos'); ?></h3>
	<?php if (!empty($artigoEstadoArtigo['Artigo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Data Publicacao'); ?></th>
		<th><?php echo __('Conteudo'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Resumo'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Artigo Estado Artigo Id'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigoEstadoArtigo['Artigo'] as $artigo): ?>
		<tr>
			<td><?php echo $artigo['id']; ?></td>
			<td><?php echo $artigo['user_id']; ?></td>
			<td><?php echo $artigo['entidade_id']; ?></td>
			<td><?php echo $artigo['data_publicacao']; ?></td>
			<td><?php echo $artigo['conteudo']; ?></td>
			<td><?php echo $artigo['titulo']; ?></td>
			<td><?php echo $artigo['resumo']; ?></td>
			<td><?php echo $artigo['estado_objecto_id']; ?></td>
			<td><?php echo $artigo['artigo_estado_artigo_id']; ?></td>
			<td><?php echo $artigo['slug']; ?></td>
			<td><?php echo $artigo['created']; ?></td>
			<td><?php echo $artigo['modified']; ?></td>
			<td><?php echo $artigo['created_by']; ?></td>
			<td><?php echo $artigo['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artigos', 'action' => 'view', $artigo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artigos', 'action' => 'edit', $artigo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artigos', 'action' => 'delete', $artigo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
