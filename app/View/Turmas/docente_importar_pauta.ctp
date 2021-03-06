<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Cursos"),
                                ['controller' => 'cursos', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Ficheiro') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('Upload', [
                    'enctype'       => 'multipart/form-data',
                    'class'         => 'block-content form',
                    'inputDefaults' => ['before' => '<p>', 'after' => '</p>'],
            ]); ?>
            <?php echo $this->Form->input('file',
                    ['type' => 'file', 'label' => __('Ficheiro'), 'div' => '_100', 'class' => 'required']); ?>


            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Cursos'),
                                ['controller' => 'cursos', 'action' => 'index'], ['class' => 'button red']) ?></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?> </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
    <div class="clear height-fix"></div>

</div> <!--! end of #main-content -->




