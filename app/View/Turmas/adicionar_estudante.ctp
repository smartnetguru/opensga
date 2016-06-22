<?php
$this->BreadCumbs->addCrumb('Turmas', '/turmas');
$this->BreadCumbs->addCrumb($turma['Turma']['name'], '/turmas/ver_turma/' . $turma['Turma']['id']);
$this->BreadCumbs->addCrumb(__('Adicionar Docente'), '#');


?>
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
                <?php echo $this->Form->create('Inscricao',
                    ['role' => 'form', 'class' => '', 'inputDefaults' => []]); ?>
                <?php
                echo $this->Form->input('turma',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Turma',
                        ],
                        'div' => 'form-group',
                        'class' => 'form-control',
                        'id' => 'codigoID',
                        'value' => $turma['Turma']['name'],
                        'disabled' => 'disabled',
                    ]
                );
                echo $this->Form->input('numero_estudante',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Número do Estudante',
                        ],
                        'div' => 'form-group  col-sm-6',
                        'class' => 'form-control',
                        'id' => 'numeroEstudanteId',
                    ]
                );
                echo $this->Form->input('tipo_inscricao_id',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Tipo de Frequencia',
                        ],
                        'div' => 'form-group  col-sm-6',
                        'class' => 'form-control',
                        'id' => 'tipoInscricaoId',
                        'selected' => 1,
                    ]
                );
                echo $this->Html->div('clearfix','');
                echo $this->Form->input('nota_frequencia',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nota de Frequencia',
                        ],
                        'div' => 'form-group col-sm-6',
                        'class' => 'form-control',
                        'id' => 'notaFrequencia',
                        'required' => false,
                    ]
                );
                echo $this->Form->input('nota_exame_normal',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nota de Exame Normal',
                        ],
                        'div' => 'form-group  col-sm-6',
                        'class' => 'form-control',
                        'id' => 'notaExameNormal',
                        'required' => false,
                    ]
                );
                echo $this->Form->input('nota_exame_recorrencia',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nota de Exame de Recorrencia',
                        ],
                        'div' => 'form-group col-sm-6 ',
                        'class' => 'form-control',
                        'id' => 'notaExameRecorrencia',
                        'required' => false,
                    ]
                );
                echo $this->Form->input('nota_exame_especial',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nota de Exame Especial',
                        ],
                        'div' => 'form-group col-sm-6 ',
                        'class' => 'form-control',
                        'id' => 'notaExameEspecial',
                        'required' => false,
                    ]
                );
                echo $this->Form->input('nota_final',
                    [
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nota Final',
                        ],
                        'div' => 'form-group col-sm-12',
                        'class' => 'form-control',
                        'id' => 'notaFinal',
                        'required' => false,
                    ]
                );
                ?>
                <div class="clearfix"></div>
                <!-- Multiple Checkboxes -->
                <div class="form-group">

                    <div class="col-sm-12">
                        <div class="checkbox">
                            <label for="checkboxes-0">
                                <?php echo $this->Form->checkbox('desistiu',
                                    ['value' => '1', 'div' => false, 'label' => false]); ?>
                                Desistiu
                            </label>
                        </div>

                        <div class="checkbox">
                            <label for="checkboxes-1">
                                <?php echo $this->Form->checkbox('anulou',
                                    ['value' => '1', 'div' => false, 'label' => false]); ?>
                                Anulou
                            </label>
                        </div>

                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                            ['class' => 'btn btn-light-grey btn-block']) ?>


                    </div>

                    <div class="col-sm-3 col-sm-offset-6">
                        <?php
                        echo $this->Form->input('turma_id', ['type' => 'hidden', 'value' => $turma['Turma']['id']]);
                        echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']);
                        ?>
                    </div>


                </div>
                <?php $this->end(); ?>


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
