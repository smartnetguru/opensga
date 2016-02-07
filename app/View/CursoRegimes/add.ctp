<div class="cursoRegimes form">
    <?php echo $this->Form->create('CursoRegime'); ?>
    <fieldset>
        <legend><?php echo __('Add Curso Regime'); ?></legend>
        <?php
            echo $this->Form->input('curso_id');
            echo $this->Form->input('regime_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Curso Regimes'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Regimes'), ['controller' => 'regimes', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Regime'), ['controller' => 'regimes', 'action' => 'add']); ?> </li>
    </ul>
</div>
