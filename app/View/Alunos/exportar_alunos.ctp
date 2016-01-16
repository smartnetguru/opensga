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
$this->Html->addCrumb('Exportar Alunos', '/alunos/index');
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
                        <?php echo $this->Html->link($this->Html->image('icons/student/printer-icon.png') . "Exportar Alunos", array('controller' => 'alunos', 'action' => 'exportar_alunos'), array('escape' => false)) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Filtros de Exportação') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('Aluno', array('enctype' => 'multipart/form-data', 'class' => 'block-content form', 'inputDefaults' => array('before' => '<p class="inline-medium-label">', 'after' => '</p>'))); ?>
            <?php echo $this->Form->input('Aluno.ano_ingresso', array('empty' => true, 'options' => $anolectivos, 'label' => 'Ano de Ingresso', 'div' => '_50')); ?>
            <?php echo $this->Form->input('Aluno.curso_id', array('empty' => true, 'label' => 'Curso', 'div' => '_50', 'required' => FALSE)); ?>
            <div class="clear"></div>
            <?php echo $this->Form->input('Curso.unidade_organica_id', array('empty' => true, 'label' => 'Unidade Orgânica', 'div' => '_50')); ?>
            <?php echo $this->Form->input('Aluno.estado_aluno_id', array('empty' => true, 'label' => 'Estado', 'div' => '_50')); ?>
            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">

                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(array('label' => __('Exportar', true), 'class' => 'button')); ?> </li>
                </ul>
            </div>

        </div>
    </div>
</div>

