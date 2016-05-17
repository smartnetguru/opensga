<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Matricular Candidato',
                    ['controller' => 'alunos', 'action' => 'pesquisa_candidatos_action', 'matricular_candidato'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Adicionar Estudante <span class="badge badge-danger"> Brevemente </span>',
                    ['controller' => 'alunos', 'action' => 'adicionar_estudante'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Estudantes Cadastrados')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Aluno', [
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
        <th><?php echo __('Codigo'); ?></th>
        <th><?php echo __('Apelido'); ?></th>
        <th><?php echo __('Nome'); ?></th>
        <th><?php echo __('Curso'); ?></th>
        <th><?php echo __('Ano de Ingresso'); ?></th>
        <th><?php echo __('Estado'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($alunos as $aluno):
        ?>
        <tr>


            <td><?php echo $this->Html->link($aluno['Aluno']['codigo'],
                        ['controller' => 'alunos', 'action' => 'perfil_estudante', $aluno['Aluno']['id']]); ?>
                &nbsp;</td>
            <td><?php echo $aluno['Entidade']['apelido']; ?>&nbsp;</td>
            <td><?php echo $aluno['Entidade']['nomes']; ?>&nbsp;</td>
            <td><?php echo $aluno['Curso']['name']; ?>&nbsp;</td>
            <td><?php echo $aluno['Aluno']['ano_ingresso']; ?>&nbsp;</td>
            <td><?php echo $aluno['EstadoAluno']['name']; ?>&nbsp;</td>

        </tr>
        <?php
    endforeach;
?>
<?php $this->end() ?>