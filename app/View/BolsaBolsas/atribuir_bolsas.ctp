<?php
    /**
     * Pagina para adicionar unidades organicas
     *
     * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com) && Cristiano Gilberto (gil.cristiano219@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.instituicoes
     * @since         OpenSGA v 0.1.0
     * @version        OpenSGA v 0.5.0
     *
     *
     */
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
<div class="container_12">


    <div class="row">
        <div class="col-sm-12" style="margin-top: 15px;" id="pesquisar">
            <!-- start: TEXT FIELDS PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">

                    <?php echo __('Atribuir Bolsas') ?>
                    <div class="panel-tools">

                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <h2><i class="fa fa-pencil-square teal"></i> REGISTAR</h2>
                        </div>
                        <div class="col-sm-6" id="descritivo" style="margin-top: 25px; margin-left: -128px;">

                            <div id="pulsate-regula" class="col-sm-4">
                                <input type="text" placeholder="Numero" id="INPUT_numero" class="form-control">
                            </div>
                            <div id="pulsate-regula" class="col-sm-4">
                                <input type="text" placeholder="Nome" id="INPUT_nome" class="form-control">
                            </div>
                            <div id="pulsate-regula" class="col-sm-4">
                                <input type="text" placeholder="Apelido" id="INPUT_apelido" class="form-control">
                            </div>


                        </div>
                        <div class="col-sm-2" style="margin-top: 25px; margin-left: -50px;">
                            <button type="button" id="button_pesquisa" class="btn btn-default pull-right"> Pesquisar
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-sm-12" style="margin-top: 10px;">


            <!--Resultado de pesquisa do estudante-->


            <!--Em caso de sucesso-->
            <div id="commit" hidden>
                <div class="alerta alert-success">
                    <div class="title" style="text-align: center">
                        <p style="color: black; margin-top: 5px" id="nome_completo"></p>
                    </div>
                </div>
                <!-- start: TEXT FIELDS PANEL -->

                <div class="panel panel-default" id="container_12_">
                    <div class="panel-body">

                        <div class="col-sm-12">

                            <form role="form" class="form-horizontal">
                                <div class="col-sm-8">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                            Apelido
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="true" placeholder="" id="apelido" value=""
                                                   name="apelido" class="form-control">
                                        </div>
                                    </div>

                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                            Nome
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="nomes" name="nomes" readonly="true"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <!--============================================-->

                                    <div class="form-group">
                                        <label for="form-field-select-1" class="col-sm-2 control-label">
                                            Curso <!--Curso-->
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="curso" name="curso" readonly="true"
                                                   class="form-control">
                                        </div>
                                    </div>


                                    <!--==============================================================-->
                                    <div class="form-group">

                                        <label class="col-sm-2 control-label">
                                            Ano de Ingresso
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" value="" readonly="true" id="ano_lectivo_admissao"
                                                   name="ano_lectivo_admissao" class="form-control">
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            Sexo
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" placeholder="" readonly="true" id="sexo" value=""
                                                   name="sexo" class="form-control">
                                        </div>

                                    </div>


                                    <!--================================-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">
                                            Local Curso
                                        </label>
                                        <div id="distrito_id" class="col-sm-4">
                                            <select id="" class="form-control">
                                                <option value="0">Selecione</option>
                                                <?php
                                                    foreach ($cidade as $cidades):
                                                        echo '<option value = "' . $cidades['Cidade']['id'] . '">' . $cidades['Cidade']['name'] . '</option>';
                                                    endforeach;
                                                ?>
                                            </select>
                                        </div>

                                        <label class="col-sm-2 control-label">
                                            Nacionalidade
                                        </label>
                                        <div class="col-sm-3">

                                            <input type="text" value="" readonly="true" id="nacionalidade"
                                                   name="nacionalidade" class="form-control">
                                        </div>

                                    </div>


                                    <!--=================================================-->


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">
                                            Doador <!-- Busca na tabela Doador-->
                                        </label>
                                        <div class="col-sm-4 has-error" id="doador_bolsa">
                                            <select id="" class="form-control">

                                                <?php
                                                    foreach ($bolsaFonteBolsa as $bolsaI):
                                                        echo '<option value = "' . $bolsaI['BolsaFonteBolsa']['id'] . '">' . $bolsaI['BolsaFonteBolsa']['name'] . '</option>';
                                                    endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            Provincia
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" value="" readonly="true" id="provincia_nascimento"
                                                   name="provincia_nascimento" class="form-control">

                                        </div>

                                    </div>


                                    <!--========================================-->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">
                                            Tipo da Bolsa <!--Tipo_bolsa-->
                                        </label>
                                        <div class="col-sm-4 has-error">
                                            <span class="input-help" id="Tipo_bolsa">
                                                <select id="" class="form-control">
                                                    <option value="0">Selecione</option>
                                                    <?php
                                                        foreach ($bolsaTipoBolsa as $BolsaTipo) {
                                                            echo '<option value=' . $BolsaTipo['BolsaTipoBolsa']['id'] . '>' . $BolsaTipo['BolsaTipoBolsa']['name'] . '</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </span>
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            Ano de Nascimento
                                        </label>
                                        <div class="col-sm-3">

                                            <input type="text" value="" id="data_nascimento" readonly="true"
                                                   name="data_nascimento" class="form-control">

                                        </div>

                                    </div>

                                    <!--                                    =============================================================-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">
                                            Alinea
                                        </label>
                                        <div id="alinea_bolsa" class="col-sm-4">

                                            <select id="" disabled="disabled" class="form-control">
                                                <option value="0">Selecione</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                                <option value="5">E</option>
                                                <option value="6">F</option>
                                                <option value="7">G</option>
                                                <option value="8">H</option>
                                                <option value="9">I</option>
                                                <option value="10">J</option>
                                                <option value="11">K</option>
                                                <option value="12">L</option>
                                                <option value="13">M</option>
                                                <option value="14">N</option>
                                                <option value="15">O</option>
                                                <option value="16">P</option>
                                                <option value="17">Q</option>
                                                <option value="18">R</option>
                                                <option value="19">S</option>
                                                <option value="20">T</option>
                                                <option value="21">U</option>
                                                <option value="22">V</option>
                                                <option value="23">W</option>
                                                <option value="24">X</option>
                                                <option value="25">Y</option>
                                                <option value="26">Z</option>

                                            </select>

                                        </div>
                                        <label class="col-sm-2 control-label">

                                        </label>
                                        <div id="" class="col-sm-3">


                                        </div>

                                    </div>
                                    <!--=====================================================-->


                                </div>

                                <!--=====================================================-->


                                <!--Bolsas valor-->
                                <div class="col-sm-4">
                                    <div class="panel  panel-success">
                                        <div class="panel-body">
                                            <label class="radio-inline">
                                                <input type="radio" class="red" value="" checked="checked">
                                                Campos de preenchimento obrigatório
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" class="grey" value="" checked="checked">
                                                Campos com preenchimento automático
                                            </label>

                                            <div class="col-sm-12 botao_guarda" style="margin-top:10px;">
                                                <button type="button" id="botao_guardar"
                                                        class="btn btn-bricky  btn-squared btn-lg btn-block">
                                                    Guardar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--                            ===========================================================-->
                                <div class="" hidden="hidden" id="hidden_input_">


                                    <input type="text" value="" hidden="" id="numero_estudante" name="numero_estudante">
                                    <input type="text" value="" hidden="" id="candidatura_id" name="candidatura_id">
                                    <input type="text" value="" hidden="" id="curso_id" name="curso_id">
                                    <input type="text" value="" hidden="" id="numero_candidato" name="numero_candidato">

                                </div>

                            </form>

                        </div>


                    </div>


                </div>
            </div>

            <!--Em caso insucesso-->
            <div class="" id="insucesso_pesquisa" hidden>
                <div class="alert alert-block alert-danger fade in">

                    <h3 class="alert-heading"> Error!</h3>
                    <p style="font-size: 15px;">
                        A pesquisa "<b id="resultado_error" style="font-size: 20px;"></b>" não retornou nenhum
                        resultado.
                    </p>
                    <p>
                        Sugestões:
                    <ul>
                        <li>
                            Verifica se o numero ou nome não contem caracteres especiais ex:(/*-+.,?!’”_#@).
                        </li>
                        <li>
                            Certifique de que o candidato e' 2015.
                        </li>

                    </ul>
                    </p>

                </div>
            </div>

            <div class="panel panel-default" id="lista_estudantes">
                <div class="panel panel-heading">
                    Lista de Bolseiros <?php echo date('Y'); ?>
                </div>
                <div class="panel panel-body">

                    <table id="sample_1" class="table table-striped table-bordered table-hover table-full-width">
                        <thead>

                        <tr>
                            <th>Apelido</th>
                            <th class="hidden-xs">Nome</th>
                            <th>Despacho</th>
                            <th class="hidden-xs">Doador</th>
                            <th>Obs.</th>
                            <th class="hidden-xs">Curso</th>


                        </tr>


                        </thead>
                        <tbody>
                        <?php
                            $i = 0;

                            foreach ($bolsas as $curso => $bolsa) {
                                ?>
                                <!--                                <tr>-->
                                <!--                                    <td colspan="5" >-->
                                <!--                                        <h5>-->
                                <!--                                            --><?php
//                                                echo h($curso);
//                                            ?><!--&nbsp;-->
                                <!--                                        </h5>-->
                                <!--                                    </td>-->
                                <!--                                </tr>-->
                                <?php

                                foreach ($bolsa as $bolsas_):
                                    $class = "odd";
                                    if ($i % 2 == 0) {
                                        $class = "even";
                                    }
                                    $i++;
                                    ?>

                                    <tr>

                                        <td><?php echo h($bolsas_['BolsaTemporaria']['apelido']); ?>&nbsp;</td>
                                        <td class="hidden-xs">
                                            <?php echo h($bolsas_['BolsaTemporaria']['nomes']); ?>
                                        </td>
                                        <td class="hidden-xs">
                                            <?php echo h($bolsas_['BolsaTipoBolsa']['name']); ?>
                                        </td>
                                        <td>
                                            <?php echo h($bolsas_['BolsaTemporaria']['doador']); ?>
                                        </td>
                                        <td class="hidden-xs">
                                            <?php echo h($bolsas_['BolsaTemporaria']['alinea']); ?>

                                        </td>

                                        <td class="hidden-xs">
                                            <?php
                                                echo h($curso);
                                            ?>&nbsp;
                                        </td>


                                    </tr>
                                <?php endforeach;
                            } ?>

                        </tbody>


                    </table>


                </div>

            </div>

        </div>
    </div>


</div> <!--! end of #main-content -->
<style>
    .rec {
        margin-left: 86px;
        margin-right: -133px;
        margin-bottom: -18px;
    }

    #reclamacao {
        width: 93px;
    }

    .reclamacoes {
        padding: 0px !important;
    }

    .alerta {
        border-radius: -26px !important;
        padding: 0px !important;
        margin-bottom: 20px !important;
        border: 1px solid transparent !important;
        border-radius: -4px !important;
    }

</style>

<script type="text/javascript">
    // $.noConflict();
    jQuery(document).ready(function () {


        //Limpado a tela
        setTimeout(function () {
            $('div#flashMessage').attr('hidden', 'hidden');
        }, 30000);

        //Possui a bolsa


        //activando a linea para observacao de indefirimento

        $("span#Tipo_bolsa  select").change(function () {

            var str = "";
            $("span#Tipo_bolsa  select  option:selected").each(function () {
                str = $(this).text();

            });
            if (str == 'Indeferido') {
                $("div#alinea_bolsa select ").removeAttr('disabled');

            }

            else {
                $("div#alinea_bolsa  select ").attr('disabled', 'true');
                $("div#alinea_bolsa  select").prop('selectedIndex', 0);
            }

        }).change;


        function tipo_bolsa() {


            var str = "";
            $("span#Tipo_bolsa  select  option:selected").each(function () {
                str = $(this).text();

            });
            if (str == '' || str == ' ' || str == null || str == 'Selecione') {
                return false;
            }
            else {
                return true;
            }


        }


        var alinea_validacao = function () {

            var strr = "";
            $("div#alinea_bolsa  select  option:selected").each(function () {
                strr = $(this).text();

            });
            if (strr == '' || strr == ' ' || strr == null || strr == 'Selecione') {
                return false;
            }
            else {
                return true;
            }
        }

        function alinea() {


            if ($("div#alinea_bolsa  select ").attr('disabled') == 'disabled') {
                return true;
            } else {

                return alinea_validacao();
            }

        }

        $('div.botao_guarda #botao_guardar').click(function () {
            if (tipo_bolsa() == true && alinea() == true) {

                $('div#container_12_').attr('style', 'opacity:0.4');
                $('div#container_12_').attr('disabled', 'true');
                //Funcao Ajax....Para aguardar


                var numero_estudante = $('div#hidden_input_ input#numero_estudante').val();
                var candidatura_id = $('div#hidden_input_ input#candidatura_id').val();
                var curso_id = $('div#hidden_input_ input#curso_id').val();
                var doador = '';
                $("div#doador_bolsa  select  option:selected").each(function () {
                    doador = $(this).text();

                });

                var tipo_bolsa_ = '';
                $("span#Tipo_bolsa  select  option:selected").each(function () {
                    tipo_bolsa_ = $("span#Tipo_bolsa  select  option:selected").attr('value');

                });
                var alinea_ = '';

                if ($("div#alinea_bolsa  select ").attr('disabled') == 'disabled') {
                    alinea_ = '';
                } else {
                    $("div#alinea_bolsa  select  option:selected").each(function () {
                        alinea_ = $(this).text();

                    });

                }

                var distrito_id = '';
                $("div#distrito_id  select  option:selected").each(function () {
                    distrito_id = $("div#distrito_id  select  option:selected").attr('value');

                });

                var apelido = $('div#commit input#apelido').val();
                var nomes = $('div#commit input#nomes').val();
                ;
                var numero_candidato = $('div#hidden_input_ input#numero_candidato').val();


                var array_send = {
                    apelido: apelido,
                    nomes: nomes,
                    numero_candidato: numero_candidato,
                    distrito_id: distrito_id,
                    numero_estudante: numero_estudante,
                    candidatura_id: candidatura_id,
                    curso_id: curso_id,
                    doador: doador,
                    bolsa_tipo_bolsa_id: tipo_bolsa_,
                    alinea: alinea_
                };
                $.ajax({
                    type: "POST",
                    data: array_send,
                    url: "<?php echo $this->Html->url(['controller' => 'BolsaTemporarias', 'action' => 'add']) ?>",
                    dataType: "html",
                    cache: false,
                    success: function (result) {
                        window.location.reload(true);

                    },
                    complete: function (jqXHR, textStatus) {
                        window.location.reload(true);


                    }


                });

            }
            else {
                alert('Por favor! Preencha todos campos Obrigatórios');
            }
        });


        //Click button_pesquisa Ajax

        $('#button_pesquisa').click(function () {


            var id = {
                numero: $("div#descritivo div#pulsate-regula #INPUT_numero").val(),
                nome: $("div#descritivo div#pulsate-regula #INPUT_nome").val(),
                apelido: $("div#descritivo div#pulsate-regula #INPUT_apelido").val()
            };

            $.ajax({
                type: "POST",
                data: id,
                url: "<?php echo $this->Html->url(['controller' => 'BolsaBolsas', 'action' => 'atribuir_bolsas']) ?>",
                dataType: "html",
                cache: false,
                success: function (result) {
                    var result1 = $.parseJSON(result);

                    if (result1.invalido != 'Invalido') {
                        $('div#insucesso_pesquisa').attr('hidden', 'true');
                        $('div#commit').removeAttr('hidden');
                        $('#pesquisar').attr('hidden', 'true');
                        $('div#lista_estudantes').attr('hidden', 'true');
                        //Preechendo os campos
                        $('div#commit p#nome_completo').html(result1.candidatos.Candidatura.nomes + ' ' + result1.candidatos.Candidatura.apelido);
                        //Apelido

                        $('div#commit input#apelido').attr('value', result1.candidatos.Candidatura.apelido);

                        $('div#hidden_input_ input#candidatura_id').attr('value', result1.candidatos.Candidatura.id);

                        $('div#hidden_input_ input#numero_estudante').attr('value', result1.candidatos.Candidatura.numero_estudante);
                        $('div#hidden_input_ input#curso_id').attr('value', result1.candidatos.Candidatura.curso_id);
                        $('div#hidden_input_ input#numero_candidato').attr('value', result1.candidatos.Candidatura.numero_candidato);

                        //Nome
                        $('div#commit input#nomes').attr('value', result1.candidatos.Candidatura.nomes);

                        //curso
                        $('div#commit input#curso').attr('value', result1.curso.Curso.name);

                        //Nacionalidade == Mocambicano => 1 && estrangeira => 2
                        if (result1.candidatos.Candidatura.nacionalidade == 1) {
                            $('div#commit input#nacionalidade').attr('value', 'Moçambicana/o');
                        } else if (result1.candidatos.Candidatura.nacionalidade == 2) {
                            $('div#commit input#nacionalidade').attr('value', 'Estrangeira/o');
                        } else {
                            $('div#commit input#nacionalidade').attr('value', 'Indefinido');
                        }

                        //Sexo
                        $('div#commit input#sexo').attr('value', result1.genero.Genero.name);

                        //Data nascimento
                        $('div#commit input#data_nascimento').attr('value', result1.candidatos.Candidatura.data_nascimento);

                        //provincia_nascimento
                        $('div#commit input#provincia_nascimento').attr('value', result1.candidatos.Candidatura.provincia_nascimento);

                        //Ano ingresso
                        $('div#commit input#ano_lectivo_admissao').attr('value', result1.candidatos.Candidatura.ano_lectivo_admissao);
                    }
                    else {
                        $('div#insucesso_pesquisa').removeAttr('hidden');
                        $('b#resultado_error').html(result1.candidatura);
                    }

                }
            });
            return true;


        });

        //        Fim pesquisa

    });


</script>

<script>
    jQuery(document).ready(function () {
        // Main.init();
        TableData.init();
    });
</script>


<?php
    //$this->Js->get('#paisID')->event('change', $this->Js->request(array(
    //            'controller' => 'provincias',
    //            'action' => 'getByPais',
    //            'plugin' => false
    //                ), array(
    //            'update' => '#provinciaID',
    //            'complete' => '$("#provinciaID").trigger("liszt:updated")',
    //            'async' => true,
    //            'method' => 'post',
    //            'dataExpression' => true,
    //            'data' => $this->Js->serializeForm(array(
    //                'isForm' => true,
    //                'inline' => true
    //            ))
    //        ))
    //);


    echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', ['block' => 'scriptBottom']);


    echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');
    echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js');
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min.js');
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker.js');
    echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js');
    echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits.js');
    echo $this->Html->script('/assets/plugins/jquery.pulsate/jquery.pulsate.min.js');
    echo $this->Html->script('/assets/plugins/gritter/js/jquery.gritter.min.js');
    echo $this->Html->script('/assets/plugins/select2/select2.min.js');

    //echo $this->Html->script(array('/assets/js/form-registar-candidato')); // Muito importante
    echo $this->Html->script('/assets/plugins/bootstrap-paginator/src/bootstrap-paginator.js');


    echo $this->Html->script('/assets/plugins/jquery-mockjax/jquery.mockjax.js', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/select2/select2.min.js', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/DataTables/media/js/jquery.dataTables.min.js',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/DataTables/media/js/DT_bootstrap.js', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootbox/bootbox.min.js', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/table-data.js', ['block' => 'scriptBottom']);
