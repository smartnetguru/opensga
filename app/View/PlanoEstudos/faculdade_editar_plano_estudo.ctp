<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Plano de Estudos', '/faculdade/plano_estudos');
    $this->Html->addCrumb('Adicionar Plano de Estudos', '#');
    $this->extend('/Common/PlanoEstudos/editar_plano_estudo');

?>