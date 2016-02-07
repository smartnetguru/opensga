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
                            echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Meu Perfil"),
                                    ['controller' => 'docentes', 'action' => 'meu_perfil'], ['escape' => false]);
                        ?>
                    </li>
                    <li>
                        <?php
                            echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Estudantes"),
                                    ['controller' => 'alunos', 'action' => 'index'], ['escape' => false]);
                        ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Turmas"),
                                ['controller' => 'turmas', 'action' => 'index', 'docente' => true],
                                ['escape' => false]) ?>
                    </li>
                    <!--<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Avaliações"),
                            ['controller' => 'avaliacaos', 'action' => 'index'], ['escape' => false]) ?>
					</li>
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/mailreminder.png') . __("Assistentes"),
                            ['controller' => 'turmas', 'action' => 'index'], ['escape' => false]) ?>
					</li>
					<li>
						<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/knotes.png') . __("Relatorios"),
                            ['controller' => 'relatorios', 'action' => 'resumo_semestral'], ['escape' => false]) ?>
					</li>-->
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/knotes.png') . __("Administrar Unidade Orgânica"),
                                ['controller' => 'relatorios', 'action' => 'resumo_semestral'], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    <div class="clear height-fix"></div>

</div>
