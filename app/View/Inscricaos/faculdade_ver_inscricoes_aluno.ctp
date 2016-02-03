<?php $this->extend('/Common/Inscricaos/ver_inscricoes_aluno') ?>


<?php echo $this->start('main-actions') ?>
<div class="col-sm-3">
    <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Nova Inscricao',
            [
                    'controller' => 'inscricaos',
                    'action'     => 'inscrever',
                    'faculdade'  => true,
                    $aluno['Aluno']['id'],
                    $matricula['Matricula']['id'],
            ],
            ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
</div>
<div class="col-sm-3">
    <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Imprimir Comprovativo',
            [
                    'controller' => 'inscricaos',
                    'action'     => 'print_comprovativo_inscricao',
                    $aluno['Aluno']['id'],
                    'faculdade'  => true,
            ],
            ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

</div>
<div class="col-sm-3">
    <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Inscrever em Outro Plano de Estudos',
            [
                    'controller' => 'inscricaos',
                    'action'     => 'inscrever_todos_planos_estudos',
                    'faculdade'  => true,
                    $aluno['Aluno']['id'],
                    $matricula['Matricula']['id'],
            ],
            ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
</div>
<?php echo $this->end() ?>
