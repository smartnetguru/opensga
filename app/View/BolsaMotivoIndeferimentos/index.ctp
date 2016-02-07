<div class="bolsaMotivoIndeferimentos index">
    <h2><?php echo __('Bolsa Motivo Indeferimentos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('alinea'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($bolsaMotivoIndeferimentos as $bolsaMotivoIndeferimento): ?>
                <tr>
                    <td><?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id']); ?>&nbsp;</td>
                    <td><?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['created']); ?>&nbsp;</td>
                    <td><?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['modified']); ?>&nbsp;</td>
                    <td><?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['name']); ?>&nbsp;</td>
                    <td><?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['alinea']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id']],
                                null, __('Are you sure you want to delete # %s?',
                                        $bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Bolsa Motivo Indeferimento'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Resultados'),
                    ['controller' => 'bolsa_resultados', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Resultado'),
                    ['controller' => 'bolsa_resultados', 'action' => 'add']); ?> </li>
    </ul>
</div>
