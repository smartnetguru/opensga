<?php $this->extend('/Common/PlanoEstudos/editar_disciplina'); ?>
<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Editar Disciplina', '#');
?>
