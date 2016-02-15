<?php

    App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
    if (!class_exists('PHPExcel')) {
        throw new CakeException('Vendor class PHPExcel not found!');
    }

//die(debug($aluno));
    $excel = $this->PhpExcel->createWorksheet();

    $excel = $this->PhpExcel->xls->getActiveSheet();
    $linhaActual = 1;
    $excel->setCellValue('A' . $linhaActual, 'Nome Completo');
        $excel->setCellValue('B' . $linhaActual, 'NUIT');
        $excel->setCellValue('C' . $linhaActual, 'Username');
        $excel->setCellValue('D' . $linhaActual, 'Password');
    $linhaActual++;
    foreach($docentes as $docente){
        $excel->setCellValue('A' . $linhaActual, $docente['Entidade']['name']);
        $excel->setCellValue('B' . $linhaActual, $docente['Entidade']['nuit']);
        $excel->setCellValue('C' . $linhaActual, $docente['Entidade']['User']['username']);
        $excel->setCellValue('D' . $linhaActual, 'siga12345UEM');
        $linhaActual++;

    }

    $this->PhpExcel->xls->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&D  &RPagina &P de &N');


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

    $this->PhpExcel->output('lista_docentes_.xlsx');
