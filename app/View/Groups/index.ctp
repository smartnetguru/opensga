<?php
$this->Html->addCrumb('Administracao', '/administracao');
$this->Html->addCrumb('Grupos', '/groups/index');
$this->Html->addCrumb('Lista de Grupos', '/groups/index');
?>




<div id="container12" class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Novo Grupo"), array('controller' => 'groups', 'action' => 'novo_grupo'), array('escape' => false)) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Grupos de Utilizadores') ?></h1><span></span>
            </div>
            <div class="block-content">
                <div id="tabelaAjax" class="dataTables_wrapper">
                    <table id="unidadeOrganicas" class="table">
                        <thead>
                            <tr>


                                <th><?php echo $this->Paginator->sort('codigo',__('Código')); ?></th>
                                <th><?php echo $this->Paginator->sort('name', __('Nome')); ?></th>
                                <th><?php echo $this->Paginator->sort('descricao', __('Descricao')); ?></th>
                                <th><?php echo $this->Paginator->sort('estado_objecto_id', __('Estado')); ?></th>
                                <th class="actions"><?php echo __('Accões');?></th>
                            </tr>
                        </thead>
                        <tbody>
	<?php
	$i = 0;
	foreach ($groups as $group):
		$class = "odd";
		if ($i++ % 2 == 0) {
			$class = ' class="even"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $group['Group']['id']; ?>&nbsp;</td>
		<td><?php echo $group['Group']['name']; ?>&nbsp;</td>
        <td><?php echo $group['Group']['descricao']; ?>&nbsp;</td>
        <td><?php echo $group['EstadoObjecto']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'ver_grupo', $group['Group']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'editar_grupo', $group['Group']['id'])); ?>
			<?php echo $this->Form->postLink(__('Desactivar', true), array('action' => 'desactivar_grupo', $group['Group']['id']), null, sprintf(__('Tem certeza que pretende desactivar este grupo # %s?', true), $group['Group']['name'])); ?>
		</td>
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