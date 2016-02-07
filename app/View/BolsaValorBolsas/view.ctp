<div class="bolsaValorBolsas view">
    <h2><?php echo __('Bolsa Valor Bolsa'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($bolsaValorBolsa['BolsaValorBolsa']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($bolsaValorBolsa['BolsaValorBolsa']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Valor'); ?></dt>
        <dd>
            <?php echo h($bolsaValorBolsa['BolsaValorBolsa']['valor']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AnoLectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bolsaValorBolsa['AnoLectivo']['codigo'],
                    ['controller' => 'anolectivos', 'action' => 'view', $bolsaValorBolsa['AnoLectivo']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Bolsa Tipo Bolsa'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bolsaValorBolsa['BolsaTipoBolsa']['name'], [
                    'controller' => 'bolsa_tipo_bolsas',
                    'action'     => 'view',
                    $bolsaValorBolsa['BolsaTipoBolsa']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Bolsa Valor Bolsa'),
                    ['action' => 'edit', $bolsaValorBolsa['BolsaValorBolsa']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Bolsa Valor Bolsa'),
                    ['action' => 'delete', $bolsaValorBolsa['BolsaValorBolsa']['id']], null,
                    __('Are you sure you want to delete # %s?', $bolsaValorBolsa['BolsaValorBolsa']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Valor Bolsas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Valor Bolsa'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
