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
                    <li><?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Cursos"),
                                ['controller' => 'cursos', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1>
                    <?php echo __('Dados do novo Curso/Turno') ?>
                </h1>
                <span></span>
            </div>

            <?php echo $this->Form->create('Candidatura', [
                    'enctype'       => 'multipart/form-data',
                    'class'         => 'block-content form',
                    'inputDefaults' => ['before' => '<p>', 'after' => '</p>'],
            ]); ?>
            <?php echo $this->Form->input('apelido', [
                    'label' => __('Novo Apelido'),
                    'div'   => '_25',
                    'class' => 'text',
                    'value' => $candidato['Candidatura']['apelido'],
            ]); ?>
            <?php echo $this->Form->input('nomes', [
                    'label' => __('Novo Nome'),
                    'div'   => '_75',
                    'class' => 'text',
                    'value' => $candidato['Candidatura']['nomes'],
            ]); ?>



            <?php echo $this->Form->hidden('candidatura_id', ['value' => $candidato['Candidatura']['id']]); ?>


            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">

                </ul>
                <ul class="actions-right">


                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?></li>

                </ul>
            </div>
            </form>
        </div>
    </div>


    <div class="clear height-fix"></div>

</div>
<!--! end of #main-content -->



