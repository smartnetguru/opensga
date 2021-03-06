<?php
    /**
     * OpenSGA - Sistema de Gestão Académica
     *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
     *
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.controller
     * @since         OpenSGA v 0.5.0.0
     *
     */
?>


<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Cursos"),
                                ['controller' => 'cursos', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados do Curso') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('Curso',
                    ['class' => 'block-content form', 'inputDefaults' => ['before' => '<p>', 'after' => '</p>']]); ?>
            <?php echo $this->Form->input('codigo', ['label' => __('Código'), 'div' => '_100', 'class' => 'text']); ?>
            <?php echo $this->Form->input('name',
                    ['label' => __('Nome'), 'div' => '_100', 'class' => 'required', 'size' => 45]); ?>
            <?php echo $this->Form->input('grau_academico_id', [
                    'label'            => __('Grau Académico'),
                    'div'              => '_100',
                    'empty'            => true,
                    'data-placeholder' => 'Seleccione',
            ]); ?>
            <?php echo $this->Form->input('tipo_curso_id', [
                    'label'            => __('Tipo de Curso'),
                    'div'              => '_100',
                    'empty'            => true,
                    'data-placeholder' => 'Seleccione',
            ]); ?>
            <?php echo $this->Form->input('unidade_organica_id', [
                    'label'            => __('Unidade Orgânica'),
                    'div'              => '_100',
                    'empty'            => true,
                    'data-placeholder' => 'Seleccione',
            ]); ?>

            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Cursos'),
                                ['controller' => 'cursos', 'action' => 'index'], ['class' => 'button red']) ?></li>
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



