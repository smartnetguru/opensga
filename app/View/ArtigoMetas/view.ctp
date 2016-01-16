<div class="artigoMetas view">
<h2><?php echo __('Artigo Meta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigoMeta['ArtigoMeta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoMeta['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $artigoMeta['Artigo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Key'); ?></dt>
		<dd>
			<?php echo h($artigoMeta['ArtigoMeta']['meta_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Value'); ?></dt>
		<dd>
			<?php echo h($artigoMeta['ArtigoMeta']['meta_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigoMeta['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $artigoMeta['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($artigoMeta['ArtigoMeta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($artigoMeta['ArtigoMeta']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($artigoMeta['ArtigoMeta']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($artigoMeta['ArtigoMeta']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo Meta'), array('action' => 'edit', $artigoMeta['ArtigoMeta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo Meta'), array('action' => 'delete', $artigoMeta['ArtigoMeta']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $artigoMeta['ArtigoMeta']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Metas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Meta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
