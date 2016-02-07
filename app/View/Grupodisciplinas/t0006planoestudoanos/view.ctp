<div class="planoestudoanos view">
    <h2><?php __('DisciplinaPlanoEstudo'); ?></h2>
    <dl><?php $i = 0;
            $class = ' class="altrow"'; ?>
        <dt<?php if ($i % 2 == 0) {
            echo $class;
        } ?>><?php echo __('Id'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) {
            echo $class;
        } ?>>
            <?php echo $planoestudoano['DisciplinaPlanoEstudo']['id']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) {
            echo $class;
        } ?>><?php echo __('Ano'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) {
            echo $class;
        } ?>>
            <?php echo $planoestudoano['DisciplinaPlanoEstudo']['ano']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) {
            echo $class;
        } ?>><?php echo __('Semestre'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) {
            echo $class;
        } ?>>
            <?php echo $planoestudoano['DisciplinaPlanoEstudo']['semestre']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) {
            echo $class;
        } ?>><?php echo __('Grupodisciplina'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) {
            echo $class;
        } ?>>
            <?php echo $planoestudoano['DisciplinaPlanoEstudo']['grupodisciplina']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('DisciplinaPlanoEstudo', true)),
                    ['action' => 'edit', $planoestudoano['DisciplinaPlanoEstudo']['id']]); ?> </li>
        <li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('DisciplinaPlanoEstudo', true)),
                    ['action' => 'delete', $planoestudoano['DisciplinaPlanoEstudo']['id']], null,
                    sprintf(__('Are you sure you want to delete # %s?', true),
                            $planoestudoano['DisciplinaPlanoEstudo']['id'])); ?> </li>
        <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Planoestudoanos', true)),
                    ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('DisciplinaPlanoEstudo', true)),
                    ['action' => 'add']); ?> </li>
    </ul>
</div>
