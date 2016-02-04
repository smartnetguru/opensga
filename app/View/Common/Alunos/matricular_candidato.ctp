<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">
                    Matricular Novo Ingresso
                </h3>

                <button class="btn btn-default pull-right">Voltar</button>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <!-- start: FORM WIZARD PANEL -->
                <?php echo $this->Form->create('Aluno', [
                        'role'          => "form",
                        'novalidade'    => 'novalidate',
                        'enctype'       => 'multipart/form-data',
                        'class'         => 'smart-wizard',
                        'id'            => 'form',
                        'inputDefaults' => [
                                'div'       => 'form-group',
                                'wrapInput' => false,
                                'class'     => 'form-control',
                        ],
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
                                    <small>Dados Básicos</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2">
                                <div class="stepNumber">
                                    2
                                </div>
                                <span class="stepDesc"> Passo 2
                                    <br>
                                    <small>Nivel Anterior</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3">
                                <div class="stepNumber">
                                    4
                                </div>
                                <span class="stepDesc"> Passo 4
                                    <br>
                                    <small>Identificacao e Outros</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4">
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

                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Aluno.codigo', [
                                        'value'    => $candidato['Candidatura']['numero_estudante'],
                                        'label'    => 'Numero de Estudante',
                                        'readonly' => true,
                                        'class'    => 'form-control',
                                        'id'       => 'codigo',
                                ]); ?>
                            </div>
                            <?php if(!$this->fetch('nomes')):?>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Entidade.apelido', [
                                        'value' => $candidato['Candidatura']['apelido'],
                                        'label' => 'Apelido',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Entidade.nomes', [
                                        'value' => $candidato['Candidatura']['nomes'],
                                        'label' => 'Outros Nomes',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                ]); ?>
                            </div>
                            <?php else:?>
                            <?php echo $this->fetch('nomes')?>
                            <?php endif;?>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('Candidatura.nome_faculdade', [
                                        'value'    => $candidato['Candidatura']['nome_faculdade'],
                                        'label'    => 'Faculdade',
                                        'readonly' => true,
                                        'class'    => 'form-control',
                                        'id'       => 'codigo',
                                ]); ?>
                            </div>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('Candidatura.nome_curso', [
                                        'value'    => $candidato['Candidatura']['nome_curso'],
                                        'label'    => 'Nome do Curso',
                                        'readonly' => true,
                                        'class'    => 'form-control',
                                        'id'       => 'codigo',
                                ]); ?>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Entidade.genero_id',
                                        [
                                                'value'   => $candidato['Candidatura']['genero_id'],
                                                'default' => $candidato['Candidatura']['genero_id'],
                                                'label'   => 'Sexo',
                                                'class'   => 'form-control',
                                                'id'      => 'codigo',
                                        ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Entidade.data_nascimento', [
                                        'value'              => $candidato['Candidatura']['data_nascimento'],
                                        'label'              => 'Data de Nascimento',
                                        'class'              => 'form-control date-picker',
                                        'id'                 => 'firstname',
                                        'type'               => 'text',
                                        'data-date-viewmode' => 'years',
                                        'data-date-format'   => 'yyyy-mm-dd',
                                        'after'              => '<span class="input-group-addon"> <i class="fa fa-calendar"></i>
                                             </span></div>',
                                        'between'            => '<div class="input-group">',
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Entidade.estado_civil',
                                        [
                                                'default' => $candidato['Candidatura']['estado_civil_id'],
                                                'label'   => 'Estado Civil',
                                                'class'   => 'form-control',
                                                'id'      => 'codigo',
                                                'options' => $estado_civil,
                                        ]); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('Entidade.nome_pai', [
                                        'value' => $candidato['Candidatura']['nome_pai'],
                                        'label' => 'Nome do Pai',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                ]); ?>
                            </div>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('Entidade.nome_mae', [
                                        'value' => $candidato['Candidatura']['nome_mae'],
                                        'label' => 'Nome da Mae',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                        'type'  => 'text',
                                ]); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <?php echo $this->Form->input('Entidade.naturalidade',
                                        [
                                                'value'        => $candidato['Candidatura']['localidade'],
                                                'label'        => 'Naturalidade',
                                                'class'        => 'form-control',
                                                'id'           => 'naturalidade',
                                                'options'      => $naturalidade,
                                                'autocomplete' => 'on',
                                                'type'         => 'text',
                                        ]); ?>
                            </div>
                            <div class="col-sm-3">
                                <?php echo $this->Form->input('Entidade.pais_nascimento', [
                                        'default' => $candidato['Candidatura']['pais_nascimento'],
                                        'label'   => 'Nacionalidade',
                                        'class'   => 'form-control',
                                        'id'      => 'paisNascimento',
                                        'options' => $paises,
                                        'default' => 152,
                                ]); ?>
                            </div>
                            <div class="col-sm-3">
                                <?php echo $this->Form->input('Entidade.provincia_nascimento', [
                                        'default' => $candidato['Candidatura']['provincia_nascimento'],
                                        'label'   => 'Provincia de Nascimento',
                                        'class'   => 'form-control',
                                        'id'      => 'provinciaNascimento',
                                        'options' => $provincias,
                                        'empty'   => 'Seleccione',
                                ]); ?>
                            </div>
                            <div class="col-sm-3">
                                <?php echo $this->Form->input('Entidade.cidade_nascimento', [
                                        'default' => $candidato['Candidatura']['cidade_nascimento'],
                                        'label'   => 'Cidade/Distrito de Nascimento',
                                        'class'   => 'form-control',
                                        'id'      => 'cidadeNascimento',
                                        'options' => $cidadeNascimentos,
                                ]); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-8">
                                    <button class="btn btn-blue next-step btn-block">
                                        Proximo <i class="icon-circle-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-2">
                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('AlunoNivelMedio.EscolaNivelMedio.pais_id', [
                                        'default' => $candidato['Candidatura']['pais_conclusao'],
                                        'label'   => 'Pais de Origem',
                                        'class'   => 'form-control',
                                        'id'      => 'codigo',
                                        'options' => $paises,
                                        'default' => 152,
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('AlunoNivelMedio.EscolaNivelMedio.provincia_id', [
                                        'default' => $candidato['Candidatura']['provincia_candidatura'],
                                        'label'   => 'Provincia de Origem',
                                        'class'   => 'form-control',
                                        'id'      => 'provinciaOrigem',
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('AlunoNivelMedio.EscolaNivelMedio.distrito_id',
                                        [
                                                'default' => $candidato['Candidatura']['cidade_morada'],
                                                'label'   => 'Cidade/Distrito de Origem',
                                                'class'   => 'form-control',
                                                'id'      => 'cidadeOrigem',
                                                'options' => $cidades,
                                        ]); ?>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('AlunoNivelMedio.escola_nivel_medio_id', [
                                        'default' => $candidato['Candidatura']['escola_nivel_medio_id'],
                                        'label'   => 'Escola de Origem(Nivel Anterior)',
                                        'class'   => 'form-control search-select',
                                        'id'      => 'escolaOrigem',
                                        'options' => $escolaNivelMedios,
                                        'empty'   => 'Seleccione',
                                    'required'=>false,
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('AlunoNivelMedio.escola_nivel_medio', [
                                        'label' => 'Ou Digite o nome da Escola',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                        'type'  => 'text',
                                ]); ?>
                            </div>
                            <div class="col-sm-2">
                                <?php echo $this->Form->input('AlunoNivelMedio.ano_conclusao', [
                                        'value' => $candidato['Candidatura']['ano_conclusao'],
                                        'label' => 'Ano de Conclusão do Nivel Anterior',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                        'type'  => 'text',
                                ]); ?>
                            </div>
                            <div class="col-sm-2">
                                <?php
                                    if ($candidato['Candidatura']['nota_conclusao'] == '') {
                                        $candidato['Candidatura']['nota_conclusao'] = 10;
                                    }
                                ?>
                                <?php echo $this->Form->input('AlunoNivelMedio.nota_final', [
                                        'value' => $candidato['Candidatura']['nota_conclusao'],
                                        'label' => 'Nota de Conclusão do Nivel Anterior',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('EntidadeContacto.2', [
                                        'value' => $candidato['Candidatura']['telemovel'],
                                        'label' => 'Telemovel',
                                        'class' => 'form-control',
                                        'id'    => 'codigo',
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Aluno.certificado_nivel_anterior',
                                        [
                                                'options' => $simNaoRespostas,
                                                'label'   => 'Entregou Certificado?',
                                                'class'   => 'form-control',
                                                'id'      => 'codigo',
                                                'default' => 1,
                                        ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->input('Aluno.recenseamento_militar',
                                        [
                                                'options' => $simNaoRespostas,
                                                'label'   => 'Entregou Documento do Servico Militar?',
                                                'class'   => 'form-control',
                                                'default' => 1,
                                        ]); ?>
                            </div>


                        </div>
                        <div class="row">
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
                    </div>
                    <div id="step-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->label('EntidadeIdentificacao.documento_identificacao_id',
                                                'Tipo de Documento'); ?>
                                        <?php echo $this->Form->input('EntidadeIdentificacao.documento_identificacao_id',
                                                [
                                                        'default' => $candidato['Candidatura']['documento_identificacao_id'],
                                                        'label'   => false,
                                                        'div'     => false,
                                                        'class'   => 'form-control',
                                                        'id'      => 'codigo',
                                                        'options' => $documento_identificacaos,
                                                ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->label('EntidadeIdentificacao.numero',
                                                'Numero de Documento'); ?>
                                        <?php echo $this->Form->input('EntidadeIdentificacao.numero', [
                                                'value' => $candidato['Candidatura']['documento_identificacao_numero'],
                                                'label' => false,
                                                'div'   => false,
                                                'class' => 'form-control',
                                                'id'    => 'codigo',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->input('EntidadeIdentificacao.data_emissao', [
                                                'value'              =>
                                                        $candidato['Candidatura']['documento_identificacao_data_emissao'],
                                                'label'              => 'Data de Emissao',
                                                'class'              => 'form-control date-picker',
                                                'id'                 => 'firstname',
                                                'type'               => 'text',
                                                'data-date-viewmode' => 'years',
                                                'data-date-format'   => 'yyyy-mm-dd',
                                                'after'              => '<span class="input-group-addon"> <i class="fa fa-calendar"></i>
                                             </span></div>',
                                                'between'            => '<div class="input-group">',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->input('Entidade.nuit', [
                                                'value' => $candidato['Candidatura']['nuit'],
                                                'label' => 'NUIT',
                                                'class' => 'form-control',
                                                'id'    => 'codigo',
                                        ]); ?>
                                    </div>
                                </div>
                        <div class="row">
                            <fieldset>
                                <legend>Necessidades Especiais</legend>
                                <?php foreach($necessidadeEspeciais as $necessidadeId =>$necessidadeValue):?>
                                    <?php echo $this->Form->input('necessidade_especial.'.$necessidadeId,
                                            array(
                                            'wrapInput' => 'col col-md-3',
                                            'label' => $necessidadeValue,
                                            'type'=>'checkbox',
                                            'class' => false
                                    )); ?>
                                <?php endforeach;?>
                            </fieldset>
                        </div>

                        <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="icon-circle-arrow-left"></i> Back
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Next <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
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


                            <?php echo $this->Form->input('Aluno.curso_id', [
                                    'type'     => 'hidden',
                                    'value'    => $candidato['Candidatura']['curso_id'],
                                    'label'    => false,
                                    'div'      => '_30',
                                    'readonly' => true,
                            ]); ?>
                            <?php echo $this->Form->input('Aluno.unidade_organica_id', [
                                    'type'     => 'hidden',
                                    'value'    => $candidato['Candidatura']['curso_id'],
                                    'label'    => false,
                                    'div'      => '_30',
                                    'readonly' => true,
                            ]); ?>
                            <?php echo $this->Form->input('Aluno.numero_estudante', [
                                    'type'     => 'hidden',
                                    'value'    => $candidato['Candidatura']['numero_estudante'],
                                    'label'    => false,
                                    'div'      => '_30',
                                    'readonly' => true,
                            ]); ?>
                            <?php echo $this->Form->input('Aluno.aluno_via_admissao_id', [
                                    'type'     => 'hidden',
                                    'value'    => $candidato['Candidatura']['aluno_via_admissao_id'],
                                    'label'    => false,
                                    'div'      => '_30',
                                    'readonly' => true,
                            ]); ?>
                            <?php echo $this->Form->input('Aluno.ano_ingresso', [
                                    'type'     => 'hidden',
                                    'value'    => $candidato['Candidatura']['ano_lectivo_admissao'],
                                    'label'    => false,
                                    'div'      => '_30',
                                    'readonly' => true,
                            ]); ?>
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

                <!-- end: FORM WIZARD PANEL -->
            </div>
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
  /*  $this->Js->get('#cidadeOrigem')->event('change', $this->Js->request([
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
    );*/
?>
<?php
    echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', ['block' => 'scriptBottom']);

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
