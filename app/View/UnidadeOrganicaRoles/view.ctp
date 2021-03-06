<div class="unidadeOrganicaRoles view">
    <h2><?php echo __('Unidade Organica Role'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($unidadeOrganicaRole['UnidadeOrganicaRole']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Unidade Organica'); ?></dt>
        <dd>
            <?php echo $this->Html->link($unidadeOrganicaRole['UnidadeOrganica']['name'], [
                    'controller' => 'unidade_organicas',
                    'action'     => 'view',
                    $unidadeOrganicaRole['UnidadeOrganica']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Role'); ?></dt>
        <dd>
            <?php echo $this->Html->link($unidadeOrganicaRole['Role']['name'],
                    ['controller' => 'roles', 'action' => 'view', $unidadeOrganicaRole['Role']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($unidadeOrganicaRole['UnidadeOrganicaRole']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($unidadeOrganicaRole['UnidadeOrganicaRole']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($unidadeOrganicaRole['UnidadeOrganicaRole']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($unidadeOrganicaRole['UnidadeOrganicaRole']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($unidadeOrganicaRole['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $unidadeOrganicaRole['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Unidade Organica Role'),
                    ['action' => 'edit', $unidadeOrganicaRole['UnidadeOrganicaRole']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Unidade Organica Role'),
                    ['action' => 'delete', $unidadeOrganicaRole['UnidadeOrganicaRole']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $unidadeOrganicaRole['UnidadeOrganicaRole']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organica Roles'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica Role'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organicas'),
                    ['controller' => 'unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica'),
                    ['controller' => 'unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
