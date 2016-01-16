<?php
$this->extend('/Common/Inscricaos/ver_detalhes_inscricao');
$this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
$this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
$this->Html->addCrumb('Adicionar Disciplina', '#');
?>
