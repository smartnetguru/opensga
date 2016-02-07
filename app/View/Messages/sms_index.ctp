<?php
    $this->extend('/Common/index_no_pagination');
    $this->BreadCumbs->addCrumb('Mensagens', '/messages');
    $this->BreadCumbs->addCrumb('Mensagens SMS', '/messages/sms_index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Enviar SMS em Massa',
                    ['controller' => 'messages', 'action' => 'send_mass_sms'], [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Mensagens Recebidas')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('SMSNotification', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.codigo', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Numero de Estudante',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.apelido', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ou Apelido',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.nomes',
                        ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes']); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->end([
                        'label' => __('Pesquisar', true),
                        'class' => 'btn btn-blue next-step btn-block',
                ]); ?>
            </div>
        </div>
    </div>


<?php $this->end() ?>
<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo __('Remetente'); ?></th>
        <th><?php echo __('Mensagem'); ?></th>
        <th><?php echo __('Data'); ?></th>
        <th><?php echo __('Numero de Estudante'); ?></th>
        <th><?php echo __('Nome da Entidade'); ?></th>
        <th><?php echo __('Estado'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($smsRecebidas as $sms):
        ?>
        <tr>


            <td><?php echo $sms['SmsNotification']['phone_number']; ?>&nbsp;</td>
            <td><?php echo $sms['SmsNotification']['message']; ?>&nbsp;</td>
            <td><?php echo $sms['SmsNotification']['created']; ?>&nbsp;</td>
            <td><?php echo '' ?>&nbsp;</td>
            <td><?php echo ''; ?>&nbsp;</td>
            <td><?php echo ''; ?>&nbsp;</td>

        </tr>
        <?php
    endforeach;
?>
<?php $this->end() ?>