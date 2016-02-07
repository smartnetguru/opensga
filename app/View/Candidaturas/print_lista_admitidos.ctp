<?php

    App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
    if (!class_exists('PHPExcel')) {
        throw new \CakeException('Vendor class PHPExcel not found!');
    }


//die(debug($aluno));
    $this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'candidatos' . DS . 'print_lista_admitidos.xlsx');

    $ws = $this->PhpExcel->xls->getActiveSheet();
    $linha_actual = 11;
    foreach ($candidatos as $candidato) {

        $dateFrom = new DateTime($candidato['Candidatura']['data_nascimento']);
        $dateTo = new DateTime('today');
        $idade = $dateFrom->diff($dateTo)->y;
        $ws->setCellValue('A' . $linha_actual, $linha_actual - 10);
        $ws->setCellValue('B' . $linha_actual, $candidato['Candidatura']['numero_candidato']);
        $ws->setCellValue('C' . $linha_actual, $candidato['Candidatura']['numero_estudante']);
        $ws->setCellValue('D' . $linha_actual, $candidato['Candidatura']['apelido']);
        $ws->setCellValue('E' . $linha_actual, $candidato['Candidatura']['nomes']);
        $ws->setCellValue('F' . $linha_actual, $candidato['Candidatura']['nome_curso']);
        $ws->setCellValue('G' . $linha_actual, $candidato['Candidatura']['data_nascimento']);
        $ws->setCellValue('H' . $linha_actual, $idade);
        $ws->setCellValue('I' . $linha_actual, $candidato['Genero']['name']);
        $ws->setCellValue('J' . $linha_actual, $candidato['ProvinciaCandidatura']['name']);

        $linha_actual++;
    }


    $ws->getHeaderFooter()->setOddFooter('&L&D  &RPagina &P de &N');

/* @todo rever este file */
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

    $this->PhpExcel->output('candidatos_admitidos_' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
