<div class="entidadeIdentificacaos form">
    <?php echo $this->Form->create('EntidadeIdentificacao'); ?>
    <fieldset>
        <legend><?php echo __('Add Entidade Identificacao'); ?></legend>
        <?php
            echo $this->Form->input('entidade_id');
            echo $this->Form->input('documento_identificacao_id');
            echo $this->Form->input('data_emissao');
            echo $this->Form->input('data_validade');
            echo $this->Form->input('numero');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('local_emissao');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Entidade Identificacaos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Documento Identificacaos'),
                    ['controller' => 'documento_identificacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Documento Identificacao'),
                    ['controller' => 'documento_identificacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
