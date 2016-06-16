<?php
    /**
     * View do Perfil do Aluno
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.estudantes
     * @version       OpenSGA v 0.5.0
     * @since         OpenSGA v 0.1.0
     *
     */
    $this->extend('/Common/Alunos/perfil_estudante');
?>


<?php
    $this->start('breadcumbs');
    $this->BreadCumbs->addCrumb(__('Alunos'), '/alunos');
    $this->BreadCumbs->addCrumb($aluno['Entidade']['name'], '#');
    $this->BreadCumbs->addCrumb(__('Perfil'), '#');
    echo $this->BreadCumbs->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
    echo $this->BreadCumbs->css('/assets/plugins/bootstrap-social-buttons/social-buttons-3.css');
    $this->end();
?>

<?php $this->start('main-actions') ?>
<div class="action-list">
    <div class="row">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-edit  fa-2x"></i>	Boletim de Matricula',
                    ['controller' => 'alunos', 'action' => 'editar_estudante', $aluno['Aluno']['id']],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>	Boletim de Matricula',
                    ['controller' => 'matriculas', 'action' => 'print_boletim_matricula', $aluno['Aluno']['id']],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>	Comprovativo de Matricula',
                    ['controller' => 'matriculas', 'action' => 'print_comprovativo_matricula', $aluno['Aluno']['id']],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>	Ficha Cadastro<span class="badge badge-danger"> Brevemente </span>',
                    ['controller' => 'alunos', 'action' => 'ficha_cadastro', $aluno['Aluno']['id']],
                    ['target' => 'blank', 'escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-refresh  fa-2x"></i>	Renovar Matricula',
                    ['controller' => 'matriculas', 'action' => 'renovar_matricula', $aluno['Aluno']['id']],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-info-circle  fa-2x"></i>	Alterar Status',
                    ['controller' => 'alunos', 'action' => 'alterar_status', $aluno['Aluno']['id']],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <?php if ($aluno['Aluno']['plano_estudo_id'] == null) { ?>
            <div class="col-sm-2">
                <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>	Atribuir Plano de Estudos', [
                        'controller' => 'alunos',
                        'action'     => 'atribuir_plano_estudo',
                        'faculdade'  => true,
                        $aluno['Aluno']['id'],
                ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
            </div>
        <?php } else { ?>
            <div class="col-sm-2">
                <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>	Alterar Plano de Estudos',
                        [
                                'controller' => 'alunos',
                                'action'     => 'atribuir_plano_estudo',
                                'faculdade'  => true,
                                $aluno['Aluno']['id'],
                        ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
            </div>
            <div class="col-sm-2">
                <?php echo $this->Html->link('<i class="fa fa-plus  fa-2x"></i>	Fazer Inscricao',
                        ['controller' => 'inscricaos', 'action' => 'ver_inscricoes_aluno', $aluno['Aluno']['id']],
                        ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
            </div>
        <?php } ?>

        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-envelope  fa-2x"></i>	Enviar SMS',
                    ['controller' => 'alunos', 'action' => 'enviar_sms', $aluno['Aluno']['id']],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-refresh  fa-2x"></i> Alterar Senha do Sistema',
                    [
                            'controller' => 'users',
                            'action'     => 'alterar_senha_sistema',
                            $aluno['Entidade']['User']['id'],
                            $aluno['Aluno']['codigo'],
                            '?'          => [
                                    'return_controller' => 'alunos',
                                    'return_action'     => 'perfil_estudante',
                                    'return_id'         => $aluno['Aluno']['id'],
                            ],
                    ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-refresh  fa-2x"></i> Alterar Senha do Email<span class="badge badge-danger"> Brevemente </span>',
                    ['controller' => 'users', 'action' => 'alterar_senha_email', $aluno['Entidade']['User']['id']],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
    <div class="row">

    </div>
</div>

<?php $this->end(); ?>
