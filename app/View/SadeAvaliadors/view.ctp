<div class="sadeAvaliadors view">
    <h2><?php echo __('Sade Avaliador'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliador['SadeAvaliador']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliador['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $sadeAvaliador['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Docente'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliador['Docente']['name'],
                    ['controller' => 'docentes', 'action' => 'view', $sadeAvaliador['Docente']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nivel Avaliador'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliador['NivelAvaliador']['name'], [
                    'controller' => 'nivel_avaliadors',
                    'action'     => 'view',
                    $sadeAvaliador['NivelAvaliador']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sade Avaliador'),
                    ['action' => 'edit', $sadeAvaliador['SadeAvaliador']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sade Avaliador'),
                    ['action' => 'delete', $sadeAvaliador['SadeAvaliador']['id']], null,
                    __('Are you sure you want to delete # %s?', $sadeAvaliador['SadeAvaliador']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliadors'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliador'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Docentes'),
                    ['controller' => 'docentes', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente'), ['controller' => 'docentes', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Nivel Avaliadors'),
                    ['controller' => 'nivel_avaliadors', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Nivel Avaliador'),
                    ['controller' => 'nivel_avaliadors', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Sade Avaliacao Qualitativas'); ?></h3>
    <?php if (!empty($sadeAvaliador['SadeAvaliacaoQualitativa'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Sade Avaliador Id'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Sade Parametro Id'); ?></th>
                <th><?php echo __('Resposta'); ?></th>
                <th><?php echo __('Pontos Obtidos'); ?></th>
                <th><?php echo __('AnoLectivo Id'); ?></th>
                <th><?php echo __('Data'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($sadeAvaliador['SadeAvaliacaoQualitativa'] as $sadeAvaliacaoQualitativa): ?>
                    <tr>
                        <td><?php echo $sadeAvaliacaoQualitativa['id']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['sade_avaliador_id']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['entidade_id']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['sade_parametro_id']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['resposta']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['pontos_obtidos']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['ano_lectivo_id']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['data']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['created']; ?></td>
                        <td><?php echo $sadeAvaliacaoQualitativa['modified']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'sade_avaliacao_qualitativas',
                                    'action'     => 'view',
                                    $sadeAvaliacaoQualitativa['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'sade_avaliacao_qualitativas',
                                    'action'     => 'edit',
                                    $sadeAvaliacaoQualitativa['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'sade_avaliacao_qualitativas',
                                    'action'     => 'delete',
                                    $sadeAvaliacaoQualitativa['id'],
                            ], null, __('Are you sure you want to delete # %s?', $sadeAvaliacaoQualitativa['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'),
                        ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
