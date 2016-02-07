<?php
    /**
     * Pagina para tipos de unidades Organicas
     *
     * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.disciplinas
     * @since         OpenSGA v 0.1.0
     * @version        OpenSGA v 0.5.0
     *
     */
    $this->Html->addCrumb(__('Cadastros'), '/cadastros');
    $this->Html->addCrumb(__('Áreas Funcionais'), '/area_unidades');
    $this->Html->addCrumb($this->request->data['AreaUnidade']['name'],
            '/area_unidades/edit/' . $this->request->data['AreaUnidade']['id']);
    $this->Html->addCrumb(__('Editar'), '/area_unidades/view/' . $this->request->data['AreaUnidade']['id']);
?>


<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Áreas Funcionais"),
                                ['controller' => 'area_unidades', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados da Área Funcional') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('AreaUnidade',
                    ['class' => 'block-content form', 'inputDefaults' => ['before' => '<p>', 'after' => '</p>']]); ?>

            <?php echo $this->Form->input('name',
                    ['label' => __('Nome'), 'div' => '_100', 'before' => '<p>', 'after' => '</p>']); ?>

            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Áreas Funcionais'),
                                ['controller' => 'area_unidades', 'action' => 'index'],
                                ['class' => 'button red']) ?></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?> </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->

