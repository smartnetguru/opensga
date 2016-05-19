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
?>

<?php
    $this->extend('/Common/Turmas/ver_turma');
    $this->BreadCumbs->addCrumb('Turmas', '/turmas');
    $this->BreadCumbs->addCrumb($turma['Turma']['name'], '/turmas/ver_turma/' . $turma['Turma']['id']);
    $this->BreadCumbs->addCrumb(__('Perfil'), '#');

    echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
    echo $this->Html->css('/assets/plugins/bootstrap-social-buttons/social-buttons-3.css');
?>

<?php $this->start('menu-itens') ?>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>Lista de Estudantes',
                ['controller' => 'turmas', 'action' => 'print_lista_estudantes', $turma['Turma']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-refresh  fa-2x"></i>Associar Docente',
                ['controller' => 'turmas', 'action' => 'adicionar_docente', $turma['Turma']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-plus  fa-2x"></i>Criar Avaliacao',
                ['controller' => 'turmas', 'action' => 'criar_avaliacao', $turma['Turma']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-print  fa-2x"></i>Exportar Pauta',
                ['controller' => 'turmas', 'action' => 'print_pauta', $turma['Turma']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-refresh  fa-2x"></i>Importar Pauta',
                ['controller' => 'turmas', 'action' => 'importar_pauta', $turma['Turma']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-ok  fa-2x"></i>Fechar Turma',
                ['controller' => 'turmas', 'action' => 'fechar_turma', $turma['Turma']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-ok  fa-2x"></i>Migrar Estudantes<span class="badge badge-success"> Novo! </span>',
                ['controller' => 'turmas', 'action' => 'migrar_estudantes', $turma['Turma']['id']],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
<?php $this->end(); ?>