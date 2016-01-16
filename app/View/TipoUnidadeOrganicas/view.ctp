<?php
/**
 * Pagina para tipos de unidades Organicas
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.disciplinas
 * @since         OpenSGA v 0.1.0
 * @version        OpenSGA v 0.5.0
 *
 */
$this->Html->addCrumb(__('Cadastros'), '/cadastros');
$this->Html->addCrumb(__('Unidades Orgânicas'), '/unidade_organicas');
$this->Html->addCrumb(__('Tipos de Unidades Orgânicas'), '/tipo_unidade_organicas');
$this->Html->addCrumb(h($tipoUnidadeOrganica['TipoUnidadeOrganica']['name']), '/tipo_unidade_organicas/view/'.$tipoUnidadeOrganica['TipoUnidadeOrganica']['id']);
$this->Html->addCrumb(__('Detalhes'),'/tipo_unidade_organicas/view/'.$tipoUnidadeOrganica['TipoUnidadeOrganica']['id']);
?>




<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Tipos de Unidades"), array('controller' => 'tipo_unidade_organicas', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Visualizando dados do Tipo de Unidade Orgânica') ?></h1><span></span>
            </div>
            <div class="block-content form">
                <div class="_100">
                    <p>
                        <label><?php echo __('Nome')?></label>
			<span class="data-data"><?php echo h($tipoUnidadeOrganica['TipoUnidadeOrganica']['name']); ?></span>
                    </p>
                </div>
            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Tipos de Unidades Orgânicas'), array('controller' => 'tipo_unidade_organicas', 'action' => 'index'), array('class' => 'button red')) ?></li>
                </ul>
                <ul class="actions-right">

                </ul>
            </div>
            </div>
        </div>
    </div>
    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->
