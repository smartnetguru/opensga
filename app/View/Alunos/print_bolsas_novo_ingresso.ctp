<?php

    App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
    if (!class_exists('PHPExcel')) {
        throw new CakeException('Vendor class PHPExcel not found!');
    }

//die(debug($aluno));
    $this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'bolsas_novos_ingressos.xlsx');

    $excel = $this->PhpExcel->xls->getActiveSheet();

    $linha_actual = 1;
    $pagina = 1;
    $linha_uem = 4;
    $linha_dra = 6;
    $linha_titulo = 9;
    $linha_sub = 10;
    $linha_ano = 11;
    $linha_curso = 13;
    $linha_table = 15;
    $linha_assinatura = 2;
    foreach ($bolseiros as $curso => $bolsas) {
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('G' . $linha_actual, 'O Reitor');
        if ($pagina != 1) {
            $excel->mergeCells('G' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('G' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->getStyle('A' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('G' . $linha_actual, '');
        if ($pagina != 1) {
            $excel->mergeCells('G' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('G' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('G' . $linha_assinatura),
                'G' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('G' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('G' . $linha_actual, 'Prof. Doutor Orlando A. Quilambo');
        if ($pagina != 1) {
            $excel->mergeCells('G' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('G' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->getStyle('G' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        //$this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'UNIVERSIDADE EDUARDO MONDLANE');
        if ($pagina != 1) {
            //$excel->mergeCells('A' . $linha_actual . ':G' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_uem),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
            $excel->getRowDimension($linha_actual)->setRowHeight(35);
        }




        $this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png',
            'A' . $linha_actual, 10, 80, 85); //Logotipo
//$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A29', 10, 108, 115); //Logotipo

        $linha_actual++;
        $linha_actual++;

        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'DIRECÇÃO DO REGISTO ACADÉMICO');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':G' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_dra),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;

        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
            'RESULTADOS DE CANDIDATURA À BOLSA DE ESTUDOS');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':I' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_titulo),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'NOVOS INGRESSOS');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':I' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_sub),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'Ano Lectivo de 2016');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':I' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_ano),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        /*  $this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linha_actual, '2015 ');
          if ($pagina != 1) {
              $excel->mergeCells('E' . $linha_actual . ':I' . $linha_actual);
              $excel->getStyle('E' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
              $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('E' . $linha_ano), 'E' . $linha_actual);
              $excel->getStyle('E' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
          }*/
        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, $curso);
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':I' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_curso),
                'A' . $linha_actual . ':I' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'Apelido');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':B' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_table),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual, 'Nomes');
        if ($pagina != 1) {
            $excel->mergeCells('C' . $linha_actual . ':E' . $linha_actual);
            $excel->getStyle('C' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('C' . $linha_table),
                'C' . $linha_actual);
            $excel->getStyle('C' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('F' . $linha_actual, 'Despacho');
        if ($pagina != 1) {
            $excel->mergeCells('F' . $linha_actual . ':G' . $linha_actual);
            $excel->getStyle('F' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('F' . $linha_table),
                'F' . $linha_actual);
            $excel->getStyle('F' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('H' . $linha_actual, 'Doador');
        if ($pagina != 1) {

            $excel->getStyle('H' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('H' . $linha_table),
                'H' . $linha_actual);
            $excel->getStyle('H' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('I' . $linha_actual, 'Obs.');
        if ($pagina != 1) {

            $excel->getStyle('I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('I' . $linha_table),
                'I' . $linha_actual);
            $excel->getStyle('I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;

        $total = 0;
        foreach ($bolsas as $bolsa) {
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
                $bolsa['BolsaTemporaria']['apelido']);
            if ($pagina != 1) {
                $excel->mergeCells('A' . $linha_actual . ':B' . $linha_actual);
                $excel->getStyle('A' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                $excel->getStyle('A' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
            }
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual,
                $bolsa['BolsaTemporaria']['nomes']);
            if ($pagina != 1) {
                $excel->mergeCells('C' . $linha_actual . ':E' . $linha_actual);
                $excel->getStyle('C' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                $excel->getStyle('C' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $excel->getStyle('C' . $linha_actual . ':E' . $linha_actual)->getFont()->setName('Garamond');

            }
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('F' . $linha_actual, $bolsa['BolsaTipoBolsa']['name']);
            if ($pagina != 1) {
                $excel->mergeCells('F' . $linha_actual . ':G' . $linha_actual);
                $excel->getStyle('F' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                $excel->getStyle('F' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $excel->getStyle('F' . $linha_actual . ':G' . $linha_actual)->getFont()->setName('Garamond');
            }
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('H' . $linha_actual,
                $bolsa['BolsaTemporaria']['doador']);
            if ($pagina != 1) {

                $excel->getStyle('H' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                $excel->getStyle('H' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $excel->getStyle('H' . $linha_actual)->getFont()->setName('Garamond');
            }
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('I' . $linha_actual,
                $bolsa['BolsaTemporaria']['alinea']);
            if ($pagina != 1) {

                $excel->getStyle('I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                $excel->getStyle('I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $excel->getStyle('I' . $linha_actual )->getFont()->setName('Garamond');
            }
            $linha_actual++;
            $total++;
        }
        $linha_actual++;
        $linha_actual++;
        $styleArray = [
            'borders' => [
                'bottom' => [
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ],
            ],
        ];


        $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->applyFromArray($styleArray);

        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'Total de Estudantes');
        $excel->mergeCells('A' . $linha_actual . ':C' . $linha_actual);
        $excel->getStyle('A' . $linha_actual . ':C' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $excel->getStyle('A' . $linha_actual . ':C' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual, $total);

        $linha_actual++;
        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'Data: ' . date('d/m/Y H:i:s'));
        $excel->mergeCells('A' . $linha_actual . ':C' . $linha_actual);
        $excel->getStyle('A' . $linha_actual . ':C' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $excel->getStyle('A' . $linha_actual . ':C' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        //$this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual, $total);


        $excel->getStyle('D' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $excel->getStyle('D' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $pagina++;
        $this->PhpExcel->xls->getActiveSheet()->setBreak('A' . $linha_actual, PHPExcel_Worksheet::BREAK_ROW);
        $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->applyFromArray($styleArray);
        $linha_actual++;
        unset($styleArray);
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

    $this->PhpExcel->output('despacho_bolsas_.xlsx');