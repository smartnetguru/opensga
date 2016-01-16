<div class="artigoCategorias form">
<?php echo $this->Form->create('ArtigoCategoria'); ?>
	<fieldset>
		<legend><?php echo __('Add Artigo Categoria'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('estado_objecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Artigo Categorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigo Categoria Artigos'), array('controller' => 'artigo_categoria_artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo Categoria Artigo'), array('controller' => 'artigo_categoria_artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
