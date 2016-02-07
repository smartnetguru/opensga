<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Turmas sem Docente<span class="badge badge-danger">' . $totalTurmasSemDocente . ' </span>',
                ['controller' => 'turmas', 'action' => 'manutencao_turmas_sem_docente'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
</div>