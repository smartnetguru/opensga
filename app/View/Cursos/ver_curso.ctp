<?php
    $this->extend('/Common/Cursos/ver_curso');
    $this->BreadCumbs->addCrumb('Cursos', '/cursos');
    $this->BreadCumbs->addCrumb('Ver Curso', '/cursos/ver_curso/'.$curso['Curso']['id']);
    $this->BreadCumbs->addCrumb($curso['Curso']['name'], '/cursos/ver_curso/'.$curso['Curso']['id']);

    debug($curso);
?>

<?php $this->start('main-actions') ?>
        <div class="row">

            <div class="col-sm-3">
                <?php echo $this->Html->link($this->Html->image('icons/student/edit-student.png') . '<br
                />Definir Encarregado',
                    array('controller' => 'cursos','action' => 'definir_encarregado', $curso['Curso']['id']),
                    array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

            </div>
            <div class="col-sm-3">
                <?php echo $this->Html->link($this->Html->image('icons/student/edit-student.png') . '<br
                />Activar/Desactivar Curso',
                    array('controller' => 'cursos','action' => 'definir_estado_curso', $curso['Curso']['id']),
                    array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

            </div>


        </div>
<?php $this->end(); ?>