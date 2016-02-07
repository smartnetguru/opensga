<div class="bolsaTipoBolsas view">
    <h2><?php echo __('Bolsa Tipo Bolsa'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($bolsaTipoBolsa['BolsaTipoBolsa']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($bolsaTipoBolsa['BolsaTipoBolsa']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Valor Bolsa'); ?></dt>
        <dd>
            <?php echo h($bolsaTipoBolsa['BolsaTipoBolsa']['valor_bolsa']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Bolsa Tipo Bolsa'),
                    ['action' => 'edit', $bolsaTipoBolsa['BolsaTipoBolsa']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Bolsa Tipo Bolsa'),
                    ['action' => 'delete', $bolsaTipoBolsa['BolsaTipoBolsa']['id']], null,
                    __('Are you sure you want to delete # %s?', $bolsaTipoBolsa['BolsaTipoBolsa']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Candidaturas'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Candidatura'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Resultados'),
                    ['controller' => 'bolsa_resultados', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Resultado'),
                    ['controller' => 'bolsa_resultados', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Valor Bolsas'),
                    ['controller' => 'bolsa_valor_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Valor Bolsa'),
                    ['controller' => 'bolsa_valor_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Bolsa Candidaturas'); ?></h3>
    <?php if (!empty($bolsaTipoBolsa['BolsaPedido'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Aluno Id'); ?></th>
                <th><?php echo __('Ano Lectivo Id'); ?></th>
                <th><?php echo __('Bolsa Bolsa Id'); ?></th>
                <th><?php echo __('Estado Objecto Id'); ?></th>
                <th><?php echo __('Bolsa Tipo Bolsa Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Data Candidatura'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Bolsa Tipo Candidatura Id'); ?></th>
                <th><?php echo __('Nivel Estudante'); ?></th>
                <th><?php echo __('Tipo Bolsa Actual'); ?></th>
                <th><?php echo __('Observacoes'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($bolsaTipoBolsa['BolsaPedido'] as $bolsaCandidatura): ?>
                    <tr>
                        <td><?php echo $bolsaCandidatura['id']; ?></td>
                        <td><?php echo $bolsaCandidatura['aluno_id']; ?></td>
                        <td><?php echo $bolsaCandidatura['ano_lectivo_id']; ?></td>
                        <td><?php echo $bolsaCandidatura['bolsa_bolsa_id']; ?></td>
                        <td><?php echo $bolsaCandidatura['estado_objecto_id']; ?></td>
                        <td><?php echo $bolsaCandidatura['bolsa_tipo_bolsa_id']; ?></td>
                        <td><?php echo $bolsaCandidatura['created']; ?></td>
                        <td><?php echo $bolsaCandidatura['modified']; ?></td>
                        <td><?php echo $bolsaCandidatura['data_candidatura']; ?></td>
                        <td><?php echo $bolsaCandidatura['entidade_id']; ?></td>
                        <td><?php echo $bolsaCandidatura['bolsa_tipo_candidatura_id']; ?></td>
                        <td><?php echo $bolsaCandidatura['nivel_estudante']; ?></td>
                        <td><?php echo $bolsaCandidatura['tipo_bolsa_actual']; ?></td>
                        <td><?php echo $bolsaCandidatura['observacoes']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'bolsa_candidaturas',
                                    'action'     => 'view',
                                    $bolsaCandidatura['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'bolsa_candidaturas',
                                    'action'     => 'edit',
                                    $bolsaCandidatura['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'bolsa_candidaturas',
                                    'action'     => 'delete',
                                    $bolsaCandidatura['id'],
                            ], null, __('Are you sure you want to delete # %s?', $bolsaCandidatura['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Bolsa Candidatura'),
                        ['controller' => 'bolsa_candidaturas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Bolsa Resultados'); ?></h3>
    <?php if (!empty($bolsaTipoBolsa['BolsaResultado'])): ?>
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
                foreach ($bolsaTipoBolsa['BolsaResultado'] as $bolsaResultado): ?>
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
<div class="related">
    <h3><?php echo __('Related Bolsa Valor Bolsas'); ?></h3>
    <?php if (!empty($bolsaTipoBolsa['BolsaValorBolsa'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Valor'); ?></th>
                <th><?php echo __('AnoLectivo Id'); ?></th>
                <th><?php echo __('Bolsa Tipo Bolsa Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($bolsaTipoBolsa['BolsaValorBolsa'] as $bolsaValorBolsa): ?>
                    <tr>
                        <td><?php echo $bolsaValorBolsa['id']; ?></td>
                        <td><?php echo $bolsaValorBolsa['name']; ?></td>
                        <td><?php echo $bolsaValorBolsa['valor']; ?></td>
                        <td><?php echo $bolsaValorBolsa['ano_lectivo_id']; ?></td>
                        <td><?php echo $bolsaValorBolsa['bolsa_tipo_bolsa_id']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'bolsa_valor_bolsas',
                                    'action'     => 'view',
                                    $bolsaValorBolsa['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'bolsa_valor_bolsas',
                                    'action'     => 'edit',
                                    $bolsaValorBolsa['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'bolsa_valor_bolsas',
                                    'action'     => 'delete',
                                    $bolsaValorBolsa['id'],
                            ], null, __('Are you sure you want to delete # %s?', $bolsaValorBolsa['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Bolsa Valor Bolsa'),
                        ['controller' => 'bolsa_valor_bolsas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
