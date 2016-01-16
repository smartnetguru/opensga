<?php
/**
 * Pagina para adicionar unidades organicas
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.instituicoes
 * @since         OpenSGA v 0.1.0
 * @version        OpenSGA v 0.5.0
 *
 *
 */
$this->Html->addCrumb(__('Cooperação'), '/cooperacao/cooperacao_acordos');
$this->Html->addCrumb(__('Áreas de Cooperação'), '/cooperacao/cooperacao_areas');
$this->Html->addCrumb(__('Nova Área de Cooperação'), '/cooperacao/cooperacao_areas/nova_area');
?>
<div class="container_12">
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados da Área de Cooperação') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('CooperacaoArea', array('class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>
            <?php echo $this->Form->input('name', array('label' => __('Nome'), 'div' => '_100', 'class' => 'text')); ?>
           


        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><?php echo $this->Html->link(__('Lista de Áreas de Cooperação'), array('controller' => 'cooperacao_areas', 'action' => 'index','plugin'=>'cooperacao'), array('class' => 'button red')) ?></li>
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
