<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('User', [
    'role'          => "form",
    'novalidade'    => 'novalidate',
    'class'         => '',
    'id'            => 'form',
    'inputDefaults' => ['empty' => 'Seleccione', 'placeholder' => 'Seleccione']
]); ?>
    <div class="form-group">
        <label for="username" class="control-label">Nome de Usuário</label>

        <div class="col-sm-12">
            <p class="form-control-static"><strong><?php echo $user['User']['username'] ?></strong></M></p>
        </div>
    </div>
<?php

    echo $this->Form->input('senha_antiga', [
        'div'   => 'form-group',
        'label' => ['class' => 'control-label', 'text' => 'Senha Antiga'],
        'class' => 'form-control',
        'id'    => 'senhaAntiga',
        'type'  => 'password',
    ]);
    echo $this->Form->input('nova_senha', [
        'div'   => 'form-group',
        'label' => ['class' => 'control-label', 'text' => 'Nova Senha'],
        'class' => 'form-control',
        'id'    => 'novaSenha',
        'type'  => 'password',
    ]);
    echo $this->Form->input('confirmar_nova_senha', [
        'div'   => 'form-group',
        'label' => ['class' => 'control-label', 'text' => 'Confirmar Nova Senha'],
        'class' => 'form-control',
        'id'    => 'confirmarNovaSenha',
        'type'  => 'password',
    ]);
?>
    <div class="col-sm-4 col-sm-offset-6">
        <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

    </div>

<?php $this->Form->end(); ?>
<?php $this->end(); ?>

<?php $this->start('right-panel') ?>
    <div class="col-sm-6">
        <!-- start: FORM WIZARD PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                Dados do Estudante
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="icon-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="icon-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="icon-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="icon-remove"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">

                <div class="col-sm-12">
                    <div class="alert alert-warning">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa fa-exclamation-triangle"></i>
                        <strong>Atencao!</strong> A partir de agora o seu nome de usuário será o seu Email Insitucional:<strong><?php echo $user['User']['username'] ?></strong>.
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label">Nome Completo</label>

                        <div class="col-sm-12">
                            <p class="form-control-static"><strong><?php echo $user['Entidade']['name'] ?></strong></M>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label">Data de Nascimento</label>

                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <strong><?php echo $user['Entidade']['data_nascimento'] ?></strong></M></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label">Curso</label>

                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <strong><?php echo $user['Entidade']['Aluno']['Curso']['name'] ?></strong></M></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label">Ano de Ingresso</label>

                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <strong><?php echo $user['Entidade']['Aluno']['ano_ingresso'] ?></strong></M></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- end: FORM WIZARD PANEL -->
    </div>
<?php $this->end(); ?>