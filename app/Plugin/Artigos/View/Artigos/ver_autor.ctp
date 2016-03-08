<div class="row">
    <div class="col-sm-12">
        <div class="tab-pane in active" id="panel_overview">
            <div class="row">
                <div class="col-sm-5 col-md-4">
                    <div class="user-left">
                        <div class="center">
                            <h4><?php echo h($entidade['Entidade']['name']); ?></h4>
                            <?php if (Configure::read('environment') == 'prod'): ?>
                                <?php

                                $file = '/Fotos/Estudantes/' . $entidade['Aluno']['ano_ingresso'] . '/' . $entidade['Aluno']['codigo'] . '.jpg';
                                if (!$signedUrl = $this->AmazonS3->getSignedUrl($file)) {

                                    $file = '/Fotos/profile2.png';
                                    $signedUrl = $this->AmazonS3->getSignedUrl($file);
                                }

                                ?>
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div class="user-image">
                                        <div
                                                class="fileupload-new thumbnail"><?php echo $this->Html->image($signedUrl,
                                                    ['style' => 'max-width:330px;max-height:380px']); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
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
                                <td>Sexo</td>
                                <td><?php
                                        if (isset($entidade['Genero']['name'])) {
                                            echo h($entidade['Genero']['name']);
                                        } ?></td>
                                <td><a class="show-tab" href="#panel_edit_account"><i
                                                class="fa fa-pencil edit-user-info"></i></a></td>
                            </tr>
                            <tr>
                                <td>Nacionalidade</td>
                                <td><span
                                            class="label label-sm label-info"><?php echo h($entidade['PaisNascimento']['name']); ?></span>
                                </td>
                                <td><a class="show-tab" href="#panel_edit_account"><i
                                                class="fa fa-pencil edit-user-info"></i></a></td>
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
                                <td><?php echo h($entidade['User']['ultimo_login']); ?></td>
                                <td><a class="show-tab" href="#panel_edit_account"><i
                                                class="fa fa-pencil edit-user-info"></i></a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-7 col-md-8">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <i class="clip-menu"></i>
                            Artigos Recentes
                        </div>
                        <div style="height:300px" class="panel-body panel-scroll ps-container">
                            <?php echo $this->fetch('actividades-recentes') ?>
                            <div class="ps-scrollbar-x-rail"
                                 style="left: 0px; bottom: 3px; width: 1051px; display: none;">
                                <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail"
                                 style="top: 0px; right: 3px; height: 300px; display: inherit;">
                                <div class="ps-scrollbar-y" style="top: 0px; height: 206px;"></div>
                            </div>
                            <div class="col-sm-12" style="padding: 50px;">
                            <?php $artigos = $this->requestAction([
                                    'controller' => 'artigos',
                                    'action'     => 'artigos_recentes',
                                    'plugin'     => 'artigos',
                                    5,
                            ]);?>
                            <?= $this->element('Artigos.artigos_recentes', ['artigos'=>$artigos]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->fetch('content'); ?>

<?php
    echo $this->Html->script(['/assets/js/perfil-estudante.js']);
?>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>

$(document).ready(function() {

PagesUserProfile.init();
});
<?php $this->Html->scriptEnd(); ?>
