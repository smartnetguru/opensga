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
                <h1><?php echo __('Dados do Usuário') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('User',
                    ['class' => 'block-content form', 'inputDefaults' => ['before' => '<p>', 'after' => '</p>']]); ?>
            <?php echo $this->Form->input('senhaantiga',
                    ['type' => 'password', 'label' => __('Senha Antiga'), 'div' => '_100', 'class' => 'text']); ?>
            <?php echo $this->Form->input('novasenha1',
                    ['type' => 'password', 'label' => __('Nova Senha'), 'div' => '_100', 'class' => 'required']); ?>
            <?php echo $this->Form->input('novasenha2', [
                    'type'             => 'password',
                    'label'            => __('Confirmar Nova Senha'),
                    'div'              => '_100',
                    'empty'            => true,
                    'data-placeholder' => 'Seleccione',
            ]); ?>


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

</div></div> <!--! end of #main-content -->
