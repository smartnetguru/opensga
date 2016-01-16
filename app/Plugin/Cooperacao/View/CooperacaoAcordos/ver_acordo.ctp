<?php
//	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
echo $this->Html->css('/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css');
echo $this->Html->css('/assets/plugins/bootstrap-modal/css/bootstrap-modal.css');
echo $this->Html->css('/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css');
echo $this->Html->css('/assets/plugins/x-editable/css/bootstrap-editable.css');


echo $this->Html->css('/assets/plugins/typeaheadjs/lib/typeahead.js-bootstrap.css');
echo $this->Html->css('/assets/plugins/jquery-address/address.css');
echo $this->Html->css('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css');
echo $this->Html->css('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysiwyg-color.css');
//		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->


echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');
echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');
echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css');
echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css');
echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
echo $this->Html->css('/assets/plugins/summernote/build/summernote.css');
echo $this->Html->css('/assets/plugins/ckeditor/contents.css');
echo $this->Html->css('/assets/css/opensga.css');
echo $this->Html->css('/assets/css/print_acordo.css', array('media' => 'print'));
$this->Html->addCrumb(__('Cooperação'), '/alunos');
$this->Html->addCrumb(__('Acordos de Cooperação'), '#');
$this->Html->addCrumb($cooperacaoAcordo['CooperacaoAcordo']['name'], '#');
$this->Html->addCrumb(__('Ver detalhes'), '#');
?>




<div class="container_12">


<!--=====================================================================Conteudo de imprissao======================-->
    <div style="display:none">
        <div  class="PrintArea">

            <h4 align="center"><?php echo $cooperacaoAcordo['CooperacaoAcordo']['name']; ?>  </h4>
            <p align="center">Período: <?php echo $cooperacaoAcordo['CooperacaoAcordo']['data_assinatura']; ?> = <?php echo $cooperacaoAcordo['CooperacaoAcordo']['data_validade']; ?></p>



            <table class="" style="border: 1px solid #ddd; width: 100%;max-width: 100%; background-color: transparent; border-spacing: 0;
                   border-collapse: collapse; box-sizing: border-box; display: table; " >
                <thead style="display: table-header-group;vertical-align: middle; border-color: inherit;">

                    <tr style="display: table-row;vertical-align: inherit; border-color: inherit;">
                        <th style="border-spacing: 2px; border-color: gray;border: 1px solid #ddd;">#</th>
                        <th style="border-spacing: 2px; border-color: gray; border: 1px solid #ddd;">Nome do acordo</th>
                        <th style="border-spacing: 2px; border-color: gray; border: 1px solid #ddd;">Código</th>
                        <th style="border-spacing: 2px; border-color: gray; border: 1px solid #ddd;">Data de Assinatura</th>
                        <th style="border-spacing: 2px; border-color: gray; border: 1px solid #ddd;">Válido ate</th>
                        <th style="border-spacing: 2px; border-color: gray; border: 1px solid #ddd;">Área de cooperação</th>
                        <th style="border-spacing: 2px; border-color: gray; border: 1px solid #ddd;">Tipo de Acordo</th>
                        <th    <?php
                        $count = 1;
                        foreach ($instituicaoAcordo as $instituicoesAcordos) {
                            $count++;
                            ?>
                                colspan="<?php echo $count; ?>"
                            <?php } ?>
                            style="border-spacing: 2px; border-color: gray; border: 1px solid #ddd;">Instituições</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td style="border: 1px solid #ddd;"><?php echo $cooperacaoAcordo['CooperacaoAcordo']['id']; ?></td>
                        <td style="border: 1px solid #ddd;"><?php echo $cooperacaoAcordo['CooperacaoAcordo']['name']; ?></td>
                        <td style="border: 1px solid #ddd;"><?php echo $cooperacaoAcordo['CooperacaoAcordo']['codigo']; ?></td>
                        <td style="border: 1px solid #ddd;"><?php echo $cooperacaoAcordo['CooperacaoAcordo']['data_assinatura']; ?></td>
                        <td style="border: 1px solid #ddd;"><?php echo $cooperacaoAcordo['CooperacaoAcordo']['data_validade']; ?></td>
                        <td style="border: 1px solid #ddd;"> <?php echo h($cooperacaoAcordo['CooperacaoArea']['name']); ?></td>
                        <td style="border: 1px solid #ddd;"><?php echo h($cooperacaoAcordo['CooperacaoTipoAcordo']['name']); ?></td>
                        <?php
                        foreach ($instituicaoAcordo as $instituicoesAcordos) {
                            ?>
                            <td style="border: 1px solid #ddd;"><?php echo h($instituicoesAcordos[0]['Instituicao']['name'] . ','); ?></td>
                        <?php } ?>
                    </tr>

                </tbody>

                </table>
            <div style="margin-top: 20px">
                <h5 align="center"><u><b>Objectivos do acordo</b></u></h5>
                <ul>
                      <?php foreach ($objectivos as $objectivo) :
                   
                        ?>
                    <li>
                        <p style="text-overflow: clip; text-orientation: auto; text-decoration-style: wavy; font-family: sans-serif "><?php echo $objectivo;?></p>
                    </li>
                   <?php endforeach;?>
                </ul>
                    
            </div>
            
               <div style="margin-top: 10px">
                <h5 align="center"><u><b>Observações</b></u></h5>
                <ul>
                      <?php foreach ($observacao as $observacoes) :
                   
                        ?>
                    <li>
                        <p style="text-overflow: clip; text-orientation: auto; text-decoration-style: wavy; font-family: sans-serif "><?php echo $observacoes;?></p>
                    </li>
                   <?php endforeach;?>
                </ul>
                    
            </div>
            
        </div>
    </div>
