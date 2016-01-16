<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
if (!class_exists('PHPExcel'))
    throw new CakeException('Vendor class PHPExcel not found!');

//die(debug($aluno));
$this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'print_lista_graduandos.xlsx');

$this->PhpExcel->xls->getActiveSheet()->setCellValue('A1', Configure::read('OpenSGA.instituicao.nome'));
//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A2', $inscricaos[0]['Turma']['Curso']['UnidadeOrganica']['name']);
//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A3', $inscricaos[0]['Turma']['Disciplina']['name']);
//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A4', "Ano Lectivo: ".$inscricaos[0]['Turma']['AnoLectivo']['ano'].". Semestre:".$inscricaos[0]['Turma']['semestrecurricular']);
//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A6', "LISTA DE ESTUDANTES INSCRITOS");
//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A8', "Docente:");

$linha_actual = 10;
$i=1;
foreach($alunos as $candidato){
    
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual, $i);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('B'.$linha_actual, $candidato['Aluno']['codigo']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('C'.$linha_actual, $candidato['Entidade']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('D'.$linha_actual, $candidato['Entidade']['Genero']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('E'.$linha_actual, $candidato['Curso']['UnidadeOrganica']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('F'.$linha_actual, $candidato['Curso']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('G'.$linha_actual, $candidato['Entidade']['data_nascimento']);
    $linha_actual++;
    $i++;
}

/**
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C7', $aluno['Entidade']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('D8', $aluno['Curso']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('B9', $aluno['Aluno']['created']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('G9', $aluno['Aluno']['ano_ingresso']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('D12', $aluno['Aluno']['codigo']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('C13', $aluno['User']['username']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A24', $this->Session->read('Auth.User.name'));
$this->PhpExcel->xls->getActiveSheet()->setCellValue('G24', date('d-m-Y'));



$this->PhpExcel->xls->getActiveSheet()->setCellValue('C34', $aluno['Entidade']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('D35', $aluno['Curso']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('B36', $aluno['Aluno']['created']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('G36', $aluno['Aluno']['ano_ingresso']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('D39', $aluno['Aluno']['codigo']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('D40', $aluno['User']['username']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A43', $this->Session->read('Auth.User.name'));
$this->PhpExcel->xls->getActiveSheet()->setCellValue('G43', date('d-m-Y'));

*/

$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A2', 10, 108, 115); //Logotipo


$this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Lista de Estudantes');
$this->PhpExcel->xls->getActiveSheet()->setShowGridlines(false);


$this->PhpExcel->xls->getSecurity()->setLockWindows(true);
$this->PhpExcel->xls->getSecurity()->setLockStructure(true);
$this->PhpExcel->xls->getSecurity()->setWorkbookPassword(Configure::read('OpenSGA.password'));


$this->PhpExcel->xls->getActiveSheet()->getProtection()->setPassword(Configure::read('OpenSGA.password'));
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setSort(true);
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setObjects(true);
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setInsertRows(true);
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setFormatCells(true);

$this->PhpExcel->output('exportar_alunos_excel.xlsx');
