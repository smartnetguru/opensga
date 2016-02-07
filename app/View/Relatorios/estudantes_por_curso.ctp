<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . "Novo Estudante",
                                ['controller' => 'alunos', 'action' => 'adicionar_estudante'], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . "Imprimir Lista",
                                ['controller' => 'alunos', 'action' => 'imprimir_alunos'], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <div id="linewrapper" style="display: block; float: left; width:90%; margin-bottom: 20px;"></div>
        <?php echo $this->HighCharts->render('Line Chart'); ?>
    </div>


    <div class="clear height-fix"></div>

</div><!--! end of #main-content -->
