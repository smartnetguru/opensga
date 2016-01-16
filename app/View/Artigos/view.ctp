<div class="artigos view">
<h2><?php echo __('Artigo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigo['User']['name'], array('controller' => 'users', 'action' => 'view', $artigo['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigo['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $artigo['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Publicacao'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['data_publicacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conteudo'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['conteudo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumo'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['resumo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigo['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $artigo['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo Estado Artigo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigo['ArtigoEstadoArtigo']['name'], array('controller' => 'artigo_estado_artigos', 'action' => 'view', $artigo['ArtigoEstadoArtigo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo'), array('action' => 'edit', $artigo['Artigo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo'), array('action' => 'delete', $artigo['Artigo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigo['Artigo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Estado Artigos'), array('controller' => 'artigo_estado_artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Estado Artigo'), array('controller' => 'artigo_estado_artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Area Academicas'), array('controller' => 'artigo_area_academicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Area Academica'), array('controller' => 'artigo_area_academicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Area Pesquisas'), array('controller' => 'artigo_area_pesquisas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Area Pesquisa'), array('controller' => 'artigo_area_pesquisas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Metas'), array('controller' => 'artigo_metas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Meta'), array('controller' => 'artigo_metas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artigo Area Academicas'); ?></h3>
	<?php if (!empty($artigo['ArtigoAreaAcademica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Artigo Id'); ?></th>
		<th><?php echo __('Area Academica Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigo['ArtigoAreaAcademica'] as $artigoAreaAcademica): ?>
		<tr>
			<td><?php echo $artigoAreaAcademica['id']; ?></td>
			<td><?php echo $artigoAreaAcademica['artigo_id']; ?></td>
			<td><?php echo $artigoAreaAcademica['area_academica_id']; ?></td>
			<td><?php echo $artigoAreaAcademica['created']; ?></td>
			<td><?php echo $artigoAreaAcademica['modified']; ?></td>
			<td><?php echo $artigoAreaAcademica['created_by']; ?></td>
			<td><?php echo $artigoAreaAcademica['modified_by']; ?></td>
			<td><?php echo $artigoAreaAcademica['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artigo_area_academicas', 'action' => 'view', $artigoAreaAcademica['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artigo_area_academicas', 'action' => 'edit', $artigoAreaAcademica['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artigo_area_academicas', 'action' => 'delete', $artigoAreaAcademica['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoAreaAcademica['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artigo Area Academica'), array('controller' => 'artigo_area_academicas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Artigo Area Pesquisas'); ?></h3>
	<?php if (!empty($artigo['ArtigoAreaPesquisa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Artigo Id'); ?></th>
		<th><?php echo __('Area Pesquisa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigo['ArtigoAreaPesquisa'] as $artigoAreaPesquisa): ?>
		<tr>
			<td><?php echo $artigoAreaPesquisa['id']; ?></td>
			<td><?php echo $artigoAreaPesquisa['artigo_id']; ?></td>
			<td><?php echo $artigoAreaPesquisa['area_pesquisa_id']; ?></td>
			<td><?php echo $artigoAreaPesquisa['created']; ?></td>
			<td><?php echo $artigoAreaPesquisa['modified']; ?></td>
			<td><?php echo $artigoAreaPesquisa['created_by']; ?></td>
			<td><?php echo $artigoAreaPesquisa['modified_by']; ?></td>
			<td><?php echo $artigoAreaPesquisa['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artigo_area_pesquisas', 'action' => 'view', $artigoAreaPesquisa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artigo_area_pesquisas', 'action' => 'edit', $artigoAreaPesquisa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artigo_area_pesquisas', 'action' => 'delete', $artigoAreaPesquisa['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoAreaPesquisa['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artigo Area Pesquisa'), array('controller' => 'artigo_area_pesquisas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Artigo Metas'); ?></h3>
	<?php if (!empty($artigo['ArtigoMeta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Artigo Id'); ?></th>
		<th><?php echo __('Meta Key'); ?></th>
		<th><?php echo __('Meta Value'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigo['ArtigoMeta'] as $artigoMeta): ?>
		<tr>
			<td><?php echo $artigoMeta['id']; ?></td>
			<td><?php echo $artigoMeta['artigo_id']; ?></td>
			<td><?php echo $artigoMeta['meta_key']; ?></td>
			<td><?php echo $artigoMeta['meta_value']; ?></td>
			<td><?php echo $artigoMeta['estado_objecto_id']; ?></td>
			<td><?php echo $artigoMeta['created']; ?></td>
			<td><?php echo $artigoMeta['modified']; ?></td>
			<td><?php echo $artigoMeta['created_by']; ?></td>
			<td><?php echo $artigoMeta['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artigo_metas', 'action' => 'view', $artigoMeta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artigo_metas', 'action' => 'edit', $artigoMeta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artigo_metas', 'action' => 'delete', $artigoMeta['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoMeta['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artigo Meta'), array('controller' => 'artigo_metas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
