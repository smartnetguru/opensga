<div class="opensgaSessions form">
    <?php echo $this->Form->create('OpensgaSessiom'); ?>
    <fieldset>
        <legend><?php echo __('Add Opensga Sessiom'); ?></legend>
        <?php
            echo $this->Form->input('data');
            echo $this->Form->input('expires');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Opensga Sessions'), ['action' => 'index']); ?></li>
    </ul>
</div>
