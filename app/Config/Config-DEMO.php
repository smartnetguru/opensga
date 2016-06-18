<?php

/**
 * Configurações Básicas do OpenSGA. Melhor colocar num ficheiro do que na Base de Dados ;)
 */

/**
 *Ano Lectivo Corrente
 */
$config = [];

$config['OpenSGA']['site']['url'] = 'http://localhost/opensga';
$config['OpenSGA']['instituicao']['sigla'] = 'demo';
$config['OpenSGA']['instituicao']['nome'] = 'OpenSGA Demo';
$config['OpenSGA']['ano_lectivo_id'] = 1;
$config['OpenSGA']['ano_lectivo'] = 2012;
$config['OpenSGA']['semestre_lectivo_id'] = 2;
$config['OpenSGA']['semestre_lectivo'] = 2;

$config['OpenSGA']['PlanoEstudo']['formato'] = 'eseg';

$config['OpenSGA']['save_path'] = '/home/backstageel/SIGAFiles';
$config['OpenSGA']['gdata']['admin']['password'] = '';
$config['OpenSGA']['gdata']['admin']['email'] = 'elisio.leonardo@uem.ac.mz';
$config['OpenSGA']['gdata']['client'] = 'uem.ac.mz';

/**
 *Modulos Activos
 */
$config['OpenSGA']['modulos']['disciplinas'] = 1;
$config['OpenSGA']['modulos']['plano_estudos'] = 1;
$config['OpenSGA']['modulos']['faculdades'] = 0;
$config['OpenSGA']['modulos']['departamentos'] = 0;
$config['OpenSGA']['modulos']['seccoes'] = 0;
$config['OpenSGA']['modulos']['sala_aulas'] = 0;
$config['OpenSGA']['modulos']['e-sade'] = 0;

/**
 *Configuracoes do Modulo de Matriculas
 */
$config['OpenSGA']['matriculas']['regimes'] = 2;

?>
