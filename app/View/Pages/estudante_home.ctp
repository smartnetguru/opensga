<?php
    $this->Html->addCrumb('OpenSGA', '/');
    $this->Html->addCrumb('Página Inicial', '/');
    $group_id = $this->Session->read('Auth.User.group_id');
?>
<div class="row">
    <?php
        if (isset($matriculasPendentes)) {
            ?>
            <div class="alert alert-danger">
                <button data-dismiss="alert" class="close">
                    &times;
                </button>
                <i class="fa fa-times-circle"></i>
                Possui <strong><?= count($matriculasPendentes); ?></strong> Matriculas Por Renovar.<br/>
                <?= $this->Html->link('Saiba como Proceder', [
                    'controller' => 'matriculas',
                    'action'     => 'renovar_matricula'
                ]) ?>
            </div>
        <?php
        }
    ?>
</div>
<div class='row'>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Meu Perfil',
                ['controller' => 'alunos', 'action' => 'perfil', 'estudante' => true],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link(
                '<i class="fa fa-user fa-2x"></i>Matriculas',
                ['controller'=>'matriculas','action'=>'index'], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>

        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Inscricoes',
                ['controller'=>'inscricaos','action'=>'ver_inscricoes_aluno'], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Turmas<span class="badge badge-danger"> Brevemente </span>',
                '#', ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Avaliacoes<span class="badge badge-danger"> Brevemente </span>',
                '#', ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Docentes<span class="badge badge-danger"> Brevemente </span>',
                '#', ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Pagamentos<span class="badge badge-danger"> Brevemente </span>',
                '#', ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link(
                '<i class="fa fa-user fa-2x"></i>Cerimonia de Graduacao',
                ['controller'=>'cerimonia_graduacaos','action'=>'index'], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Relatorios<span class="badge badge-danger"> Brevemente </span>',
                '#', ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <?php
            $fb = new Facebook\Facebook(Configure::read('FB_AUTH'));

            $helper = $fb->getRedirectLoginHelper();

            $permissions = ['email', 'public_profile', 'user_location', 'user_birthday']; // Optional permissions
            $loginUrl = $helper->getLoginUrl($this->Html->url([
                'controller' => 'users',
                'action'     => 'after_fb_login',
                'estudante'  => true,
                'full_base'  => true
            ]), $permissions);


        ?>
        <!--  <div class="col-sm-1">
            <?php //echo $this->Html->link('<i class="fa fa-user fa-2x"></i>	Conectar ao Facebook<span class="badge badge-danger"> Brevemente </span>',
            //$loginUrl, ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>-->

    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                Inscricoes Activas

            </div>
            <div class="block-content">
                <div class="dataTables_wrapper">
                    <table id="lastLogin" class="table">
                        <thead>
                        <tr>

                            <th><?php echo __('Disciplina') ?></th>
                            <th><?php echo __('Ano') ?></th>
                            <th><?php echo __('Semestre') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($inscricoesActivas as $inscricao): ?>
                            <tr>
                                <td><?php echo $inscricao['Turma']['Disciplina']['name']; ?>&nbsp;</td>
                                <td><?php echo $inscricao['Turma']['ano_curricular']; ?>&nbsp;</td>
                                <td><?php echo $inscricao['Turma']['semestre_curricular']; ?>&nbsp;</td>


                            </tr>
                        <?php endforeach; ?>                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                Ultimas Mensagens Recebidas

            </div>
            <div class="block-content">
                <div class="dataTables_wrapper">
                    <table id="lastLogin" class="table">
                        <thead>
                        <tr>

                            <th><?php echo __('Data') ?></th>
                            <th><?php echo __('Remetente') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($headerMessages as $message): ?>
                            <tr>
                                <td><?php echo $message['Message']['data_envio'] ?>&nbsp;</td>
                                <td><?php echo $message['Message']['User']['username']; ?>&nbsp;</td>

                            </tr>
                        <?php endforeach; ?>                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>


            </div>
            <div class="block-content">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- OpenSGA Home 300 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:336px;height:280px"
                     data-ad-client="ca-pub-1330637192056182"
                     data-ad-slot="6742747614"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
</div>

