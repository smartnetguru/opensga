<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-plus fa-2x"></i>Criar Nova Aplicacao',
                    ['controller' => 'configs', 'action' => 'criar_aplicacao'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Aplicacoes Registradas')) ?>

<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo __('Nome'); ?></th>
        <th><?php echo __('Website'); ?></th>
        <th><?php echo __('Client ID'); ?></th>
        <th><?php echo __('Redirect URL'); ?></th>
        <th><?php echo __('Username'); ?></th>
        <th><?php echo __('Accoes'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($clients as $client):
        ?>
        <tr>


            <td><?php echo $client['Client']['name']; ?>&nbsp;</td>
            <td><?php echo $client['Client']['website']; ?>&nbsp;</td>
            <td><?php echo $client['Client']['client_id']; ?>&nbsp;</td>
            <td><?php echo $client['Client']['redirect_uri']; ?>&nbsp;</td>
            <td><?php echo $client['User']['username']; ?>&nbsp;</td>
            <td>&nbsp;</td>

        </tr>
        <?php
    endforeach;
?>
<?php $this->end() ?>