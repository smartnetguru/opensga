<div class="funcaoProfissionalRoles view">
    <h2><?php echo __('Funcao Profissional Role'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Funcao Profissional'); ?></dt>
        <dd>
            <?php echo $this->Html->link($funcaoProfissionalRole['FuncaoProfissional']['name'], [
                    'controller' => 'funcao_profissionals',
                    'action'     => 'view',
                    $funcaoProfissionalRole['FuncaoProfissional']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Role'); ?></dt>
        <dd>
            <?php echo $this->Html->link($funcaoProfissionalRole['Role']['name'],
                    ['controller' => 'roles', 'action' => 'view', $funcaoProfissionalRole['Role']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($funcaoProfissionalRole['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $funcaoProfissionalRole['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Funcao Profissional Role'),
                    ['action' => 'edit', $funcaoProfissionalRole['FuncaoProfissionalRole']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Funcao Profissional Role'),
                    ['action' => 'delete', $funcaoProfissionalRole['FuncaoProfissionalRole']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $funcaoProfissionalRole['FuncaoProfissionalRole']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcao Profissional Roles'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcao Profissional Role'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcao Profissionals'),
                    ['controller' => 'funcao_profissionals', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcao Profissional'),
                    ['controller' => 'funcao_profissionals', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
