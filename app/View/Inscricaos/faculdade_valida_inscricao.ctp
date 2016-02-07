<div class="row">
    <?php echo $this->Form->create('Inscricao', [
            'id'            => 'validate-form',
            'inputDefaults' => [
                    'div'       => 'form-group',
                    'wrapInput' => false,
                    'class'     => 'form-control',
                    'label'     => ['class' => 'control-label'],
            ],
    ]); ?>
    <div class="col-sm-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo __('Cadeiras Seleccionadas') ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="sample-table-1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th><?php echo __('Disciplina') ?></th>
                            <th><?php echo __('Ano') ?></th>
                            <th><?php echo __('Semestre') ?></th>
                            <th><?php echo __('Tipo') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0 ?>
                        <?php foreach ($turmas_normais as $disciplina): ?>
                            <tr>
                                <td><?php echo $disciplina['Disciplina']['name'] ?>&nbsp;</td>
                                <td><?php echo $disciplina['DisciplinaPlanoEstudo']['ano_curricular']; ?>&nbsp;</td>
                                <td><?php echo $disciplina['DisciplinaPlanoEstudo']['semestre_curricular']; ?></td>
                                <td><?php echo $this->Form->input('Disciplina.' . $i . '.tipo', [
                                            'label'   => false,
                                            'div'     => false,
                                            'default' => 1,
                                            'options' => $tipoInscricaos,
                                    ]) ?></td>
                                <?php
                                    echo $this->Form->input('Disciplina.' . $i . '.id',
                                            ['type'  => 'hidden',
                                             'value' => $disciplina['DisciplinaPlanoEstudo']['id'],
                                            ]);
                                ?>
                            </tr>

                            <?php
                            $i++;
                        endforeach;
                        ?>
                        <?php foreach ($turmas_atraso as $disciplina): ?>
                            <tr>
                                <td><?php echo $disciplina['Disciplina']['name'] ?>&nbsp;</td>
                                <td><?php echo $disciplina['DisciplinaPlanoEstudo']['ano_curricular']; ?>&nbsp;</td>
                                <td><?php echo $disciplina['DisciplinaPlanoEstudo']['semestre_curricular']; ?></td>
                                <td><?php echo $this->Form->input('Disciplina.' . $i . '.tipo', [
                                            'label'   => false,
                                            'div'     => false,
                                            'default' => 1,
                                            'options' => $tipoInscricaos,
                                    ]) ?>&nbsp;</td>
                                <?php
                                    echo $this->Form->input('Disciplina.' . $i . '.id',
                                            ['type'  => 'hidden',
                                             'value' => $disciplina['DisciplinaPlanoEstudo']['id'],
                                            ]);
                                ?>
                            </tr>

                            <?php
                            $i++;
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo __('Detalhes de Pagamento') ?>
            </div>
            <div class="panel-body">

                <div class="form-group col-sm-12">
                    <label class="col-sm-8 control-label">
                        Valor Total a Pagar:
                    </label>

                    <div class="col-sm-4">
                        <p data-display="data[Aluno][codigo]"
                           class="form-control-static display-value"><?php echo $this->Number->currency($total_normal + $total_atraso,
                                    'MZN') ?></p>
                    </div>
                </div>
                <div class="form-group  col-sm-12">
                    <label class="col-sm-8 control-label">
                        Valor das Cadeiras Normais:
                    </label>

                    <div class="col-sm-4">
                        <p data-display="data[Aluno][codigo]"
                           class="form-control-static display-value"><?php echo $this->Number->currency($total_normal,
                                    'MZN') ?></p>
                    </div>
                </div>
                <div class="form-group   col-sm-12">
                    <label class="col-sm-8 control-label">
                        Valor das Cadeiras em Atraso:
                    </label>

                    <div class="col-sm-4">
                        <p data-display="data[Aluno][codigo]"
                           class="form-control-static display-value"><?php echo $this->Number->currency($total_atraso,
                                    'MZN') ?></p>
                    </div>
                </div>
                <?php echo $this->Form->input('FinanceiroDeposito.numero_comprovativo', [
                        'label'       => 'Número de Comprovativo',
                        'placeholder' => 'Número de Comprovativo...',
                        'after'       => '<span class="help-block">Número do comprovativo de depósito do banco.</span>',
                        'required'    => true,
                ]); ?>
                <?php echo $this->Form->input('FinanceiroDeposito.financeiro_forma_deposito_id', [
                        'label'       => 'Forma de Depósito',
                        'placeholder' => 'Seleccione...',
                        'after'       => '<span class="help-block">.</span>',
                        'div'         => 'form-group col-sm-6',
                ]); ?>
                <?php echo $this->Form->input('FinanceiroDeposito.financeiro_banco_id', [
                        'label'       => 'Banco Usado',
                        'placeholder' => 'Seleccione...',
                        'after'       => '<span class="help-block">.</span>',
                        'div'         => 'form-group col-sm-6',
                ]); ?>
                <?php echo $this->Form->input('FinanceiroTransacao.valor', [
                        'label'       => 'Valor Pago',
                        'placeholder' => 'Seleccione...',
                        'after'       => '<span class="help-block">.</span>',
                        'div'         => 'form-group col-sm-6',
                        'required'    => true,
                ]); ?>
                <?php echo $this->Form->input('FinanceiroDeposito.data_deposito', [
                        'label'              => 'Data de Depósito',
                        'placeholder'        => 'Seleccione...',
                        'after'              => '<span class="help-block">.</span>',
                        'div'                => 'form-group col-sm-6',
                        'class'              => 'form-control date-picker',
                        'id'                 => 'dataDeposito',
                        'type'               => 'text',
                        'data-date-viewmode' => 'years',
                        'data-date-format'   => 'yyyy-mm-dd',
                        'required'           => true,
                ]); ?>
                <?php echo $this->Form->input('FinanceiroTransacao.detalhes', [
                        'label'       => 'Detalhes',
                        'placeholder' => 'Detalhes adicionais...',
                        'after'       => '<span class="help-block"></span>',
                        'type'        => 'text',
                ]); ?>
                <?php echo $this->Form->input('FinanceiroTransacao.aluno_id',
                        ['value' => $alunoId, 'type' => 'hidden']) ?>
                <?php echo $this->Form->input('Inscricao.plano_estudo_id',
                        ['value' => $planoEstudoId, 'type' => 'hidden']) ?>
                <div class="clear"></div>
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><?php echo $this->Html->link(__('Voltar ao Perfil'),
                                    ['controller' => 'alunos', 'action' => 'perfil_estudante', $alunoId],
                                    ['class' => 'btn btn-red btn-block']) ?></li>
                    </ul>
                    <ul class="actions-right">
                        <li><?php
                                if ($imprimir == true) {
                                    echo $this->Html->link('Imprimir Comprovativo', [
                                            'controller' => 'inscricaos',
                                            'action'     => 'print_comprovativo_inscricao',
                                            'faculdade'  => true,
                                            $alunoId,
                                    ], ['class' => 'btn btn-blue btn-block', 'target' => 'blank']);
                                } else {
                                    echo $this->Form->end([
                                            'class' => 'btn btn-green btn-block',
                                            'label' => __('Inscrever Aluno'),
                                    ]);
                                }
                            ?></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</div>