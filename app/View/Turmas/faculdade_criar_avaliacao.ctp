<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('TurmaTipoAvaliacao',
        ['role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => []]); ?>
    <div class="form-group">
        <label>
            <?php echo __('Tipo de Avaliacao') ?>
        </label>
        <div>
            <?php echo $this->Form->input('tipo_avaliacao_id',
                    ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $this->Form->label('data_marcada', 'Data'); ?>
        <div class="input-group">
            <?php echo $this->Form->input('data_marcada', [
                    'label'              => false,
                    'div'                => false,
                    'class'              => 'form-control date-picker',
                    'id'                 => 'firstname',
                    'type'               => 'text',
                    'data-date-viewmode' => 'years',
                    'data-date-format'   => 'yyyy-mm-dd',
            ]); ?>
            <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Ordem') ?>
        </label>
        <div>
            <?php echo $this->Form->input('ordem',
                    ['type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Peso(Percentagem)') ?>
        </label>
        <div>
            <?php echo $this->Form->input('peso',
                    ['type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 col-sm-offset-8">
            <?php // echo $this->Form->hidden('turma_id', array('value' => $turma['Turma']['id'])); ?>
            <?php echo $this->Form->hidden('estado_turma_avaliacao_id', ['value' => 1]); ?>
            <?php // echo $this->Form->hidden('docente_id', array('value' => $docente['Docente']['id'])); ?>
            <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

        </div>


    </div>
<?php $this->end() ?>