<div class="feriados view">
    <h2><?php echo __('Feriado'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($feriado['Feriado']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($feriado['Feriado']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Provincia'); ?></dt>
        <dd>
            <?php echo $this->Html->link($feriado['Provincia']['name'],
                    ['controller' => 'provincias', 'action' => 'view', $feriado['Provincia']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($feriado['Cidade']['name'],
                    ['controller' => 'cidades', 'action' => 'view', $feriado['Cidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Dia'); ?></dt>
        <dd>
            <?php echo h($feriado['Feriado']['dia']); ?>
            &nbsp;
        </dd>
        <<<<<<< HEAD
        <dt><?php echo __('Month'); ?></dt>
        <dd>
            <?php echo $this->Html->link($feriado['Month']['name'],
                    ['controller' => 'months', 'action' => 'view', $feriado['Month']['id']]); ?>
            =======
        <dt><?php echo __('Mes'); ?></dt>
        <dd>
            <?php echo h($feriado['Feriado']['mes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($feriado['Feriado']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($feriado['Feriado']['modified']); ?>
            >>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
            &nbsp;
        </dd>
        <dt><?php echo __('Detalhes'); ?></dt>
        <dd>
            <?php echo h($feriado['Feriado']['detalhes']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Feriado'), ['action' => 'edit', $feriado['Feriado']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Feriado'), ['action' => 'delete', $feriado['Feriado']['id']],
                    null, __('Are you sure you want to delete # %s?', $feriado['Feriado']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Feriados'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Feriado'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Provincias'),
                    ['controller' => 'provincias', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Provincia'),
                    ['controller' => 'provincias', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cidades'), ['controller' => 'cidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cidade'), ['controller' => 'cidades', 'action' => 'add']); ?> </li>
        <<<<<<< HEAD
        <li><?php echo $this->Html->link(__('List Months'), ['controller' => 'months', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Month'), ['controller' => 'months', 'action' => 'add']); ?> </li>
        =======
        >>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
    </ul>
</div>
