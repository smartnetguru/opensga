<div class="col-sm-12">
    <div class="tabbable">
        <ul id="myTab" class="nav nav-tabs tab-bricky">
            <li class="active">
                <a href="#panel_tab_pauta_geral" data-toggle="tab">
                    <i class="green fa fa-home"></i> Pauta Geral
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Avaliacoes &nbsp; <i class="fa fa-caret-down width-auto"></i>
                </a>
                <!--<ul class="dropdown-menu dropdown-info">
                    <li>
                        <a href="#panel_tab2_example3" data-toggle="tab">
                            Dropdown 1
                        </a>
                    </li>
                    <li>
                        <a href="#panel_tab2_example4" data-toggle="tab">
                            Dropdown 2
                        </a>
                    </li>
                </ul>-->
            </li>
            <li>
                <a href="#panel_tab2_example2" data-toggle="tab">
                    Estatisticas <span class="badge badge-danger">Brevemente</span>
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane in active" id="panel_tab_pauta_geral">
                <p>
                    Use esta página para marcar o leccionamento de uma turma como terminado

                </p>

                <div class="alert alert-info">
                    <p>
                    <h4>Condicoes para o fecho de uma turma</h4>
                    <ul>
                        <li>Todas as Avalicaoes devem ser dadas, e o resultado publicado no SIGA</li>
                        <li>Todas as aulas agendadas no SIGA devem ser marcadas como Leccionadas</li>
                        <li>Todos Alunos devem ter Nota de Frequencia e/ou de exame normal e/ou de exame de recorencia,
                            conforme o caso
                        </li>
                    </ul>
                    </p>
                </div>
                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Numero</th>
                        <th>Apelido</th>
                        <th>Nomes</th>
                        <th>Frequencia</th>
                        <th>N. Ex. Normal</th>
                        <th>N. Ex. Recorrencia</th>
                        <th>M. Final</th>
                        <th>Accoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                        foreach ($inscricaos as $inscricao) {
                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo h($inscricao['Matricula']['Aluno']['codigo']) ?></td>
                                <td><?php echo h($inscricao['Matricula']['Aluno']['Entidade']['apelido']) ?></td>
                                <td><?php echo h($inscricao['Matricula']['Aluno']['Entidade']['nomes']) ?></td>
                                <td><?php echo h($inscricao['Inscricao']['nota_frequencia']) ?></td>
                                <td><?php echo h($inscricao['Inscricao']['nota_exame_normal']) ?></td>
                                <td><?php echo h($inscricao['Inscricao']['nota_exame_recorrencia']) ?></td>
                                <td><?php echo h($inscricao['Inscricao']['nota_final']) ?></td>
                                <th>
                                    <?php
                                        echo $this->Html->link(
                                                'Ver Detalhes',
                                                [
                                                        'controller' => 'inscricaos',
                                                        'action'     => 'ver_detalhes_inscricao',
                                                        $inscricao['Inscricao']['id'],
                                                        '?'          => [
                                                                'redirect_url' => $this->Html->url([
                                                                        'controller' => 'turmas',
                                                                        'action'     => 'fechar_turma',
                                                                        $turma['Turma']['id'],
                                                                ]),
                                                        ],
                                                ],
                                                ['class' => 'btn btn-info']
                                        );
                                    ?>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="panel-footer clearfix">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered table-hover table-full-width"
                                   id="sample_1">
                                <thead>
                                <tr>
                                    <td colspan="8" class="text-center">Estatísticas</td>

                                <tr>
                                    <th>Inscritos</th>
                                    <th>Excluidos</th>
                                    <th>Admitidos</th>
                                    <th>Dispensados</th>
                                    <th>Recorrentes</th>
                                    <th>Reprovados na Rec.</th>
                                    <th>Aprovados</th>
                                    <th>Reprovados</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td><?php echo $turma['Turma']['total_alunos'] ?></td>
                                    <td><?php echo $turma['Turma']['total_excluidos'] ?></td>
                                    <td><?php echo $turma['Turma']['total_admitidos'] ?></td>
                                    <td><?php echo $turma['Turma']['total_dispensados'] ?></td>
                                    <td><?php echo $turma['Turma']['total_recorrentes'] ?></td>
                                    <td><?php echo $turma['Turma']['total_reprovados_recorrencia'] ?></td>
                                    <td><?php echo $turma['Turma']['total_aprovados'] ?></td>
                                    <td><?php echo $turma['Turma']['total_reprovados'] ?></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="pull-right">
                        <?php
                            echo $this->Html->link(
                                    'Voltar a Turma',
                                    ['controller' => 'turmas', 'action' => 'ver_turma', $turma['Turma']['id']],
                                    ['class' => 'btn btn-info']);
                            echo $this->Html->link(
                                    'Inscrever Aluno',
                                    [
                                            'controller' => 'turmas',
                                            'action'     => 'get_aluno_for_inscricao',
                                            $turma['Turma']['id'],
                                            '?'          => [
                                                    'redirect_url' => $this->Html->url([
                                                            'controller' => 'turmas',
                                                            'action'     => 'fechar_turma',
                                                            $turma['Turma']['id'],
                                                    ]),
                                            ],
                                    ],
                                    ['class' => 'btn btn-info']);

                            $anoLectivoId = Configure::read('OpenSGA.ano_lectivo_id');
                            $semestreLectivoId = Configure::read('OpenSGA.semestre_lectivo_id');

                            if ($turma['Turma']['ano_lectivo_id'] == Configure::read('OpenSGA.ano_lectivo_id') && $turma['Turma']['semestre_lectivo_id'] == Configure::read('OpenSGA.semestre_lectivo_id')) {

                            } else {
                                echo $this->Html->link('Actualizar Notas',
                                        [
                                                'controller' => 'turmas',
                                                'action'     => 'actualizar_notas',
                                                $turma['Turma']['id'],
                                                '?'          => [
                                                        'redirect_url' => $this->Html->url([
                                                                'controller' => 'turmas',
                                                                'action'     => 'fechar_turma',
                                                                $turma['Turma']['id'],
                                                        ]),
                                                ],
                                        ],
                                        ['class' => 'btn btn-primary']);
                            }

                            if ($podeSerFechada === true) {
                                echo $this->Form->postLink('Fechar Turma',
                                        ['controller' => 'turmas', 'action' => 'fechar_turma', $turma['Turma']['id']],
                                        ['class' => 'btn btn-success']);
                            } else {

                                echo '<div class="col-sm-3">Essa Turma ainda não pode ser fechada pois possui ' . $podeSerFechada['Avaliacoes'] . ' Avaliacoes por realizar e ' . $podeSerFechada['Inscricoes'] . ' Inscricoes por fechar. Use a Funcao actualizar notas para fechar as inscricoes</div>';

                            }

                        ?>


                    </div>
                </div>
            </div>
            <div class="tab-pane" id="panel_tab2_example2">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                </p>

                <p>
                    <a href="#panel_tab2_example3" class="btn btn-red show-tab">
                        Go to Dropdown 1
                    </a>
                </p>
            </div>
            <div class="tab-pane" id="panel_tab2_example3">
                <p>
                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo
                    retro fanny pack lo-fi farm-to-table readymade.
                </p>

                <p>
                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
                    retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                    Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                </p>

                <p>
                    <a href="#panel_tab2_example4" class="btn btn-purple show-tab">
                        Go to Dropdown 2
                    </a>
                </p>
            </div>
            <div class="tab-pane" id="panel_tab2_example4">
                <p>
                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master
                    cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party
                    locavore wolf cliche high life echo park Austin.
                </p>

                <p>
                    <a href="#panel_tab2_example1" class="btn btn-purple show-tab">
                        Return to tab 1
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>



				