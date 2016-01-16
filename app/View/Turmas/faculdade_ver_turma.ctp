<?php
/**
 * View do Perfil do Aluno
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
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
	<?php echo $this->Html->link($this->Html->image('icons/student/edit-student.png') . "<br />Lista de Estudantes", array('controller' => 'turmas', 'action' => 'print_lista_estudantes', $turma['Turma']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

</div>
    <div class="col-sm-2">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Associar Docente", array('controller' => 'turmas', 'action' => 'adicionar_docente', $turma['Turma']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

    </div>
<div class="col-sm-2">
	<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Criar Nova Avaliacao", array('controller' => 'turmas', 'action' => 'criar_avaliacao', $turma['Turma']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

</div>
<div class="col-sm-2">
	<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Exportar Pauta", array('controller' => 'turmas', 'action' => 'print_pauta', $turma['Turma']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

</div>
<div class="col-sm-2">
	<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Importar Pauta", array('controller' => 'turmas', 'action' => 'importar_pauta', $turma['Turma']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

</div>
<div class="col-sm-2">
	<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Fechar Turma", array('controller' => 'turmas', 'action' => 'fechar_turma', $turma['Turma']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

</div>
<?php $this->end(); ?>