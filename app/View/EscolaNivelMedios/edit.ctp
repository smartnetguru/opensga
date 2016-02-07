<div class="escolaNivelMedios form">
    <?php echo $this->Form->create('EscolaNivelMedio'); ?>
    <fieldset>
        <legend><?php echo __('Edit Escola Nivel Medio'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('distrito_id');
            echo $this->Form->input('provincia_id');
            echo $this->Form->input('pais_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('EscolaNivelMedio.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('EscolaNivelMedio.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Escola Nivel Medios'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Cidades'), ['controller' => 'cidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Distrito'), ['controller' => 'cidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Provincias'),
                    ['controller' => 'provincias', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Provincia'),
                    ['controller' => 'provincias', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Paises'), ['controller' => 'paises', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Pais'), ['controller' => 'paises', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Aluno Nivel Medios'),
                    ['controller' => 'aluno_nivel_medios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno Nivel Medio'),
                    ['controller' => 'aluno_nivel_medios', 'action' => 'add']); ?> </li>
    </ul>
</div>
