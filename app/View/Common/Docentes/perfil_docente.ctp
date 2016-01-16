<?php
echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
    echo $this->Html->css('/assets/plugins/bootstrap-social-buttons/social-buttons-3.css');
?>

<div class="row">
<div class="col-sm-12">
<div class="tabbable">
<ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
    <li class="active">
        <a href="#panel_overview" data-toggle="tab">
            Visao Geral
        </a>
    </li>
    <li>
        <a href="#panel_detalhes" data-toggle="tab">
            Detalhes<span class="badge badge-danger"> Brevemente </span>
        </a>
    </li>
    <li>
        <a href="#panel_matriculas" data-toggle="tab">
            Turmas<span class="badge badge-danger"> Brevemente </span>
        </a>
    </li>
    <li>
        <a href="#panel_inscricoes" data-toggle="tab">
            Estudantes<span class="badge badge-danger"> Brevemente </span>
        </a>
    </li>
    <li>
        <a href="#panel_pagamentos" data-toggle="tab">
            Avaliacoes<span class="badge badge-danger"> Brevemente </span>
        </a>
    </li>
    <li>
        <a href="#panel_mensagens" data-toggle="tab">
            Mensagens<span class="badge badge-danger"> Brevemente </span>
        </a>
    </li>

</ul>
<div class="tab-content">
<div class="tab-pane in active" id="panel_overview">
<div class="row">
<div class="col-sm-5 col-md-4">
    <div class="user-left">
        <div class="center">
            <h4><?php echo h($docente['Entidade']['name']); ?></h4>
            <?php

            $file = '/Fotos/Funcionarios/'.$docente['Entidade']['nuit']. '.jpg';
            if(!$signedUrl=$this->AmazonS3->getSignedUrl($file)){

                $file = '/Fotos/profile2.png';
                $signedUrl= $this->AmazonS3->getSignedUrl($file);
            }

            ?>
            <div data-provides="fileupload" class="fileupload fileupload-new">
                <div class="user-image">
                    <div class="fileupload-new thumbnail"><?php echo $this->Html->image($signedUrl, ['style' => 'max-width:330px;max-height:380px']); ?>
                    </div>
                </div>
            </div>
            <?php
                foreach($docente['DocenteUnidadeOrganica'] as $unidadeOrganica){
                    echo '<h4>'.$unidadeOrganica['UnidadeOrganica']['name'].'</h4>';
                }
                 ?>
            <hr>
            <p>
                <a class="btn btn-facebook btn-sm btn-squared">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="btn btn-twitter btn-sm btn-squared">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-linkedin btn-sm btn-squared">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a class="btn btn-google-plus btn-sm btn-squared">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a class="btn btn-github btn-sm btn-squared">
                    <i class="fa fa-github"></i>
                </a>
            </p>
            <hr>
        </div>
        <table class="table table-condensed table-hover">
            <thead>
            <tr>
                <th colspan="3">Dados Pessoais</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Data de Nascimento</td>
                <td><?php h($docente['Entidade']['data_nascimento']);?></td>
                <td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td><?php echo h($docente['Entidade']['Genero']['name'])?></td>
                <td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
            </tr>
            <tr>
                <td>Nome do Pai</td>
                <td><?php echo h($docente['Entidade']['nome_pai'])?></td>
                <td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
            </tr>
            <tr>
                <td>Nome da Mae</td>
                <td><?php echo h($docente['Entidade']['nome_mae'])?></td>
                <td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
            </tr>
            <tr>
                <td>Nacionalidade</td>
                <td><span class="label label-sm label-info"><?php echo h($docente['Entidade']['PaisNascimento']['name']);?></span></td>
                <td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
            </tr>
            <tr>
                <td>Naturalidade</td>
                <td><?php echo h($docente['Entidade']['naturalidade']);?> - <?php echo h($docente['Entidade']['ProvinciaNascimento']['name']);?></td>
                <td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
            </tr>

            </tbody>
        </table>
        <table class="table table-condensed table-hover">
            <thead>
            <tr>
                <th colspan="3">Informacoes do Sistema</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Ultimo acesso</td>
                <td><?php echo h($docente['Entidade']['User']['ultimo_login']);?></td>
                <td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="col-sm-7 col-md-8">
    <div class="row">
        <div class="action-list">
            <?php echo $this->fetch('main-actions') ?>
        </div>
    </div>





    <div class="row">
        <div class="col-md-12">
            <h3>Dados Academicos e Contactos</h3>
            <hr>
        </div>
        <div class="col-md-6">
            <table class="table table-condensed table-hover">
                <thead>
                <tr>
                    <th colspan="3">Disciplinas que Lecciona</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /**
* @todo Listar Disiciplinas que lecciona
                 */
                ?>

                </tbody>
            </table>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="label label-info control-label">
                    Morada
                </label>
                <p> <?php if(isset($docente['Entidade']['Bairro']['name']))
                        echo h($docente['Entidade']['Bairro']['name'])?> </p>

            </div>
            <div class="form-group">
                <label class="label label-info control-label">
                    Telemovel
                </label>
                <p> <?php echo h($docente['Entidade']['telemovel'])?> </p>
            </div>
            <div class="form-group">
                <label class="label label-info control-label">
                    Email Institucional
                </label>
                <p> <?php echo h($docente['Entidade']['User']['username'])?></p>

            </div>
            <div class="form-group">
                <label class="label label-info control-label">
                    Email Pessoal
                </label>
                <p> <?php echo h($docente['Entidade']['email'])?> </p>

            </div>
        </div>

    </div>

    <div class="panel panel-white">
        <div class="panel-heading">
            <i class="clip-menu"></i>
            Actividades Recentes
            <div class="panel-tools">
                <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                </a>
                <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                    <i class="fa fa-wrench"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-refresh">
                    <i class="fa fa-refresh"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div style="height:300px" class="panel-body panel-scroll ps-container">
            <ul class="activities">
                <li>
                    <a href="javascript:void(0)" class="activity">
                        <i class="clip-upload-2 circle-icon circle-green"></i>
                        <span class="desc">You uploaded a new release.</span>
                        <div class="time">
                            <i class="fa fa-time bigger-110"></i>
                            2 hours ago
                        </div>
                    </a>
                </li>

            </ul>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 1051px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 300px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 206px;"></div></div></div>
    </div>
</div>
</div>
</div>
<div class="tab-pane" id="panel_detalhes">

</div>
<div class="tab-pane" id="panel_projects">
</div>
</div>
</div>
</div>
</div>







    <?php
        // echo $this->Html->script(array('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js'));
        // echo $this->Html->script(array('/assets/plugins/jquery.pulsate/jquery.pulsate.min.js'));
        echo $this->Html->script(['/assets/js/perfil-estudante.js']);
    ?>

    <?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>

    $(document).ready(function() {

    PagesUserProfile.init();
    });

    /*
    * Tabs
    */

    /*$("#tab-panel-1").createTabs();

    $('#table-ia').dataTable({"iDisplayLength": 5});
    $('#table-iap').dataTable({"iDisplayLength": 5});
    $('#table-tc').dataTable({
    "bSort": false,
    "iDisplayLength": 5,
    "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    }); */
    <?php $this->Html->scriptEnd(); ?>
    <?php //debug($todas_inscricoes); ?>

