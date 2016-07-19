<?php
    $this->Html->addCrumb('OpenSGA', '/');
    $this->Html->addCrumb('Página Inicial', '/');
    $group_id = $this->Session->read('Auth.User.group_id');
?>

<div class='row'>
    <div class="action-list">
        <div class="col-sm-2">
            <?php
                echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Meu Perfil',
                        ['controller' => 'docentes', 'action' => 'meu_perfil'],
                        ['escape' => false, 'class' => 'btn btn-icon btn-block']);
            ?>
        </div>
        <div class="col-sm-2">
            <?php
                echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Estudantes',
                        ['controller' => 'alunos', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-icon btn-block']);
            ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Turmas',
                    ['controller' => 'turmas', 'action' => 'index', 'docente' => true],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Avaliacoes',
                    ['controller' => 'avaliacaos', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Assistentes',
                    ['controller' => 'turmas', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Relatorios',
                    ['controller' => 'relatorios', 'action' => 'resumo_semestral'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Administrar Unidade Organica',
                    ['controller' => 'relatorios', 'action' => 'resumo_semestral'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
</div>

