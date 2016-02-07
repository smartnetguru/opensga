<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Estudantes Matriculados por Curso"),
    ['controller' => 'candidaturas', 'action' => 'estudantes_matriculados_curso_ano'],
    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>