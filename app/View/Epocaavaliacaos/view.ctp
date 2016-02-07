<div class="epocaAvaliacaos view">
    <h2><?php echo __('Epoca Avaliacao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($epocaAvaliacao['EpocaAvaliacao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Codigo'); ?></dt>
        <dd>
            <?php echo h($epocaAvaliacao['EpocaAvaliacao']['codigo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($epocaAvaliacao['EpocaAvaliacao']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Epoca Avaliacao'),
                    ['action' => 'edit', $epocaAvaliacao['EpocaAvaliacao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Epoca Avaliacao'),
                    ['action' => 'delete', $epocaAvaliacao['EpocaAvaliacao']['id']], [],
                    __('Are you sure you want to delete # %s?', $epocaAvaliacao['EpocaAvaliacao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Epoca Avaliacaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Epoca Avaliacao'), ['action' => 'add']); ?> </li>
    </ul>
</div>
