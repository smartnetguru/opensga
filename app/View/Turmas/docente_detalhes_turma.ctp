<?php
    /**
     * Pagina de detalhes da turma
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link          http://infomoz.net/opensga OpenSGA-Sistema de Gestao Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.turmas
     * @version       OpenSGA v 0.5.0
     * @since         OpenSGA v 0.1.0
     *
     */

    $this->Html->addCrumb('Turmas', '/turmas');
    $this->Html->addCrumb($turma['Turma']['name'], '/turmas/view/' . $turma['Turma']['id']);
?>


<div class="container_12">


    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "Imprimir Lista de Estudantes",
                                ['controller' => 'turmas', 'action' => 'lista_estudantes', $turma['Turma']['id']],
                                ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "Criar Nova Avaliação",
                                ['controller' => 'TurmaTipoAvaliacaos', 'action' => 'add', $turma['Turma']['id']],
                                ['escape' => false]) ?>

                    </li>
                    <li>
                        <?php echo $this->Form->postLink($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "Solicitar Fecho da Turma",
                                ['controller' => 'turmas', 'action' => 'fechar_turma', $turma['Turma']['id']],
                                ['escape' => false]) ?>

                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1>Dados da Turma</h1><span></span>
            </div>
            <form id="validate-form" class="block-content form" action="" method="post">
                <div class="_50">
                    <p>
                        <label for="textfield">Nome da Turma</label>
                        <span class="data-data"><?php echo $turma['Turma']['name'] ?></span>
                    </p>
                </div>
                <div class="_25">
                    <p>
                        <label for="textfield">Turno</label>
                        <span class="data-data"><?php echo $turma['Turno']['name'] ?></span>
                    </p>
                </div>
                <div class="_25">
                    <p>
                        <label for="textfield">Limite de Estudantes</label>
                        <span class="data-data"><?php echo $turma['Turma']['nummaximo'] ?></span>
                    </p>
                </div>
                <div class="_30">
                    <p>
                        <label for="textfield">Plano de Estudos</label>
                        <span class="data-data"><?php echo $turma['PlanoEstudo']['name'] ?></span>
                    </p>
                </div>
                <div class="_30">
                    <p>
                        <label for="textfield">Ano Lectivo</label>
                        <span class="data-data"><?php echo $turma['AnoLectivo']['ano'] ?></span>
                    </p>
                </div>
                <div class="_30">
                    <p>
                        <label for="textfield">Estado da Turma</label>
                        <span class="data-data"><?php echo $turma['EstadoTurma']['name'] ?></span>
                    </p>
                </div>
                <div class="clear"></div>
                <div class="_25">
                    <p>
                        <label for="textfield">Ano Curricular</label>
                        <span class="data-data"><?php echo $turma['Turma']['ano_curricular'] ?></span>
                    </p>
                </div>
                <div class="_25">
                    <p>
                        <label for="textfield">SemestreCurricular</label>
                        <span class="data-data"><?php echo $turma['Turma']['semestre_curricular'] ?></span>
                    </p>
                </div>
                <div class="_25">
                    <p>
                        <label for="textfield">Nome do Docente</label>
                        <span class="data-data"><?php echo $turma['Docente']['Entidade']['name'] ?></span>
                    </p>
                </div>
                <div class="_25">
                    <p>
                        <label for="textfield">Nome do Assistente</label>
                        <span class="data-data"><?php echo $turma['Assistente']['Entidade']['name'] ?></span>
                    </p>
                </div>
                <div class="clear"></div>

            </form>
        </div>
    </div>
    <div class="grid_12">
        <div class="block-border" id="tab-panel-1">
            <div class="block-header">
                <h1>Detalhes Adicionais</h1>
                <ul class="tabs">
                    <li><a href="#tab-1">Docencia</a></li>
                    <li><a href="#tab-2">Avaliações</a></li>
                    <li><a href="#tab-3">Estudantes</a></li>
                    <li><a href="#tab-4">Outros</a></li>
                </ul>
            </div>
            <div class="block-content tab-container">
                <div id="tab-1" class="tab-content form">
                    <fieldset>
                        <legend>Dados de Docencia</legend>

                        <div class="_50">
                            <p><label for="textfield">Nome do Docente</label>
                                <span class="data-data"><?php echo $turma['Docente']['Entidade']['name']; ?>
                        </div>
                        <div class="_50">
                            <p><label for="textfield">Nome do Assistente</label>
                                <span class="data-data"><?php echo $turma['Assistente']['Entidade']['name']; ?>
                        </div>

                    </fieldset>
                </div>
                <div id="tab-2" class="tab-content">
                    <fieldset>
                        <div class="grid_12">
                            <div class="block-border">
                                <div class="block-header">
                                    <h1>Avaliações Agendadas</h1><span></span>
                                </div>
                                <div class="block-content">

                                    <table id="table-ia" class="table">
                                        <thead>
                                        <tr>
                                            <th>Avaliação</th>
                                            <th>Data</th>
                                            <th>Acções</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i = 0;
                                            foreach ($TurmaTipoAvaliacaos as $TurmaTipoAvaliacao):
                                                $class = "first";
                                                if ($i++ % 2 == 0) {
                                                    $class = ' class="even"';
                                                }
                                                ?>
                                                <tr<?php echo $class; ?>>
                                                    <td><?php echo $this->Html->link($TurmaTipoAvaliacao['TipoAvaliacao']['name'] . "  #" . $TurmaTipoAvaliacao['TurmaTipoAvaliacao']['ordem'],
                                                                [
                                                                        'controller' => 'TurmaTipoAvaliacaos',
                                                                        'action'     => 'view',
                                                                        $TurmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
                                                                ]); ?>&nbsp;</td>

                                                    <td><?php echo $TurmaTipoAvaliacao['TurmaTipoAvaliacao']['data']; ?>
                                                        &nbsp;</td>
                                                    <td class="accoes">
                                                        <?php echo $this->Html->image("/img/login-icon.gif", [
                                                                "alt"   => "Brownies",
                                                                "title" => "Visualizar",
                                                                'url'   => [
                                                                        'controller' => 'avaliacaos',
                                                                        'action'     => 'view',
                                                                        $TurmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
                                                                ],
                                                        ]); ?>
                                                        <?php echo $this->Html->image("/img/edit-icon.gif", [
                                                                "alt"   => "Brownies",
                                                                "title" => "Editar",
                                                                'url'   => [
                                                                        'controller' => 'avaliacaos',
                                                                        'action'     => 'edit',
                                                                        $TurmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
                                                                ],
                                                        ]); ?>
                                                        <?php echo $this->Html->image("/img/hr.gif", [
                                                                "alt"   => "Brownies",
                                                                "title" => "Eliminar",
                                                                'url'   => [
                                                                        'controller' => 'avaliacaos',
                                                                        'action'     => 'delete',
                                                                        $TurmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
                                                                ],
                                                                null,
                                                                sprintf(__('Tem a certeza que deseja eliminar # %s?',
                                                                        true),
                                                                        $TurmaTipoAvaliacao['TurmaTipoAvaliacao']['id']),
                                                        ]); ?>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </fieldset>
                </div>

                <div id="tab-3" class="tab-content">
                    <fieldset>

                        <div class="grid_12">
                            <div class="block-border">
                                <div class="block-header">
                                    <h1>Alunos Inscritos</h1><span></span>
                                </div>
                                <div class="block-content">

                                    <table id="table-ia" class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Codigo</th>
                                            <th>Apelido</th>
                                            <th>Nome</th>
                                            <th>Estado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i = 0;
                                            foreach ($inscricaos as $inscricao):
                                                $class = "first";
                                                if ($i++ % 2 == 0) {
                                                    $class = ' class="even"';
                                                }
                                                ?>
                                                <tr<?php echo $class; ?>>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $inscricao['Matricula']['Aluno']['codigo']; ?>
                                                        &nbsp;</td>
                                                    <td><?php echo $inscricao['Matricula']['Aluno']['Entidade']['apelido']; ?>
                                                        &nbsp;</td>
                                                    <td><?php echo $inscricao['Matricula']['Aluno']['Entidade']['name']; ?>
                                                        &nbsp;</td>
                                                    <td><?php echo $inscricao['Estadoinscricao']['name']; ?>&nbsp;</td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div id="tab-4" class="tab-content">
                    <div class="clear height-fix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
/*
* Tabs
*/

$("#tab-panel-1").createTabs();

$('#table-ia').dataTable();
<?php $this->Html->scriptEnd(); ?>
