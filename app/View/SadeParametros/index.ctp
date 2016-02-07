<div class="sadeParametros index">
    <h2><?php echo __('Sade Parametros'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('codigo'); ?></th>
            <th><?php echo $this->Paginator->sort('descricao'); ?></th>
            <th><?php echo $this->Paginator->sort('sade_indicador_id'); ?></th>
            <th><?php echo $this->Paginator->sort('quantidade_padrao'); ?></th>
            <th><?php echo $this->Paginator->sort('pontos_padrao'); ?></th>
            <th><?php echo $this->Paginator->sort('pontos_bonificados'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($sadeParametros as $sadeParametro): ?>
                <tr>
                    <td><?php echo h($sadeParametro['SadeParametro']['id']); ?>&nbsp;</td>
                    <td><?php echo h($sadeParametro['SadeParametro']['codigo']); ?>&nbsp;</td>
                    <td><?php echo h($sadeParametro['SadeParametro']['descricao']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($sadeParametro['SadeIndicador']['id'], [
                                'controller' => 'sade_indicadors',
                                'action'     => 'view',
                                $sadeParametro['SadeIndicador']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($sadeParametro['SadeParametro']['quantidade_padrao']); ?>&nbsp;</td>
                    <td><?php echo h($sadeParametro['SadeParametro']['pontos_padrao']); ?>&nbsp;</td>
                    <td><?php echo h($sadeParametro['SadeParametro']['pontos_bonificados']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $sadeParametro['SadeParametro']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $sadeParametro['SadeParametro']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $sadeParametro['SadeParametro']['id']], null,
                                __('Are you sure you want to delete # %s?', $sadeParametro['SadeParametro']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Sade Parametro'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Indicadors'),
                    ['controller' => 'sade_indicadors', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Indicador'),
                    ['controller' => 'sade_indicadors', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'),
                    ['controller' => 'sade_auto_avaliacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'),
                    ['controller' => 'sade_auto_avaliacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Alunos'),
                    ['controller' => 'sade_avaliacao_alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'),
                    ['controller' => 'sade_avaliacao_alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'add']); ?> </li>
    </ul>
</div>
