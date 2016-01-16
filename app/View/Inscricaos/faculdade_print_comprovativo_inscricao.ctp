<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
if (!class_exists('PHPExcel'))
	throw new CakeException('Vendor class PHPExcel not found!');


$this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'faculdade_print_comprovativo_inscricao.xlsx');


$this->PhpExcel->xls->getActiveSheet()->setCellValue('A1', Configure::read('OpenSGA.instituicao.nome'));
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A2', $inscricoesActivas[0]['Turma']['Curso']['UnidadeOrganica']['name']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A3', $inscricoesActivas[0]['Turma']['Curso']['name']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('B7', $anoLectivo['AnoLectivo']['ano']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('B5', $aluno['Entidade']['name']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H5', $aluno['Aluno']['codigo']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C6', $aluno['Entidade']['User']['username']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('F7', $inscricoesActivas[0]['Turma']['semestre_curricular']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H7', $inscricoesActivas[0]['Inscricao']['data']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('D21', $funcionario['Entidade']['name']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('E45', $funcionario['Entidade']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('E22', $aluno['Entidade']['User']['username']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('E23', $aluno['Aluno']['codigo']);

$linha_actual = 9;
$i = 1;
foreach ($inscricoesActivas as $inscricao) {

	$this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, $inscricao['Turma']['Disciplina']['name']);
	//$this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual, $inscricao['Turma']['Turno']['name']);
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linha_actual, $inscricao['Turma']['ano_curricular']);
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('F' . $linha_actual, $inscricao['Turma']['semestre_curricular']);
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('G' . $linha_actual, $inscricao['Turma']['Disciplina']['DisciplinaPlanoEstudo'][0]['carga_total']);
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('I' . $linha_actual, 'Frequencia');
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual, $inscricao['Turma']['Disciplina']['codigo']);
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('H' . $linha_actual, $inscricao['Turma']['Disciplina']['DisciplinaPlanoEstudo'][0]['creditos']);
	$linha_actual++;
	$i++;
}



$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A1', 10, 108, 115); //Logotipo
$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A26', 10, 108, 115); //Logotipo


$this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Comprovativo de Inscricao');
$this->PhpExcel->xls->getActiveSheet()->setShowGridlines(false);


$this->PhpExcel->xls->getSecurity()->setLockWindows(true);
$this->PhpExcel->xls->getSecurity()->setLockStructure(true);
$this->PhpExcel->xls->getSecurity()->setWorkbookPassword("PHPExcel");


$this->PhpExcel->xls->getActiveSheet()->getProtection()->setPassword('PHPExcel');
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setSort(true);
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setObjects(true);
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setInsertRows(true);
$this->PhpExcel->xls->getActiveSheet()->getProtection()->setFormatCells(true);

$this->PhpExcel->output('comprovativo_inscricao_'.$anoLectivo['AnoLectivo']['ano'].'_' . $aluno['Aluno']['codigo'] . '.xlsx');
