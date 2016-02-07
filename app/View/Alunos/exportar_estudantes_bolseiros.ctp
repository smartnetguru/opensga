<?php

    App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
    if (!class_exists('PHPExcel')) {
        throw new CakeException('Vendor class PHPExcel not found!');
    }


    $this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'Bolsas' . DS . 'exportar_estudantes_bolseiros.xlsx');

    $excel = $this->PhpExcel->xls->getActiveSheet();

    $linha_actual = 2;

    foreach ($bolsas as $bolsa) {

        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, $bolsa['BolsaTemporaria']['apelido']);
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linha_actual, $bolsa['BolsaTemporaria']['nomes']);
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual, $bolsa['Curso']['name']);
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual, $bolsa['BolsaTipoBolsa']['name']);

        $linha_actual++;
    }

    $excel->getHeaderFooter()->setOddFooter('&L&D  &RPagina &P de &N');


//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A7', Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao
//$this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Ficha Cadastro');
//$this->PhpExcel->xls->getActiveSheet()->setShowGridlines(false);
//$this->PhpExcel->xls->getSecurity()->setLockWindows(true);
//$this->PhpExcel->xls->getSecurity()->setLockStructure(true);
//$this->PhpExcel->xls->getSecurity()->setWorkbookPassword("PHPExcel");
//$this->PhpExcel->xls->getActiveSheet()->getProtection()->setPassword('bolsa');
//  $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
//  $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSort(true);
//  $this->PhpExcel->xls->getActiveSheet()->getProtection()->setObjects(true);
//  $this->PhpExcel->xls->getActiveSheet()->getProtection()->setInsertRows(true);
//  $this->PhpExcel->xls->getActiveSheet()->getProtection()->setFormatCells(true); 

    $this->PhpExcel->output('Estudantes_bolseiros.xlsx');
