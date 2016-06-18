<?php
App::uses('CakeEventManager', 'Event');


App::uses('AlunoEstadoListener', 'Event');
App::uses('EntidadeContacto', 'Event');
App::uses('EntidadeIdentificacao', 'Event');

$EntidadeContacto = ClassRegistry::init('EntidadeContacto');
$EntidadeIdentificacao = ClassRegistry::init('EntidadeIdentificacao');

$notifications = new AlunoEstadoListener();
CakeEventManager::instance()->attach($notifications);

?>