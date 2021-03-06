<div class="entidadeNecessidades index">
    <h2><?php echo __('Entidade Necessidades'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
            <th><?php echo $this->Paginator->sort('necessidade_especial_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th><?php echo $this->Paginator->sort('detalhes'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($entidadeNecessidades as $entidadeNecessidade): ?>
            <tr>
                <td><?php echo h($entidadeNecessidade['EntidadeNecessidade']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($entidadeNecessidade['Entidade']['name'], [
                            'controller' => 'entidades',
                            'action'     => 'view',
                            $entidadeNecessidade['Entidade']['id'],
                    ]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($entidadeNecessidade['NecessidadeEspecial']['name'], [
                            'controller' => 'necessidade_especials',
                            'action'     => 'view',
                            $entidadeNecessidade['NecessidadeEspecial']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($entidadeNecessidade['EntidadeNecessidade']['created']); ?>&nbsp;</td>
                <td><?php echo h($entidadeNecessidade['EntidadeNecessidade']['modified']); ?>&nbsp;</td>
                <td><?php echo h($entidadeNecessidade['EntidadeNecessidade']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($entidadeNecessidade['EntidadeNecessidade']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($entidadeNecessidade['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $entidadeNecessidade['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($entidadeNecessidade['EntidadeNecessidade']['detalhes']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $entidadeNecessidade['EntidadeNecessidade']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $entidadeNecessidade['EntidadeNecessidade']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $entidadeNecessidade['EntidadeNecessidade']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $entidadeNecessidade['EntidadeNecessidade']['id']),
                            ]); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
            ]);
        ?>    </p>
    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), [], null, ['class' => 'prev disabled']);
            echo $this->Paginator->numbers(['separator' => '']);
            echo $this->Paginator->next(__('next') . ' >', [], null, ['class' => 'next disabled']);
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Entidade Necessidade'), ['action' => 'add']); ?></li>
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
