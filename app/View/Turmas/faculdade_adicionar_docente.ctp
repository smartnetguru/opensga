<?php
    $this->BreadCumbs->addCrumb('Turmas', '/turmas');
    $this->BreadCumbs->addCrumb($turma['Turma']['name'], '/turmas/ver_turma/' . $turma['Turma']['id']);
    $this->BreadCumbs->addCrumb(__('Adicionar Docente'), '#');


?>

<?php echo $this->Form->create('DocenteTurma', [
        'role'          => "form",
        'novalidade'    => 'novalidate',
        'enctype'       => 'multipart/form-data',
        'class'         => 'smart-wizard form-horizontal',
        'id'            => 'form',
        'inputDefaults' => ['empty' => 'Seleccione', 'data-placeholder' => 'Seleccione'],
]); ?>
<div class="row">
    <div class="col-sm-6">
        <!-- start: TEXT AREA PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Informacoes da Turma
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-condensed table-hover">
                    <tbody>
                    <tr>
                        <td><?php echo __('Nome do Curso') ?></td>
                        <td><?php echo h($turma['Curso']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Nome da Disciplina') ?></td>
                        <td><?php echo h($turma['Disciplina']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Ano Curricular') ?></td>
                        <td><?php echo h($turma['Turma']['ano_curricular']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Semestre Curricular') ?></td>
                        <td><?php echo h($turma['Turma']['semestre_curricular']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Ano Lectivo') ?></td>
                        <td><?php echo h($turma['AnoLectivo']['ano']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Semestre Lectivo') ?></td>
                        <td><?php echo h($turma['SemestreLectivo']['semestre']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Total de Alunos') ?></td>
                        <td><?php echo h($turma['Turma']['total_alunos']) ?></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <?php echo $this->Html->link('<i class="fa fa-plus"></i>Ver Turma',
                            ['controller' => 'turmas', 'action' => 'ver_turma', $turma['Turma']['id']],
                            ['class' => 'btn btn-green', 'escape' => false]) ?>
                </p>

            </div>
        </div>
        <!-- end: TEXT AREA PANEL -->
    </div>

    <div class="col-sm-6">
        <!-- start: TEXT AREA PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Informacoes do Docente
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php echo $this->Form->label('docente_id', 'Nome do Docente'); ?>
                        <?php echo $this->Form->input('docente_id',
                                ['label' => false, 'div' => false, 'class' => 'form-control ajax-select']); ?>
                    </div>
                    <div class="col-sm-12">
                        <?php echo $this->Form->label('tipo_docente_turma_id', 'Tipo de Docente'); ?>
                        <?php echo $this->Form->input('tipo_docente_turma_id',
                                ['label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo']); ?>
                    </div>

                </div>
                <?php echo $this->Form->input('estado_docente_turma_id',
                        ['type' => 'hidden', 'value' => 1, 'label' => false, 'div' => '_30', 'readonly' => true]); ?>
                <?php echo $this->Form->input('turma_id', [
                        'type'     => 'hidden',
                        'value'    => $turmaId,
                        'label'    => false,
                        'div'      => '_30',
                        'readonly' => true,
                ]); ?>
                <div class="form-group">

                    <?php echo $this->Form->end([
                            'label' => __('GRAVAR', true),
                            'class' => 'btn btn-success finish-step btn-block',
                            'div'   => 'col-sm-2 col-sm-offset-8',
                    ]); ?>

                </div>

            </div>
        </div>
        <!-- end: TEXT AREA PANEL -->
    </div>

</div>
<script>
    <?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>

    $(".ajax-select").select2({
        minimumInputLength: 2,
        tags: [],
        'theme': 'bootstrap',
        ajax: {
            url: '<?php echo $this->Html->url(['controller' => 'docentes', 'action' => 'autocomplete'])?>',
            dataType: 'json',
            type: "GET",
            delay: 250,
            quietMillis: 50,
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used

                params.page = params.page || 1;

                return {
                    results: $.map(data, function (obj) {
                        console.dir(obj);
                        return {id: obj.id, text: obj.name + ' - ' + obj.nuit};
                    }),
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true

        }
    });
    <?php $this->Html->scriptEnd(); ?>
</script>
