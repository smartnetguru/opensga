<div class="bolsaMotivoIndeferimentos view">
    <h2><?php echo __('Bolsa Motivo Indeferimento'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Alinea'); ?></dt>
        <dd>
            <?php echo h($bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['alinea']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Bolsa Motivo Indeferimento'),
                    ['action' => 'edit', $bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Bolsa Motivo Indeferimento'),
                    ['action' => 'delete', $bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $bolsaMotivoIndeferimento['BolsaMotivoIndeferimento']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Motivo Indeferimentos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Motivo Indeferimento'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Resultados'),
                    ['controller' => 'bolsa_resultados', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Resultado'),
                    ['controller' => 'bolsa_resultados', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Bolsa Resultados'); ?></h3>
    <?php if (!empty($bolsaMotivoIndeferimento['BolsaResultado'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Bolsa Candidatura Id'); ?></th>
                <th><?php echo __('Bolsa Tipo Bolsa Id'); ?></th>
                <th><?php echo __('Bolsa Motivo Indeferimento Id'); ?></th>
                <th><?php echo __('Data Resultado'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Observacoes'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($bolsaMotivoIndeferimento['BolsaResultado'] as $bolsaResultado): ?>
                    <tr>
                        <td><?php echo $bolsaResultado['id']; ?></td>
                        <td><?php echo $bolsaResultado['bolsa_candidatura_id']; ?></td>
                        <td><?php echo $bolsaResultado['bolsa_tipo_bolsa_id']; ?></td>
                        <td><?php echo $bolsaResultado['bolsa_motivo_indeferimento_id']; ?></td>
                        <td><?php echo $bolsaResultado['data_resultado']; ?></td>
                        <td><?php echo $bolsaResultado['created']; ?></td>
                        <td><?php echo $bolsaResultado['modified']; ?></td>
                        <td><?php echo $bolsaResultado['created_by']; ?></td>
                        <td><?php echo $bolsaResultado['modified_by']; ?></td>
                        <td><?php echo $bolsaResultado['observacoes']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'),
                                    ['controller' => 'bolsa_resultados', 'action' => 'view', $bolsaResultado['id']]); ?>
                            <?php echo $this->Html->link(__('Edit'),
                                    ['controller' => 'bolsa_resultados', 'action' => 'edit', $bolsaResultado['id']]); ?>
                            <?php echo $this->Form->postLink(__('Delete'),
                                    ['controller' => 'bolsa_resultados', 'action' => 'delete', $bolsaResultado['id']],
                                    null, __('Are you sure you want to delete # %s?', $bolsaResultado['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Bolsa Resultado'),
                        ['controller' => 'bolsa_resultados', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
