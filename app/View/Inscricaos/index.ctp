<?php
    $this->extend('/Common/Inscricaos/index');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Inscricao', [
        'role'          => 'form',
        'type'          => 'get',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
<div class="row">
    <div class="form-group">
        <div class="col-md-2">
            <?php echo $this->Form->input('Inscricao.faculdade_id', [
                    'options'  => $faculdades,
                    'label'    => false,
                    'div'      => false,
                    'required' => false,
                    'class'    => 'form-control search-select',
                    'empty'    => 'Faculdade',
            ]); ?>
        </div>
        <div class="col-md-2">
            <?php echo $this->Form->input('Inscricao.curso_id', [
                    'options'  => $cursos,
                    'label'    => false,
                    'div'      => false,
                    'required' => false,
                    'class'    => 'form-control search-select',
                    'empty'    => 'Curso',
            ]); ?>
        </div>
        <div class="col-md-2">
            <?php echo $this->Form->input('Inscricao.turma_id', [
                    'options'  => $turmas,
                    'label'    => false,
                    'div'      => false,
                    'required' => false,
                    'class'    => 'form-control',
                    'empty'    => 'Ou Turma',
                    'id'       => 'turmaId',
            ]); ?>
        </div>
        <div class="col-md-2">
            <?php echo $this->Form->input('Inscricao.estado_inscricao_id', [
                    'options'  => $estadoInscricaos,
                    'label'    => false,
                    'div'      => false,
                    'required' => false,
                    'class'    => 'form-control search-select',
                    'empty'    => 'Estado da Inscricao',
            ]); ?>
        </div>
        <div class="col-md-2">
            <?php echo $this->Form->input('Inscricao.numero_estudante', [
                    'label'       => false,
                    'div'         => false,
                    'required'    => false,
                    'class'       => 'form-control',
                    'placeholder' => 'Ou Numero de Estudante',
            ]); ?>
        </div>
        <div class="col-md-2">
            <?php echo $this->Form->end([
                    'label' => __('Pesquisar', true),
                    'class' => 'btn btn-blue next-step btn-block',
            ]); ?>
        </div>
    </div>
</div>


<?php $this->end() ?>
<script>
    <?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>

    $("#turmaId").select2({
        minimumInputLength: 2,
        tags: [],
        'theme': 'bootstrap',
        ajax: {
            url: '<?php echo $this->Html->url(['controller' => 'turmas', 'action' => 'autocomplete'])?>',
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
                        return {id: obj.id, text: obj.name};
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
    </
    scrip >
