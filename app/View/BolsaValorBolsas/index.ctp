<div class="bolsaValorBolsas index">
    <h2><?php echo __('Bolsa Valor Bolsas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('valor'); ?></th>
            <th><?php echo $this->Paginator->sort('ano_lectivo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('bolsa_tipo_bolsa_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($bolsaValorBolsas as $bolsaValorBolsa): ?>
                <tr>
                    <td><?php echo h($bolsaValorBolsa['BolsaValorBolsa']['id']); ?>&nbsp;</td>
                    <td><?php echo h($bolsaValorBolsa['BolsaValorBolsa']['name']); ?>&nbsp;</td>
                    <td><?php echo h($bolsaValorBolsa['BolsaValorBolsa']['valor']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($bolsaValorBolsa['AnoLectivo']['codigo'], [
                                'controller' => 'anolectivos',
                                'action'     => 'view',
                                $bolsaValorBolsa['AnoLectivo']['id'],
                        ]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($bolsaValorBolsa['BolsaTipoBolsa']['name'], [
                                'controller' => 'bolsa_tipo_bolsas',
                                'action'     => 'view',
                                $bolsaValorBolsa['BolsaTipoBolsa']['id'],
                        ]); ?>
                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $bolsaValorBolsa['BolsaValorBolsa']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $bolsaValorBolsa['BolsaValorBolsa']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $bolsaValorBolsa['BolsaValorBolsa']['id']], null,
                                __('Are you sure you want to delete # %s?',
                                        $bolsaValorBolsa['BolsaValorBolsa']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Bolsa Valor Bolsa'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
