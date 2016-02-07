<?php
    $grupo = $this->Session->read('Auth.User.group_id');
    $username = $this->Session->read('Auth.User.username');

    $this->Html->addCrumb('Cadastros', '/area_unidades');
    $this->Html->addCrumb('Áreas Funcionais', '/area_unidades/index');
    $this->Html->addCrumb('Lista de Áreas Funcionais', '/area_unidades/index');


?>


<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Nova Área Funcional"),
                                ['controller' => 'area_unidades', 'action' => 'add'], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Áreas Funcionais') ?></h1><span></span>
            </div>
            <div class="block-content">
                <table id="table-example" class="table">
                    <thead>
                    <tr>


                        <th><?php echo __('ID'); ?></th>
                        <th><?php echo __('Nome'); ?></th>
                        <th><?php echo __('Acções'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($areaUnidades as $areaUnidade): ?>
                            <tr>
                                <td><?php echo h($areaUnidade['AreaUnidade']['id']); ?>&nbsp;</td>
                                <td><?php echo h($areaUnidade['AreaUnidade']['name']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__('Ver'),
                                            ['action' => 'view', $areaUnidade['AreaUnidade']['id']]); ?>
                                    <?php echo $this->Html->link(__('Editar'),
                                            ['action' => 'edit', $areaUnidade['AreaUnidade']['id']]); ?>
                                    <?php echo $this->Form->postLink(__('Remover'),
                                            ['action' => 'delete', $areaUnidade['AreaUnidade']['id']], null,
                                            __('Tem Certeza que deseja Removar # %s?',
                                                    $areaUnidade['AreaUnidade']['id'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->
