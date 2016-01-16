<?php
$this->BreadCumbs->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
$this->BreadCumbs->addCrumb('Disciplinas', '/faculdade/disciplinas');
$this->BreadCumbs->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/Disciplinas/adicionar_disciplina'); ?>
