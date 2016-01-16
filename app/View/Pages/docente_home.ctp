<?php
$this->Html->addCrumb('OpenSGA', '/');
$this->Html->addCrumb('Página Inicial', '/');
$group_id = $this->Session->read('Auth.User.group_id');
?>

<div class="container_12">

	<div class="grid_12">
		<div class="block-border">
			<div class="block-content">
				<ul class="shortcut-list">
					<li>
						<?php
						echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Meu Perfil"), array('controller' => 'docentes', 'action' => 'meu_perfil'), array('escape' => false));
						?>
					</li>
					<li>
						<?php
						echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Estudantes"), array('controller' => 'alunos', 'action' => 'index'), array('escape' => false));
						?>
					</li>
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Turmas"), array('controller' => 'turmas', 'action' => 'index', 'docente' => true), array('escape' => false)) ?>
					</li>
					<!--<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Avaliações"), array('controller' => 'avaliacaos', 'action' => 'index'), array('escape' => false)) ?>
					</li>
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/mailreminder.png') . __("Assistentes"), array('controller' => 'turmas', 'action' => 'index'), array('escape' => false)) ?>
					</li>
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/knotes.png') . __("Relatorios"), array('controller' => 'relatorios', 'action' => 'resumo_semestral'), array('escape' => false)) ?>
					</li>-->
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/knotes.png') . __("Administrar Unidade Orgânica"), array('controller' => 'relatorios', 'action' => 'resumo_semestral'), array('escape' => false)) ?>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>


	<div class="clear height-fix"></div>

</div>
