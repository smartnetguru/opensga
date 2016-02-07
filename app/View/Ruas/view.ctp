<div class="ruas view">
    <h2><?php echo __('Rua'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($rua['Rua']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($rua['Cidade']['name'],
                    ['controller' => 'cidades', 'action' => 'view', $rua['Cidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($rua['Rua']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Rua'), ['action' => 'edit', $rua['Rua']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Rua'), ['action' => 'delete', $rua['Rua']['id']], null,
                    __('Are you sure you want to delete # %s?', $rua['Rua']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Ruas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Rua'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cidades'), ['controller' => 'cidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cidade'), ['controller' => 'cidades', 'action' => 'add']); ?> </li>
    </ul>
</div>
