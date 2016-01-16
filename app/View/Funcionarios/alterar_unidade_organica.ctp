<?php $this->extend('/Common/Funcionarios/funcionario_action'); ?>

<?php $this->start('funcionario-form') ?>
<?php echo $this->Form->create('Funcionario',
    ['role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => []]); ?>
<div class="form-group">
    <label>
        <?php echo __('Nova Unidade Organica') ?>
    </label>


        <?php echo $this->Form->input('unidade_organica_id',
            ['label' => false, 'div' => false, 'class' => 'form-control','empty'=>'--Seleccione--','required'=>true]); ?>

</div>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-8">
        <?php echo $this->Form->hidden('funcionario_id', ['value' => $funcionario['Funcionario']['id']]); ?>
        <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

    </div>


</div>
<?php $this->end() ?>
