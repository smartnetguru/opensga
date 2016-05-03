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
                <?php echo $this->Form->create('CandidatoGraduacao', [
                        'role'          => "form",
                        'novalidade'    => 'novalidate',
                        'enctype'       => 'multipart/form-data',
                        'class'         => 'smart-wizard form-horizontal',
                        'id'            => 'form',
                        'inputDefaults' => [
                                'label'       => false,
                                'div'         => false,
                                'empty'       => 'Seleccione',
                                'placeholder' => 'Seleccione',
                        ],
                ]); ?>

                <div class="swMain">

                    <div id="step-1">
                        <div class="form-group">
                            <fieldset>
                                <legend><?php echo __('Todos Campos são de Preenchimento Obrigatório') ?></legend>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label">Número de Estudante</label>

                                        <p class="form-control-static"><?= $aluno['Aluno']['codigo']; ?>

                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('CandidatoGraduacao.apelido', 'Apelido'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.apelido',
                                                [
                                                        'class' => 'form-control',
                                                        'id'    => 'codigo',
                                                        'value' => $aluno['Entidade']['apelido'],
                                                ]); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('CandidatoGraduacao.nomes', 'Nomes'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.nomes',
                                                [
                                                        'class' => 'form-control',
                                                        'id'    => 'codigo',
                                                        'value' => $aluno['Entidade']['nomes'],
                                                ]); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('Curso.unidade_organica_id', 'Faculdade'); ?>
                                        <p class="form-control-static"><?= $aluno['Curso']['UnidadeOrganica']['name'] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('Aluno.curso_id', 'Nome do Curso'); ?>
                                        <p class="form-control-static"><?= $aluno['Curso']['name'] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('Aluno.ano_ingresso', 'Ano de Ingresso'); ?>
                                        <p class="form-control-static"><?= $aluno['Aluno']['ano_ingresso'] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('CandidatoGraduacao.ano_conclusao',
                                                'Ano de Conclusao'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.ano_conclusao',
                                                ['class' => 'form-control', 'id' => 'codigo', 'type' => 'text']); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $this->Form->label('CandidatoGraduacao.data_defesa',
                                                    'Data de defesa'); ?>
                                            <div class="input-group">
                                                <?php echo $this->Form->input('CandidatoGraduacao.data_defesa', [
                                                        'class'              => 'form-control date-picker',
                                                        'id'                 => 'firstname',
                                                        'type'               => 'text',
                                                        'data-date-viewmode' => 'years',
                                                        'data-date-format'   => 'yyyy-mm-dd',
                                                ]); ?>
                                                <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('CandidatoGraduacao.media_defesa',
                                                'Media de Conclusao'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.media_defesa',
                                                ['class' => 'form-control', 'id' => 'codigo', 'type' => 'text']); ?>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('CandidatoGraduacao.genero_id', 'Sexo'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.genero_id',
                                                [
                                                        'class'   => 'form-control',
                                                        'id'      => 'codigo',
                                                        'default' => $aluno['Entidade']['genero_id'],
                                                ]); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $this->Form->label('CandidatoGraduacao.data_nascimento',
                                                    'Data de Nascimento'); ?>
                                            <div class="input-group">
                                                <?php echo $this->Form->input('CandidatoGraduacao.data_nascimento', [
                                                        'class'              => 'form-control date-picker',
                                                        'id'                 => 'firstname',
                                                        'type'               => 'text',
                                                        'data-date-viewmode' => 'years',
                                                        'data-date-format'   => 'yyyy-mm-dd',
                                                        'value'              => $aluno['Entidade']['data_nascimento'],
                                                ]); ?>
                                                <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('CandidatoGraduacao.estado_civil_id',
                                                'Estado Civil'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.estado_civil_id', [
                                                'class'   => 'form-control',
                                                'id'      => 'codigo',
                                                'options' => $estadoCivil,
                                                'default' => $aluno['Entidade']['estado_civil'],
                                        ]); ?>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->label('CandidatoGraduacao.naturalidade',
                                                'Naturalidade'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.naturalidade', [
                                                'label'        => false,
                                                'div'          => false,
                                                'class'        => 'form-control',
                                                'id'           => 'naturalidade',
                                                'options'      => $naturalidade,
                                                'autocomplete' => 'on',
                                                'type'         => 'text',
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->label('CandidatoGraduacao.pais_nascimento',
                                                'Nacionalidade'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.pais_nascimento', [
                                                'class'   => 'form-control',
                                                'id'      => 'paisNascimento',
                                                'options' => $paises,
                                                'default' => 152,
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->label('CandidatoGraduacao.provincia_nascimento',
                                                'Provincia de Nascimento'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.provincia_nascimento', [
                                                'class'   => 'form-control',
                                                'id'      => 'provinciaNascimento',
                                                'options' => $provincias,
                                        ]); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $this->Form->label('CandidatoGraduacao.distrito_nascimento',
                                                'Cidade/Distrito de Nascimento'); ?>
                                        <?php echo $this->Form->input('CandidatoGraduacao.distrito_nascimento', [
                                                'class'   => 'form-control',
                                                'id'      => 'cidadeNascimento',
                                                'options' => $cidadeNascimentos,
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                        echo $this->Form->input('valor_pago',
                                                [
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Telemovel',
                                                        ],
                                                        'div'   => 'form-group col-sm-6',
                                                        'class' => 'form-control',
                                                        'id'    => 'codigoID',

                                                ]
                                        );
                                        echo $this->Form->input('valor_pago',
                                                [
                                                        'label' => [
                                                                'class' => 'control-label',
                                                                'text'  => 'Valor Pago',
                                                        ],
                                                        'div'   => 'form-group col-sm-6',
                                                        'class' => 'form-control',
                                                        'id'    => 'codigoID',

                                                ]
                                        );

                                    ?>
                                </div>

                            </fieldset>
                        </div>

                        <div class="form-group">

                            <?php
                                echo $this->Form->input('CandidatoGraduacao.aluno_id', [
                                        'type'  => 'hidden',
                                        'value' => $aluno['Aluno']['id'],
                                ]);

                                echo $this->Form->end([
                                        'label' => __('GRAVAR', true),
                                        'class' => 'btn btn-success finish-step btn-block',
                                        'div'   => 'col-sm-2 col-sm-offset-8',
                                ]); ?>

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
