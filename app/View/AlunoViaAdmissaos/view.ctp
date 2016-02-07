<div class="alunoViaAdmissaos view">
    <h2><?php echo __('Aluno Via Admissao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($alunoViaAdmissao['AlunoViaAdmissao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($alunoViaAdmissao['AlunoViaAdmissao']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Aluno Via Admissao'),
                    ['action' => 'edit', $alunoViaAdmissao['AlunoViaAdmissao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Aluno Via Admissao'),
                    ['action' => 'delete', $alunoViaAdmissao['AlunoViaAdmissao']['id']], null,
                    __('Are you sure you want to delete # %s?', $alunoViaAdmissao['AlunoViaAdmissao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Aluno Via Admissaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno Via Admissao'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Alunos'); ?></h3>
    <?php if (!empty($alunoViaAdmissao['Aluno'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Dataingresso'); ?></th>
                <th><?php echo __('Etrabalhador'); ?></th>
                <th><?php echo __('AreaTrabalho Id'); ?></th>
                <th><?php echo __('Empresanome'); ?></th>
                <th><?php echo __('Empresamorada'); ?></th>
                <th><?php echo __('Empresacontacto'); ?></th>
                <th><?php echo __('Empresatelefone'); ?></th>
                <th><?php echo __('Empresaemail'); ?></th>
                <th><?php echo __('Empresasite'); ?></th>
                <th><?php echo __('Curso Id'); ?></th>
                <th><?php echo __('Docdataemissao'); ?></th>
                <th><?php echo __('Doclocalemissao'); ?></th>
                <th><?php echo __('Detalhes'); ?></th>
                <th><?php echo __('EstadoEntidade Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Escola Id'); ?></th>
                <th><?php echo __('Numero Estudante'); ?></th>
                <th><?php echo __('Numero Estudante Antigo'); ?></th>
                <th><?php echo __('Aluno Via Admissao Id'); ?></th>
                <th><?php echo __('Codigo Exame Admissao'); ?></th>
                <th><?php echo __('Lista'); ?></th>
                <th><?php echo __('Ano Ingresso'); ?></th>
                <th><?php echo __('Curso Ingresso Id'); ?></th>
                <th><?php echo __('Regime Ingresso Id'); ?></th>
                <th><?php echo __('Faculdade Ingresso Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($alunoViaAdmissao['Aluno'] as $aluno): ?>
                    <tr>
                        <td><?php echo $aluno['id']; ?></td>
                        <td><?php echo $aluno['codigo']; ?></td>
                        <td><?php echo $aluno['user_id']; ?></td>
                        <td><?php echo $aluno['dataingresso']; ?></td>
                        <td><?php echo $aluno['etrabalhador']; ?></td>
                        <td><?php echo $aluno['areatrabalho_id']; ?></td>
                        <td><?php echo $aluno['empresanome']; ?></td>
                        <td><?php echo $aluno['empresamorada']; ?></td>
                        <td><?php echo $aluno['empresacontacto']; ?></td>
                        <td><?php echo $aluno['empresatelefone']; ?></td>
                        <td><?php echo $aluno['empresaemail']; ?></td>
                        <td><?php echo $aluno['empresasite']; ?></td>
                        <td><?php echo $aluno['curso_id']; ?></td>
                        <td><?php echo $aluno['docdataemissao']; ?></td>
                        <td><?php echo $aluno['doclocalemissao']; ?></td>
                        <td><?php echo $aluno['detalhes']; ?></td>
                        <td><?php echo $aluno['EstadoEntidade_id']; ?></td>
                        <td><?php echo $aluno['created']; ?></td>
                        <td><?php echo $aluno['modified']; ?></td>
                        <td><?php echo $aluno['entidade_id']; ?></td>
                        <td><?php echo $aluno['escola_id']; ?></td>
                        <td><?php echo $aluno['numero_estudante']; ?></td>
                        <td><?php echo $aluno['numero_estudante_antigo']; ?></td>
                        <td><?php echo $aluno['aluno_via_admissao_id']; ?></td>
                        <td><?php echo $aluno['codigo_exame_admissao']; ?></td>
                        <td><?php echo $aluno['lista']; ?></td>
                        <td><?php echo $aluno['ano_ingresso']; ?></td>
                        <td><?php echo $aluno['curso_ingresso_id']; ?></td>
                        <td><?php echo $aluno['regime_ingresso_id']; ?></td>
                        <td><?php echo $aluno['faculdade_ingresso_id']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'),
                                    ['controller' => 'alunos', 'action' => 'view', $aluno['id']]); ?>
                            <?php echo $this->Html->link(__('Edit'),
                                    ['controller' => 'alunos', 'action' => 'edit', $aluno['id']]); ?>
                            <?php echo $this->Form->postLink(__('Delete'),
                                    ['controller' => 'alunos', 'action' => 'delete', $aluno['id']], null,
                                    __('Are you sure you want to delete # %s?', $aluno['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
