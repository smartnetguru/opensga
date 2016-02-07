<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Plano de Estudos', '/faculdade/plano_estudos');
    $this->Html->addCrumb('Adicionar Plano de Estudos', '#');
?>

<?php $this->extend('/Common/form_basic_common'); ?>
<?php $this->set('form-title', 'Precedencias Obrigatorias'); ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('PlanoEstudo', ['role' => 'form', 'class' => '', 'inputDefaults' => []]); ?>
    <div class="form-group">
        <?php foreach ($precedencias as $precedencia) { ?>
            <label class="checkbox-inline">
                <?php echo $this->Form->input('pobrigatorias.' . $precedencia['Disciplina']['id'], [
                        'value' => $precedencia['Disciplina']['id'],
                        'type'  => 'checkbox',
                        'label' => false,
                        'div'   => false,
                        'class' => 'grey',
                ]); ?>
                <?php echo $precedencia['Disciplina']['name']; ?>
            </label>
        <?php } ?>

    </div>
<?php $this->end();
?>
<?php $this->start('right-panel') ?>
    <div class="col-sm-6">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Precedencias Aconselhadas
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <?php foreach ($precedencias as $precedencia) { ?>
                        <label class="checkbox-inline">
                            <?php echo $this->Form->input('paconselhadas.' . $precedencia['Disciplina']['id'], [
                                    'value' => $precedencia['Disciplina']['id'],
                                    'type'  => 'checkbox',
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'grey',
                            ]); ?>
                            <?php echo $precedencia['Disciplina']['name']; ?>
                        </label>
                    <?php } ?>

                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <?php echo $this->Html->link('Nao Adicionar Precedencias',
                                ['controller' => 'plano_estudos', 'action' => 'adicionar_disciplinas', $planoEstudoId],
                                ['class' => 'btn btn-light-grey btn-block']) ?>


                    </div>
                    <div class="col-sm-2 col-sm-offset-6">
                        <?php
                            echo $this->Form->input('plano_estudo_id',
                                    ['value' => $planoEstudoId, 'type' => 'hidden', 'div' => false]);
                            echo $this->Form->input('disciplina_id',
                                    ['value' => $disciplinaId, 'type' => 'hidden', 'div' => false]);
                        ?>
                        <?php echo $this->Form->end([
                                'label' => __('GRAVAR', true),
                                'class' => 'btn btn-blue btn-block',
                        ]); ?>

                    </div>


                </div>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
<?php $this->end(); ?>