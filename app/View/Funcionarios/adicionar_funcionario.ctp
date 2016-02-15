<?php
    $this->BreadCumbs->addCrumb('Funcionarios', '/funcionarios');
    $this->BreadCumbs->addCrumb('Adicionar Funcionario', '/funcionarios/adicionar_funcionario');
?>


    <div class="row">
        <div class="col-sm-12">
            <!-- start: FORM WIZARD PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">
                        <i class="icon-external-link-sign"></i>
                        <?php echo __('Cadastro de Funcionarios') ?>
                    </h3>
                    <?php echo $this->Html->link('<i class="fa fa-arrow-left"></i>',
                            ['action' => 'index'],
                            [
                                    'escape'              => false,
                                    'class'               => 'btn btn btn-light-grey pull-right tooltips',
                                    'data-original-title' => 'Voltar para Lista de Funcionarios',
                            ]) ?>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php echo $this->Form->create('Funcionario', [

                            'role'          => "form",
                            'novalidade'    => 'novalidate',
                            'enctype'       => 'multipart/form-data',
                            'class'         => 'smart-wizard',
                            'id'            => 'form',
                            'inputDefaults' => [
                                    'div'       => 'form-group',
                                    'wrapInput' => false,
                                    'class'     => 'form-control',
                                    'label'     => [
                                            'class' => 'control-label',
                                    ],
                            ],
                    ]); ?>

                    <div class="swMain" id="wizard">
                        <ul>
                            <li>
                                <a href="#step-1">
                                    <div class="stepNumber">
                                        1
                                    </div>
                                <span class="stepDesc">
                                    <small>Dados Basicos</small> </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                    <div class="stepNumber">
                                        2
                                    </div>
                                <span class="stepDesc">
                                    <small>Nivel Anterior</small> </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                    <div class="stepNumber">
                                        3
                                    </div>
                                <span class="stepDesc">
                                    <small>Identificacao e Contactos</small> </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-4">
                                    <div class="stepNumber">
                                        4
                                    </div>
                                <span class="stepDesc">
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

                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('Funcionario.codigo', [
                                                'label'       => 'Codigo do Funcionario',
                                                'placeholder' => 'Codigo do Funcionario…',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('Entidade.apelido', [
                                                'label'       => 'Apelido',
                                                'placeholder' => 'Apelido do Funcionario…',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('Entidade.nomes', [
                                                'label'       => 'Nomes',
                                                'placeholder' => 'Nome do Funcionario…',
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('Funcionario.genero_id', [
                                                'label'       => 'Sexo',
                                                'placeholder' => 'Sexo',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group required">
                                            <?php echo $this->Form->label('Entidade.data_nascimento',
                                                    'Data de Nascimento', ['class' => 'control-label']); ?>
                                            <div class="input-group">
                                                <?php echo $this->Form->input('Entidade.data_nascimento', [
                                                        'class'              => 'form-control date-picker',
                                                        'id'                 => 'firstname',
                                                        'type'               => 'text',
                                                        'data-date-viewmode' => 'years',
                                                        'data-date-format'   => 'yyyy-mm-dd',
                                                        'label'              => false,
                                                        'div'                => false,
                                                ]); ?>
                                                <span class="input-group-addon"> <i
                                                            class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('Entidade.estado_civil', [
                                                'label'       => 'Estado Civil',
                                                'placeholder' => 'Estado Civil',
                                                'options'     => $estadoCivil,
                                        ]); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('Entidade.nome_pai', [
                                                'label'       => 'Nome do Pai',
                                                'placeholder' => 'Nome do Pai',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('Entidade.nome_mae', [
                                                'label'       => 'Nome da Mae',
                                                'placeholder' => 'Nome da Mae',
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->input('Entidade.naturalidade', [
                                                'label'        => 'Naturalidade',
                                                'placeholder'  => 'Naturalidade',
                                                'options'      => $naturalidade,
                                                'autocomplete' => 'on',
                                                'type'         => 'text',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->input('Entidade.pais_nascimento', [
                                                'label'   => 'Pais de Nascimento',
                                                'id'      => 'paisNascimento',
                                                'options' => $paises,
                                                'default' => 152,
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->input('Entidade.provincia_nascimento', [
                                                'label'   => 'Provincia de Nascimento',
                                                'id'      => 'provinciaNascimento',
                                                'options' => $provincias,
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->input('Entidade.cidade_nascimento', [
                                                'label'   => 'Cidade de Nascimento',
                                                'id'      => 'cidadeNascimento',
                                                'options' => $cidades,
                                        ]); ?>
                                    </div>
                                </div>
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
                                    <legend><?php echo __('Detalhes institucionais') ?></legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <?php echo $this->Form->input('Funcionario.unidade_organica_id',
                                                    [
                                                            'label'   => 'Unidade Organica',
                                                            'id'      => 'unidadeOrganicaId',
                                                            'options' => $unidadeOrganicas,
                                                    ]); ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <?php echo $this->Form->input('Funcionario.tipo_funcionario_id',
                                                    ['label' => 'Tipo de Funcionario']); ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group required">
                                                <?php echo $this->Form->label('Funcionario.data_admissao',
                                                        'Data de Admissao'); ?>
                                                <div class="input-group">
                                                    <?php echo $this->Form->input('Funcionario.data_admissao', [
                                                            'class'              => 'form-control date-picker',
                                                            'id'                 => 'firstname',
                                                            'type'               => 'text',
                                                            'data-date-viewmode' => 'years',
                                                            'data-date-format'   => 'yyyy-mm-dd',
                                                            'label'              => false,
                                                            'div'                => false,
                                                    ]); ?>
                                                    <span class="input-group-addon"> <i
                                                                class="fa fa-calendar"></i> </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <?php echo $this->Form->input('Funcionario.grau_academico_id', [
                                                    'label' => 'Grau Academico',
                                                    'empty' => true,
                                            ]); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $this->Form->label('Funcionario.cargo_id', 'Cargo'); ?>
                                            <?php echo $this->Form->input('Funcionario.cargo_id', [
                                                    'label' => false,
                                                    'div'   => false,
                                                    'class' => 'form-control',
                                                    'id'    => 'codigo',
                                            ]); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <?php echo $this->Form->input('Funcionario.superior_hierarquico',
                                                    ['label' => 'Superior Hierarquico']); ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <?php echo $this->Form->input('Funcionario.categoria_funcionario_id',
                                                    ['label' => 'Categoria do Funcionario']); ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <?php echo $this->Form->input('Funcionario.categoria_profissional_id', [
                                                    'label' => 'Categoria Profissional',
                                            ]); ?>
                                        </div>


                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-3">
                                    <button class="btn btn-light-grey back-step btn-block">
                                        <i class="icon-circle-arrow-left"></i> Voltar
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
                                    <legend><?php echo __('Detalhes de Identificação') ?></legend>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <?php echo $this->Form->input('EntidadeIdentificacao.documento_identificacao_id',
                                                    [
                                                            'label'   => 'Tipo de Documento',
                                                            'options' => $documentoIdentificacaos,
                                                    ]); ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <?php echo $this->Form->input('EntidadeIdentificacao.numero',
                                                    ['label' => 'Numero de Documento de Identificacao']); ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <?php echo $this->Form->input('EntidadeIdentificacao.local_emissao', [
                                                    'label' => 'Local de Emissao',
                                                    'id'    => 'localEmissaoDocumento',
                                            ]); ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group required">
                                                <?php echo $this->Form->label('EntidadeIdentificacao.data_emissao',
                                                        'Data de Emissao'); ?>
                                                <div class="input-group">
                                                    <?php echo $this->Form->input('EntidadeIdentificacao.data_emissao',
                                                            [
                                                                    'class'              => 'form-control date-picker',
                                                                    'id'                 => 'firstname',
                                                                    'type'               => 'text',
                                                                    'data-date-viewmode' => 'years',
                                                                    'data-date-format'   => 'yyyy-mm-dd',
                                                                    'label'              => false,
                                                                    'div'                => false,
                                                            ]); ?>
                                                    <span class="input-group-addon"> <i
                                                                class="fa fa-calendar"></i> </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <?php echo $this->Form->input('EntidadeContacto.2', [
                                                    'label' => 'Telemovel',
                                                    'class' => 'form-control',
                                                    'id'    => 'codigo',
                                            ]); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $this->Form->input('EntidadeContacto.1', [
                                                    'label' => 'Email Pessoal',
                                                    'class' => 'form-control',
                                                    'id'    => 'codigo',
                                            ]); ?>
                                        </div>
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
                            <h2 class="StepTitle">Confirmacao dos Dados</h2>
                            <div class="row">
                                <div class="col-sm-4">
                                    <fieldset>
                                        <legend>Dados Basicos</legend>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">
                                                Numero de Estudante:
                                            </label>
                                            <div class="col-sm-8">
                                                <p data-display="data[Aluno][codigo]"
                                                   class="form-control-static display-value"></p>
                                            </div>
                                        </div>
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
                                                Curso:
                                            </label>
                                            <div class="col-sm-8">
                                                <p data-display="data[Candidatura][nome_curso]"
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
    echo $this->Html->script('/assets/js/form-matricular-candidato-elements', ['block' => 'scriptBottom'],
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-matricular-candidato-wizard', ['block' => 'scriptBottom'],
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

    $( "#naturalidade" ).autocomplete({
    source: "<?php echo $this->Html->url(['controller' => 'ajax', 'action' => 'get_naturalidades_autocomplete']) ?>",
    minLength: 2,
    delay: 2
    });
    $( "#bairroMorada" ).autocomplete({
    source: "<?php echo $this->Html->url(['controller' => 'ajax', 'action' => 'get_bairros_autocomplete']) ?>",
    minLength: 2,
    delay: 2
    });

<?php $this->Html->scriptEnd(); ?>