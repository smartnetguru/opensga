<div class="alunoViaAdmissaos form">
    <?php echo $this->Form->create('AlunoViaAdmissao'); ?>
    <fieldset>
        <legend><?php echo __('Edit Aluno Via Admissao'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('AlunoViaAdmissao.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('AlunoViaAdmissao.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Aluno Via Admissaos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
    </ul>
</div>