<!--======================================================/FIM do layout de Html para imprimir===================================-->

    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">

                <ul class="shortcut-list" id="imgul">
                    <li>
                        <a href="#objectivo" data-toggle="modal" class="demo btn btn-default"> <?php echo $this->Html->image('icons/cooperacao/edit_cooperacao.png', array('id' => 'imgEdit')) ?><span class="label label-info"><i class="glyphicon glyphicon-plus"></i>| Objectivo</span></a>

                    </li>
                    <li>
                        <a href="#observacao" data-toggle="modal" class="demo btn btn-default"> <?php echo $this->Html->image('icons/cooperacao/edit_cooperacao.png', array('id' => 'imgEdit')) ?><span class="label label-info"><i class="glyphicon glyphicon-plus"></i>| Observação</span></a>
                    </li>


                    <li>
                        <a   class="demo btn btn-default" href="javascript:imprimirRelatorio()">
                            <i class="glyphicon glyphicon-print " style="font-size:50px"></i>

                        </a>
                    </li>

                </ul>
                <div class="panel pull-right">
                    <a class="btn btn-blue btn-sm btn-block" href="<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'novo_acordo',)) ?>" style="width: 277px;">
                        Novo Acordo <i class="fa fa-arrow-circle-right"></i>
                    </a>

                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    <!--Formularios de popups-->
    <!--===============================Formulario de observacoes==================================-->

    <div id="observacao" class="modal fade" tabindex="-1" data-width="500" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title">Adicionar Observação</h4>
        </div>
        <?php echo $this->Form->create(array('class' => "form", 'id' => 'form_viaAjaxObservacao', 'enctype' => 'multipart/form-data')); ?>

        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">

                    <?php echo $this->Form->input('cooperacao_acordo_id', array('label' => false, 'div' => false, 'type' => 'hidden', 'value' => $cooperacaoAcordo['CooperacaoAcordo']['id'])); ?>
                    <?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'form-control autosize ', 'placeholder' => 'Observações', 'type' => 'textarea')); ?>

                </div>

            </div>
        </div>
        <div class="modal-footer">
            <div class="col-sm-6 pull-right">
                <div class="col-sm-4">
                    <?php echo $this->Form->end(array('label' => __('Fechar', false), 'class' => 'btn btn-light-grey', 'type' => 'button', 'data-dismiss' => 'modal')); ?>
                </div>
                <div class="col-sm-2">
                    <?php echo $this->Form->end(array('label' => __('Gravar', true), 'class' => 'btn btn-yellow')); ?>
                </div>
            </div>
        </div>
    </div>
    <!--=============================/fim de Formulario de Observacao====================================-->




    <!--Formularios de popups-->
    <!--===============================Formulario de Objectivo==================================-->

    <div id="objectivo" class="modal fade" tabindex="-1" data-width="500" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title">Adicionar Objectivo</h4>
        </div>
        <?php echo $this->Form->create(array('class' => "form", 'id' => 'form_viaAjaxObjectivos', 'enctype' => 'multipart/form-data')); ?>

        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">

                    <?php echo $this->Form->input('cooperacao_acordo_id', array('label' => false, 'div' => false, 'type' => 'hidden', 'value' => $cooperacaoAcordo['CooperacaoAcordo']['id'])); ?>
                    <?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'form-control autosize ', 'placeholder' => 'Objectivo', 'type' => 'textarea')); ?>

                </div>

            </div>
        </div>
        <div class="modal-footer">
            <div class="col-sm-6 pull-right">
                <div class="col-sm-4">
                    <?php echo $this->Form->end(array('label' => __('Fechar', false), 'class' => 'btn btn-light-grey', 'type' => 'button', 'data-dismiss' => 'modal')); ?>
                </div>
                <div class="col-sm-2">
                    <?php echo $this->Form->end(array('label' => __('Gravar', true), 'class' => 'btn btn-yellow')); ?>
                </div>
            </div>
        </div>
    </div>
    <!--=============================/fim de Formulario de Objectivo====================================-->

    <!--=========================================Conteudo===============================================-->

    <hr>


    <!--=====================================================Progress bar time==========================================-->

    <div class="col-sm-7">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="alert alert-block alert-info fade in">

                        <h4 class="text-center" style="color: black;">
                            <?php echo $cooperacaoAcordo['CooperacaoAcordo']['name']; ?>  
                        </h4>

                    </div>
                </div>


                <div class="col-sm-8 pull-left">
                    <span class="label label-warning" style=""><?php echo $cooperacaoAcordo['CooperacaoAcordo']['data_assinatura']; ?></span> 
                </div> 
                <div class="col-sm-4 pull-right" style="margin-bottom:7px;">
                    <span class="label label-info pull-right" ><?php echo $cooperacaoAcordo['CooperacaoAcordo']['data_validade']; ?></span>
                </div>


                <!--=============================================funcao para progresso=================================-->
                <?php
                $inicio = date_create($cooperacaoAcordo['CooperacaoAcordo']['data_assinatura'] . '00:00:00');

                $fim = date_create($cooperacaoAcordo['CooperacaoAcordo']['data_validade'] . '00:00:00');
                $data_actual = (string) date('Y/m/d H:i:s');
                $data_actual = date_create($data_actual);

                $data = date_diff($inicio, $fim);
                $data->format("%R%a");
                $dias = $data->days;

                $dataProgresso = date_diff($inicio, $data_actual);
                $dataProgresso->format("%R%a");
                $progresso = $dataProgresso->days;

                $progressoFinal = $progresso * 1 / $dias;
                ?>
                <div class="col-sm-12">
                    <div class="progress progress-striped active progress">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progressoFinal * 100 ?>%">
                            <span >  <?php
                                $soma = $progressoFinal * 100;
                                echo (int) $soma
                                ?>% </span>
                        </div>  
                    </div>
                </div>

                <!--/////////////////////////////Dados de acordo form x-editavel//////////////////////////////-->





                <div style="float: right; margin-bottom: 10px">

                    <button id="enable" class="btn btn-default">
                        Habilitar edição  / Desabilitar edição
                    </button>
                </div>


                <table id="user" class=" table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td class="column-left" style="font-family: serif; font-size: medium;">Name</td>
                            <td class="column-right">
                                <a href="#" id="name" data-type="text" data-name="name" data-pk="<?php echo $cooperacaoAcordo['CooperacaoAcordo']['id']; ?>"  data-mode="inline"   data-placeholder="Obrigatório"  data-url="<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'edit_acordo',)) ?>" data-original-title="Nome do acordo">
                                    <?php echo $cooperacaoAcordo['CooperacaoAcordo']['name']; ?>
                                </a></td>
                        </tr>
                        <tr>
                            <td>Código </td>
                            <td><a href="#" id="codigo" data-type="text" data-pk="<?php echo $cooperacaoAcordo['CooperacaoAcordo']['id']; ?>"  data-mode="inline" data-placement="right" data-placeholder="Obrigatório"     data-url="<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'edit_acordo',)) ?>" data-original-title="Código">
                                    <?php echo $cooperacaoAcordo['CooperacaoAcordo']['codigo']; ?>
                                </a></td>
                        </tr>

                        <tr>
                            <td>Data Assinatura</td>
                            <td><a  data-type="combodate"   data-pk=""  data-value=""  data-format="YYYY-MM-DD" data-viewformat="YYYY/MM/DD" data-template="YYYY / MMM / D" data-pk="1"  data-original-title="">
                                    <?php echo h($cooperacaoAcordo['CooperacaoAcordo']['data_assinatura']); ?> 
                                </a></td>
                        </tr>


                        <tr>
                            <td>Data Validade</td>
                            <td><a href="#" id="data_validade" data-type="combodate"   data-pk="<?php echo $cooperacaoAcordo['CooperacaoAcordo']['id']; ?>"  data-value="<?php echo date('Y-m-d') ?>"   data-url="<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'edit_acordo',)) ?>" data-format="YYYY-MM-DD" data-viewformat="YYYY/MM/DD" data-template="YYYY / MMM / D" data-pk="1"  data-original-title="Data validade">
                                    <?php echo h($cooperacaoAcordo['CooperacaoAcordo']['data_validade']); ?> 
                                </a></td>
                        </tr>

                        <tr>
                            <td>Tipo de Acordo</td>
                            <td><a href="#" id="cooperacao_tipo_acordo_id" data-type="select2" data-pk="<?php echo $cooperacaoAcordo['CooperacaoAcordo']['id']; ?>" data-value="<?php echo h($cooperacaoAcordo['CooperacaoTipoAcordo']['id']); ?>"    data-url="<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'edit_acordo',)) ?>" data-original-title="Selecione o tipo de acordo">

                                </a></td>
                        </tr>


                        <tr>
                            <td>Área de Cooperação</td>
                            <td><a href="#" id="cooperacao_area_id" data-type="select2" data-pk="<?php echo $cooperacaoAcordo['CooperacaoAcordo']['id']; ?>" data-value="<?php echo h($cooperacaoAcordo['CooperacaoArea']['id']); ?>"    data-url="<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'edit_acordo',)) ?>" data-original-title="Selecione a Área de Cooperação">

                                </a></td>
                        </tr>


                        <tr>
                            <td>Instituições</td>
                            <td>
                                <a href="#" id="instituicao" data-type="select2"  data-url="" data-pk="<?php echo $cooperacaoAcordo['CooperacaoAcordo']['id']; ?>" data-original-title="Escolha as instituições">
                                    <?php
                                    foreach ($instituicaoAcordo as $instituicoesAcordos) {
                                        echo h($instituicoesAcordos[0]['Instituicao']['name'] . ',');
                                    }
                                    ?>
                                </a></td>
                        </tr>



                    </tbody>
                </table>

            </div>



        </div>

    </div>
    <!--///////////////////////////////////////fim form x-editavel/////////////////////////////////-->


    <div class="col-sm-5" style="margin-top: 60px;">
        <!--==============================panel a esquerda de listagem de objectivos e observacao=======================-->
        <div class="panel-body">
            <div class="panel-group accordion-custom accordion-teal" id="accordion">

                <!--===============================listagem de objectivos====================================-->
                <legend>Objectivos</legend>
                <?php if ($cooperacaoAcordo['CooperacaoAcordo']['objectivos'] != '') { ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo h($cooperacaoAcordo['CooperacaoAcordo']['objectivos']); ?>">
                                    <i class="icon-arrow"></i>
                                    <?php
                                    $objectivoTitulo = h($cooperacaoAcordo['CooperacaoAcordo']['objectivos']);
                                    $obj = substr($objectivoTitulo, 0, 20);
                                    echo $obj . '...';
                                    ?>
                                </a>
                            </h4>
                        </div>
                        <div id="<?php echo h($cooperacaoAcordo['CooperacaoAcordo']['objectivos']); ?>" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <span><?php echo $cooperacaoAcordo['CooperacaoAcordo']['objectivos']; ?></span>
                            </div>
                        </div>

                    </div>


                    <?php
                } elseif ($objectivos != null) {
                    $count = 0;
                    foreach ($objectivos as $objectivo) :
                        $count++;
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $count; ?>">
                                        <i class="icon-arrow"></i>
                                        <?php
                                        $objectivoTitulo = h($objectivo);
                                        ;
                                        $obj = substr($objectivoTitulo, 0, 20);
                                        echo $obj . '...';
                                        ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo $count; ?>" class="panel-collapse collapse in">
                                <div class=" panel-body">
                                    <span><?php echo $objectivo; ?></span>
                                </div>
                            </div>

                        </div>

                    <?php endforeach ?>


                <?php } else { ?>
                    <div class="panel-body">
                        <span class="label label-info"> NOTA!</span>
                        <span> Nenhum objectivo foi definido para esse acordo de cooperação.</span>
                    </div>
                <?php } ?>
                <!--================================================/fim==============================-->


                <!--=====================================================listagem de observacao============================-->

                <hr>
                <legend>Observações</legend>

                <?php if ($cooperacaoAcordo['CooperacaoAcordo']['observacoes'] != '') { ?>
                    <div class="panel panel-success">
                        <div class="panel-heading ">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $cooperacaoAcordo['CooperacaoAcordo']['observacoes']; ?>">
                                    <i class="icon-arrow"></i>

                                    <?php
                                    $observacaoTitulo = h($cooperacaoAcordo['CooperacaoAcordo']['observacoes']);
                                    $obs = substr($observacaoTitulo, 0, 20);
                                    echo $obs . '...';
                                    ?>

                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel panel-body">

                                <span>  <?php echo h($cooperacaoAcordo['CooperacaoAcordo']['observacoes']); ?></span>

                            </div>
                        </div>
                        <hr>
                    </div>


                    <?php
                } elseif ($observacao != null) {

                    $count = 1000;
                    foreach ($observacao as $observacoes):
                        $count++;
                        ?>
                        <div class="panel panel-success">
                            <div class="panel-heading ">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $count; ?>">
                                        <i class="icon-arrow"></i>

                                        <?php
                                        $observacaoTitulo = h($observacoes);
                                        $obs = substr($observacaoTitulo, 0, 20);
                                        echo $obs . '...';
                                        ?>

                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo $count ?>" class="panel-collapse collapse in">
                                <div class="panel panel-body">

                                    <span>  <?php echo h($observacoes); ?></span>

                                </div>
                            </div>
                            <hr>
                        </div>

                    <?php endforeach ?>

                <?php } else { ?>
                    <div class="panel-body">
                        <span class="label label-info"> NOTA!</span>
                        <span> Nenhuma observação  foi definida para esse acordo de cooperação.</span>
                    </div>
                <?php } ?>
                <!--=============================================/fim==============================================================-->

            </div>
        </div>

    </div>



