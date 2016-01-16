<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
if (!class_exists('PHPExcel'))
	throw new CakeException('Vendor class PHPExcel not found!');

//die(debug($aluno));
$this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'Matriculas' . DS . 'print_comprovativo_renovacao_matricula.xlsx');


if ($aluno['Matricula']['tipo_matricula_id'] == 3) {
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('A5', 'Comprovativo de Reingresso');
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('A32', 'Comprovativo de Reingresso');
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('A8', 'Reingressou no curso de');
	$this->PhpExcel->xls->getActiveSheet()->setCellValue('A35', 'Reingressou no curso de');
}
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C7', $aluno['Aluno']['Entidade']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('E8', $aluno['Curso']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('B9', $aluno['Matricula']['data']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('G9', $aluno['AnoLectivo']['ano']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('D12', $aluno['Aluno']['codigo']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('C13', $aluno['Aluno']['User']['username']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A24', $aluno['User']['Entidade']['name']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('G24', date('d-m-Y'));



$this->PhpExcel->xls->getActiveSheet()->setCellValue('C34', $aluno['Aluno']['Entidade']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('E35', $aluno['Curso']['name']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('B36', $aluno['Matricula']['data']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('G36', $aluno['AnoLectivo']['ano']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('D39', $aluno['Aluno']['codigo']);

$this->PhpExcel->xls->getActiveSheet()->setCellValue('C40', $aluno['Aluno']['User']['username']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A43', $aluno['User']['Entidade']['name']);
$this->PhpExcel->xls->getActiveSheet()->setCellValue('G43', date('d-m-Y'));


/* if($has_foto_entidade){
  $this->PhpExcel->addImage(APP.'Assets'.DS.'Fotos'.DS.'Estudantes'.DS.$aluno['Aluno']['codigo'].'.JPG','N1',5,180,175); //Fotografia
  } else{
  $this->PhpExcel->addImage(WWW_ROOT.'img'.DS.'default_profile_picture.jpg','N1',5,180,175); //Fotografia
  }
 *
 */
$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A2', 10, 108, 115); //Logotipo
$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A29', 10, 108, 115); //Logotipo
//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A7', Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao

$this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Ficha Cadastro');
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

$this->PhpExcel->output('comprovativo_matricula_' . $aluno['Aluno']['codigo'] . '.xlsx');
