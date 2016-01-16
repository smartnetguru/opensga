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
			<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . '<br />Ficha Cadastro<span class="badge badge-danger"> Brevemente </span>', array('controller' => 'alunos', 'action' => 'ficha_cadastro', $aluno['Aluno']['id']), array('target' => 'blank', 'escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

		</div>
		<div class="col-sm-2">
			<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Enviar SMS", array('controller' => 'alunos', 'action' => 'enviar_sms', $aluno['Aluno']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
		</div>
	</div>
	<div class="row">

	</div>
</div>

<?php $this->end(); ?>
