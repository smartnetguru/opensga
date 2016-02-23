<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Estudantes Estrangeiros',
                ['controller' => 'alunos', 'action' => 'relatorios_estudantes_estrangeiros'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>

    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Estudantes Com Necessidades Especiais',
                ['controller' => 'alunos', 'action' => 'relatorios_estudantes_com_necessidades_especiais'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
</div>