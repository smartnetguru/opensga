<div class="sadeNivelAvaliadors view">
    <h2><?php echo __('Sade Nivel Avaliador'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sadeNivelAvaliador['SadeNivelAvaliador']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($sadeNivelAvaliador['SadeNivelAvaliador']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sade Nivel Avaliador'),
                    ['action' => 'edit', $sadeNivelAvaliador['SadeNivelAvaliador']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sade Nivel Avaliador'),
                    ['action' => 'delete', $sadeNivelAvaliador['SadeNivelAvaliador']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $sadeNivelAvaliador['SadeNivelAvaliador']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Nivel Avaliadors'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Nivel Avaliador'), ['action' => 'add']); ?> </li>
    </ul>
</div>
