<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Cursos Sem Encarregado<span class="badge badge-danger">' . $cursosSemEncarregado . ' </span>',
                ['controller' => 'cursos', 'action' => 'manutencao_cursos_sem_encarregado'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Cursos Sem Plano Estudos<span class="badge badge-danger">' . $cursosSemPlanoEstudos . ' </span>',
                ['controller' => 'cursos', 'action' => 'manutencao_cursos_sem_plano_estudos'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Cursos Sem Turno',
                ['controller' => 'cursos', 'action' => 'manutencao_cursos_sem_turno'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>

    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Cursos Sem Grau Académico<span class="badge badge-danger"> Brevemente </span>',
                ['controller' => 'cursos', 'action' => 'manutencao'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Cursos Sem Tipo de Curso<span class="badge badge-danger"> Brevemente </span>',
                ['controller' => 'cursos', 'action' => 'manutencao'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Cursos Sem Código<span class="badge badge-danger"> Brevemente </span>',
                ['controller' => 'cursos', 'action' => 'manutencao'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Cursos Sem Ano de Criação<span class="badge badge-danger"> Brevemente </span>',
                ['controller' => 'cursos', 'action' => 'manutencao'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Cursos Sem Duração<span class="badge badge-danger"> Brevemente </span>',
                ['controller' => 'cursos', 'action' => 'manutencao'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
</div>