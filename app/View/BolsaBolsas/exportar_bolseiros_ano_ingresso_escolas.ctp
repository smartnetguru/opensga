<?php

	set_time_limit(300);
	ini_set('memory_limit', "2048M");
	App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
	if (!class_exists('PHPExcel')) {
		throw new CakeException('Vendor class PHPExcel not found!');
	}

//die(debug($aluno));
	$this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'Bolsas' . DS . 'print_exporta_bolseiros_ano_ingresso.xlsx');

	$excel = $this->PhpExcel->xls->getActiveSheet();
	$linhaActual = 2;
	foreach ($bolsas as $bolsa) {

		$this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linhaActual, 'Cristiano');
		$this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linhaActual, 'teste');
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linhaActual, $bolsa['Candidatura']['nome_curso']);
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linhaActual, $bolsa['BolsaTipoBolsa']['name']);
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linhaActual, 'OE');
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('F' . $linhaActual, $bolsa['Candidatura']['Genero']['name']);
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('G' . $linhaActual, $bolsa['Candidatura']['data_nascimento']);
//	//$this->PhpExcel->xls->getActiveSheet()->setCellValue('H' . $linhaActual, $bolsa['Candidatura']['ProvinciaNascimento']['name']);
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('I' . $linhaActual, $bolsa['Candidatura']['ano_lectivo_admissao']);
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('J' . $linhaActual, '');
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('K' . $linhaActual, $bolsa['Candidatura']['numero_estudante']);
//	$this->PhpExcel->xls->getActiveSheet()->setCellValue('L' . $linhaActual, $bolsa['Candidatura']['telemovel']);
		$linhaActual++;
	}

	$excel->getHeaderFooter()->setOddFooter('&L&D  &RPagina &P de &N');


	/* if($has_foto_entidade){
      $this->PhpExcel->addImage(APP.'Assets'.DS.'Fotos'.DS.'Estudantes'.DS.$aluno['Aluno']['codigo'].'.JPG','N1',5,180,175); //Fotografia
      } else{
      $this->PhpExcel->addImage(WWW_ROOT.'img'.DS.'default_profile_picture.jpg','N1',5,180,175); //Fotografia
      }
     *
     */

//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A7', Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao
//$this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Ficha Cadastro');
//$this->PhpExcel->xls->getActiveSheet()->setShowGridlines(false);
//$this->PhpExcel->xls->getSecurity()->setLockWindows(true);
//$this->PhpExcel->xls->getSecurity()->setLockStructure(true);
//$this->PhpExcel->xls->getSecurity()->setWorkbookPassword("PHPExcel");


	/* $this->PhpExcel->xls->getActiveSheet()->getProtection()->setPassword('PHPExcel');
      $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
      $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSort(true);
      $this->PhpExcel->xls->getActiveSheet()->getProtection()->setObjects(true);
      $this->PhpExcel->xls->getActiveSheet()->getProtection()->setInsertRows(true);
      $this->PhpExcel->xls->getActiveSheet()->getProtection()->setFormatCells(true); */

	$this->PhpExcel->output('despacho_bolsas_.xlsx');
