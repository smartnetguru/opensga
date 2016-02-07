<?php
    $this->extend('/Common/CerimoniaGraduacaos/ver_detalhes');
    $this->Html->addCrumb('Disciplinas', '/disciplinas');
    $this->Html->addCrumb('Lista de Disciplinas', '/disciplinas/add');
?>
<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Fazer Inscricao',
                    [
                            'controller' => 'alunos',
                            'action'     => 'pesquisa_aluno_action',
                            'inscrever_aluno',
                            'cerimonia_graduacaos',
                    ],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-print fa-2x"></i>Imprimir Lista de Inscritos',
                    [
                            'controller' => 'cerimonia_graduacaos',
                            'action'     => 'print_lista_graduandos',
                            $cerimoniaGraduacaoId,
                    ],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>

    </div>
<?php $this->end() ?>

<?php $this->start('candidatos') ?>
<?php echo $this->Form->create('CerimoniaGraduacao', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'type'          => 'get',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('numero_estudante', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Numero de Estudante',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('curso_id', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Curso',
                        'empty'       => '---Seleccione o Curso---',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('ano_ingresso', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ano de Ingresso',

                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->end([
                        'label' => __('Pesquisar', true),
                        'class' => 'btn btn-blue next-step btn-block',
                ]); ?>
            </div>
        </div>
    </div>
    <table id="table-example" class="table">
        <thead>
        <tr>
            <th
            </th>
            <th><?php echo __('Código') ?></th>
            <th><?php echo __('Nome Completo'); ?></th>
            <th><?php echo __('Curso'); ?></th>
            <th><?php echo __('Ano de Ingresso'); ?></th>
            <th><?php echo __('Data de Defesa'); ?></th>
            <th><?php echo __('Média de Defesa'); ?></th>
            <th><?php echo __('Telemóvel'); ?></th>
            <th><?php echo __('Referencia para Pagamento'); ?></th>
            <th><?php echo __('Estado'); ?></th>
            <th><?php echo __('Accoes'); ?></th>

        </tr>
        </thead>
        <tbody>
        <?php

            foreach ($candidatos as $candidato):
                ?>
                <?php if ($candidato['CandidatoGraduacao']['estado_candidatura_id'] == 4): ?>
                <tr class="warning">
            <?php endif; ?>
                <?php if ($candidato['CandidatoGraduacao']['estado_candidatura_id'] == 1): ?>
                <tr class="success">
            <?php endif; ?>
                <?php if ($candidato['CandidatoGraduacao']['estado_candidatura_id'] == 3): ?>
                <tr class="info">
            <?php endif; ?>
                <?php if ($candidato['CandidatoGraduacao']['estado_candidatura_id'] == 2): ?>
                <tr class="warning">
            <?php endif; ?>
                <?php if ($candidato['CandidatoGraduacao']['estado_candidatura_id'] == 5): ?>
                <tr class="danger">
            <?php endif; ?>


                <td><?php echo $candidato['Aluno']['codigo']; ?>&nbsp;</td>
                <td><?php echo $candidato['Aluno']['Entidade']['name']; ?>&nbsp;</td>
                <td><?php echo $candidato['Aluno']['Curso']['name']; ?>&nbsp;</td>
                <td><?php echo $candidato['Aluno']['ano_ingresso']; ?>&nbsp;</td>
                <td><?php echo $candidato['CandidatoGraduacao']['data_defesa']; ?>&nbsp;</td>
                <td><?php echo $candidato['CandidatoGraduacao']['media_defesa']; ?>&nbsp;</td>
                <td><?php echo $candidato['CandidatoGraduacao']['telemovel']; ?>&nbsp;</td>
                <td><?php echo $candidato['CandidatoGraduacao']['referencia_pagamento']; ?>&nbsp;</td>
                <td><?php echo $candidato['EstadoCandidatura']['name']; ?>&nbsp;</td>
                <td><?php echo $this->Html->link('Ver Detalhes', [
                            'controller' => 'candidato_graduacaos',
                            'action'     => 'ver_detalhes',
                            $candidato['CandidatoGraduacao']['id'],
                    ]) ?></td>


                </tr>
            <?php endforeach; ?>                            </tbody>
    </table>
<?php $this->end() ?>