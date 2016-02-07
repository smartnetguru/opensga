<div class="estadoTurmas view">
    <h2><?php echo __('Estado Turma'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($estadoTurma['EstadoTurma']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($estadoTurma['EstadoTurma']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Estado Turma'),
                    ['action' => 'edit', $estadoTurma['EstadoTurma']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Estado Turma'),
                    ['action' => 'delete', $estadoTurma['EstadoTurma']['id']], [],
                    __('Are you sure you want to delete # %s?', $estadoTurma['EstadoTurma']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Turmas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Turma'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Turmas'), ['controller' => 'turmas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Turma'), ['controller' => 'turmas', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Turmas'); ?></h3>
    <?php if (!empty($estadoTurma['Turma'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Ano Lectivo Id'); ?></th>
                <th><?php echo __('Curso Id'); ?></th>
                <th><?php echo __('Plano Estudo Id'); ?></th>
                <th><?php echo __('Turno Id'); ?></th>
                <th><?php echo __('Disciplina Id'); ?></th>
                <th><?php echo __('Capacidade Maxima'); ?></th>
                <th><?php echo __('Total Aprovados'); ?></th>
                <th><?php echo __('Media Turma'); ?></th>
                <th><?php echo __('Estado Turma Id'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Total Reprovados'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('Ano Curricular'); ?></th>
                <th><?php echo __('Semestre Curricular'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Semestre Lectivo Id'); ?></th>
                <th><?php echo __('Sala Aula Id'); ?></th>
                <th><?php echo __('Sequencia'); ?></th>
                <th><?php echo __('Peso Nota Frequencia'); ?></th>
                <th><?php echo __('Peso Nota Exame'); ?></th>
                <th><?php echo __('Nota Minima Frequencia'); ?></th>
                <th><?php echo __('Nota Minima Dispensa'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Unidade Organica Id'); ?></th>
                <th><?php echo __('Pauta Path'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($estadoTurma['Turma'] as $turma): ?>
                <tr>
                    <td><?php echo $turma['id']; ?></td>
                    <td><?php echo $turma['ano_lectivo_id']; ?></td>
                    <td><?php echo $turma['curso_id']; ?></td>
                    <td><?php echo $turma['plano_estudo_id']; ?></td>
                    <td><?php echo $turma['turno_id']; ?></td>
                    <td><?php echo $turma['disciplina_id']; ?></td>
                    <td><?php echo $turma['capacidade_maxima']; ?></td>
                    <td><?php echo $turma['total_aprovados']; ?></td>
                    <td><?php echo $turma['media_turma']; ?></td>
                    <td><?php echo $turma['estado_turma_id']; ?></td>
                    <td><?php echo $turma['modified']; ?></td>
                    <td><?php echo $turma['created']; ?></td>
                    <td><?php echo $turma['total_reprovados']; ?></td>
                    <td><?php echo $turma['codigo']; ?></td>
                    <td><?php echo $turma['ano_curricular']; ?></td>
                    <td><?php echo $turma['semestre_curricular']; ?></td>
                    <td><?php echo $turma['name']; ?></td>
                    <td><?php echo $turma['semestre_lectivo_id']; ?></td>
                    <td><?php echo $turma['sala_aula_id']; ?></td>
                    <td><?php echo $turma['sequencia']; ?></td>
                    <td><?php echo $turma['peso_nota_frequencia']; ?></td>
                    <td><?php echo $turma['peso_nota_exame']; ?></td>
                    <td><?php echo $turma['nota_minima_frequencia']; ?></td>
                    <td><?php echo $turma['nota_minima_dispensa']; ?></td>
                    <td><?php echo $turma['created_by']; ?></td>
                    <td><?php echo $turma['modified_by']; ?></td>
                    <td><?php echo $turma['unidade_organica_id']; ?></td>
                    <td><?php echo $turma['pauta_path']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'turmas', 'action' => 'view', $turma['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'turmas', 'action' => 'edit', $turma['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'turmas', 'action' => 'delete', $turma['id']], [],
                                __('Are you sure you want to delete # %s?', $turma['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Turma'), ['controller' => 'turmas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
