<?php
    foreach ($isRegular as $ir) {
        ?>
        <div class="<?php echo $classeEstado ?>">
            <strong><?php echo $ir['mensagem']; ?></strong></div>

    <?php
    }
?>
<div class="row">
    <div class="col-sm-5">
        <div class="user-left">
            <div class="center">
                <h4><?php echo h($aluno['Entidade']['name']); ?></h4>
                <?php if (Configure::read('environment') == 'prod'): ?>
                    <?php

                    $file = '/Fotos/Estudantes/' . $aluno['Aluno']['ano_ingresso'] . '/' . $aluno['Aluno']['codigo'] . '.jpg';
                    if (!$signedUrl = $this->AmazonS3->getSignedUrl($file)) {

                        $file = '/Fotos/profile2.png';
                        $signedUrl = $this->AmazonS3->getSignedUrl($file);
                    }

                    ?>
                    <div data-provides="fileupload" class="fileupload fileupload-new">
                        <div class="user-image">
                            <div
                                class="fileupload-new thumbnail"><?php echo $this->Html->image($signedUrl,
                                    ['style' => 'max-width:330px;max-height:380px']); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <h4><?php echo h($aluno['Aluno']['codigo']); ?></h4>
                <hr>
            </div>
            <table class="table table-condensed table-hover">
                <thead>
                <tr>
                    <th colspan="3"><?php echo __('Dados do Estudante') ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo __('Curso') ?></td>
                    <td>
                        <a href="#">
                            <?php echo h($aluno['Curso']['name']) ?>
                        </a></td>

                </tr>
                <tr>
                    <td>Curriculum</td>
                    <td><?php echo h($aluno['PlanoEstudo']['ano_criacao']) ?></td>

                </tr>
                <tr>
                    <td><?php echo __('Unidade Organica') ?></td>
                    <td>
                        <a href="">
                            <?php echo h($aluno['Curso']['UnidadeOrganica']['name']) ?>
                        </a></td>

                </tr>
                <tr>
                    <td>Ano de Ingresso</td>
                    <td><?php echo h($aluno['Aluno']['ano_ingresso']) ?></td>

                </tr>
                <tr>
                    <td>Email Institucional</td>
                    <td>
                        <a href="">
                            <?php echo h($aluno['Entidade']['User']['username']) ?>
                        </a></td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="row">
            <?php echo $this->fetch('main-actions') ?>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        <?php echo __('Inscricoes Activas Neste Semestre') ?>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="sample-table-1" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th><?php echo __('Disciplina') ?></th>
                                    <th><?php echo __('Ano') ?></th>
                                    <th><?php echo __('Semestre') ?></th>
                                    <th><?php echo __('Tipo') ?></th>
                                    <th><?php echo __('Accoes') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($inscricoesActivas as $inscricao):
                                        $class = ' class="first"';
                                        if ($i++ % 2 == 0) {
                                            $class = ' class="even"';
                                        }
                                        ?>
                                        <tr<?php echo $class; ?>>
                                            <td><?php echo $inscricao['Turma']['Disciplina']['name'] ?>&nbsp;</td>
                                            <td><?php echo $inscricao['Turma']['ano_curricular']; ?>&nbsp;</td>
                                            <td><?php echo $inscricao['Turma']['semestre_curricular']; ?>&nbsp;</td>
                                            <td><?php echo $inscricao['TipoInscricao']['name']; ?>&nbsp;</td>
                                            <td class="center">
                                                <div class="visible-md visible-lg hidden-sm hidden-xs">

                                                    <?= $this->Html->link('<i class="fa fa-group"></i>',
                                                        [
                                                            'controller' => 'turmas',
                                                            'action'     => 'ver_turma',
                                                            $inscricao['Turma']['id'],
                                                        ], [
                                                            'class'               => 'btn btn-xs btn-green tooltips',
                                                            'data-placement'      => 'top',
                                                            'data-original-title' => 'Ver Turma',
                                                            'escape'              => false
                                                        ]); ?>
                                                    <?php
                                                        if ($this->Time->isToday($inscricao['Inscricao']['data'],
                                                                $this->Session->read('Auth.User.timezone')) && $inscricao['Inscricao']['created_by'] == $this->Session->read('Auth.User.id')
                                                        ) {
                                                            echo $this->Form->postLink('<i class="fa fa-times fa fa-white"></i>',
                                                                [
                                                                    'action'    => 'apagar_inscricao',
                                                                    $inscricao['Inscricao']['id'],
                                                                    'faculdade' => true
                                                                ], [
                                                                    'escape' => false,
                                                                    'class'  => 'btn btn-xs btn-red tooltips',
                                                                    'data-placement'      => 'top',
                                                                    'data-original-title' => 'Apagar Inscricao',
                                                                ],
                                                                __('Tem Certeza que pretende apagar a inscricao de   %s?',
                                                                    $inscricao['Turma']['Disciplina']['name']));
                                                        }
                                                    ?>
                                                    <?php
                                                            echo $this->Form->postLink('<i class="clip clip-file-remove fa fa-white"></i>',
                                                                [
                                                                    'action'    => 'anular_inscricao',
                                                                    $inscricao['Inscricao']['id'],
                                                                    'faculdade' => true
                                                                ], [
                                                                    'escape' => false,
                                                                    'class'  => 'btn btn-xs btn-yellow tooltips',
                                                                    'data-placement'      => 'top',
                                                                    'data-original-title' => 'Anular Inscricao',
                                                                ],
                                                                __('Tem Certeza que pretende Anular a inscricao de   %s?',
                                                                    $inscricao['Turma']['Disciplina']['name']));

                                                    ?>

                                                </div>
                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary dropdown-toggle btn-sm"
                                                           data-toggle="dropdown" href="#">
                                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                                        </a>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li role="presentation">
                                                                <?= $this->Html->link('<i class="fa fa-eye">Ver Turma</i>',
                                                                    [
                                                                        'controller' => 'turmas',
                                                                        'action'     => 'ver_turma',
                                                                        $inscricao['Turma']['id'],
                                                                    ], [
                                                                        'role'     => 'menuitem',
                                                                        'tabindex' => '-1',
                                                                        'escape'   => false
                                                                    ]); ?>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php
                                    endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo __('Cadeiras Abertas e Cadeiras Feitas') ?>

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="sample-table-1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th><?php echo __('Disciplina') ?></th>
                            <th><?php echo __('Ano') ?></th>
                            <th><?php echo __('Semestre') ?></th>
                            <th><?php echo __('Tipo') ?></th>
                            <th><?php echo __('Ano Lectivo') ?></th>
                            <th><?php echo __('Accoes') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            foreach ($inscricoesAbertas as $inscricao):
                                $class = ' class="first"';
                                if ($i++ % 2 == 0) {
                                    $class = ' class="even"';
                                }
                                ?>
                                <tr<?php echo $class; ?>>
                                    <td><?php echo $inscricao['Turma']['Disciplina']['name'] ?>&nbsp;</td>
                                    <td><?php echo $inscricao['Turma']['ano_curricular']; ?>&nbsp;</td>
                                    <td><?php echo $inscricao['Turma']['semestre_curricular']; ?>&nbsp;</td>
                                    <td><?php echo $inscricao['TipoInscricao']['name']; ?>&nbsp;</td>
                                    <td><?php echo $inscricao['Turma']['AnoLectivo']['ano']; ?>&nbsp;</td>
                                    <td class="center" width="100px">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">

                                            <?= $this->Html->link('<i class="fa fa-eye"></i>',
                                                [
                                                    'controller' => 'inscricaos',
                                                    'action'     => 'ver_detalhes_inscricao',
                                                    $inscricao['Inscricao']['id']
                                                ], [
                                                    'class'               => 'btn btn-xs btn-green tooltips',
                                                    'data-placement'      => 'top',
                                                    'data-original-title' => 'Ver Detalhes',
                                                    'escape'              => false
                                                ]); ?>

                                            <?= $this->Html->link('<i class="fa fa-group"></i>',
                                                [
                                                    'controller' => 'turmas',
                                                    'action'     => 'ver_turma',
                                                    $inscricao['Turma']['id'],
                                                ], [
                                                    'class'               => 'btn btn-xs btn-green tooltips',
                                                    'data-placement'      => 'top',
                                                    'data-original-title' => 'Ver Turma',
                                                    'escape'              => false
                                                ]); ?>

                                        </div>
                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="btn-group">
                                                <a class="btn btn-primary dropdown-toggle btn-sm"
                                                   data-toggle="dropdown" href="#">
                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                </a>
                                                <ul role="menu" class="dropdown-menu pull-right">
                                                    <li role="presentation">
                                                        <?= $this->Html->link('<i class="fa fa-eye">Ver Detalhes</i>',
                                                            [
                                                                'controller' => 'inscricaos',
                                                                'action'     => 'ver_detalhes_inscricao',
                                                                $inscricao['Inscricao']['id']
                                                            ], [
                                                                'role'     => 'menuitem',
                                                                'tabindex' => '-1',
                                                                'escape'   => false
                                                            ]); ?>
                                                        <?= $this->Html->link('<i class="fa fa-group">Ver Turma</i>',
                                                            [
                                                                'controller' => 'turmas',
                                                                'action'     => 'ver_turma',
                                                                $inscricao['Turma']['id'],
                                                            ], [
                                                                'role'     => 'menuitem',
                                                                'tabindex' => '-1',
                                                                'escape'   => false
                                                            ]); ?>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            <?php
                            endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table id="sample-table-1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th><?php echo __('Disciplina') ?></th>
                            <th><?php echo __('Ano') ?></th>
                            <th><?php echo __('Semestre') ?></th>
                            <th><?php echo __('Ano Lectivo') ?></th>
                            <th><?php echo __('Nota Final') ?></th>
                            <th><?php echo __('Accoes') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            foreach ($cadeirasFeitas as $inscricao):
                                $class = ' class="first"';
                                if ($i++ % 2 == 0) {
                                    $class = ' class="even"';
                                }
                                ?>
                                <tr<?php echo $class; ?>>
                                    <td><?php echo $inscricao['Turma']['Disciplina']['name'] ?>&nbsp;</td>
                                    <td><?php echo $inscricao['Turma']['ano_curricular']; ?>&nbsp;</td>
                                    <td><?php echo $inscricao['Turma']['semestre_curricular']; ?>&nbsp;</td>
                                    <td><?php echo $inscricao['Turma']['AnoLectivo']['ano']; ?>&nbsp;</td>
                                    <td><?php echo $inscricao['Inscricao']['nota_final']; ?>&nbsp;</td>
                                    <td class="center" width="100px">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">

                                            <?= $this->Html->link('<i class="fa fa-eye"></i>',
                                                [
                                                    'controller' => 'inscricaos',
                                                    'action'     => 'ver_detalhes_inscricao',
                                                    $inscricao['Inscricao']['id']
                                                ], [
                                                    'class'               => 'btn btn-xs btn-green tooltips',
                                                    'data-placement'      => 'top',
                                                    'data-original-title' => 'Ver Detalhes',
                                                    'escape'              => false
                                                ]); ?>

                                            <?= $this->Html->link('<i class="fa fa-group"></i>',
                                                [
                                                    'controller' => 'turmas',
                                                    'action'     => 'ver_turma',
                                                    $inscricao['Turma']['id'],
                                                ], [
                                                    'class'               => 'btn btn-xs btn-green tooltips',
                                                    'data-placement'      => 'top',
                                                    'data-original-title' => 'Ver Turma',
                                                    'escape'              => false
                                                ]); ?>

                                        </div>
                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="btn-group">
                                                <a class="btn btn-primary dropdown-toggle btn-sm"
                                                   data-toggle="dropdown" href="#">
                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                </a>
                                                <ul role="menu" class="dropdown-menu pull-right">
                                                    <li role="presentation">
                                                        <?= $this->Html->link('<i class="fa fa-eye">Ver Detalhes</i>',
                                                            [
                                                                'controller' => 'inscricaos',
                                                                'action'     => 'ver_detalhes_inscricao',
                                                                $inscricao['Inscricao']['id']
                                                            ], [
                                                                'role'     => 'menuitem',
                                                                'tabindex' => '-1',
                                                                'escape'   => false
                                                            ]); ?>
                                                        <?= $this->Html->link('<i class="fa fa-group">Ver Turma</i>',
                                                            [
                                                                'controller' => 'turmas',
                                                                'action'     => 'ver_turma',
                                                                $inscricao['Turma']['id'],
                                                            ], [
                                                                'role'     => 'menuitem',
                                                                'tabindex' => '-1',
                                                                'escape'   => false
                                                            ]); ?>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            <?php
                            endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo __('Cadeiras Por Fazer') ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="sample-table-1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th><?php echo __('Disciplina') ?></th>
                            <th><?php echo __('Ano Curricular') ?></th>
                            <th><?php echo __('Semestre Curricular') ?></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                            $i = 0;
                            foreach ($cadeirasPendentes as $inscricao):
                                $class = ' class="first"';
                                if ($i++ % 2 == 0) {
                                    $class = ' class="even"';
                                }
                                ?>
                                <tr<?php echo $class; ?>>


                                    <td><?php echo $inscricao['Disciplina']['name'] ?>&nbsp;</td>
                                    <td><?php echo $inscricao['DisciplinaPlanoEstudo']['ano_curricular']; ?>&nbsp;</td>
                                    <td><?php echo $inscricao['DisciplinaPlanoEstudo']['semestre_curricular']; ?>
                                        &nbsp;</td>

                                </tr>

                            <?php
                            endforeach;
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>