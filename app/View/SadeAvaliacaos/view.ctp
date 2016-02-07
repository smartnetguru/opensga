<div class="sadeAvaliacaos view">
    <h2><?php echo __('Sade Avaliacao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacao['SadeAvaliacao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacao['SadeAvaliacao']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AnoLectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacao['AnoLectivo']['codigo'],
                    ['controller' => 'anolectivos', 'action' => 'view', $sadeAvaliacao['AnoLectivo']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sade Avaliacao'),
                    ['action' => 'edit', $sadeAvaliacao['SadeAvaliacao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sade Avaliacao'),
                    ['action' => 'delete', $sadeAvaliacao['SadeAvaliacao']['id']], null,
                    __('Are you sure you want to delete # %s?', $sadeAvaliacao['SadeAvaliacao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'),
                    ['controller' => 'sade_auto_avaliacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'),
                    ['controller' => 'sade_auto_avaliacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Sade Auto Avaliacaos'); ?></h3>
    <?php if (!empty($sadeAvaliacao['SadeAutoAvaliacao'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Sade Parametro Id'); ?></th>
                <th><?php echo __('Resposta'); ?></th>
                <th><?php echo __('Pontos Obtidos'); ?></th>
                <th><?php echo __('Pontos Bonificados'); ?></th>
                <th><?php echo __('Detalhes'); ?></th>
                <th><?php echo __('AnoLectivo Id'); ?></th>
                <th><?php echo __('SemestreLectivo Id'); ?></th>
                <th><?php echo __('Data'); ?></th>
                <th><?php echo __('Sade Avaliacao Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($sadeAvaliacao['SadeAutoAvaliacao'] as $sadeAutoAvaliacao): ?>
                    <tr>
                        <td><?php echo $sadeAutoAvaliacao['id']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['entidade_id']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['sade_parametro_id']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['resposta']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['pontos_obtidos']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['pontos_bonificados']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['detalhes']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['ano_lectivo_id']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['semestre_lectivo_id']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['data']; ?></td>
                        <td><?php echo $sadeAutoAvaliacao['sade_avaliacao_id']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'sade_auto_avaliacaos',
                                    'action'     => 'view',
                                    $sadeAutoAvaliacao['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'sade_auto_avaliacaos',
                                    'action'     => 'edit',
                                    $sadeAutoAvaliacao['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'sade_auto_avaliacaos',
                                    'action'     => 'delete',
                                    $sadeAutoAvaliacao['id'],
                            ], null, __('Are you sure you want to delete # %s?', $sadeAutoAvaliacao['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'),
                        ['controller' => 'sade_auto_avaliacaos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
