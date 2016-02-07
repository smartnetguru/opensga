<?php
    $this->Html->addCrumb('Disciplinas', '/disciplinas');
    $this->Html->addCrumb('Lista de Disciplinas', '/disciplinas/add');
?>
<div class="row">
    <?php echo $this->fetch('top-actions'); ?>
</div>


<div class="container_12">

    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <h2><?php echo __('Cerimonia Graduacao'); ?></h2>
                <dl>
                    <dt><?php echo __('Id'); ?></dt>
                    <dd>
                        <?php echo h($cerimoniaGraduacao['CerimoniaGraduacao']['id']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Data'); ?></dt>
                    <dd>
                        <?php echo h($cerimoniaGraduacao['CerimoniaGraduacao']['data']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Local'); ?></dt>
                    <dd>
                        <?php echo h($cerimoniaGraduacao['CerimoniaGraduacao']['local']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Name'); ?></dt>
                    <dd>
                        <?php echo h($cerimoniaGraduacao['CerimoniaGraduacao']['name']); ?>
                        &nbsp;
                    </dd>
                </dl>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1>Estudantes Inscritos</h1><span></span>
            </div>
            <div class="block-content">

                <?php echo $this->fetch('candidatos') ?>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div> <!--! end of #main-content -->