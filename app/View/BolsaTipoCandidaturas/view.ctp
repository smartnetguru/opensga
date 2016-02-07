<div class="bolsaTipoCandidaturas view">
    <h2><?php echo __('Bolsa Tipo Candidatura'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($bolsaTipoCandidatura['BolsaTipoCandidatura']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($bolsaTipoCandidatura['BolsaTipoCandidatura']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Bolsa Tipo Candidatura'),
                    ['action' => 'edit', $bolsaTipoCandidatura['BolsaTipoCandidatura']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Bolsa Tipo Candidatura'),
                    ['action' => 'delete', $bolsaTipoCandidatura['BolsaTipoCandidatura']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $bolsaTipoCandidatura['BolsaTipoCandidatura']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Candidaturas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Candidatura'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Candidaturas'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Candidatura'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Bolsa Candidaturas'); ?></h3>
    <?php if (!empty($bolsaTipoCandidatura['BolsaPedido'])): ?>
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
                foreach ($bolsaTipoCandidatura['BolsaPedido'] as $bolsaCandidatura): ?>
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
