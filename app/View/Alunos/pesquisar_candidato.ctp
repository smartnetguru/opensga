<?php
/**
 * Lista de Estudantes do OpenSGA
 *
 * Esta página mostra a lista de estudantes cadastrados no OpenSGA.
 * De principio apenas listamos estudantes activos, tendo a opção de mostrar estudantes que já concluiram o curso e que cancelaram matricula
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @version       OpenSGA v0.5.0
 * @since         OpenSGA v 0.1.0
 *
 */
?>

<?php
$this->Html->addCrumb('Alunos', '/alunos');
$this->Html->addCrumb('Lista de Alunos', '/alunos/index');
?>




<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
						<?php echo $this->Html->link($this->Html->image('icons/student/add-student.png') . "Novo Estudante", array('controller' => 'alunos', 'action' => 'adicionar_estudante'), array('escape' => false)) ?>
                    </li>
                    <li>
						<?php echo $this->Html->link($this->Html->image('icons/student/printer-icon.png') . "Imprimir Despacho", array('controller' => 'alunos', 'action' => 'print_bolsas_novo_ingresso'), array('escape' => false)) ?>
                    </li>
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/student/printer-icon.png') . "Exportar Bolseiros", array('controller' => 'bolsa_bolsas', 'action' => 'exportar_bolseiros_ano_ingresso'), array('escape' => false)) ?>
                    </li>
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/student/printer-icon.png') . "Exportar Bolseiros das Escolas", array('controller' => 'bolsa_bolsas', 'action' => 'exportar_bolseiros_ano_ingresso_escolas'), array('escape' => false)) ?>
                    </li>
                    		<li>
						<?php echo $this->Html->link($this->Html->image('icons/student/printer-icon.png') . "Exportar Estudantes Bolseiros", array('controller' => 'alunos', 'action' => 'exportar_estudantes_bolseiros'), array('escape' => false)) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Pesquisar') ?></h1><span></span>
            </div>
			<?php echo $this->Form->create('Candidatura', array('enctype' => 'multipart/form-data', 'class' => 'block-content form', 'inputDefaults' => array('before' => '<p class="inline-medium-label">', 'after' => '</p>'))); ?>
			<?php echo $this->Form->input('Candidatura.numero_candidato', array('label' => 'Número de Estudante', 'div' => '_50', 'required' => FALSE)); ?>
            <div class="clear"></div>
			<?php echo $this->Form->input('Candidatura.apelido', array('label' => 'ou Apelido', 'div' => '_50')); ?>
            <div class="clear"></div>
			<?php echo $this->Form->input('Candidatura.nomes', array('label' => 'ou um dos nomes', 'div' => '_50')); ?>
			<div class="clear"></div>
			<div class="block-actions">
                <ul class="actions-left">

                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(array('label' => __('Pesquisar', true), 'class' => 'button')); ?> </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Lista de Estudantes'); ?></h1><span></span>
            </div>
            <div class="block-content">
                <div id="tabelaAjax" class="dataTables_wrapper">
                    <table id="Alunos" class="table">
						<thead>
							<tr>


								<th ><?php echo __('Codigo'); ?></th>
								<th><?php echo __('Apelido'); ?></th>
								<th><?php echo __('Nome'); ?></th>
								<th><?php echo __('Curso'); ?></th>
								<th><?php echo __('Tipo de Bolsa'); ?></th>


							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;

							foreach ($candidatos as $candidato):
								$class = ' class="first"';
								if ($i++ % 2 == 0) {
									$class = ' class="even"';
								}
								?>
								<tr<?php echo $class; ?>>


									<td><?php echo $this->Html->link($candidato['Candidatura']['numero_estudante'], array('controller' => 'alunos', 'action' => 'atribuir_bolsa_candidato', $candidato['Candidatura']['id'])); ?>&nbsp;</td>
									<td><?php echo $candidato['Candidatura']['apelido']; ?>&nbsp;</td>
									<td><?php echo $candidato['Candidatura']['nomes']; ?>&nbsp;</td>
									<td><?php echo $candidato['Curso']['name']; ?>&nbsp;</td>
									<td><?php echo $candidato['BolsaTemporaria']['BolsaTipoBolsa']['name']; ?>&nbsp;</td>


								</tr>

							<?php endforeach;
							?>						</tbody>
					</table>
					<?php echo $this->element('table_footer') ?>
				</div>
			</div>
		</div>

		<div class="clear height-fix"></div>

	</div> <!--! end of #main-content -->



	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>
	$(document).ready(function() {
	$('#tabela-ajax').dataTable( {
	"bProcessing": false,
	"bServerSide": false

	} );
	} );
	<?php $this->Html->scriptEnd(); ?>
