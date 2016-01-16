<div class="estadoObjectos form">
<?php echo $this->Form->create('EstadoObjecto'); ?>
	<fieldset>
		<legend><?php echo __('Add Estado Objecto'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Pedidos'), array('controller' => 'bolsa_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Pedido'), array('controller' => 'bolsa_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidato Graduacaos'), array('controller' => 'candidato_graduacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato Graduacao'), array('controller' => 'candidato_graduacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Curso Responsavels'), array('controller' => 'curso_responsavels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso Responsavel'), array('controller' => 'curso_responsavels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplina Docentes'), array('controller' => 'disciplina_docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina Docente'), array('controller' => 'disciplina_docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplina Plano Estudos'), array('controller' => 'disciplina_plano_estudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina Plano Estudo'), array('controller' => 'disciplina_plano_estudos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplina Unidade Organicas'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina Unidade Organica'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidade Contactos'), array('controller' => 'entidade_contactos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade Contacto'), array('controller' => 'entidade_contactos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidade Identificacaos'), array('controller' => 'entidade_identificacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade Identificacao'), array('controller' => 'entidade_identificacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forma Mudanca Cursos'), array('controller' => 'forma_mudanca_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Mudanca Curso'), array('controller' => 'forma_mudanca_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcao Profissional Roles'), array('controller' => 'funcao_profissional_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcao Profissional Role'), array('controller' => 'funcao_profissional_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Roles'), array('controller' => 'group_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group Role'), array('controller' => 'group_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Users'), array('controller' => 'groups_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups User'), array('controller' => 'groups_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plano Estudos'), array('controller' => 'plano_estudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano Estudo'), array('controller' => 'plano_estudos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Precedencias'), array('controller' => 'precedencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precedencia'), array('controller' => 'precedencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organica Roles'), array('controller' => 'unidade_organica_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica Role'), array('controller' => 'unidade_organica_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Roles'), array('controller' => 'user_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Role'), array('controller' => 'user_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
