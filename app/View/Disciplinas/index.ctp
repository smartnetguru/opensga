<?php
$this->extend('/Common/index_common');
$this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
$this->Html->addCrumb('Disciplinas', '#');
$this->Html->addCrumb('Lista de Disciplinas', '#');
?>


<?php $this->start('top-actions') ?>
<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<br/><i class="fa fa-plus fa-2x"></i>' . __('Adicionar Disciplina'), array('controller' => 'disciplinas', 'action' => 'adicionar_disciplina'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

    </div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Lista de Disciplinas Activas')) ?>
<?php $this->start('table-header') ?>

<tr>
    <th><?php echo $this->Paginator->sort('name', __('Nome')); ?></th>
    <th><?php echo $this->Paginator->sort('created', __('Data de Cadastro')); ?></th>
    <th><?php echo $this->Paginator->sort('unidade_organica_id', __('Unidade Organica')); ?></th>
    <th><?php echo __('Accoes'); ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
$i = 0;
foreach ($disciplinas as $disciplina):
    $class = "odd";
    if ($i % 2 == 0)
        $class = "even";
    $i++;
    ?>
    <tr class="<?php echo $class ?>">
        <td><?php echo $disciplina['Disciplina']['name']; ?>&nbsp;</td>
        <td><?php echo date('d/m/Y',$disciplina['Disciplina']['modified']); ?>&nbsp;</td>
        <td><?php echo $disciplina['UnidadeOrganica']['name']; ?>&nbsp;</td>
        <td><?php echo 'Activo'; ?>&nbsp;</td>
    </tr>
<?php endforeach; ?>
<?php $this->end() ?>
