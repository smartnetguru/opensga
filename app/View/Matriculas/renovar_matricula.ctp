<?php
    $this->Html->addCrumb(__('Alunos'), '/alunos');
    $this->Html->addCrumb($aluno['Entidade']['name'], '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
    $this->Html->addCrumb(__('Renovações de Matrícula'), '#');
?>
<?php $this->extend('/Common/aluno_action'); ?>
<?php $this->assign('form-title', __('Renovacoes em Falta')) ?>
<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Matricula', ['role' => 'form', 'class' => '']); ?>
    <div class="row">

        <?php
            foreach ($renovacoesFalta as $rf) {
                ?>
                <div class="form-group col-sm-10">
                    <div class="checkbox">
                        <label><?php
                                echo $this->Form->input('AnoLectivo.' . $rf['AnoLectivo']['id'], [
                                        'type'  => 'checkbox',
                                        'value' => $rf['AnoLectivo']['id'],
                                        'label' => false,
                                        'div'   => false,
                                        'style' => 'position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;',
                                ]);
                                echo $rf['AnoLectivo']['ano'];
                            ?>
                        </label>
                    </div>
                </div>
                <?php
                echo "<label>";
                echo $this->Form->input('aluno_id',
                        ['type' => 'hidden', 'value' => $aluno['Aluno']['id'], 'label' => false, 'div' => '_50']);
                echo $this->Form->input('curso_id',
                        ['type' => 'hidden', 'value' => $aluno['Aluno']['curso_id'], 'label' => false, 'div' => '_50']);
                echo $this->Form->input('plano_estudo_id',
                        ['type' => 'hidden', 'value' => $aluno['PlanoEstudo']['id'], 'label' => false, 'div' => '_50']);
                echo $this->Form->input('data',
                        ['type' => 'hidden', 'value' => date('Y-m-d'), 'label' => false, 'div' => '_50']);
                echo $this->Form->input('estado_matricula_id',
                        ['type' => 'hidden', 'value' => 1, 'label' => false, 'div' => '_50']);
                echo $this->Form->input('user_id', [
                        'type'  => 'hidden',
                        'value' => $this->Session->read('Auth.User.id'),
                        'label' => false,
                        'div'   => '_50',
                ]);
                echo $this->Form->input('turno_id',
                        ['type' => 'hidden', 'value' => null, 'label' => false, 'div' => '_50']);
                echo $this->Form->input('tipo_matricula_id',
                        ['type' => 'hidden', 'value' => 2, 'label' => false, 'div' => '_50']);
                echo $this->Form->input('regime_lectivo_id',
                        ['type' => 'hidden', 'value' => null, 'label' => false, 'div' => '_50']);
            }
        ?>

        <div class="form-group col-sm-10">
            <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'butn btn-blue']); ?>
        </div>
    </div>
<?php $this->end(); ?>
<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
    $(document).ready(function() {
    $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-green',
    radioClass: 'iradio_minimal',
    increaseArea: '20%' // optional
    });
    });
<?php $this->Html->scriptEnd(); ?>