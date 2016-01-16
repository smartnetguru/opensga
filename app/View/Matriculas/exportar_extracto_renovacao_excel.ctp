<?php

    App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
    if (!class_exists('PHPExcel'))
        throw new CakeException('Vendor class PHPExcel not found!');

//die(debug($aluno));
    $this->PhpExcel->createWorksheet();

    $worksheet = $this->PhpExcel->xls->getActiveSheet();

    $worksheet->setCellValue('A1', 'Ordem');
    $worksheet->setCellValue('A1', 'Numero de Estudante');
    $worksheet->setCellValue('A1', 'Nome Completo');
    $worksheet->setCellValue('A1', 'Data de Deposito');
    $worksheet->setCellValue('A1', 'Data de Confirmação');
    $worksheet->setCellValue('A1', 'Valor Pago');
    $worksheet->setCellValue('A1', 'Ordem');



    $this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'));
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

    $this->PhpExcel->output('comprovativo_mudanca_curso_' . $mudanca['Aluno']['codigo'] . '.xlsx');