</div>


<!--<==============================================/Fim de conteudo=============================================>-->

<!--============================================ANGORAS DE POPUP=============================================-->
<style>
    #imgEdit{
        width: 45px;
    }

    #imgEditN{
        width: 15px;     }
</style>

<script>

    function imprimirRelatorio() {
        $("div.PrintArea").printArea();
    }

    $(function() {

        $('#instituicao').editable({
            inputclass: 'input-large',
            select2: {
                tags: [<?php
                foreach ($instituicoes as $inst) {

                    echo "'" . $inst['Instituicao']['name'] . "',";
                }
                ?>],
                tokenSeparators: [",", " "]
            }
        });
        var tipo_acordos = [];
        var area_acordo = [];
                var ee = { <?php foreach ($cooperacaoAreas as $cooperacaoArea) { ?>"<?php echo h($cooperacaoArea['CooperacaoArea']['id']); ?>":" <?php echo h($cooperacaoArea['CooperacaoArea']['name']); ?>", <?php } ?> };
                $.each({<?php foreach ($cooperacaoTipoAcordos as $cooperacaoTipoAcordo) { ?>"<?php echo h($cooperacaoTipoAcordo['CooperacaoTipoAcordo']['id']); ?>":" <?php echo h($cooperacaoTipoAcordo['CooperacaoTipoAcordo']['name']); ?>", <?php } ?>}, function(k, v) {
                tipo_acordos.push({id: k, text: v});
            }),
            $.each(ee, function(e, t) {
                area_acordo.push({id: e, text: t});
            });
    $('#cooperacao_area_id').editable({
        source: area_acordo,
        select2: {
            width: 200
        }
    });
    $('#cooperacao_tipo_acordo_id').editable({
        source: tipo_acordos,
        select2: {
            width: 200
        }
    });
    //        Ajax request for Observacao
    $("#form_viaAjaxObservacao").submit(function() {
        dataString = $("#form_viaAjaxObservacao").serialize();
        $.ajax({
            type: "POST",
            url: "<?php echo $this->Html->url(array('controller' => 'CooperacaoAcordoObservacaos', 'action' => 'add',)); ?>",
            data: dataString,
            success: function(data) {
                alert('Nova observacao adicionada com sucesso! Clique `OK` para continuar');
            },
            error: function(data, textStatus, gggg) {
                alert('The observacao  could not be saved. Please, try again.');
            }


        });
        return true;
    });
    //         Ajax request for Objectivo
    $("#form_viaAjaxObjectivos").submit(function() {
        dataString = $("#form_viaAjaxObjectivos").serialize();
        $.ajax({
            type: "POST",
            url: "<?php echo $this->Html->url(array('controller' => 'CooperacaoObjectivoAcordos', 'action' => 'add',)); ?>",
            data: dataString,
            success: function(data) {
                alert('Novo Objectivo adicionado com sucesso! Clique `OK` para continuar');
            },
            error: function(data, textStatus, gggg) {
                alert('The Objectivo  could not be saved. Please, try again.');
            }

        });
        return true;
    });
    });



</script>




<?php
echo $this->Html->script('/assets/plugins/jQuery-lib/2.0.3/jquery.min.js', array('block' => 'scriptBottom'));

echo $this->Html->script('/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap/js/bootstrap.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/blockUI/jquery.blockUI.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/iCheck/jquery.icheck.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/less/less-1.5.0.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery-cookie/jquery.cookie.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js', array('block' => 'scriptBottom'));



//<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
echo $this->Html->script('/assets/plugins/bootstrap-modal/js/bootstrap-modal.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/ui-modals.js', array('block' => 'scriptBottom'));

echo $this->Html->script('/assets/plugins/jquery-mockjax/jquery.mockjax.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/moment/moment.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/x-editable/js/bootstrap-editable.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/typeaheadjs/typeaheadjs.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/typeaheadjs/lib/typeahead.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery-address/address.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/wysihtml5/wysihtml5.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/x-editable/demo-mock.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/x-editable/ver_acordo.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/jquery.PrintArea.js', array('block' => 'scriptBottom'));


//<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
?>

