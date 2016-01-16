<?php
/**
 * View para adicionar grupo de utilizadores
 *
 * @copyright     Copyright 2010-2014, MillPaginas,Lda (http://millpaginas.com)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.instituicoes
 * @since         OpenSGA v 0.1.0
 * @version        OpenSGA v 0.7.1
 *
 *
 */
$this->Html->addCrumb(__('Administracao'), '/administracao');
$this->Html->addCrumb(__('Grupos'), '/groups/index');
$this->Html->addCrumb(__('Adicionar Grupo'), '/groups/novo_grupo');
?>
<div class="container_12">
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados do Grupo') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('Group', array('class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>
            <?php echo $this->Form->input('name', array('label' => __('Nome'), 'div' => '_100', 'class' => 'text')); ?>
            <?php echo $this->Form->input('descricao', array('label' => __('Descricao'), 'div' => '_100', 'class' => 'text')); ?>
        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><?php echo $this->Html->link(__('Lista de Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'button red')) ?></li>
            </ul>
            <ul class="actions-right">
                <li><?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'button')); ?> </li>
            </ul>
        </div>
        </form>
    </div>
</div>
<div class="clear height-fix"></div>

</div> <!--! end of #main-content -->

