<?php

    App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
    if (!class_exists('PHPExcel')) {
        throw new CakeException('Vendor class PHPExcel not found!');
    }

//die(debug($aluno));
    $this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'print_comprovativo_mudanca_curso.xlsx');


    $this->PhpExcel->xls->getActiveSheet()->setCellValue('E5', $mudanca['CursoNovo']['UnidadeOrganica']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('G7', $mudanca['Aluno']['codigo']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('E9', $mudanca['Aluno']['Entidade']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('C11', $mudanca['MudancaCurso']['id']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('A17', $mudanca['Aluno']['Entidade']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('D18', $mudanca['Aluno']['codigo']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('D19', $mudanca['CursoAntigo']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('C20', $mudanca['CursoNovo']['name']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('B22', $mudanca['MudancaCurso']['data_mudanca']);
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('A29', $funcionario['Entidade']['name']);

    /* if($has_foto_entidade){
      $this->PhpExcel->addImage(APP.'Assets'.DS.'Fotos'.DS.'Estudantes'.DS.$aluno['Aluno']['codigo'].'.JPG','N1',5,180,175); //Fotografia
      } else{
      $this->PhpExcel->addImage(WWW_ROOT.'img'.DS.'default_profile_picture.jpg','N1',5,180,175); //Fotografia
      }
     *
     */
    $this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png',
        'A2', 10, 108, 115); //Logotipo

//$this->PhpExcel->xls->getActiveSheet()->setCellValue('A7', Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao

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
