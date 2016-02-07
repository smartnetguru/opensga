<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Aluno', ['role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => []]); ?>
<div class="form-group">
    <label>
        <?php echo __('Apelido') ?>
    </label>
    <div>
        <?php echo $this->Form->input('apelido', [
                'label' => false,
                'div'   => false,
                'class' => 'form-control',
                'value' => $aluno['Entidade']['apelido'],
        ]); ?>
    </div>
</div>
<div class="form-group">
    <label>
        <?php echo __('Outros Nomes') ?>
    </label>
    <div>
        <?php echo $this->Form->input('nomes', [
                'label' => false,
                'div'   => false,
                'class' => 'form-control',
                'value' => $aluno['Entidade']['nomes'],
        ]); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-2 col-sm-offset-8">
        <?php echo $this->Form->hidden('aluno_id', ['value' => $aluno['Aluno']['id']]); ?>
        <?php echo $this->Form->hidden('entidade_id', ['value' => $aluno['Aluno']['entidade_id']]); ?>
        <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

    </div>


</div>
<?php $this->end() ?>
