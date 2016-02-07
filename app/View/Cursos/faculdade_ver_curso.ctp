<?php
    /**
     * OpenSGA - Sistema de Gest�o Acad�mica
     *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
     *
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
     ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.controller
     * @since         OpenSGA v 0.10.0.0
     *
     */
?>


<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Cursos', true)), ['action' => 'index'],
                ['class' => 'button']); ?>
        <h1><?php echo __('Visualizar Curso'); ?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
    <div class="table">

        <?php
            //O
            echo $this->Form->create('Curso'); ?>
        <table class="listingform" cellpadding="0" cellspacing="0">
            <tr>
                <th class="full" colspan="2">Dados do Curso</th>
            </tr>
            <tr>
                <?php
                    echo $this->Form->input('id', [
                            'disabled' => 'true',
                            'label'    => 'Codigo do Curso',
                            'before'   => '<tr><td>',
                            'between'  => '</td><td>',
                            'after'    => '</td></tr>',
                            'div'      => false,
                    ]);
                    echo $this->Form->input('name', [
                            'disabled' => 'true',
                            'label'    => 'Nome do Curso',
                            'before'   => '<tr><td>',
                            'between'  => '</td><td>',
                            'after'    => '</td></tr>',
                            'div'      => false,
                            'size'     => '45',
                    ]);
                    echo $this->Form->input('Grauacademico_id', [
                            'disabled' => 'true',
                            'label'    => 'Grau Academico',
                            'before'   => '<tr><td>',
                            'between'  => '</td><td>',
                            'after'    => '</td></tr>',
                            'div'      => false,
                            'style'    => 'width:100px',
                    ]);
                    echo $this->Form->input('tg0007tipocurso_id', [
                            'disabled' => 'true',
                            'label'    => 'Tipo de Curso',
                            'before'   => '<tr><td>',
                            'between'  => '</td><td>',
                            'after'    => '</td></tr>',
                            'div'      => false,
                            'style'    => 'width:100px',
                    ]);
                    echo $this->Form->input('escola_id', [
                            'disabled' => 'true',
                            'label'    => 'Escola',
                            'before'   => '<tr><td>',
                            'between'  => '</td><td>',
                            'after'    => '</td></tr>',
                            'div'      => false,
                    ]);

                ?>
            <tr>
                <td></td>
                <td><?php //echo $this->Form->end(__('GRAVAR', true));?></td>
            </tr>
        </table>
    </div>
</div>
</div>