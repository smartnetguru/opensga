<?php
    /**
     * View para a introducao e visualizacao de notas do aluno
     *
     */
    $this->Html->addCrumb(__('Turmas'), '/alunos');
    $this->Html->addCrumb($turmaTipoAvaliacao['Turma']['name'],
            ['controller' => 'turmas', 'action' => 'view', $turmaTipoAvaliacao['Turma']['id']]);
    $this->Html->addCrumb($turmaTipoAvaliacao['TipoAvaliacao']['name'] . " #" . $turmaTipoAvaliacao['TurmaTipoAvaliacao']['ordem'],
            '#');
?>

<div class="row">
    <?php echo $this->fetch('top-actions'); ?>
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                <?php echo __('Notas da Avaliacao ' . $turmaTipoAvaliacao['TipoAvaliacao']['name'] . " #" . $turmaTipoAvaliacao['TurmaTipoAvaliacao']['ordem']) ?>
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="icon-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="icon-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="icon-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="icon-remove"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <?php echo $this->fetch('filter-form') ?>
                <div role="grid" class="dataTables_wrapper form-inline" id="tabelaAjax2">
                    <?php echo $this->Form->create('Avaliacao', [
                            'role'          => 'form',
                            'enctype'       => 'multipart/form-data',
                            'class'         => '',
                            'inputDefaults' => [],
                    ]); ?>
                    <table id="tabela-ajax"
                           class="table table-striped table-bordered table-hover table-full-width dataTable">
                        <thead>
                        <th>#</th>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Nota</th>
                        <th>Obs</th>
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            foreach ($inscricaos as $aluno) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $aluno['Matricula']['Aluno']['codigo']; ?></td>
                            <td><?php echo $aluno['Matricula']['Aluno']['Entidade']['name']; ?></td>

                            <td><?php
                                    if (isset($aluno['Matricula']['Aluno']['Avaliacao'][0])) {
                                        echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.nota', [
                                                'label' => false,
                                                'div'   => false,
                                                'size'  => 4,
                                                'type'  => 'text',
                                                'value' => $aluno['Matricula']['Aluno']['Avaliacao'][0]['nota'],
                                        ]);
                                    } else {
                                        echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.nota',
                                                ['label' => false, 'div' => false, 'size' => 4, 'type' => 'text']);
                                    }
                                ?></td>
                            <td><?php
                                    if (isset($aluno['Matricula']['Aluno']['Avaliacao'][0])) {
                                        echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.detalhes',
                                                [
                                                        'label' => false,
                                                        'div'   => false,
                                                        'size'  => 45,
                                                        'type'  => 'text',
                                                        'value' => $aluno['Matricula']['Aluno']['Avaliacao'][0]['detalhes'],
                                                ]);
                                    } else {
                                        echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.detalhes',
                                                ['label' => false, 'div' => false, 'size' => 45, 'type' => 'text']);
                                    }
                                ?></td>
                            <?php
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.aluno_id',
                                        ['type' => 'hidden', 'value' => $aluno['Inscricao']['aluno_id']]);
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.data_avaliacao', [
                                        'type'  => 'hidden',
                                        'value' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['data_realizada'],
                                ]);
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.estado_avaliacao_id',
                                        ['type' => 'hidden', 'value' => 1]);
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.turma_tipo_avaliacao_id',
                                        [
                                                'type'  => 'hidden',
                                                'value' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
                                        ]);

                                $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-11">

                            <?php
                                echo $this->Form->end([
                                        'label' => __('GRAVAR', true),
                                        'class' => 'btn btn-blue btn-block',
                                ]);
                            ?>

                        </div>


                    </div>
                    <?php //echo $this->element('table_footer', $paginationOptions);  ?>
                </div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE PANEL -->
    </div>
</div>

<?php
    echo $this->Html->script('/assets/plugins/select2/select2.min', ['block' => 'scriptBottom']);
    //echo $this->Html->script('/assets/plugins/DataTables/media/js/jquery.dataTables.min', array('block' => 'scriptBottom'));
    //echo $this->Html->script('/assets/plugins/DataTables/media/js/DT_bootstrap', array('block' => 'scriptBottom'));
?>

<?php echo $this->fetch('content'); ?>
<?php
    echo $this->Js->writeBuffer();
?>
