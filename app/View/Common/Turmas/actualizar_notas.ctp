<?php
    $this->BreadCumbs->addCrumb('Turmas', ['controller' => 'turmas', 'action' => 'index']);
    $this->BreadCumbs->addCrumb($turma['Disciplina']['name'],
            ['controller' => 'turmas', 'action' => 'ver_turma', $turma['Turma']['id']]);
    $this->BreadCumbs->addCrumb('Fechar Turma',
            ['controller' => 'turmas', 'action' => 'fechar_turma', $turma['Turma']['id']]);
    $this->BreadCumbs->addCrumb('Actualizar Notas', '#');


?>
<div class="col-sm-12">
    <div class="tabbable">
        <ul id="myTab" class="nav nav-tabs tab-bricky">
            <li class="active">
                <a href="#panel_tab_pauta_geral" data-toggle="tab">
                    <i class="green fa fa-home"></i> Pauta Geral
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane in active" id="panel_tab_pauta_geral">
                <p>
                    Use esta página para actualizar notas de varios estudantes de uma vez

                </p>

                <div class="alert alert-warning">
                    <p>
                    <h4>Só serão actualizados os estudantes em que a primeira coluna <em>"Actualizar"</em> estiver
                        seleccionada</h4>
                    <ul>
                        <li>Zero valores devem ser marcados como Zero</li>
                        <li>Deixar em branco indica que o estudante não fez o teste ou não tem nota</li>
                        </li>
                    </ul>
                    </p>
                </div>
                <?php echo $this->Form->create('Inscricao',
                        ['role'          => 'form',
                         'enctype'       => 'multipart/form-data',
                         'class'         => '',
                         'inputDefaults' => [],
                        ]); ?>
                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                    <thead>
                    <tr>
                        <th>Actualizar</th>
                        <th>Numero</th>
                        <th>Apelido</th>
                        <th>Nomes</th>
                        <th>Frequencia</th>
                        <th>N. Ex. Normal</th>
                        <th>N. Ex. Recorrencia</th>
                        <th>M. Final</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 0;
                        foreach ($inscricaos as $inscricao) {

                            if ($inscricao['Inscricao']['nota_frequencia'] == -1) {
                                $notaFrequencia = '';
                            } else {
                                $notaFrequencia = $inscricao['Inscricao']['nota_frequencia'];
                            }
                            if ($inscricao['Inscricao']['nota_exame_normal'] == -1) {
                                $notaExameNormal = '';
                            } else {
                                $notaExameNormal = $inscricao['Inscricao']['nota_exame_normal'];
                            }
                            if ($inscricao['Inscricao']['nota_exame_recorrencia'] == -1) {
                                $notaExameRecorrencia = '';
                            } else {
                                $notaExameRecorrencia = $inscricao['Inscricao']['nota_exame_recorrencia'];
                            }
                            if ($inscricao['Inscricao']['nota_final'] == -1) {
                                $notaFinal = '';
                            } else {
                                $notaFinal = $inscricao['Inscricao']['nota_final'];
                            }
                            ?>
                            <tr>
                                <td><?= $this->Form->checkbox('Inscricao.' . $inscricao['Inscricao']['id'] . '.gravar'); ?></td>
                                <td><?php echo h($inscricao['Matricula']['Aluno']['codigo']) ?></td>
                                <td><?php echo h($inscricao['Matricula']['Aluno']['Entidade']['apelido']) ?></td>
                                <td><?php echo h($inscricao['Matricula']['Aluno']['Entidade']['nomes']) ?></td>
                                <td>
                                    <?= $this->Form->input('Inscricao.' . $inscricao['Inscricao']['id'] . '.nota_frequencia',
                                            [
                                                    'div'   => false,
                                                    'label' => false,
                                                    'class' => 'form-control',
                                                    'id'    => 'dataNascimento',
                                                    'type'  => 'text',
                                                    'value' => $notaFrequencia,
                                            ]); ?>
                                </td>
                                <td>
                                    <?= $this->Form->input('Inscricao.' . $inscricao['Inscricao']['id'] . '.nota_exame_normal',
                                            [
                                                    'div'   => false,
                                                    'label' => false,
                                                    'class' => 'form-control',
                                                    'id'    => 'dataNascimento',
                                                    'type'  => 'text',
                                                    'value' => $notaExameNormal,
                                            ]); ?>
                                </td>
                                <td>
                                    <?= $this->Form->input('Inscricao.' . $inscricao['Inscricao']['id'] . '.nota_exame_recorrencia',
                                            [
                                                    'div'   => false,
                                                    'label' => false,
                                                    'class' => 'form-control',
                                                    'id'    => 'dataNascimento',
                                                    'type'  => 'text',
                                                    'value' => $notaExameRecorrencia,
                                            ]); ?>
                                </td>
                                <td>
                                    <?= $this->Form->input('Inscricao.' . $inscricao['Inscricao']['id'] . '.nota_final',
                                            [
                                                    'div'   => false,
                                                    'label' => false,
                                                    'class' => 'form-control',
                                                    'id'    => 'dataNascimento',
                                                    'type'  => 'text',
                                                    'value' => $notaFinal,
                                            ]); ?>
                                    <?php echo $this->Form->hidden('Inscricao.' . $inscricao['Inscricao']['id'] . '.inscricao_id',
                                            ['value' => $inscricao['Inscricao']['id']]); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="panel-footer clearfix">


                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-8">
                            <?php echo $this->Form->hidden('Turma.turma_id', ['value' => $turma['Turma']['id']]); ?>
                            <?php

                                echo $this->Form->end([
                                        'label' => __('GRAVAR', true),
                                        'class' => 'btn btn-blue btn-block',
                                ]);

                            ?>

                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>
</div>



				