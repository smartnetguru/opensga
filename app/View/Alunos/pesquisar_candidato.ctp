<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Novo Estudante',
                    ['controller' => 'alunos', 'action' => 'adicionar_estudante'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Imprimir Despacho',
                    ['controller' => 'alunos', 'action' => 'print_bolsas_novo_ingresso'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-bar-chart"></i>	Exportar Bolseiros',
                    ['controller' => 'bolsa_bolsas', 'action' => 'exportar_bolseiros_ano_ingresso'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-bar-chart"></i>	Exportar Bolseiros das Escolas',
                    ['controller' => 'bolsa_bolsas', 'action' => 'exportar_bolseiros_ano_ingresso_escolas'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-bar-chart"></i>	Exportar Estudantes Bolseiros',
                    ['controller' => 'alunos', 'action' => 'exportar_estudantes_bolseiros'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>

    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Candidatos Admitidos')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Candidatura', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-2">
                <?php echo $this->Form->input('Candidatura.numero_candidato', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Numero de Candidato',
                ]); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('Candidatura.numero_estudante', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Numero de Estudante',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Candidatura.apelido', [
                        'label'    => false,
                        'div'      => false,
                        'required' => false,
                        'class'    => 'form-control',

                        'placeholder' => 'Apelido',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Candidatura.nomes', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Nomes',
                ]); ?>
            </div>

            <div class="col-md-2">
                <?php echo $this->Form->end([
                        'label' => __('Pesquisar', true),
                        'class' => 'btn btn-blue next-step btn-block',
                ]); ?>
            </div>
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
        <th><?php echo __('Tipo de Bolsa'); ?></th>
        <th>Opcoes</th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($candidatos as $candidato):
        ?>
        <tr>


            <td><?php echo $this->Html->link($candidato['Candidatura']['numero_estudante'], [
                        'controller' => 'alunos',
                        'action'     => 'atribuir_bolsa_candidato',
                        $candidato['Candidatura']['id'],
                ]); ?></td>
            <td><?php echo $candidato['Candidatura']['apelido']; ?>&nbsp;</td>
            <td><?php echo $candidato['Candidatura']['nomes']; ?>&nbsp;</td>
            <td><?php echo $candidato['Curso']['name']; ?>&nbsp;</td>
            <td>
                <?php
                    if (isset($candidato['BolsaTemporaria']['BolsaTipoBolsa'])) {
                        echo $candidato['BolsaTemporaria']['BolsaTipoBolsa']['name'];
                    }
                ?>
            </td>
            <td>
                <?php echo $this->Html->link('<i class="fa fa-eye"></i>Atribuir Bolsa',
                        [
                                'controller' => 'alunos',
                                'action'     => 'atribuir_bolsa_candidato',
                                $candidato['Candidatura']['id'],
                        ],
                        ['class' => 'btn btn btn-green', 'escape' => false]) ?>


            </td>

        </tr>
        <?php
    endforeach;
?>
<?php $this->end() ?>