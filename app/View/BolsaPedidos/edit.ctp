<div class="bolsaPedidos form">
    <?php echo $this->Form->create('BolsaPedido'); ?>
    <fieldset>
        <legend><?php echo __('Edit Bolsa Pedido'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('aluno_id');
            echo $this->Form->input('ano_lectivo_id');
            echo $this->Form->input('bolsa_bolsa_id');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('bolsa_tipo_bolsa_id');
            echo $this->Form->input('data_pedido');
            echo $this->Form->input('nivel_estudante');
            echo $this->Form->input('tipo_bolsa_actual');
            echo $this->Form->input('observacoes');
            echo $this->Form->input('agregado_familiar');
            echo $this->Form->input('irmaos_estudantes');
            echo $this->Form->input('irmaos_trabalhadores');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('BolsaPedido.id')],
                    [], __('Are you sure you want to delete # %s?', $this->Form->value('BolsaPedido.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Pedidos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Ano Lectivos'),
                    ['controller' => 'ano_lectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Ano Lectivo'),
                    ['controller' => 'ano_lectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Bolsas'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Bolsa'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
