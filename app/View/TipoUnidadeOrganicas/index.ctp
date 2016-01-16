<?php
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');

$this->Html->addCrumb('Unidades Orgânicas', '/tipo_unidade_organicas');
$this->Html->addCrumb('Tipos de Unidades Orgânicas', '/tipo_unidade_organicas/index');
$this->Html->addCrumb('Lista de Tipos de Unidades Orgânicas', '/tipo_unidade_organicas/index');


?>




			<div class="container_12">
            <div class="grid_12">
				<div class="block-border">
					<div class="block-content">
						<ul class="shortcut-list">
							<li>
								<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png').__("Novo Tipo de Unidade"),array('controller'=>'tipo_unidade_organicas','action'=>'add'),array('escape'=>false)) ?>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="grid_12">
				<div class="block-border">
					<div class="block-header">
						<h1><?php echo  __('Tipos de Unidades Orgânicas')?></h1><span></span>
					</div>
					<div class="block-content">
						<table id="table-example" class="table">
							<thead>
								<tr>


			<th><?php echo __('ID'); ?></th>
			<th><?php echo __('Nome'); ?></th>
            <th><?php echo __('Acções');?></th>
								</tr>
							</thead>
							<tbody>
	<?php
	foreach ($tipoUnidadeOrganicas as $tipoUnidadeOrganica): ?>
	<tr>
		<td><?php echo h($tipoUnidadeOrganica['TipoUnidadeOrganica']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipoUnidadeOrganica['TipoUnidadeOrganica']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipoUnidadeOrganica['TipoUnidadeOrganica']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipoUnidadeOrganica['TipoUnidadeOrganica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $tipoUnidadeOrganica['TipoUnidadeOrganica']['id']), null, __('Tem Certeza que deseja remover?', $tipoUnidadeOrganica['TipoUnidadeOrganica']['id'])); ?>
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



