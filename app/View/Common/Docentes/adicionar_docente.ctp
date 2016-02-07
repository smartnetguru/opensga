<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');

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
    <div class="col-sm-12">
        <!-- start: FORM WIZARD PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                <?php echo __('Cadastro de Estudantes') ?>
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
                <?php echo $this->Form->create('Docente', [
                        'role'          => "form",
                        'novalidate'    => true,
                        'enctype'       => 'multipart/form-data',
                        'class'         => 'smart-wizard form-vertical',
                        'id'            => 'formAlumniCandidatoAlumni',
                        'inputDefaults' => ['before' => '', 'after' => ''],
                ]); ?>

                <div class="swMain" id="wizard">
                    <ul>
                        <li>
                            <a href="#step-1">
                                <div class="stepNumber">
                                    1
                                </div>
                                <span class="stepDesc"> Passo 1
                                    <br>
                                    <small>Dados Basicos</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2">
                                <div class="stepNumber">
                                    2
                                </div>
                                <span class="stepDesc"> Passo 2
                                    <br>
                                    <small>Dados de Docencia</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3">
                                <div class="stepNumber">
                                    3
                                </div>
                                <span class="stepDesc"> Passo 3
                                    <br>
                                    <small>Contactos</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4">
                                <div class="stepNumber">
                                    4
                                </div>
                                <span class="stepDesc"> Passo 4
                                    <br>
                                    <small>Identificacao</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-5">
                                <div class="stepNumber">
                                    5
                                </div>
                                <span class="stepDesc"> Passo 5
                                    <br>
                                    <small>Confirmacao</small> </span>
                            </a>
                        </li>
                    </ul>
                    <div class="progress progress-striped active progress-sm">
                        <div class="progress-bar progress-bar-success step-bar" role="progressbar" aria-valuemin="0"
                             aria-valuemax="100">
                            <span class="sr-only"> 0% Completo (sucesso)</span>
                        </div>
                    </div>
                    <div id="step-1">
                        <fieldset>
                            <legend><?php echo __('Dados Básicos') ?></legend>
                            <?php
                                echo $this->Form->input('Entidade.apelido',
                                        [
                                                'div'   => 'form-group col-sm-4',
                                                'label' => ['class' => 'control-label'],
                                                'class' => 'form-control',
                                                'id'    => 'apelidoID',
                                        ]);
                                echo $this->Form->input('Entidade.nomes',
                                        [
                                                'div'   => 'col-sm-4 form-group',
                                                'label' => ['class' => 'control-label'],
                                                'class' => 'form-control',
                                                'id'    => 'nomesID',
                                        ]);
                                echo $this->Form->input('Entidade.genero_id',
                                        [
                                                'div'   => 'col-sm-4 form-group',
                                                'label' => ['class' => 'control-label'],
                                                'class' => 'form-control',
                                                'id'    => 'apelidoID',
                                        ]);

                                echo $this->Html->div('clearfix', '');
                                $before = '<div c' . 'lass="input-group">';
                                $after = '<s' . 'pan class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>';
                                echo $this->Form->input('Entidade.data_nascimento',
                                        [
                                                'label'              => [
                                                        'class' => 'control-label',
                                                        'text'  => 'Data de Nascimento',
                                                ],
                                                'div'                => 'col-sm-2 form-group',
                                                'class'              => 'form-control date-picker',
                                                'id'                 => 'dataNascimento',
                                                'type'               => 'text',
                                                'data-date-viewmode' => 'years',
                                                'data-date-format'   => 'yyyy-mm-dd',
                                                'between'            => $before,
                                                'after'              => $after,
                                        ]);
                                echo $this->Form->input('Entidade.nuit',
                                        [
                                                'div'   => 'col-sm-2 form-group required',
                                                'label' => ['class' => 'control-label required'],
                                                'class' => 'form-control required',
                                                'id'    => 'nomePaiID',
                                        ]);

                                echo $this->Form->input('Entidade.nome_pai',
                                        [
                                                'div'   => 'col-sm-4 form-group',
                                                'label' => ['class' => 'control-label'],
                                                'class' => 'form-control',
                                                'id'    => 'nomePaiID',
                                        ]);

                                echo $this->Form->input('Entidade.nome_mae',
                                        [
                                                'div'   => 'col-sm-4 form-group',
                                                'label' => ['class' => 'control-label'],
                                                'class' => 'form-control',
                                                'id'    => 'nomeMaeID',
                                        ]);
                                echo $this->Html->div('clearfix', '');
                                echo $this->Form->input('Entidade.naturalidade',
                                        [
                                                'div'   => 'col-sm-3 form-group',
                                                'label' => ['class' => 'control-label'],
                                                'class' => 'form-control',
                                                'id'    => 'naturalidadeID',
                                        ]);
                                echo $this->Form->input('Entidade.pais_nascimento',
                                        [
                                                'div'     => 'col-sm-3 form-group',
                                                'label'   => ['class' => 'control-label'],
                                                'class'   => 'form-control',
                                                'id'      => 'paisNascimentoID',
                                                'options' => $paises,
                                                'default' => 152,
                                        ]);
                                echo $this->Form->input('Entidade.provincia_nascimento',
                                        [
                                                'div'     => 'col-sm-3 form-group',
                                                'label'   => ['class' => 'control-label'],
                                                'class'   => 'form-control',
                                                'id'      => 'apelidoID',
                                                'options' => $provincias,
                                        ]);
                                echo $this->Form->input('Entidade.cidade_nascimento',
                                        [
                                                'div'     => 'col-sm-3 form-group',
                                                'label'   => ['class' => 'control-label'],
                                                'class'   => 'form-control',
                                                'id'      => 'apelidoID',
                                                'options' => $cidadeNascimentos,
                                        ]);

                            ?>

                        </fieldset>

                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-8">
                                <button class="btn btn-blue next-step btn-block">
                                    Proximo <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="step-2">
                        <div class="form-group">
                            <fieldset>
                                <legend><?php echo __('Dados de Docencia') ?></legend>
                                <div class="row">
                                    <?php
                                        echo $this->Form->input('Docente.unidade_organica_id',
                                                [
                                                        'div'     => 'col-sm-6 form-group',
                                                        'label'   => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Unidade Organica',
                                                        ],
                                                        'class'   => 'form-control',
                                                        'id'      => 'unidadeOrganicaId',
                                                        'default' => $unidadeOrganicaId,
                                                ]);

                                        echo $this->Form->input('Docente.data_ingresso',
                                                [
                                                        'label'              => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Data de Ingresso na Docencia',
                                                        ],
                                                        'div'                => 'col-sm-6 form-group',
                                                        'class'              => 'form-control date-picker',
                                                        'id'                 => 'dataIngresso',
                                                        'type'               => 'text',
                                                        'data-date-viewmode' => 'years',
                                                        'data-date-format'   => 'yyyy-mm-dd',
                                                        'between'            => $before,
                                                        'after'              => $after,
                                                ]);
                                    ?>
                                </div>
                                <div class="row">
                                    <?php
                                        echo $this->Form->input('Docente.docente_categoria_id',
                                                [
                                                        'div'   => 'col-sm-4 form-group',
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Categoria do Docente',
                                                        ],
                                                        'class' => 'form-control',
                                                        'id'    => 'docenteCategoriaId',
                                                ]);
                                        echo $this->Form->input('Docente.docente_funcao_id',
                                                [
                                                        'div'   => 'col-sm-4 form-group',
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Funcao do Docente',
                                                        ],
                                                        'class' => 'form-control',
                                                        'id'    => 'docenteFuncaoId',
                                                ]);
                                        echo $this->Form->input('Docente.regime_trabalho_id',
                                                [
                                                        'div'   => 'col-sm-4 form-group',
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Regime de Trabalho',
                                                        ],
                                                        'class' => 'form-control',
                                                        'id'    => 'regimeTrabalhoId',
                                                ]);
                                    ?>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="icon-circle-arrow-left"></i> Anterior
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Proximo <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="step-3">
                        <div class="form-group">
                            <fieldset>
                                <legend><?php echo __('Contactos') ?></legend>
                                <div class="row">
                                    <?php
                                        echo $this->Form->input('EntidadeContacto.11',
                                                [
                                                        'div'              => 'col-sm-4 form-group',
                                                        'label'            => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Pais Onde Mora',
                                                        ],
                                                        'class'            => 'form-control',
                                                        'id'               => 'paisMorada',
                                                        'options'          => $paises,
                                                        'default'          => 152,
                                                        'data-placeholder' => "Seleccione...",
                                                        'empty'            => true,
                                                ]);
                                        echo $this->Form->input('EntidadeContacto.10',
                                                [
                                                        'div'              => 'col-sm-4 form-group',
                                                        'label'            => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Provincia onde Mora',
                                                        ],
                                                        'class'            => 'form-control',
                                                        'id'               => 'provinciaMorada',
                                                        'options'          => $provincias,
                                                        'data-placeholder' => "Seleccione...",
                                                        'empty'            => true,
                                                ]);
                                        echo $this->Form->input('EntidadeContacto.9',
                                                [
                                                        'div'              => 'col-sm-4 form-group',
                                                        'label'            => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Cidade Onde Mora',
                                                        ],
                                                        'class'            => 'form-control',
                                                        'id'               => 'cidadeMorada',
                                                        'options'          => $cidadeNascimentos,
                                                        'data-placeholder' => "Seleccione...",
                                                        'empty'            => true,
                                                ]);

                                    ?>
                                </div>
                                <div class="row">
                                    <?php
                                        echo $this->Form->input('EntidadeContacto.6',
                                                [
                                                        'div'   => 'col-sm-3 form-group',
                                                        'label' => ['class' => 'control-label', 'text' => 'Bairro'],
                                                        'class' => 'form-control',
                                                        'id'    => 'bairroMorada2',
                                                        'type'  => 'text',
                                                ]);
                                        echo $this->Form->input('EntidadeContacto.5',
                                                [
                                                        'div'   => 'col-sm-3 form-group',
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Avenida/Rua',
                                                        ],
                                                        'class' => 'form-control',
                                                        'id'    => 'avenidaMorada',
                                                ]);

                                        echo $this->Form->input('EntidadeContacto.7',
                                                [
                                                        'div'   => 'col-sm-3 form-group',
                                                        'label' => ['class' => 'control-label', 'text' => 'Quarteirao'],
                                                        'class' => 'form-control',
                                                        'id'    => 'quarteiraoMorada',
                                                ]);
                                        echo $this->Form->input('EntidadeContacto.8',
                                                [
                                                        'div'   => 'col-sm-3 form-group',
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Caixa Postal',
                                                        ],
                                                        'class' => 'form-control',
                                                        'id'    => 'caixaPostalMorada',
                                                ]);

                                    ?>
                                </div>
                                <div class="row">
                                    <?php

                                        echo $this->Form->input('EntidadeContacto.2',
                                                [
                                                        'div'      => 'col-sm-6 form-group required',
                                                        'label'    => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Telemovel',
                                                        ],
                                                        'class'    => 'form-control',
                                                        'id'       => 'telemovel',
                                                        'required' => 'required',
                                                ]);

                                        echo $this->Form->input('EntidadeContacto.1',
                                                [
                                                        'div'      => 'col-sm-6 form-group required',
                                                        'label'    => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Email Pessoal',
                                                        ],
                                                        'class'    => 'form-control',
                                                        'id'       => 'emailPessoal',
                                                        'required' => 'required',
                                                ]);
                                    ?>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="icon-circle-arrow-left"></i> Anterior
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Proximo <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>


                    </div>
                    <div id="step-4">
                        <div class="form-group">
                            <fieldset>
                                <legend><?php echo __('Detalhes de Identificação') ?></legend>

                                <div class="row">
                                    <?php
                                        echo $this->Form->input('EntidadeIdentificacao.documento_identificacao_id',
                                                [
                                                        'div'     => 'col-sm-4 form-group',
                                                        'label'   => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Tipo de Documento',
                                                        ],
                                                        'class'   => 'form-control',
                                                        'id'      => 'documentoIdentificacaoId',
                                                        'options' => $documentoIdentificacaos,
                                                ]);
                                        echo $this->Form->input('EntidadeIdentificacao.numero',
                                                [
                                                        'div'   => 'col-sm-4 form-group',
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Numero de Documento',
                                                        ],
                                                        'class' => 'form-control',
                                                        'id'    => 'numeroDocumentoIdentificacao',
                                                ]);
                                        echo $this->Form->input('EntidadeIdentificacao.local_emissao',
                                                [
                                                        'div'   => 'col-sm-4 form-group',
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Local de Emissão',
                                                        ],
                                                        'class' => 'form-control',
                                                        'id'    => 'localEmissaoDocumentoIdentificacao',
                                                        'type'  => 'text',
                                                ]);
                                    ?>
                                </div>
                                <div class="row">
                                    <?php
                                        echo $this->Form->input('EntidadeIdentificacao.data_emissao',
                                                [
                                                        'label'              => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Data de Emissao',
                                                        ],
                                                        'div'                => 'col-sm-4 form-group',
                                                        'class'              => 'form-control date-picker',
                                                        'id'                 => 'dataEmissaoDocumentoIdentificacao',
                                                        'type'               => 'text',
                                                        'data-date-viewmode' => 'years',
                                                        'data-date-format'   => 'yyyy-mm-dd',
                                                        'between'            => $before,
                                                        'after'              => $after,
                                                ]);
                                        echo $this->Form->input('EntidadeIdentificacao.data_validade',
                                                [
                                                        'label'              => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Data de Validade',
                                                        ],
                                                        'div'                => 'col-sm-6 form-group',
                                                        'class'              => 'form-control date-picker',
                                                        'id'                 => 'dataValidadeDocumentoIdentificacao',
                                                        'type'               => 'text',
                                                        'data-date-viewmode' => 'years',
                                                        'data-date-format'   => 'yyyy-mm-dd',
                                                        'between'            => $before,
                                                        'after'              => $after,
                                                ]);
                                    ?>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="icon-circle-arrow-left"></i> Anterior
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Proximo <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="step-5">
                        <h2 class="StepTitle">Confirmacao dos Dados</h2>

                        <div class="row">
                            <div class="col-sm-4">
                                <fieldset>
                                    <legend>Dados Basicos</legend>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Apelido:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][apelido]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Nomes:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][nomes]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Faculdade:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Candidatura][nome_faculdade]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Nome do pai:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][nome_pai]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Nome da Mae:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][nome_mae]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-4">
                                <fieldset>
                                    <legend>Dados Biograficos</legend>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Sexo:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][genero_id]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Data de Nascimento:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][data_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Estado Civil:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][estado_civil]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Naturalidade:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][naturalidade]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Pais de Nascimento:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][pais_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Provincia:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][provincia_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Cidade/Distrito:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][cidade_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-4">
                                <fieldset>
                                    <legend>Outros Dados</legend>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Escola Anterior:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[AlunoNivelMedio][escola_nivel_medio_id]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Ano de Conclusao:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[AlunoNivelMedio][ano_conclusao]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Nota de Conclusao:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[AlunoNivelMedio][notal_final]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Entregou Certificado?:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Aluno][certificado_nivel_anterior]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Recenseamento Militar?:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Aluno][recenseamento_militar]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Bairro onde Mora:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[EntidadeContacto][6]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Telemovel:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[EntidadeContacto][2]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Numero de Identificacao:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[EntidadeIdentificacao][numero]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Data de Emissao:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[EntidadeIdentificacao][data_emissao]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">

                                <?php echo $this->Form->end([
                                        'label' => __('GRAVAR', true),
                                        'class' => 'btn btn-success finish-step btn-block',
                                        'div'   => 'col-sm-2 col-sm-offset-8',
                                ]); ?>

                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
            <!-- end: FORM WIZARD PANEL -->
        </div>
    </div>
