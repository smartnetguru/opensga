<div class="candidatoAlumnis form">
<?php echo $this->Form->create('AlumniCandidatoAlumni'); ?>
	<fieldset>
		<legend><?php echo __('Edit Candidato Alumni'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('apelido');
		echo $this->Form->input('nomes');
		echo $this->Form->input('data_nascimento');
		echo $this->Form->input('nome_pai');
		echo $this->Form->input('nome_mae');
		echo $this->Form->input('genero_id');
		echo $this->Form->input('estado_civil_id');
		echo $this->Form->input('pais_nascimento');
		echo $this->Form->input('provincia_nascimento');
		echo $this->Form->input('cidade_nascimento');
		echo $this->Form->input('pais_morada');
		echo $this->Form->input('provincia_morada');
		echo $this->Form->input('cidade_morada');
		echo $this->Form->input('numero_estudante');
		echo $this->Form->input('email');
		echo $this->Form->input('telemovel');
		echo $this->Form->input('unidade_organica_id');
		echo $this->Form->input('ano_conclusao');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('grau_academico_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AlumniCandidatoAlumni.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AlumniCandidatoAlumni.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidato Alumnis'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Civils'), array('controller' => 'estado_civils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Civil'), array('controller' => 'estado_civils', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grau Academicos'), array('controller' => 'grau_academicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grau Academico'), array('controller' => 'grau_academicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnis'), array('controller' => 'alumnis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumni'), array('controller' => 'alumnis', 'action' => 'add')); ?> </li>
	</ul>
</div>
