<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb(h($aluno['Entidade']['name']), '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
    $this->BreadCumbs->addCrumb('Mudanca de Curso', '/alunos/index');

?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('RequisicoesPedido', [
        'inputDefaults' => [
                'div'       => 'form-group',
                'wrapInput' => false,
                'class'     => 'form-control',
        ],
        'class'         => 'well',
]); ?>
<?php echo $this->Form->unlockField('estudante_bolseiro'); ?>
<?php echo $this->Form->hidden('aluno_id', ['value' => $aluno['Aluno']['id']]); ?>
<?php echo $this->Form->hidden('curso_id', ['value' => $aluno['Curso']['id']]); ?>
    <div class="form-group">
        <label>
            <?php echo __('Numero de Requisicao') ?>
        </label>
        <?php echo $this->Form->input('numero_pedido',
                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
    </div>
    <div class="form-group col-sm-6">
        <label>
            <?php echo __('Documento/Tipo de Requisicao') ?>
        </label>
        <?php echo $this->Form->input('requisicoes_tipo_pedido_id',
                ['label' => false, 'div' => false, 'class' => 'form-control', 'empty' => '--Seleccione--']); ?>
    </div>
    <div class="form-group col-sm-6">
        <label>
            <?php echo __('Outros Tipos de Requisicao') ?>
        </label>
        <?php echo $this->Form->input('novo_tipo_requisicao',
                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Estado da Requisicao') ?>
        </label>
        <?php echo $this->Form->input('requisicoes_estado_pedido_id',
                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Data de Requisicao') ?>
        </label>
        <?php echo $this->Form->input('data_pedido', [
                'label'              => false,
                'class'              => 'form-control date-time-picker',
                'type'               => 'text',
            'default'=>date('Y-m-d H:i:s')
        ]); ?>
    </div>
    <div class="form-group radio-inline">
            <?php echo $this->Form->input('estudante_bolseiro', [
                    'class'=>'radio-inline',
                    'type'    => 'radio',
                    'default' => 0,
                    'options' => ['0' => 'Não', '1' => 'Sim'],
            ]); ?>
    </div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-8">
            <?php
                echo $this->Form->input('estado_objecto_id', ['type' => 'hidden', 'value' => 1]);
                echo $this->Form->input('funcionario_id', ['type' => 'hidden', 'value' => $funcionario['Funcionario']['id']]);
            ?>
            <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

        </div>


    </div>
<?php
    $this->end();
