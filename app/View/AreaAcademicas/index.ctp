<?php
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');

$this->Html->addCrumb('Cadastros', '/area_academicas');
$this->Html->addCrumb('Áreas Académicas', '/area_academicas/index');
$this->Html->addCrumb('Lista de Áreas Académicas', '/areas_academicas/index');


?>




			<div class="container_12">
            <div class="grid_12">
				<div class="block-border">
					<div class="block-content">
						<ul class="shortcut-list">
							<li>
								<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png').__("Nova Área Académica"),array('controller'=>'area_academicas','action'=>'add'),array('escape'=>false)) ?>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="grid_12">
				<div class="block-border">
					<div class="block-header">
						<h1><?php echo  __('Áreas Académicas')?></h1><span></span>
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
	foreach ($areaAcademicas as $areaAcademica): ?>
	<tr>
		<td><?php echo h($areaAcademica['AreaAcademica']['id']); ?>&nbsp;</td>
		<td><?php echo h($areaAcademica['AreaAcademica']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $areaAcademica['AreaAcademica']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $areaAcademica['AreaAcademica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $areaAcademica['AreaAcademica']['id']), null, __('Tem certeza que deseja remover # %s?', $areaAcademica['AreaAcademica']['id'])); ?>
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


