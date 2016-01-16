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
$this->Html->addCrumb('Cooperação', '/cooperacao/cooperacao_acordos');
$this->Html->addCrumb('Acordos de Cooperação', '/cooperacao/cooperacao_acordos');
$this->Html->addCrumb('Tipos de Acordos de Cooperação', '/cooperacao/cooperacao_tipo_acordos');
$this->Html->addCrumb('Novo Tipo de Acordo de Cooperação', '/cooperacao/cooperacao_tipo_acordos/novo_tipo_acordo');
?>
<div class="container_12">
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados do Tipo de Acordo de Cooperação') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('CooperacaoTipoAcordo', array('class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>
            <?php echo $this->Form->input('name', array('label' => __('Nome'), 'div' => '_100', 'class' => 'text')); ?>
           


        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><?php echo $this->Html->link(__('Lista de Tipos de Acordos de Cooperação'), array('controller' => 'cooperacao_tipo_acordos', 'action' => 'index','plugin'=>'cooperacao'), array('class' => 'button red')) ?></li>
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

