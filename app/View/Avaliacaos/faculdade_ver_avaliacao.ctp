<?php
$this->extend('/Common/Avaliacaos/ver_avaliacao');
?>


<?php $this->start('top-actions') ?>
<div class="action-list">
	<div class="col-sm-1">
		<?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Imprimir Pauta', array('controller' => 'avaliacaos', 'action' => 'print_pauta_avaliacao', $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
	<div class="col-sm-1">
		<?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Editar Notas', array('controller' => 'avaliacaos', 'action' => 'editar_notas_avaliacao', $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
	<div class="col-sm-1">
		<?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Publicar Avaliacao', array('controller' => 'avaliacaos', 'action' => 'publicar_avaliacao', $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id']), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
</div>
<?php $this->end() ?>