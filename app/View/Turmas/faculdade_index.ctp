<?php
    $this->extend('/Common/Turmas/index');
    $grupo = $this->Session->read('Auth.User.group_id');
    $username = $this->Session->read('Auth.User.username');

    $this->Html->addCrumb('Disciplinas', '/disciplinas');
    $this->Html->addCrumb('Lista de Disciplinas', '/disciplinas/add');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php
                if ($estadoTurma['EstadoTurma']['id'] == 1) {
                    echo $this->Html->link('<br/><i class="fa fa-search"></i>	Ver Turmas Fechadas',
                            ['controller' => 'turmas', 'action' => 'index', '?' => ['estado_turma' => 2]],
                            ['escape' => false, 'class' => 'btn btn-icon btn-block']);
                } else {
                    echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Ver Turmas Abertas',
                            ['controller' => 'turmas', 'action' => 'index', '?' => ['estado_turma' => 1]],
                            ['escape' => false, 'class' => 'btn btn-icon btn-block']);
                }
            ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>Criar Turma',
                    ['controller' => 'turmas', 'action' => 'criar_turma'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>