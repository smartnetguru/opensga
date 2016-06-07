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
                    <?php echo $this->Form->create('TurmaTipoAvaliacao', ['class' => 'block-content form']); ?>
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
                                                'label'    => false,
                                                'div'      => false,
                                                'size'     => 4,
                                                'type'     => 'text',
                                                'value'    => $aluno['Matricula']['Aluno']['Avaliacao'][0]['nota'],
                                                'disabled' => 'disabled',
                                        ]);
                                    } else {
                                        echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.nota',
                                                ['label' => false, 'div' => false, 'size' => 4, 'type' => 'text']);
                                    }
                                ?></td>
                            <td></td>
                            <?php
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.inscricao_id',
                                        ['type' => 'hidden', 'value' => $aluno['Inscricao']['id']]);
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.aluno_id',
                                        ['type' => 'hidden', 'value' => $aluno['Inscricao']['aluno_id']]);
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.tipoavaliacao_id',
                                        ['type' => 'hidden', 'value' => $turmaTipoAvaliacao['TipoAvaliacao']['id']]);
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.turma_id',
                                        ['type' => 'hidden', 'value' => $aluno['Turma']['id']]);
                                echo $this->Form->input('Avaliacao.' . $aluno['Inscricao']['id'] . '.turma_tipo_avaliacao_id',
                                        [
                                                'type'  => 'hidden',
                                                'value' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
                                        ]);

                                $i++;
                                }
                            ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <div class="pull-right">
                                    <?php
                                        echo $this->Form->submit('GRAVAR', [
                                                'name'    => 'metodo',
                                                'value'   => 'gravar',
                                                'div'     => false,
                                                'class'   => 'btn btn-default',
                                                'onClick' => "document.getElementById('metodoEnvio').value='gravar''",
                                        ]);
                                        echo $this->Form->submit('PUBLICAR', [
                                                'name'    => 'metodo',
                                                'value'   => 'publicar',
                                                'div'     => false,
                                                'class'   => 'btn btn-success',
                                                'onClick' => "document.getElementById('metodoEnvio').value='publicar;alert('e');''",
                                        ]);
                                    ?>

                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                    <?php echo $this->Form->end(); ?>
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
