<div class="instituicaos view">
    <h2><?php echo __('Instituicao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cidade Origem'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['cidade_origem']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Provincia Origem'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['provincia_origem']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pais Origem'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['pais_origem']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Continente Origem'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['continente_origem']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($instituicao['Instituicao']['modified_by']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Instituicao'),
                    ['action' => 'edit', $instituicao['Instituicao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Instituicao'),
                    ['action' => 'delete', $instituicao['Instituicao']['id']], null,
                    __('Are you sure you want to delete # %s?', $instituicao['Instituicao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Instituicaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Instituicao'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cooperacao Acordos'),
                    ['controller' => 'cooperacao_acordos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cooperacao Acordo'),
                    ['controller' => 'cooperacao_acordos', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Cooperacao Acordos'); ?></h3>
    <?php if (!empty($instituicao['CooperacaoAcordo'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Instituicao Id'); ?></th>
                <th><?php echo __('Data Assinatura'); ?></th>
                <th><?php echo __('Data Validade'); ?></th>
                <th><?php echo __('Prazo Validade'); ?></th>
                <th><?php echo __('Cooperacao Tipo Acordo Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($instituicao['CooperacaoAcordo'] as $cooperacaoAcordo): ?>
                <tr>
                    <td><?php echo $cooperacaoAcordo['id']; ?></td>
                    <td><?php echo $cooperacaoAcordo['name']; ?></td>
                    <td><?php echo $cooperacaoAcordo['instituicao_id']; ?></td>
                    <td><?php echo $cooperacaoAcordo['data_assinatura']; ?></td>
                    <td><?php echo $cooperacaoAcordo['data_validade']; ?></td>
                    <td><?php echo $cooperacaoAcordo['prazo_validade']; ?></td>
                    <td><?php echo $cooperacaoAcordo['cooperacao_tipo_acordo_id']; ?></td>
                    <td><?php echo $cooperacaoAcordo['created']; ?></td>
                    <td><?php echo $cooperacaoAcordo['modified']; ?></td>
                    <td><?php echo $cooperacaoAcordo['created_by']; ?></td>
                    <td><?php echo $cooperacaoAcordo['modified_by']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordo['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'cooperacao_acordos', 'action' => 'edit', $cooperacaoAcordo['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'cooperacao_acordos', 'action' => 'delete', $cooperacaoAcordo['id']],
                                null, __('Are you sure you want to delete # %s?', $cooperacaoAcordo['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Cooperacao Acordo'),
                        ['controller' => 'cooperacao_acordos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
