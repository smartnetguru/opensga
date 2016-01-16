<div class="cursoNews form">
<?php echo $this->Form->create('CursoNews'); ?>
	<fieldset>
		<legend><?php echo __('Add Curso News'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('grau_academico_id');
		echo $this->Form->input('tipo_curso_id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('pagamento_exclusivo');
		echo $this->Form->input('unidade_organica_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('codigo_admissao');
		echo $this->Form->input('estado_objecto_id');
		echo $this->Form->input('ano_criacao');
		echo $this->Form->input('duracao');
		echo $this->Form->input('user_responsavel_curso');
		echo $this->Form->input('curso_responsavel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Curso News'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grau Academicos'), array('controller' => 'grau_academicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grau Academico'), array('controller' => 'grau_academicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Cursos'), array('controller' => 'tipo_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Curso'), array('controller' => 'tipo_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Curso Responsavels'), array('controller' => 'curso_responsavels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso Responsavel'), array('controller' => 'curso_responsavels', 'action' => 'add')); ?> </li>
	</ul>
</div>
