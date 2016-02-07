<div class="ramos index">
    <h2><?php echo __('Ramos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('curso_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            $i = 0;
            foreach ($ramos as $ramo):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class; ?>>
                    <td><?php echo $ramo['Ramo']['id']; ?>&nbsp;</td>
                    <td><?php echo $ramo['Ramo']['name']; ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($ramo['Curso']['name'],
                                ['controller' => 'cursos', 'action' => 'view', $ramo['Curso']['id']]); ?>
                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View', true), ['action' => 'view', $ramo['Ramo']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit', true), ['action' => 'edit', $ramo['Ramo']['id']]); ?>
                        <?php echo $this->Html->link(__('Delete', true), ['action' => 'delete', $ramo['Ramo']['id']],
                                null,
                                sprintf(__('Are you sure you want to delete # %s?', true), $ramo['Ramo']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%',
                            true),
            ]);
        ?>    </p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), [], null, ['class' => 'disabled']); ?>
        | <?php echo $this->Paginator->numbers(); ?>
        |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', [], null, ['class' => 'disabled']); ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Ramo', true), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Cursos', true),
                    ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso', true), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Planoestudoanos', true),
                    ['controller' => 'planoestudoanos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New DisciplinaPlanoEstudo', true),
                    ['controller' => 'planoestudoanos', 'action' => 'add']); ?> </li>
    </ul>
</div>