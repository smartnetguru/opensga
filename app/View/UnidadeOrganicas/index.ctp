<?php
    $this->Html->addCrumb('Unidades Orgânicas', '/unidade_organicas');
    $this->Html->addCrumb('Lista de Unidades Orgânicas', '/unidade_organicas/index');
?>


<div id="container12" class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Nova Unidade Orgânica"),
                                ['controller' => 'unidade_organicas', 'action' => 'nova_unidade'],
                                ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Unidades Orgânicas') ?></h1><span></span>
            </div>
            <div class="block-content">
                <div id="tabelaAjax" class="dataTables_wrapper">
                    <table id="unidadeOrganicas" class="table">
                        <thead>
                        <tr>


                            <th><?php echo $this->Paginator->sort('codigo', __('Código do Orgão')); ?></th>
                            <th><?php echo $this->Paginator->sort('name', __('Nome do Orgão')); ?></th>

                            <th><?php echo $this->Paginator->sort('tipo_unidade_organica_id',
                                        __('Tipo de Orgão')); ?></th>
                            <th><?php echo $this->Paginator->sort('parent_id', __('Orgão Superior')); ?></th>

                            <th><?php echo $this->Paginator->sort('director', __('Responsável/Director')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            foreach ($unidadeOrganicas as $unidadeOrganica):
                                $class = "odd";
                                if ($i % 2 == 0) {
                                    $class = "even";
                                }
                                $i++;
                                ?>
                                <tr class="<?php echo $class ?>">
                                    <td><?php echo $this->Html->link(h($unidadeOrganica['UnidadeOrganica']['codigo']), [
                                                'action' => 'ver_unidade_organica',
                                                $unidadeOrganica['UnidadeOrganica']['id'],
                                        ]); ?>&nbsp;</td>
                                    <td><?php echo $this->Html->link(h($unidadeOrganica['UnidadeOrganica']['name']), [
                                                'action' => 'ver_unidade_organica',
                                                $unidadeOrganica['UnidadeOrganica']['id'],
                                        ]); ?>&nbsp;</td>

                                    <td>
                                        <?php echo $this->Html->link($unidadeOrganica['TipoUnidadeOrganica']['name'], [
                                                'controller' => 'tipo_unidade_organicas',
                                                'action'     => 'view',
                                                $unidadeOrganica['TipoUnidadeOrganica']['id'],
                                        ]); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($unidadeOrganica['ParentUnidadeOrganica']['name'],
                                                [
                                                        'controller' => 'unidade_organicas',
                                                        'action'     => 'view',
                                                        $unidadeOrganica['ParentUnidadeOrganica']['id'],
                                                ]); ?>
                                    </td>
                                    <td><?php echo h($unidadeOrganica['UnidadeOrganica']['director']); ?>&nbsp;</td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <?php echo $this->element('table_footer') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div> <!--! end of #main-content -->



