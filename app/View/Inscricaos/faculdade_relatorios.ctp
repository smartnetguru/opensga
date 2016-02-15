<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Turmas Abertas',
                ['controller' => 'turmas', 'action' => 'relatorios_turmas_abertas'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-print fa-2x"></i>Estudantes Inscritos Por Cadeira',
                ['controller' => 'inscricaos', 'action' => 'relatorio_inscricoes_por_cadeira'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
</div>