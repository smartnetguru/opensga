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

        <li><?php echo $this->Html->link(__('List Estado Objectos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Pedidos'),
                    ['controller' => 'bolsa_pedidos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Pedido'),
                    ['controller' => 'bolsa_pedidos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidato Graduacaos'),
                    ['controller' => 'candidato_graduacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Graduacao'),
                    ['controller' => 'candidato_graduacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Curso Responsavels'),
                    ['controller' => 'curso_responsavels', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso Responsavel'),
                    ['controller' => 'curso_responsavels', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Disciplina Docentes'),
                    ['controller' => 'disciplina_docentes', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Disciplina Docente'),
                    ['controller' => 'disciplina_docentes', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Disciplina Plano Estudos'),
                    ['controller' => 'disciplina_plano_estudos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Disciplina Plano Estudo'),
                    ['controller' => 'disciplina_plano_estudos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Disciplina Unidade Organicas'),
                    ['controller' => 'disciplina_unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Disciplina Unidade Organica'),
                    ['controller' => 'disciplina_unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidade Contactos'),
                    ['controller' => 'entidade_contactos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade Contacto'),
                    ['controller' => 'entidade_contactos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidade Identificacaos'),
                    ['controller' => 'entidade_identificacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade Identificacao'),
                    ['controller' => 'entidade_identificacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Forma Mudanca Cursos'),
                    ['controller' => 'forma_mudanca_cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Forma Mudanca Curso'),
                    ['controller' => 'forma_mudanca_cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcao Profissional Roles'),
                    ['controller' => 'funcao_profissional_roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcao Profissional Role'),
                    ['controller' => 'funcao_profissional_roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Group Roles'),
                    ['controller' => 'group_roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Group Role'),
                    ['controller' => 'group_roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Groups'), ['controller' => 'groups', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Group'), ['controller' => 'groups', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Groups Users'),
                    ['controller' => 'groups_users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Groups User'),
                    ['controller' => 'groups_users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Messages'),
                    ['controller' => 'messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message'), ['controller' => 'messages', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Plano Estudos'),
                    ['controller' => 'plano_estudos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Plano Estudo'),
                    ['controller' => 'plano_estudos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Precedencias'),
                    ['controller' => 'precedencias', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Precedencia'),
                    ['controller' => 'precedencias', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organica Roles'),
                    ['controller' => 'unidade_organica_roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica Role'),
                    ['controller' => 'unidade_organica_roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organicas'),
                    ['controller' => 'unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica'),
                    ['controller' => 'unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List User Roles'),
                    ['controller' => 'user_roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User Role'),
                    ['controller' => 'user_roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
