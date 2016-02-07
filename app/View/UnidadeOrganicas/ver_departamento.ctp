<?php
    /**
     * Pagina para adicionar unidades organicas
     *
     * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.instituicoes
     * @since         OpenSGA v 0.1.0
     * @version        OpenSGA v 0.5.0
     *
     *
     */
    $this->Html->addCrumb(__('Unidades Orgânicas'), '/unidade_organicas');
    $this->Html->addCrumb($unidadeOrganica['UnidadeOrganica']['name'],
            '/unidade_organicas/edit/' . $unidadeOrganica['UnidadeOrganica']['id']);
    $this->Html->addCrumb(__('Editar'), '/unidade_organicas/edit/' . $unidadeOrganica['UnidadeOrganica']['id']);
?>
<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Nova Sub-Unidade Orgânica"),
                                [
                                        'controller' => 'unidade_organicas',
                                        'action'     => 'nova_unidade',
                                        $unidadeOrganica['UnidadeOrganica']['id'],
                                ], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php debug($unidadeOrganica) ?>
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados da Unidade Orgânica') ?></h1><span></span>
            </div>
            <div class="block-content form">
                <div class="_100">
                    <p>
                        <label><?php echo __('Código') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['UnidadeOrganica']['codigo']); ?></span>
                    </p>
                </div>
                <div class="_100">
                    <p>
                        <label><?php echo __('Nome') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['UnidadeOrganica']['name']); ?></span>
                    </p>
                </div>
                <div class="_100">
                    <p>
                        <label><?php echo __('Unidade Orgânica Mãe') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['ParentUnidadeOrganica']['name']); ?></span>
                    </p>
                </div>
                <div class="_100">
                    <p>
                        <label><?php echo __('Nivel da Unidade') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['UnidadeOrganica']['nivel_unidade']); ?></span>
                    </p>
                </div>
                <div class="_100">
                    <p>
                        <label><?php echo __('Tipo de Unidade Orgânica') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['TipoUnidadeOrganica']['name']); ?></span>
                    </p>
                </div>
                <div class="_100">
                    <p>
                        <label><?php echo __('Área Académica') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['AreaAcademica']['name']); ?></span>
                    </p>
                </div>
                <div class="_100">
                    <p>
                        <label><?php echo __('Área Funcional') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['AreaUnidade']['name']); ?></span>
                    </p>
                </div>
                <div class="_100">
                    <p>
                        <label><?php echo __('Director/Responsável') ?></label>
                        <span class="data-data"><?php echo h($unidadeOrganica['Director']['Entidade']['name']); ?></span>
                    </p>
                </div>
                <div class="clear"></div>
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><?php echo $this->Html->link(__('Lista de Tipos de Unidades Orgânicas'),
                                    ['controller' => 'unidade_organicas', 'action' => 'index'],
                                    ['class' => 'button red']) ?></li>
                    </ul>
                    <ul class="actions-right">

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->
