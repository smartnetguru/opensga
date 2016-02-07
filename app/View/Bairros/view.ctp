<div class="bairros view">
    <h2><?php echo __('Bairro'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($bairro['Bairro']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($bairro['Bairro']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bairro['Cidade']['name'],
                    ['controller' => 'cidades', 'action' => 'view', $bairro['Cidade']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Bairro'), ['action' => 'edit', $bairro['Bairro']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Bairro'), ['action' => 'delete', $bairro['Bairro']['id']], [],
                    __('Are you sure you want to delete # %s?', $bairro['Bairro']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Bairros'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bairro'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cidades'), ['controller' => 'cidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cidade'), ['controller' => 'cidades', 'action' => 'add']); ?> </li>
    </ul>
</div>
