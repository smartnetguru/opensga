<div class="artigoTags view">
<h2><?php echo __('Artigo Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigoTag['ArtigoTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($artigoTag['ArtigoTag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($artigoTag['ArtigoTag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($artigoTag['ArtigoTag']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($artigoTag['ArtigoTag']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($artigoTag['ArtigoTag']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoTag['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $artigoTag['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo Tag'), array('action' => 'edit', $artigoTag['ArtigoTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo Tag'), array('action' => 'delete', $artigoTag['ArtigoTag']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoTag['ArtigoTag']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Tag Artigos'), array('controller' => 'artigo_tag_artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Tag Artigo'), array('controller' => 'artigo_tag_artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artigo Tag Artigos'); ?></h3>
	<?php if (!empty($artigoTag['ArtigoTagArtigo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Artigo Id'); ?></th>
		<th><?php echo __('Artigo Tag Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigoTag['ArtigoTagArtigo'] as $artigoTagArtigo): ?>
		<tr>
			<td><?php echo $artigoTagArtigo['id']; ?></td>
			<td><?php echo $artigoTagArtigo['artigo_id']; ?></td>
			<td><?php echo $artigoTagArtigo['artigo_tag_id']; ?></td>
			<td><?php echo $artigoTagArtigo['created']; ?></td>
			<td><?php echo $artigoTagArtigo['modified']; ?></td>
			<td><?php echo $artigoTagArtigo['created_by']; ?></td>
			<td><?php echo $artigoTagArtigo['modified_by']; ?></td>
			<td><?php echo $artigoTagArtigo['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artigo_tag_artigos', 'action' => 'view', $artigoTagArtigo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artigo_tag_artigos', 'action' => 'edit', $artigoTagArtigo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artigo_tag_artigos', 'action' => 'delete', $artigoTagArtigo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoTagArtigo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artigo Tag Artigo'), array('controller' => 'artigo_tag_artigos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
