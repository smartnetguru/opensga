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
                <?php echo __('Editar Dados de Estudante') ?>
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
                <?php echo $this->Form->create('Aluno', [
                    'role'          => "form",
                    'novalidade'    => 'novalidate',
                    'enctype'       => 'multipart/form-data',
                    'class'         => 'smart-wizard form-vertical',
                    'id'            => 'form',
                    'inputDefaults' => [
                        'label'       => false,
                        'div'         => false,
                        'empty'       => 'Seleccione',
                        'placeholder' => 'Seleccione'
                    ]
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
                                    <small>Identificacao e Contactos</small> </span>
                            </a>
                        </li>

                        <li>
                            <a href="#step-3">
                                <div class="stepNumber">
                                    3
                                </div>
                                <span class="stepDesc"> Passo 3
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
                        <row>
                            <div class="form-group col-sm-4">
                                <label for="numeroEstudante" class="control-label"><?= __('Numero de Estudante')?></label>
                                <p class="form-control-static" id="numeroEstudante"><b><?= $this->request->data['Aluno']['numero_estudante']?></b></p>

                            </div>
                            <div class="form-group col-sm-4">
                                <label for="numeroEstudante" class="control-label"><?= __('Apelido')?></label>
                                <p class="form-control-static" id="numeroEstudante"><b><?= $this->request->data['Entidade']['apelido']?></b></p>

                            </div>
                            <div class="form-group col-sm-4">
                                <label for="numeroEstudante" class="control-label"><?= __('Numero de Estudante')?></label>
                                <p class="form-control-static" id="numeroEstudante"><b><?= $this->request->data['Entidade']['nomes']?></b></p>

                            </div>
                        </row>
                        <row>
                            <div class="form-group col-sm-3">
                                <label for="numeroEstudante" class="control-label"><?= __('Unidade Orgânica')?></label>
                                <p class="form-control-static" id="numeroEstudante"><b><?= $this->request->data['Curso']['UnidadeOrganica']['name']?></b></p>

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="numeroEstudante" class="control-label"><?= __('Curso')?></label>
                                <p class="form-control-static" id="numeroEstudante"><b><?= $this->request->data['Curso']['name']?></b></p>

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="numeroEstudante" class="control-label"><?= __('Ano de Ingresso')?></label>
                                <p class="form-control-static" id="numeroEstudante"><b><?= $this->request->data['Aluno']['ano_ingresso']?></b></p>

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="numeroEstudante" class="control-label"><?= __('Data de Matricula')?></label>
                                <p class="form-control-static" id="numeroEstudante"><b><?= $this->request->data['Aluno']['data_ingresso']?></b></p>

                            </div>
                        </row>
                        <?php

                        echo $this->Html->useTag('tagstart', 'div', ['class' => 'row']);
                        echo $this->Html->useTag('tagstart', 'div', ['class' => 'col-sm-12']);
                        echo $this->Form->input('Entidade.genero_id', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Sexo'],
                            'class'    => 'form-control col-sm-4',
                            'id'       => 'generoId',
                        ]);
                        echo $this->Form->input('Entidade.data_nascimento', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Data de Nascimento'],
                            'class'    => 'form-control date-picker',
                            'id'       => 'dataNascimento',
                            'type'               => 'text',
                            'data-date-viewmode' => 'years',
                            'data-date-format'   => 'yyyy-mm-dd'
                        ]);
                        echo $this->Form->input('Entidade.estado_civil', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Estado Civil'],
                            'class'    => 'form-control',
                            'id'       => 'estadoCivil',
                            'default'=>$this->request->data['Entidade']['estado_civil'],
                            'options'=>$estadoCivil
                        ]);
                        echo $this->Form->input('Entidade.nome_pai', [
                            'div'      => 'col-sm-6 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Nome do Pai'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                        ]);
                        echo $this->Form->input('Entidade.nome_mae', [
                            'div'      => 'col-sm-6 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Nome da Mãe'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                        ]);

                        echo $this->Form->input('Entidade.naturalidade', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Naturalidade'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                        ]);
                        echo $this->Form->input('Entidade.pais_nascimento', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Pais de Nascimento'],
                            'class'    => 'form-control',
                            'id'       => 'paisNascimento',
                            'options'=>$paises,
                            'default'=>$this->request->data['Entidade']['pais_nascimento']
                        ]);
                        echo $this->Form->input('Entidade.provincia_nascimento', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Província de Nascimento'],
                            'class'    => 'form-control',
                            'id'       => 'provinciaNascimento',
                            'options'=>$provincias,
                            'default'=>$this->request->data['Entidade']['provincia_nascimento']
                        ]);
                        echo $this->Form->input('Entidade.cidade_nascimento', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Cidade de Nascimento'],
                            'class'    => 'form-control',
                            'id'       => 'cidadeNascimento',
                            'options'=>$cidades,
                            'default'=>$this->request->data['Entidade']['cidade_nascimento']
                        ]);
                        echo $this->Html->useTag('tagend', 'div');
                        echo $this->Html->useTag('tagend', 'div');
                        ?>


                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-8">
                                <button class="btn btn-blue next-step btn-block">
                                    Próximo Passo <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="step-2">
                        <?php
                        echo $this->Html->useTag('tagstart', 'div', ['class' => 'row']);
                        echo $this->Html->useTag('tagstart', 'div', ['class' => 'col-sm-12']);
                        echo $this->Form->input('EntidadeContacto.11', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Pais onde Mora'],
                            'class'    => 'form-control',
                            'id'       => 'paisMorada',
                            'options'=>$paises,
                            'default'=>$paisMoradaId
                        ]);
                        echo $this->Form->input('EntidadeContacto.10', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Provincia onde Mora'],
                            'class'    => 'form-control',
                            'id'       => 'provinciaMorada',
                            'options'=>$provincias,
                            'default'=>$provinciaMoradaId
                        ]);
                        echo $this->Form->input('EntidadeContacto.9', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Cidade Onde Mora'],
                            'class'    => 'form-control',
                            'id'       => 'cidadeMorada',
                            'options'=>$cidades,
                            'default'=>$this->request->data['Entidade']['cidade_morada']
                        ]);


                        echo $this->Form->input('EntidadeContacto.6', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Bairro'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$this->request->data['Entidade']['bairro_morada']
                        ]);
                        echo $this->Form->input('EntidadeContacto.5', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Avenida/Rua'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$this->request->data['Entidade']['avenida_rua']
                        ]);
                        echo $this->Form->input('EntidadeContacto.7', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Quarteirão'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$quarteirao
                        ]);
                        echo $this->Form->input('EntidadeContacto.8', [
                            'div'      => 'col-sm-3 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Caixa Postal/Número da Casa'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$this->request->data['Entidade']['caixa_postal_morada']
                        ]);

                        echo $this->Form->input('EntidadeContacto.2', [
                            'div'      => 'col-sm-6 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Telemovel'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$this->request->data['Entidade']['telemovel']
                        ]);
                        echo $this->Form->input('EntidadeContacto.1', [
                            'div'      => 'col-sm-6 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Email Pessoal'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$this->request->data['Entidade']['email']
                        ]);
                        echo $this->Form->input('Aluno.nome_emergencia', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Pessoa de Contacto para Emergencias'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                        ]);
                        echo $this->Form->input('Aluno.telemovel_emergencias', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Telemovel Emergencia'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                        ]);
                        echo $this->Form->input('Aluno.parentesco_encarregado', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Grau de Parentesco'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'options' => $grauParentescos

                        ]);


                        echo $this->Form->input('EntidadeIdentificacao.documento_identificacao_id', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Tipo de Documento de Identificacao'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'options'=>$documento_identificacaos,
                            'default'=>$this->request->data['Entidade']['documento_identificacao_id']
                        ]);
                        echo $this->Form->input('EntidadeIdentificacao.numero', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Numero de Documento de Identificacao'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$this->request->data['Entidade']['documento_identificacao_numero']
                        ]);
                        echo $this->Form->input('EntidadeIdentificacao.local_emissao', [
                            'div'      => 'col-sm-4 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Local de Emissao'],
                            'class'    => 'form-control',
                            'id'       => 'apelido',
                            'value'=>$this->request->data['Entidade']['documento_identificacao_local_emissao']
                        ]);
                        echo $this->Form->input('EntidadeIdentificacao.data_emissao', [
                            'div'      => 'col-sm-6 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Data de Emissao'],
                            'class'    => 'form-control date-picker',
                            'id'       => 'apelido',
                            'data-date-viewmode' => 'years',
                            'data-date-format'   => 'yyyy-mm-dd',
                            'value'=>$this->request->data['Entidade']['documento_identificacao_data_emissao']
                        ]);
                        echo $this->Form->input('EntidadeIdentificacao.data_validade', [
                            'div'      => 'col-sm-6 form-group',
                            'label'    => ['class' => 'control-label', 'text' => 'Data de Validade'],
                            'class'    => 'form-control date-picker',
                            'id'       => 'apelido',
                            'data-date-viewmode' => 'years',
                            'data-date-format'   => 'yyyy-mm-dd'
                        ]);
                        echo $this->Html->useTag('tagend', 'div');
                        echo $this->Html->useTag('tagend', 'div');

                        ?>

                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="icon-circle-arrow-left"></i> Passo Anterior
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Próximo Passo <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>


                    </div>

                    <div id="step-3">
                        <h2 class="StepTitle">Confirmacao dos Dados</h2>

                        <div class="row">
                            <div class="col-sm-6">
                                <fieldset>
                                    <legend>Dados Biograficos</legend>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Nome do pai:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][nome_pai]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Nome da Mae:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][nome_mae]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Sexo:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][genero_id]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Data de Nascimento:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][data_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Estado Civil:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][estado_civil]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Naturalidade:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][naturalidade]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Pais de Nascimento:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][pais_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Provincia:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][provincia_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Cidade/Distrito:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[Entidade][cidade_nascimento]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset>
                                    <legend>Outros Dados</legend>

                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Bairro onde Mora:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[EntidadeContacto][6]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Telemovel:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[EntidadeContacto][2]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
                                            Numero de Identificacao:
                                        </label>

                                        <div class="col-sm-8">
                                            <p data-display="data[EntidadeIdentificacao][numero]"
                                               class="form-control-static display-value"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="col-sm-4 control-label text-right">
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
                                <?php echo $this->Form->hidden('aluno_id', array('value' => $this->request->data['Aluno']['id'])); ?>
                                <?php
                                echo $this->Form->end([
                                    'label' => __('GRAVAR', true),
                                    'class' => 'btn btn-success finish-step btn-block',
                                    'div'   => 'col-sm-2 col-sm-offset-8'
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
$this->Js->get('#paisNascimento')->event('change', $this->Js->request([
    'controller' => 'ajax',
    'action'     => 'get_provincias_by_pais'
], [
    'update'         => '#provinciaNascimento',
    'complete'       => '$("#provinciaNascimento").trigger("liszt:updated")',
    'async'          => true,
    'method'         => 'post',
    'dataExpression' => true,
    'data'           => $this->Js->serializeForm([
        'isForm' => true,
        'inline' => true
    ])
])
);
$this->Js->get('#provinciaNascimento')->event('change', $this->Js->request([
    'controller' => 'ajax',
    'action'     => 'get_cidades_by_provincia'
], [
    'update'         => '#cidadeNascimento',
    'complete'       => '$("#cidadeNascimento").trigger("liszt:updated")',
    'async'          => true,
    'method'         => 'post',
    'dataExpression' => true,
    'data'           => $this->Js->serializeForm([
        'isForm' => true,
        'inline' => true
    ])
])
);

$this->Js->get('#provinciaOrigem')->event('change', $this->Js->request([
    'controller' => 'ajax',
    'action'     => 'get_cidades_by_provincia'
], [
    'update'         => '#cidadeOrigem',
    'complete'       => '$("#cidadeOrigem").trigger("liszt:updated")',
    'async'          => true,
    'method'         => 'post',
    'dataExpression' => true,
    'data'           => $this->Js->serializeForm([
        'isForm' => true,
        'inline' => true
    ])
])
);
$this->Js->get('#provinciaMorada')->event('change', $this->Js->request([
    'controller' => 'ajax',
    'action'     => 'get_cidades_by_provincia'
], [
    'update'         => '#cidadeMorada',
    'complete'       => '$("#cidadeMorada").trigger("liszt:updated")',
    'async'          => true,
    'method'         => 'post',
    'dataExpression' => true,
    'data'           => $this->Js->serializeForm([
        'isForm' => true,
        'inline' => true
    ])
])
);
$this->Js->get('#cidadeOrigem')->event('change', $this->Js->request([
    'controller' => 'ajax',
    'action'     => 'get_escolas_by_distrito'
], [
    'update'         => '#escolaOrigem',
    'complete'       => '$("#escolaOrigem").trigger("liszt:updated")',
    'async'          => true,
    'method'         => 'post',
    'dataExpression' => true,
    'data'           => $this->Js->serializeForm([
        'isForm' => true,
        'inline' => true
    ])
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
echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker', ['block' => 'scriptBottom']);
echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min',
    ['block' => 'scriptBottom']);
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', ['block' => 'scriptBottom']);
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', ['block' => 'scriptBottom']);
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker', ['block' => 'scriptBottom']);
//echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput', ['block' => 'scriptBottom']);
echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min', ['block' => 'scriptBottom']);
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
