<?php
    $this->extend('/Common/Turmas/index');
    $grupo = $this->Session->read('Auth.User.group_id');
    $username = $this->Session->read('Auth.User.username');

    $this->Html->addCrumb('Disciplinas', '/disciplinas');
    $this->Html->addCrumb('Lista de Disciplinas', '/disciplinas/add');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>