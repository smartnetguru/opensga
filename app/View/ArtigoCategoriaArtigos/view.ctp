<div class="artigoCategoriaArtigos view">
<h2><?php echo __('Artigo Categoria Artigo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoCategoriaArtigo['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $artigoCategoriaArtigo['Artigo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoCategoriaArtigo['ArtigoCategoria']['name'], array('controller' => 'artigo_categorias', 'action' => 'view', $artigoCategoriaArtigo['ArtigoCategoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($artigoCategoriaArtigo['ArtigoCategoriaArtigo']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoCategoriaArtigo['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $artigoCategoriaArtigo['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo Categoria Artigo'), array('action' => 'edit', $artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo Categoria Artigo'), array('action' => 'delete', $artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoCategoriaArtigo['ArtigoCategoriaArtigo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Categoria Artigos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Categoria Artigo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Categorias'), array('controller' => 'artigo_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Categoria'), array('controller' => 'artigo_categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
