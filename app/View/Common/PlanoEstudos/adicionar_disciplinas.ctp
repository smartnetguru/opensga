<?php
    echo $this->Html->css('/assets/plugins/bootstrap3-editable/css/bootstrap-editable.css');

    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->set('form-title', 'Dados do Plano de estudo'); ?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('PlanoEstudo',
        ['role' => 'form', 'class' => '', 'inputDefaults' => ['disabled' => true]]); ?>
    <div class="form-group">
        <label>
            <?php echo __('Nome do Plano de Estudos') ?>
        </label>
        <?php echo $this->Form->input('name', ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Curso') ?>
        </label>

        <div>
            <?php echo $this->Form->input('curso_id', [
                    'type'  => 'text',
                    'value' => $this->request->data['Curso']['name'],
                    'label' => false,
                    'div'   => false,
                    'class' => 'form-control',
            ]); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Duracao(Anos)') ?>
        </label>

        <div>
            <?php echo $this->Form->input('duracao', ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Semestres por ano') ?>
        </label>

        <div>
            <?php echo $this->Form->input('semestres_ano',
                    ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Ano de Criacao'); ?>
        </label>

        <div>
            <?php echo $this->Form->input('ano_criacao', [
                    'type'  => 'text',
                    'value' => $this->request->data['PlanoEstudo']['ano_criacao'],
                    'label' => false,
                    'div'   => false,
                    'class' => 'form-control',
            ]); ?>
        </div>
    </div>
    <div class="form-group">
        <label>
            <?php echo __('Total de Creditos'); ?>
        </label>

        <div>
            <?php echo $this->Form->input('total_creditos', [
                    'type'  => 'text',
                    'value' => $this->request->data['PlanoEstudo']['total_creditos'],
                    'label' => false,
                    'div'   => false,
                    'class' => 'form-control',
            ]); ?>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-2 col-sm-offset-8">
            <?php echo $this->Form->end(); ?>

        </div>


    </div>

<?php $this->end(); ?>

<?php $this->start('right-panel') ?>
    <div class="col-sm-6">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Adicionar Disciplinas ao Plano de Estudos
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('DisciplinaPlanoEstudo', [
                        'url'           => [
                                'controller' => 'plano_estudos',
                                'action'     => 'adicionar_disciplinas',
                                $planoId,
                        ],
                        'role'          => 'form',
                        'class'         => '',
                        'inputDefaults' => [],
                ]); ?>
                <div class="form-group">
                    <label>
                        <?php echo __('Nome da Disciplina') ?>
                    </label>

                    <div>
                        <?php echo $this->Form->input('disciplina_id',
                                ['label' => false, 'div' => false, 'class' => 'form-control search-select']); ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">

                        <label>
                            <?php echo __('Ano Curricular') ?>
                        </label>
                        <?php echo $this->Form->input('ano_curricular',
                                ['options' => $anos, 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">

                        <label>
                            <?php echo __('Semestre Curricular') ?>
                        </label>
                        <?php echo $this->Form->input('semestre_curricular',
                                [
                                        'options' => $semestres,
                                        'label'   => false,
                                        'div'     => false,
                                        'class'   => 'form-control',
                                ]); ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">

                        <label>
                            <?php echo __('Carga Horaria Teorica') ?>
                        </label>
                        <?php echo $this->Form->input('carga_horaria_teoricas',
                                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">

                        <label>
                            <?php echo __('Carga Horaria Pratica') ?>
                        </label>
                        <?php echo $this->Form->input('carga_horaria_praticas',
                                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">

                        <label>
                            <?php echo __('Horas de Estudo Individual') ?>
                        </label>
                        <?php echo $this->Form->input('horas_individual',
                                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">

                        <label>
                            <?php echo __('Horas de Estudo com o Docente') ?>
                        </label>
                        <?php echo $this->Form->input('horas_docente',
                                ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">

                    <label>
                        <?php echo __('Creditos') ?>
                    </label>
                    <?php echo $this->Form->input('creditos',
                            ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                                ['class' => 'btn btn-light-grey btn-block']) ?>


                    </div>
                    <div class="col-sm-2 col-sm-offset-8">
                        <?php echo $this->Form->end([
                                'label' => __('GRAVAR', true),
                                'class' => 'btn btn-blue btn-block',
                        ]); ?>

                    </div>


                </div>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
<?php $this->end(); ?>

    <div class="row">
        <!-- start: RESPONSIVE TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Disciplinas Adicionadas
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                    </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-expand" href="#">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="sample-table-1">
                        <thead>
                        <tr>
                            <th><?php echo 'Codigo'; ?></th>
                            <th><?php echo 'Nome da Disciplina'; ?></th>
                            <th><?php echo 'Ano'; ?></th>
                            <th><?php echo 'Sem.'; ?></th>
                            <th><?php echo 'Teoria'; ?></th>
                            <th><?php echo 'Pratica'; ?></th>
                            <th><?php echo 'Creditos'; ?></th>
                            <th><?php echo 'Precedencias'; ?></th>
                            <th><?php echo 'Opcoes' ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            foreach ($disciplinasAdicionadas as $disciplina):
                                $class = "odd";
                                if ($i % 2 == 0) {
                                    $class = "even";
                                }
                                $i++;
                                ?>
                                <tr class="<?php echo $class ?>">

                                    <td><?php echo $disciplina['Disciplina']['codigo']; ?>&nbsp;</td>
                                    <td nowrap="true"><?php echo $disciplina['Disciplina']['name']; ?>&nbsp;</td>
                                    <td><?php echo $disciplina['DisciplinaPlanoEstudo']['ano_curricular']; ?>&nbsp;</td>
                                    <td><?php echo $disciplina['DisciplinaPlanoEstudo']['semestre_curricular']; ?>
                                        &nbsp;</td>
                                    <td><?php echo $disciplina['DisciplinaPlanoEstudo']['carga_horaria_teoricas']; ?>
                                        &nbsp;</td>
                                    <td><?php echo $disciplina['DisciplinaPlanoEstudo']['carga_horaria_praticas']; ?>
                                        &nbsp;</td>
                                    <td><?php $disciplina['DisciplinaPlanoEstudo']['creditos']; ?>&nbsp;</td>
                                    <td>
                                        <?php
                                            foreach ($disciplina['Precedencia'] as $precedencia) {
                                                echo $this->Html->para('',
                                                        $precedencia['DisciplinaPrecedente']['name'] . '(' . $precedencia['TipoPrecedencia']['name'] . ')');
                                            }
                                            echo $this->Html->link('Adicionar Mais Precedencias', [
                                                    'action' => 'adicionar_precedencias',
                                                    $planoId,
                                                    $disciplina['Disciplina']['id'],
                                            ]);
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link('<i class="fa fa-edit"></i>Editar',
                                                [
                                                        'controller' => 'plano_estudos',
                                                        'action'     => 'editar_disciplina',
                                                        $disciplina['DisciplinaPlanoEstudo']['id'],
                                                ],
                                                ['escape' => false, 'class' => '']) ?>
                                        |
                                        <?php echo $this->Form->postLink('<i class="fa fa-remove"></i>	Remover',
                                                [
                                                        'controller' => 'plano_estudos',
                                                        'action'     => 'remover_disciplina',
                                                        $disciplina['DisciplinaPlanoEstudo']['id'],
                                                ],
                                                [
                                                        'escape'  => false,
                                                        'class'   => '',
                                                        'confirm' => 'Tem certeza que pretende remover a disciplina: ' . $disciplina['Disciplina']['name'] . '?',
                                                ]) ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end: RESPONSIVE TABLE PANEL -->
    </div>

<?php
    echo $this->Html->script('/assets/plugins/bootstrap3-editable/js/bootstrap-editable.js',
            ['block' => 'scriptBottom']);

?>
<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
    $(document).ready(function() {
    $('#username').editable();
    $('.creditos').editable();

    });
<?php $this->Html->scriptEnd(); ?>