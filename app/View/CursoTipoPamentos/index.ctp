<div class="cursoTipoPamentos index">
    <h2><?php echo __('Curso Tipo Pamentos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('curso_id'); ?></th>
            <th><?php echo $this->Paginator->sort('tipopagamento_id'); ?></th>
            <th><?php echo $this->Paginator->sort('valor'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($cursoTipoPamentos as $cursoTipoPamento): ?>
                <tr>
                    <td><?php echo h($cursoTipoPamento['CursoTipoPamento']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($cursoTipoPamento['Curso']['name'],
                                ['controller' => 'cursos', 'action' => 'view', $cursoTipoPamento['Curso']['id']]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($cursoTipoPamento['Tipopagamento']['name'], [
                                'controller' => 'tipopagamentos',
                                'action'     => 'view',
                                $cursoTipoPamento['Tipopagamento']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($cursoTipoPamento['CursoTipoPamento']['valor']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $cursoTipoPamento['CursoTipoPamento']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $cursoTipoPamento['CursoTipoPamento']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $cursoTipoPamento['CursoTipoPamento']['id']], null,
                                __('Are you sure you want to delete # %s?',
                                        $cursoTipoPamento['CursoTipoPamento']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Curso Tipo Pamento'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipopagamentos'),
                    ['controller' => 'tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipopagamento'),
                    ['controller' => 'tipopagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
