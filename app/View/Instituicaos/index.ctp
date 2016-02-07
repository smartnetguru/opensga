<div class="instituicaos index">
    <h2><?php echo __('Instituicaos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('cidade_origem'); ?></th>
            <th><?php echo $this->Paginator->sort('provincia_origem'); ?></th>
            <th><?php echo $this->Paginator->sort('pais_origem'); ?></th>
            <th><?php echo $this->Paginator->sort('continente_origem'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($instituicaos as $instituicao): ?>
            <tr>
                <td><?php echo h($instituicao['Instituicao']['id']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['name']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['cidade_origem']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['provincia_origem']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['pais_origem']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['continente_origem']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['created']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['modified']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($instituicao['Instituicao']['modified_by']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $instituicao['Instituicao']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $instituicao['Instituicao']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $instituicao['Instituicao']['id']], null,
                            __('Are you sure you want to delete # %s?', $instituicao['Instituicao']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
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
        <li><?php echo $this->Html->link(__('New Instituicao'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Cooperacao Acordos'),
                    ['controller' => 'cooperacao_acordos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cooperacao Acordo'),
                    ['controller' => 'cooperacao_acordos', 'action' => 'add']); ?> </li>
    </ul>
</div>
