<?php
    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
    echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');
    echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');
    echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css');
    echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css');
    echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
    echo $this->Html->css('/assets/plugins/summernote/build/summernote.css');
    echo $this->Html->css('/assets/plugins/ckeditor/contents.css');
?>
<div class="row">
    <div class="col-sm-4">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo $this->fetch('form-title') ?>
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
                <table class="table table-condensed table-hover">
                    <tbody>
                    <tr>
                        <td><?php echo __('Numero de Estudante') ?></td>
                        <td><?php echo h($aluno['Aluno']['codigo']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Nome Completo') ?></td>
                        <td><?php echo h($aluno['Entidade']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Data de Nascimento') ?></td>
                        <td><?php echo h($aluno['Entidade']['data_nascimento']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Sexo') ?></td>
                        <td><?php echo h($aluno['Entidade']['Genero']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Curso') ?></td>
                        <td><?php echo h($aluno['Curso']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Curriculum') ?></td>
                        <td><?php echo h($aluno['PlanoEstudo']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Ano de Ingresso') ?></td>
                        <td><?php echo h($aluno['Aluno']['ano_ingresso']) ?></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <?php echo $this->Html->link('<i class="fa fa-plus"></i>Voltar para o Perfil',
                        ['controller' => 'alunos', 'action' => 'perfil_estudante', $aluno['Aluno']['id']],
                        ['class' => 'btn btn-green', 'escape' => false]) ?>
                </p>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
    <div class="col-sm-8">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Cadeiras e Notas
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
                <?php echo $this->Form->create('Inscricao',
                    ['role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => []]); ?>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="col-md-1">Gravar</th>
                        <th class="col-md-1">Ano</th>
                        <th class="col-md-1">Semestre</th>
                        <th class="col-md-3">Disciplina</th>
                        <th class="col-md-2">Nota Final</th>
                        <th class="col-md-2">Ano Lectivo</th>
                        <th class="col-md-2">Data</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($disciplinaPlanoEstudos as $inscricao): ?>

                        <?php if (isset($inscricao['Nota'])):
                            foreach ($inscricao['Nota'] as $cadeiraFeita): ?>
                                <tr>
                                    <td><?= $this->Form->checkbox('Inscricao.' . $inscricao['DisciplinaPlanoEstudo']['id'] . '.gravar',
                                            ['checked' => true]); ?></td>
                                    <td><?= $inscricao['DisciplinaPlanoEstudo']['ano_curricular'] ?></td>
                                    <td><?= $inscricao['DisciplinaPlanoEstudo']['semestre_curricular'] ?></td>
                                    <td><?= $inscricao['Disciplina']['name'] ?></td>
                                    <td><?= $this->Form->input('Inscricao.' . $inscricao['DisciplinaPlanoEstudo']['id'] . '.nota_final',
                                            [
                                                'div'   => false,
                                                'label' => false,
                                                'class' => 'form-control col-xs-1',
                                                'id'    => 'apelido',
                                                'value' => $cadeiraFeita['Inscricao']['nota_final']

                                            ]); ?></td>
                                    <td><?= $cadeiraFeita['AnoLectivo']['ano'] ?>
                                        <?php echo $this->Form->hidden('Inscricao.' . $inscricao['DisciplinaPlanoEstudo']['id'] . '.inscricao_id',
                                                ['value' => $cadeiraFeita['Inscricao']['id']]); ?>
                                    </td>
                                    <td>
                                        <?= $cadeiraFeita['Inscricao']['data']; ?>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php else: ?>

                            <?php

                            $defaultAnoLectivo = $aluno['Aluno']['ano_ingresso'] + $inscricao['DisciplinaPlanoEstudo']['ano_curricular'] - 1;

                            ?>
                            <tr>
                                <td><?= $this->Form->checkbox('Inscricao.' . $inscricao['DisciplinaPlanoEstudo']['id'] . '.gravar'); ?></td>
                                <td><?= $inscricao['DisciplinaPlanoEstudo']['ano_curricular'] ?></td>
                                <td><?= $inscricao['DisciplinaPlanoEstudo']['semestre_curricular'] ?></td>
                                <td><?= $inscricao['Disciplina']['name'] ?></td>
                                <td><?= $this->Form->input('Inscricao.' . $inscricao['DisciplinaPlanoEstudo']['id'] . '.nota_final',
                                        [
                                            'div'      => false,
                                            'label'    => false,
                                            'class'    => 'form-control col-xs-1',
                                            'id'       => 'apelido',
                                            'required' => false

                                        ]); ?></td>
                                <td><?= $this->Form->input('Inscricao.' . $inscricao['DisciplinaPlanoEstudo']['id'] . '.ano_lectivo',
                                        [
                                            'div'      => false,
                                            'label'    => false,
                                            'class'    => 'form-control col-xs-1',
                                            'id'       => 'apelido',
                                            'options'  => $anoLectivos,
                                            'selected' => $defaultAnoLectivo
                                        ]); ?></td>
                                <td>
                                    <?= $this->Form->input('Inscricao.' . $inscricao['DisciplinaPlanoEstudo']['id'] . '.data',
                                        [
                                            'div'                => false,
                                            'label'              => false,
                                            'class'              => 'form-control date-picker',
                                            'id'                 => 'dataNascimento',
                                            'type'               => 'text',
                                            'data-date-viewmode' => 'years',
                                            'data-date-format'   => 'yyyy-mm-dd'
                                        ]); ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    </tbody>
                </table>


                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <?php echo $this->Form->hidden('aluno_id', ['value' => $aluno['Aluno']['id']]); ?>
                        <?php

                            echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']);

                        ?>

                    </div>


                </div>

            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
</div>

<?php echo $this->fetch('content'); ?>
<?php
    echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', ['block' => 'scriptBottom']);


    echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min',
        ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/select2/select2.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker',
        ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min',
        ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker',
        ['block' => 'scriptBottom']);
    //echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', array('block' => 'scriptBottom'));
    echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min',
        ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/summernote/build/summernote.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/ckeditor/ckeditor', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/ckeditor/adapters/jquery', ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.widget'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.position'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.menu'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.autocomplete'], ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-matricular-candidato-elements', ['block' => 'scriptBottom'],
        ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-matricular-candidato-wizard', ['block' => 'scriptBottom'],
        ['block' => 'scriptBottom']);
?>

