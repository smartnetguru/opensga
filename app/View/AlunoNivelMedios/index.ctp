<div class="alunoNivelMedios index">
    <h2><?php echo __('Aluno Nivel Medios'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
            <th><?php echo $this->Paginator->sort('escola_nivel_medio_id'); ?></th>
            <th><?php echo $this->Paginator->sort('ano_conclusao'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($alunoNivelMedios as $alunoNivelMedio): ?>
                <tr>
                    <td><?php echo h($alunoNivelMedio['AlunoNivelMedio']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($alunoNivelMedio['Aluno']['id'],
                                ['controller' => 'alunos', 'action' => 'view', $alunoNivelMedio['Aluno']['id']]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($alunoNivelMedio['EscolaNivelMedio']['name'], [
                                'controller' => 'escola_nivel_medios',
                                'action'     => 'view',
                                $alunoNivelMedio['EscolaNivelMedio']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($alunoNivelMedio['AlunoNivelMedio']['ano_conclusao']); ?>&nbsp;</td>
                    <td><?php echo h($alunoNivelMedio['AlunoNivelMedio']['created']); ?>&nbsp;</td>
                    <td><?php echo h($alunoNivelMedio['AlunoNivelMedio']['modified']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $alunoNivelMedio['AlunoNivelMedio']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $alunoNivelMedio['AlunoNivelMedio']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $alunoNivelMedio['AlunoNivelMedio']['id']], null,
                                __('Are you sure you want to delete # %s?',
                                        $alunoNivelMedio['AlunoNivelMedio']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Aluno Nivel Medio'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Escola Nivel Medios'),
                    ['controller' => 'escola_nivel_medios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Escola Nivel Medio'),
                    ['controller' => 'escola_nivel_medios', 'action' => 'add']); ?> </li>
    </ul>
</div>
