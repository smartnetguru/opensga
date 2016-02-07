<div class="planoestudoanos index">
    <h2><?php echo __('Planoestudoanos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('ano'); ?></th>
            <th><?php echo $this->Paginator->sort('semestre'); ?></th>
            <th><?php echo $this->Paginator->sort('grupodisciplina'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            $i = 0;
            foreach ($planoestudoanos as $planoestudoano):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class; ?>>
                    <td><?php echo $planoestudoano['DisciplinaPlanoEstudo']['id']; ?>&nbsp;</td>
                    <td><?php echo $planoestudoano['DisciplinaPlanoEstudo']['ano']; ?>&nbsp;</td>
                    <td><?php echo $planoestudoano['DisciplinaPlanoEstudo']['semestre']; ?>&nbsp;</td>
                    <td><?php echo $planoestudoano['DisciplinaPlanoEstudo']['grupodisciplina']; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View', true),
                                ['action' => 'view', $planoestudoano['DisciplinaPlanoEstudo']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit', true),
                                ['action' => 'edit', $planoestudoano['DisciplinaPlanoEstudo']['id']]); ?>
                        <?php echo $this->Html->link(__('Delete', true),
                                ['action' => 'delete', $planoestudoano['DisciplinaPlanoEstudo']['id']], null,
                                sprintf(__('Are you sure you want to delete # %s?', true),
                                        $planoestudoano['DisciplinaPlanoEstudo']['id'])); ?>
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
        <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('DisciplinaPlanoEstudo', true)),
                    ['action' => 'add']); ?></li>
    </ul>
</div>