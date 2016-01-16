<?php
    $this->extend('/Common/PlanoEstudos/index');
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Planos de Estudos', '/faculdade/planoEstudos');
    $this->Html->addCrumb('Lista de Planos de Estudos', '#');
?>
