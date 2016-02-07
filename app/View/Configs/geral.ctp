<?php
    $this->extend('/Common/index_no_pagination');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->assign('table-title', __('Configuracoes Gerais')) ?>

<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo __('ID'); ?></th>
        <th><?php echo __('Nome/Chave'); ?></th>
        <th><?php echo __('Descricao'); ?></th>
        <th><?php echo __('Valor'); ?></th>

    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($configs as $config):
        ?>
        <tr>


            <td><?php echo $config['Config']['id']; ?>&nbsp;</td>
            <td><?php echo $config['Config']['name']; ?>&nbsp;</td>
            <td><?php echo $config['Config']['descricao']; ?>&nbsp;</td>
            <td><?php echo $config['Config']['value']; ?>&nbsp;</td>


        </tr>
        <?php
    endforeach;
?>
<?php $this->end() ?><?php
/**
 * Pagina para adicionar configuracoes
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.config
 * @since         OpenSGA v 0.1.0
 *
 */
?>
 
<?php

    $this->Html->addCrumb('Configurações', '/configs');
    $this->Html->addCrumb('Adicionar Configuração', '/configs/adicionar_configuracao');
?>
<div class="container_12">

    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __("Dados da Configuração") ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('Config', array('class' => 'block-content form')); ?>
            <div class="_100">
                <p>
                    <label for="textfield"><?php echo __("Chave da Configuração") ?></label><?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'required', 'size' => 45)); ?>
                </p>
            </div>
            <div class="_100">
                <p>
                    <label for="textfield"><?php echo __("Valor da Configuração") ?></label><?php echo $this->Form->input('value', array('label' => false, 'div' => false)); ?>
                </p>
            </div>
            <div class="_100">
                <p>
                    <label for="textfield"><?php echo __("Carregar Automaticamente") ?></label><?php echo $this->Form->input('autoload', array('label' => false, 'div' => false, 'class' => 'txt')); ?>
                </p>
            </div>
            <div class="_100">
                <p>
                    <label for="textfield"><?php echo __("Estado(Activo/Inactivo)") ?></label><?php echo $this->Form->input('activo', array('label' => false, 'div' => false, 'class' => 'txt')); ?>
                </p>
            </div>
            <div class="_100">
                <p>
                    <label for="textfield"><?php echo __("Descricao") ?></label><?php echo $this->Form->input('descricao', array('label' => false, 'div' => false, 'class' => 'txt')); ?>
                </p>
            </div>
            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Todas Configurações'), array('controller' => 'configs', 'action' => 'index'), array('class' => 'button red')) ?></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'button')); ?> </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->
