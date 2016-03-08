<div class="entidadeNecessidades view">
    <h2><?php echo __('Entidade Necessidade'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($entidadeNecessidade['EntidadeNecessidade']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($entidadeNecessidade['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $entidadeNecessidade['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Necessidade Especial'); ?></dt>
        <dd>
            <?php echo $this->Html->link($entidadeNecessidade['NecessidadeEspecial']['name'], [
                    'controller' => 'necessidade_especials',
                    'action'     => 'view',
                    $entidadeNecessidade['NecessidadeEspecial']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($entidadeNecessidade['EntidadeNecessidade']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($entidadeNecessidade['EntidadeNecessidade']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($entidadeNecessidade['EntidadeNecessidade']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($entidadeNecessidade['EntidadeNecessidade']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($entidadeNecessidade['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $entidadeNecessidade['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Detalhes'); ?></dt>
        <dd>
            <?php echo h($entidadeNecessidade['EntidadeNecessidade']['detalhes']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Entidade Necessidade'),
                    ['action' => 'edit', $entidadeNecessidade['EntidadeNecessidade']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Entidade Necessidade'),
                    ['action' => 'delete', $entidadeNecessidade['EntidadeNecessidade']['id']], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $entidadeNecessidade['EntidadeNecessidade']['id']),
                    ]); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidade Necessidades'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade Necessidade'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Necessidade Especials'),
                    ['controller' => 'necessidade_especials', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Necessidade Especial'),
                    ['controller' => 'necessidade_especials', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
