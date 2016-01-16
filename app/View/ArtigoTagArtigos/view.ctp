<div class="artigoTagArtigos view">
<h2><?php echo __('Artigo Tag Artigo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigoTagArtigo['ArtigoTagArtigo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoTagArtigo['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $artigoTagArtigo['Artigo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoTagArtigo['ArtigoTag']['name'], array('controller' => 'artigo_tags', 'action' => 'view', $artigoTagArtigo['ArtigoTag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($artigoTagArtigo['ArtigoTagArtigo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($artigoTagArtigo['ArtigoTagArtigo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($artigoTagArtigo['ArtigoTagArtigo']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($artigoTagArtigo['ArtigoTagArtigo']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoTagArtigo['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $artigoTagArtigo['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo Tag Artigo'), array('action' => 'edit', $artigoTagArtigo['ArtigoTagArtigo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo Tag Artigo'), array('action' => 'delete', $artigoTagArtigo['ArtigoTagArtigo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoTagArtigo['ArtigoTagArtigo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Tag Artigos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Tag Artigo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Tags'), array('controller' => 'artigo_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Tag'), array('controller' => 'artigo_tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
