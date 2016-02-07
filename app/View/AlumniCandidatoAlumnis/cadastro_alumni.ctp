<?php
    $this->BreadCumbs->addCrumb('Visitantes', '#');
    $this->BreadCumbs->addCrumb('Pré-Registo Alumni', '#');
?>

<?php
    echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css', ['block' => 'scriptTop']);
    echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
            ['block' => 'scriptTop']);
    echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
            ['block' => 'scriptTop']);
    echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css',
            ['block' => 'scriptTop']);
    echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css', ['block' => 'scriptTop']);
    echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css',
            ['block' => 'scriptTop']);
    echo $this->Html->css('/assets/plugins/summernote/build/summernote.css', ['block' => 'scriptTop']);
    echo $this->Html->css('/assets/plugins/ckeditor/contents.css', ['block' => 'scriptTop']);
?>


<div class="row">
    <div class="col-sm-12">
        <h4>Bem-vindo à Comunidade ALUMNI-UEM!</h4>
        <p>A comunidade Alumni-UEM ou simplesmente Alumni-UEM é uma congregação de graduados da UEM ou pessoas
            singulares e colectivas que se destacam na construção da UEM para ser o que é hoje, “uma universidade de
            referência nacional, regional e internacional na produção e disseminação do conhecimento científico e na
            inovação, destacando a investigação como alicerce dos processos de ensino-aprendizagem e extensão”. Ao
            preencher este formulário, disponibiliza-se a estabelecer um laço duradouro com a universidade que o formou,
            do qual mutuamente terão vários benefícios. Tu e a UEM precisam um do outro para crescer cada vez mais.
            Consulte o nosso seu portal: <b>http://alumni.uem.mz/</b></p>
    </div>
    <div class="col-sm-12">
        <!-- start: FORM WIZARD PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                Registo de Candidatos
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
                <?php echo $this->Form->create('AlumniCandidatoAlumni', [
                        'role'          => "form",
                        'novalidate'    => true,
                        'enctype'       => 'multipart/form-data',
                        'class'         => 'smart-wizard',
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
                                    <small>Infomação Académica e Profissional</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3">
                                <div class="stepNumber">
                                    3
                                </div>
                                <span class="stepDesc"> Passo 3
                                    <br>
                                    <small>Morada, Contacto e Indentificação</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4">
                                <div class="stepNumber">
                                    4
                                </div>
                                <span class="stepDesc"> Passo 4
                                    <br>
                                    <small>Confirmação e Finalização</small> </span>
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

                        <?php

                            echo $this->Html->useTag('tagstart', 'div', ['class' => 'row']);
                            echo $this->Form->input('apelido', [
                                    'div'   => 'col-sm-6 form-group',
                                    'label' => ['class' => 'control-label'],
                                    'class' => 'form-control',
                                    'id'    => 'apelido',
                            ]);
                            echo $this->Form->input('nomes', [
                                    'label' => ['class' => 'control-label', 'text' => 'Outros Nomes'],
                                    'div'   => 'col-sm-6  form-group',
                                    'label' => ['class' => 'control-label'],
                                    'class' => 'form-control',
                                    'id'    => 'nomes',
                            ]);
                            echo $this->Html->useTag('tagend', 'div');

                            echo $this->Html->useTag('tagstart', 'div', ['class' => 'row']);
                            echo $this->Form->input('genero_id', [
                                            'label' => ['class' => 'control-label', 'text' => 'Sexo'],
                                            'div'   => 'col-sm-4 form-group',
                                            'class' => 'form-control',
                                            'id'    => 'generoId',
                                            'empty' => 'Seleccione o Sexo',
                                    ]

                            );

                            $before = '<div c' . 'lass="input-group">';
                            $after = '<s' . 'pan class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>';
                            echo $this->Form->input('data_nascimento', [
                                    'label'              => [
                                            'class' => 'control-label',
                                            'text'  => 'Data de Nascimento',
                                    ],
                                    'div'                => 'col-sm-4 form-group',
                                    'class'              => 'form-control date-picker',
                                    'id'                 => 'dataNascimento',
                                    'type'               => 'text',
                                    'data-date-viewmode' => 'years',
                                    'data-date-format'   => 'yyyy-mm-dd',
                                    'between'            => $before,
                                    'after'              => $after,
                            ]);
                            echo $this->Form->input('estado_civil_id', [
                                    'label' => ['class' => 'control-label', 'text' => 'Estado Civil'],
                                    'div'   => 'col-sm-4 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'estadoCivilId',
                                    'empty' => 'Seleccione o Estado Civil',
                            ]);
                            echo $this->Html->useTag('tagend', 'div');
                            echo $this->Html->useTag('tagstart', 'div', ['class' => 'row']);
                            echo $this->Form->input('naturalidade', [
                                    'label'        => ['class' => 'control-label', 'text' => 'Naturalidade'],
                                    'div'          => 'col-sm-3 form-group',
                                    'class'        => 'form-control',
                                    'id'           => 'naturalidade',
                                    'options'      => $naturalidade,
                                    'autocomplete' => 'on',
                                    'type'         => 'text',
                            ]);
                            echo $this->Form->input('pais_nascimento', [
                                    'label'   => ['class' => 'control-label', 'text' => 'Pais de Nascimento'],
                                    'div'     => 'col-sm-3 form-group',
                                    'class'   => 'form-control',
                                    'id'      => 'paisNascimento',
                                    'default' => 152,
                            ]);

                            echo $this->Form->input('provincia_nascimento', [
                                    'label' => ['class' => 'control-label', 'text' => 'Província de Nascimento'],
                                    'div'   => 'col-sm-3 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'provinciaNascimento',
                                    'empty' => 'Seleccione a Provincia',
                            ]);
                            echo $this->Form->input('cidade_nascimento', [
                                    'label' => ['class' => 'control-label', 'text' => 'Distrito/Cidade de Nascimento'],
                                    'div'   => 'col-sm-3 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'cidadeNascimento',
                                    'empty' => 'Seleccione a Cidade',
                            ]);
                            echo $this->Html->useTag('tagend', 'div');

                        ?>

                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('pais_morada', 'Pais Onde Mora'); ?>
                                <?php echo $this->Form->input('pais_morada', [
                                        'label' => false,
                                        'div'   => false,
                                        'class' => 'form-control',
                                        'id'    => 'paisMorada',
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('provincia_mmorada', 'Província onde Mora'); ?>
                                <?php echo $this->Form->input('provincia_morada', [
                                        'label' => false,
                                        'div'   => false,
                                        'class' => 'form-control',
                                        'id'    => 'provinciaMorada',
                                ]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('cidade_morada', 'Cidade onde Mora'); ?>
                                <?php echo $this->Form->input('cidade_morada', [
                                        'label' => false,
                                        'div'   => false,
                                        'class' => 'form-control',
                                        'id'    => 'cidadeMorada',
                                ]); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('bairro_morada', 'Bairro onde Mora'); ?>
                                <?php echo $this->Form->input('bairro_morada',
                                        ['label' => false, 'div' => false, 'class' => 'form-control',]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('avenida_rua_morada', 'Avenida Rua onde Mora'); ?>
                                <?php echo $this->Form->input('avenida_rua_morada',
                                        ['label' => false, 'div' => false, 'class' => 'form-control',]); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('caixa_postal_morada', 'Caixa Postal'); ?>
                                <?php echo $this->Form->input('caixa_postal_morada',
                                        ['label' => false, 'div' => false, 'class' => 'form-control',]); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <?php echo $this->Form->label('email', 'Email'); ?>
                                <?php echo $this->Form->input('email',
                                        ['label' => false, 'div' => false, 'class' => 'form-control',]); ?>
                            </div>
                            <div class="col-sm-6">
                                <?php echo $this->Form->label('telemovel', 'Telemóvel'); ?>
                                <?php echo $this->Form->input('telemovel',
                                        ['label' => false, 'div' => false, 'class' => 'form-control',]); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <?php echo $this->Form->label('documento_identificacao_id',
                                        'Tipo de Documento de Identificação'); ?>
                                <?php echo $this->Form->input('documento_identificacao_id', [
                                        'label'   => false,
                                        'div'     => false,
                                        'class'   => 'form-control',
                                        'id'      => 'bairroMorada',
                                        'options' => $documentoIdentificacaos,
                                ]); ?>
                            </div>
                            <div class="col-sm-3">
                                <?php echo $this->Form->label('documento_identificacao_numero',
                                        'Numero de Documento de Identificação'); ?>
                                <?php echo $this->Form->input('documento_identificacao_numero', [
                                        'label' => false,
                                        'div'   => false,
                                        'class' => 'form-control',
                                        'id'    => 'avenidaMorada',
                                ]); ?>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <?php echo $this->Form->label('documento_identificacao_data_emissao',
                                            'Data de Emissão'); ?>
                                    <div class="input-group">
                                        <?php echo $this->Form->input('documento_identificacao_data_emissao', [
                                                'label'              => false,
                                                'div'                => false,
                                                'class'              => 'form-control date-picker',
                                                'id'                 => 'firstname',
                                                'type'               => 'text',
                                                'data-date-viewmode' => 'years',
                                                'data-date-format'   => 'yyyy-mm-dd',
                                        ]); ?>
                                        <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <?php echo $this->Form->label('documento_identificacao_local_emissao',
                                        'Loca de Emissão'); ?>
                                <?php echo $this->Form->input('documento_identificacao_local_emissao', [
                                        'label' => false,
                                        'div'   => false,
                                        'class' => 'form-control',
                                        'id'    => 'caixaPostalMorada',
                                ]); ?>
                            </div>
                        </div>
                        <?php
                            echo $this->Form->input('unidade_organica_id', [
                                    'label' => [
                                            'class' => 'control-label',
                                            'text'  => 'Faculdade/Escola que
                                                                                  frequentou na UEM',
                                    ],
                                    'div'   => 'col-sm-4 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'faculdadeID',
                            ]);
                            echo $this->Form->input('curso_id', [
                                    'label' => [
                                            'class' => 'control-label',
                                            'text'  => 'Curso que Frequentou na UEM na UEM',
                                    ],
                                    'div'   => 'col-sm-4 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'cursoID',
                            ]);
                            echo $this->Form->input('numero_estudante', [
                                    'label' => ['class' => 'control-label', 'text' => 'Número de Estudante na UEM'],
                                    'div'   => 'col-sm-4 form-group',
                                    'class' => 'form-control',
                            ]);
                            echo '<div' . ' class="clearfix"></div>';
                            echo $this->Form->input('ano_ingresso_uem', [
                                    'label' => ['class' => 'control-label', 'text' => 'Ano de Ingresso na UEM'],
                                    'div'   => 'col-sm-4 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'codigo',
                                    'type'  => 'text',
                            ]);
                            echo $this->Form->input('ano_conclusao', [
                                    'label' => [
                                            'class' => 'control-label',
                                            'text'  => 'Ano de Conslusão do Curso na
                                                                            UEM',
                                    ],
                                    'div'   => 'col-sm-4 form-group',
                                    'class' => 'form-control',
                                    'type'  => 'text',
                            ]);
                            echo $this->Form->input('grau_academico_id', [
                                    'label' => [
                                            'class' => 'control-label',
                                            'text'  => 'Grau Académico Obtido na
                                                                                UEM',
                                    ],
                                    'div'   => 'col-sm-4 form-group',
                                    'class' => 'form-control',
                            ]);
                            echo $this->Form->input('grau_academico_actual', [
                                    'label'   => ['class' => 'control-label', 'text' => 'Grau Académico Actual'],
                                    'div'     => 'col-sm-6 form-group',
                                    'class'   => 'form-control',
                                    'options' => $grauAcademicos,
                            ]);
                            echo $this->Form->input('local_trabalho_actual', [
                                    'label' => [
                                            'class' => 'control-label',
                                            'text'  => 'Local de Trabalho
                                                                                    Actual',
                                    ],
                                    'div'   => 'col-sm-6 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'codigo',
                            ]);
                            echo $this->Form->input('candidato_alumni_area_pesquisa', [
                                    'label' => [
                                            'class' => 'control-label',
                                            'text'  => 'Áreas de
                                                                                             Pesquisa com interesse',
                                    ],
                                    'div'   => 'col-sm-12 form-group',
                                    'class' => 'form-control',
                                    'id'    => 'codigo',
                                    'type'  => 'text',
                            ]);
                        ?>
                        <div class="form-group"></div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12 col-sm-offset-1">
                                            <?php echo $this->Form->label('observacoes', 'Observacoes'); ?>
                                            <?php echo $this->Form->input('observacoes', [
                                                    'label' => false,
                                                    'div'   => false,
                                                    'class' => 'text',
                                                    'cols'  => 100,
                                                    'rows'  => 1,
                                            ]); ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <button class="btn btn-light-grey back-step btn-block">
                                            <i class="icon-circle-arrow-left"></i> Voltar
                                        </button>
                                    </div>
                                    <?php echo $this->Form->end([
                                            'label' => __('GRAVAR', true),
                                            'class' => 'btn btn-success finish-step btn-block',
                                            'div'   => 'col-sm-2 col-sm-offset-6',
                                    ]); ?>

                                </div>
                            </div>

                        </div>
                    </div>

                    </fieldset>

                </div>

            </div>
            </form>
        </div>
    </div>
    <!-- end: FORM WIZARD PANEL -->
</div>
</div>

<?php
    $this->Js->get('#provinciaNascimento')
            ->event('change', $this->Js->request(['controller' => 'ajax', 'action' => 'get_cidades_by_provincia'], [
                    'update'         => '#cidadeNascimento',
                    'complete'       => '$("#cidadeNascimento").trigger("liszt:updated")',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm(['isForm' => true, 'inline' => true]),
            ]));

    $this->Js->get('#provinciaOrigem')
            ->event('change', $this->Js->request(['controller' => 'ajax', 'action' => 'get_cidades_by_provincia'], [
                    'update'         => '#cidadeOrigem',
                    'complete'       => '$("#cidadeOrigem").trigger("liszt:updated")',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm(['isForm' => true, 'inline' => true]),
            ]));
    $this->Js->get('#provinciaMorada')
            ->event('change', $this->Js->request(['controller' => 'ajax', 'action' => 'get_cidades_by_provincia'], [
                    'update'         => '#cidadeMorada',
                    'complete'       => '$("#cidadeMorada").trigger("liszt:updated")',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm(['isForm' => true, 'inline' => true]),
            ]));
    $this->Js->get('#cidadeOrigem')
            ->event('change', $this->Js->request(['controller' => 'ajax', 'action' => 'get_escolas_by_distrito'], [
                    'update'         => '#escolaOrigem',
                    'complete'       => '$("#escolaOrigem").trigger("liszt:updated")',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm(['isForm' => true, 'inline' => true]),
            ]));
    $this->Js->get('#faculdadeID')
            ->event('change', $this->Js->request(['controller' => 'ajax', 'action' => 'get_cursos_by_faculdade'], [
                    'update'         => '#cursoID',
                    'complete'       => '$("#cursoID").trigger("liszt:updated")',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm(['isForm' => true, 'inline' => true]),
            ]));
?>
<?php

    echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', ['block' => 'scriptBottom']);


    echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', ['block' => 'scriptBottom']);
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
    echo $this->Html->script('/assets/js/form-cadastro-alumni-elements', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-cadastro-alumni-wizard', ['block' => 'scriptBottom']);
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

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
$(function() {

$( "#dataNascimentoID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });

});

$(document).ready(function() {
$(window).keydown(function(event){
if(event.keyCode == 13) {
event.preventDefault();
return false;
}
});
});
<?php $this->Html->scriptEnd(); ?>



