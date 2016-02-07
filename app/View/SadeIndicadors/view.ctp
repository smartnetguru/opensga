<div class="sadeIndicadors view">
    <h2><?php echo __('Sade Indicador'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sadeIndicador['SadeIndicador']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Codigo'); ?></dt>
        <dd>
            <?php echo h($sadeIndicador['SadeIndicador']['codigo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Descricao'); ?></dt>
        <dd>
            <?php echo h($sadeIndicador['SadeIndicador']['descricao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Anexo'); ?></dt>
        <dd>
            <?php echo h($sadeIndicador['SadeIndicador']['anexo']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sade Indicador'),
                    ['action' => 'edit', $sadeIndicador['SadeIndicador']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sade Indicador'),
                    ['action' => 'delete', $sadeIndicador['SadeIndicador']['id']], null,
                    __('Are you sure you want to delete # %s?', $sadeIndicador['SadeIndicador']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Indicadors'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Indicador'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Parametros'),
                    ['controller' => 'sade_parametros', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Parametro'),
                    ['controller' => 'sade_parametros', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Sade Parametros'); ?></h3>
    <?php if (!empty($sadeIndicador['SadeParametro'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('Descricao'); ?></th>
                <th><?php echo __('Sade Indicador Id'); ?></th>
                <th><?php echo __('Quantidade Padrao'); ?></th>
                <th><?php echo __('Pontos Padrao'); ?></th>
                <th><?php echo __('Pontos Bonificados'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($sadeIndicador['SadeParametro'] as $sadeParametro): ?>
                    <tr>
                        <td><?php echo $sadeParametro['id']; ?></td>
                        <td><?php echo $sadeParametro['codigo']; ?></td>
                        <td><?php echo $sadeParametro['descricao']; ?></td>
                        <td><?php echo $sadeParametro['sade_indicador_id']; ?></td>
                        <td><?php echo $sadeParametro['quantidade_padrao']; ?></td>
                        <td><?php echo $sadeParametro['pontos_padrao']; ?></td>
                        <td><?php echo $sadeParametro['pontos_bonificados']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'),
                                    ['controller' => 'sade_parametros', 'action' => 'view', $sadeParametro['id']]); ?>
                            <?php echo $this->Html->link(__('Edit'),
                                    ['controller' => 'sade_parametros', 'action' => 'edit', $sadeParametro['id']]); ?>
                            <?php echo $this->Form->postLink(__('Delete'),
                                    ['controller' => 'sade_parametros', 'action' => 'delete', $sadeParametro['id']],
                                    null, __('Are you sure you want to delete # %s?', $sadeParametro['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Sade Parametro'),
                        ['controller' => 'sade_parametros', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
