<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Nova Requisicao',
                    ['controller' => 'requisicoes_pedidos', 'action' => 'nova_requisicao', 'plugin' => 'requisicoes'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Pedidos Pendentes')) ?>
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
                <?php echo $this->Form->input('Entidade.apelido', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ou Apelido',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Entidade.nomes',
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

        <th><?php echo $this->Paginator->sort('aluno_id','Numero de Estudante'); ?></th>
        <th><?php echo $this->Paginator->sort('numero_pedido','Numero de Pedido'); ?></th>
        <th><?php echo $this->Paginator->sort('data_pedido','Data do Pedido'); ?></th>
        <th><?php echo $this->Paginator->sort('nome_requerente','Nome Completo'); ?></th>
        <th><?php echo $this->Paginator->sort('curso_id','Curso'); ?></th>
        <th><?php echo $this->Paginator->sort('requisicoes_tipo_pedido_id','Tipo de Pedido/Documento'); ?></th>
        <th><?php echo $this->Paginator->sort('requisicoes_estado_pedido_id','Estado do Pedido'); ?></th>
        <th>Accoes</th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php foreach ($requisicoesPedidos as $requisicoesPedido): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($requisicoesPedido['Aluno']['codigo'],
                    ['controller' => 'alunos', 'action' => 'perfil_estudante', $requisicoesPedido['Aluno']['id']]); ?>
        </td>
        <td>

            <?php echo $requisicoesPedido['RequisicoesPedido']['numero_pedido']; ?>

        <td><?php echo h($requisicoesPedido['RequisicoesPedido']['data_pedido']); ?>&nbsp;</td>
        <td><?php echo h($requisicoesPedido['RequisicoesPedido']['nome_requerente']); ?>&nbsp;</td>
        <td>
            <?php if (isset($requisicoesPedido['Curso'])) {
                echo $this->Html->link($requisicoesPedido['Curso']['name'],
                        ['controller' => 'cursos', 'action' => 'view', $requisicoesPedido['Curso']['id']]);
            } ?>
        </td>
        <td>
            <?php echo $requisicoesPedido['RequisicoesTipoPedido']['name']; ?>
        </td>
        <td>
            <?php echo $requisicoesPedido['RequisicoesEstadoPedido']['name']; ?>
        </td>
        <td class="center">
            <div class="visible-md visible-lg hidden-sm hidden-xs">

                <?= $this->Html->link('<i class="fa fa-refresh"></i>',
                        [
                                'controller' => 'requisicoes_pedidos',
                                'action'     => 'actualizar_estado_requisicao',
                                $requisicoesPedido['RequisicoesPedido']['id'],
                        ], [
                                'class'               => 'btn btn-xs btn-green tooltips',
                                'data-placement'      => 'top',
                                'data-original-title' => 'Actualizar Estado',
                                'escape'              => false,
                        ]); ?>
                <?php
                    echo $this->Form->postLink('<i class="clip clip-file-remove fa fa-white"></i>',
                            [
                                    'controller' => 'requisicoes_pedidos',
                                    'action'     => 'cancelar_requisicao',
                                    $requisicoesPedido['RequisicoesPedido']['id'],
                            ], [
                                    'escape'              => false,
                                    'class'               => 'btn btn-xs btn-yellow tooltips',
                                    'data-placement'      => 'top',
                                    'data-original-title' => 'Cancelar Requisicao',
                            ],
                            __('Tem Certeza que pretende Cancelar Esta Requisicao?'));

                ?>
            </div>
        </td>

    </tr>
<?php endforeach; ?>
<?php $this->end() ?>