</div>

<?php
    $this->Js->get('#provinciaNascimento')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_cidades_by_provincia',
            'faculdade'  => false,
    ], [
            'update'         => '#cidadeNascimento',
            'complete'       => '$("#cidadeNascimento").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );

    $this->Js->get('#provinciaOrigem')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_cidades_by_provincia',
            'faculdade'  => false,
    ], [
            'update'         => '#cidadeOrigem',
            'complete'       => '$("#cidadeOrigem").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );
    $this->Js->get('#provinciaMorada')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_cidades_by_provincia',
            'faculdade'  => false,
    ], [
            'update'         => '#cidadeMorada',
            'complete'       => '$("#cidadeMorada").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );
    $this->Js->get('#cidadeOrigem')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_escolas_by_distrito',
            'faculdade'  => false,
    ], [
            'update'         => '#escolaOrigem',
            'complete'       => '$("#escolaOrigem").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );
    $this->Js->get('#unidadeOrganica')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_cursos_by_unidade_organica',
            'faculdade'  => false,
    ], [
            'update'         => '#curso',
            'complete'       => '$("#curso").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );
?>
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
    echo $this->Html->script('/assets/js/form-adicionar-docente-elements', ['block' => 'scriptBottom'],
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-adicionar-docente-wizard', ['block' => 'scriptBottom'],
            ['block' => 'scriptBottom']);
?>


<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>


$(document).ready(function() {
$(window).keydown(function(event){
if(event.keyCode == 13) {
event.preventDefault();
return false;
}
});

FormElements.init();
FormWizard.init();
});

$( "#naturalidade2" ).autocomplete({
source: "<?php echo $this->Html->url([
        'controller' => 'ajax',
        'action'     => 'get_naturalidades_autocomplete',
        'faculdade'  => false,
]) ?>",
minLength: 2,
delay: 2
});
$( "#bairroMorada" ).autocomplete({
source: "<?php echo $this->Html->url([
        'controller' => 'ajax',
        'action'     => 'get_bairros_autocomplete',
        'faculdade'  => false,
]) ?>",
minLength: 2,
delay: 2
});

<?php $this->Html->scriptEnd(); ?>
<?php echo $this->fetch('content'); ?>
