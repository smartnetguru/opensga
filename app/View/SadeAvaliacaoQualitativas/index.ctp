<div class="sadeAvaliacaoQualitativas index">
    <h2><?php echo __('Sade Avaliacao Qualitativas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('sade_avaliador_id'); ?></th>
            <th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
            <th><?php echo $this->Paginator->sort('sade_parametro_id'); ?></th>
            <th><?php echo $this->Paginator->sort('resposta'); ?></th>
            <th><?php echo $this->Paginator->sort('pontos_obtidos'); ?></th>
            <th><?php echo $this->Paginator->sort('ano_lectivo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('data'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($sadeAvaliacaoQualitativas as $sadeAvaliacaoQualitativa): ?>
                <tr>
                    <td><?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($sadeAvaliacaoQualitativa['SadeAvaliador']['id'], [
                                'controller' => 'sade_avaliadors',
                                'action'     => 'view',
                                $sadeAvaliacaoQualitativa['SadeAvaliador']['id'],
                        ]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($sadeAvaliacaoQualitativa['Entidade']['name'], [
                                'controller' => 'entidades',
                                'action'     => 'view',
                                $sadeAvaliacaoQualitativa['Entidade']['id'],
                        ]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($sadeAvaliacaoQualitativa['SadeParametro']['id'], [
                                'controller' => 'sade_parametros',
                                'action'     => 'view',
                                $sadeAvaliacaoQualitativa['SadeParametro']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['resposta']); ?>&nbsp;</td>
                    <td><?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['pontos_obtidos']); ?>
                        &nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($sadeAvaliacaoQualitativa['AnoLectivo']['codigo'], [
                                'controller' => 'anolectivos',
                                'action'     => 'view',
                                $sadeAvaliacaoQualitativa['AnoLectivo']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['data']); ?>&nbsp;</td>
                    <td><?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['created']); ?>&nbsp;</td>
                    <td><?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['modified']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id']],
                                null, __('Are you sure you want to delete # %s?',
                                        $sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Avaliadors'),
                    ['controller' => 'sade_avaliadors', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliador'),
                    ['controller' => 'sade_avaliadors', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Parametros'),
                    ['controller' => 'sade_parametros', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Parametro'),
                    ['controller' => 'sade_parametros', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
    </ul>
</div>
