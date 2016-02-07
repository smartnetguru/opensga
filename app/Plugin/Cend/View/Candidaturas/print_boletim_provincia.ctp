<div class="row">
    <div class="col-sm-6">
        <?php echo $this->Form->create('Candidatura', array(
                'inputDefaults' => array(
                        'div' => 'form-group',
                        'wrapInput' => false,
                        'class' => 'form-control'
                ),
                'class' => 'well'
        )); ?>
        <fieldset>
            <legend>Imprimir Boletins de Candidatura</legend>
            <?php echo $this->Form->input('provincia_id', array(
                    'label' => 'Provincia de Candidatura',
            )); ?>
            <div class="row">
                <div class="col-sm-6">
                    <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                            ['class' => 'btn btn-light-grey btn-block']) ?>
                </div>
                <div class="col-sm-6 pull-right">
                    <?php echo $this->Form->submit('Imprimir', array(
                            'div' => 'form-group',
                            'class' => 'btn btn-green btn-block'
                    )); ?>
                </div>
            </div>


        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
</div>