<?php

require_once APP . DS . '..' . DS . 'vendors' . DS . 'PHPWord' . DS . 'PHPWord.php';

if (!class_exists('PHPWord')) {
	throw new CakeException('Vendor class PHPWord not found!');
}

$PHPWord = new PHPWord();

$document = $PHPWord->loadTemplate(APP . 'Reports' . DS . 'Estudantes' . DS . 'declaracao_nivel.docx');

$document->setValue('nome_estudante', $aluno['Entidade']['name']);
$document->setValue('Value2', 'Mercury');
$document->setValue('Value3', 'Venus');
$document->setValue('Value4', 'Earth');
$document->setValue('Value5', 'Mars');
$document->setValue('Value6', 'Jupiter');
$document->setValue('Value7', 'Saturn');
$document->setValue('Value8', 'Uranus');
$document->setValue('Value9', 'Neptun');
$document->setValue('Value10', 'Pluto');



$document->setValue('weekday', date('l'));
$document->setValue('time', date('H:i'));

$document->save(Configure::read('OpenSGA.save_path') . DS . 'Estudantes' . DS . 'declaracao_nivel_' . $aluno['Entidade']['name'] . '.docx');
