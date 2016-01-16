<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
if (!class_exists('PHPExcel')){
    throw new \CakeException('Vendor class PHPExcel not found!');
}


$this->PhpExcel->loadWorksheet(APP . 'Reports' . DS .'candidatos'.DS. 'print_boletim_matricula_preenchido.xlsx');
$excel = $this->PhpExcel->xls->getActiveSheet();
$linha_actual = 1;
$pagina = 1;
$linha_uem = 1;
    $linha_boletim = 2;
    $linha_faculdade = 3;
    $linha_curso  = 4;
    $linha_nota = 6;
    $linha_ano  = 7;
    $linha_dados = 9;
    $linha_apelido = 10;
    $linha_nome = 11;
    $linha_data_nascimento = 12;
    $linha_pai = 13;
    $linha_mae = 14;
    $linha_naturalidade = 15;
    $linha_nacionalidade = 16;
    $linha_documento = 17;
    $linha_emitido = 18;
        $linha_endereco = 20;
    $linha_distrito=21;
    $linha_rua=22;
    $linha_numero=23;
    $linha_quarteirao=24;
    $linha_historial=26;
    $linha_ano_conclusao = 27;
    $linha_local=28;
    $linha_provincia = 29;
    $linha_compromisso=31;
    $linha_juro=32;
    $linha_data = 33;
    $linha_assinatura = 34;
        $linha_assinatura2=36;




$linha_dra = 3;
$linha_titulo = 5;
$linha_sub = 6;
$linha_ano = 7;
$linha_curso = 9;
$linha_table = 11;
foreach ($candidatos as $curso => $admitidos) {
    foreach($admitidos as $admitido){
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'UNIVERSIDADE EDUARDO MONDLANE');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_uem), 'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A' . $linha_actual, 10, 80, 85); //Logotipo
//$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A29', 10, 108, 115); //Logotipo

        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'BOLETIM DE MATRÍCULA');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_boletim),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
            $admitido['Candidatura']['nome_faculdade']);
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_faculdade),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
            $admitido['Candidatura']['nome_curso']);
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_curso),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'NOTA: Corrija os campos que estiverem
    incorrectos ');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_nota),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'Ano Lectivo:');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':A' . $linha_actual)->getAlignment()->setHorizontal
                (PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_ano),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':A' . $linha_actual)->getAlignment()->setVertical
                (PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linha_actual, Configure::read('OpenSGA.ano_lectivo'));
        if ($pagina != 1) {
            $excel->mergeCells('B' . $linha_actual . ':B' . $linha_actual);
            $excel->getStyle('B' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setHorizontal
                (PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('E' . $linha_ano), 'E' . $linha_actual);
            $excel->getStyle('B' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setVertical
                (PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual, 'Número de Estudante:');
        if ($pagina != 1) {
            $excel->mergeCells('D' . $linha_actual . ':E' . $linha_actual);
            $excel->getStyle('D' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal
                (PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('D' . $linha_ano),
                'D' . $linha_actual);
            $excel->getStyle('D' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical
                (PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('F' . $linha_actual,
            $admitido['Candidatura']['numero_estudante']);
        if ($pagina != 1) {
            $excel->mergeCells('F' . $linha_actual . ':G' . $linha_actual);
            $excel->getStyle('F' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setHorizontal
                (PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('F' . $linha_ano),
                'F' . $linha_actual);
            $excel->getStyle('F' . $linha_actual . ':G' . $linha_actual)->getAlignment()->setVertical
                (PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'I.DADOS PESSOAIS');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':J' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_dados),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }

        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'Apelido:');
        if ($pagina != 1) {
            $excel->mergeCells('A' . $linha_actual . ':B' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setHorizontal
                (PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_apelido),
                'A' . $linha_actual);
            $excel->getStyle('A' . $linha_actual . ':B' . $linha_actual)->getAlignment()->setVertical
                (PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual,
            Configure::read('OpenSGA.ano_lectivo'));
        if ($pagina != 1) {
            $excel->mergeCells('C' . $linha_actual . ':E' . $linha_actual);
            $excel->getStyle('C' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal
                (PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('C' . $linha_apelido),
                'C' . $linha_actual);
            $excel->getStyle('C' . $linha_actual . ':F' . $linha_actual)->getAlignment()->setVertical
                (PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }



        $styleArray = array(
            'borders' => array(
                'bottom' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );


        $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->applyFromArray($styleArray);

        $excel->getStyle('D' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $excel->getStyle('D' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $pagina++;
        $this->PhpExcel->xls->getActiveSheet()->setBreak('A' . $linha_actual, PHPExcel_Worksheet::BREAK_ROW);
        $excel->getStyle('A' . $linha_actual . ':I' . $linha_actual)->applyFromArray($styleArray);
        $linha_actual++;
        unset($styleArray);
    }
}
    /**$linha_actual++;
    $linha_actual++;
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, $curso);
    if ($pagina != 1) {
        $excel->mergeCells('A' . $linha_actual . ':J' . $linha_actual);
        $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_curso), 'A' . $linha_actual . ':J' . $linha_actual);
        $excel->getStyle('A' . $linha_actual . ':J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }

    $linha_actual++;
    $linha_actual++;
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'NCandidato');
    if ($pagina != 1) {
        $excel->getStyle('A' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_table), 'A' . $linha_actual);
        $excel->getStyle('A' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linha_actual, 'NEstudante');
    if ($pagina != 1) {
        $excel->getStyle('B' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('B' . $linha_table), 'B' . $linha_actual);
        $excel->getStyle('B' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual, 'Apelido');
    if ($pagina != 1) {
        $excel->mergeCells('C' . $linha_actual . ':D' . $linha_actual);
        $excel->getStyle('C' . $linha_actual . ':D' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('C' . $linha_table), 'C' . $linha_actual);
        $excel->getStyle('C' . $linha_actual . ':D' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linha_actual, 'Nomes');
    if ($pagina != 1) {
        $excel->mergeCells('E' . $linha_actual . ':H' . $linha_actual);
        $excel->getStyle('E' . $linha_actual . ':H' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('E' . $linha_table), 'E' . $linha_actual);
        $excel->getStyle('E' . $linha_actual . ':H' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('I' . $linha_actual, 'DataNasc');
    if ($pagina != 1) {

        $excel->getStyle('I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('I' . $linha_table), 'I' . $linha_actual);
        $excel->getStyle('I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('J' . $linha_actual, 'Sexo');
    if ($pagina != 1) {

        $excel->getStyle('J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('J' . $linha_table), 'J' . $linha_actual);
        $excel->getStyle('J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
    $linha_actual++;

    $total = 0;
    foreach ($admitidos as $admitido) {
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, $admitido['Candidatura']['numero_candidato']);
     if ($pagina != 1) {
        $excel->getStyle('A' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->getStyle('A' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linha_actual, $admitido['Candidatura']['numero_estudante']);
        if ($pagina != 1) {
        $excel->getStyle('B' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->getStyle('B' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual, $admitido['Candidatura']['apelido']);
        if ($pagina != 1) {
        $excel->mergeCells('C' . $linha_actual . ':D' . $linha_actual);
        $excel->getStyle('C' . $linha_actual . ':D' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->getStyle('C' . $linha_actual . ':D' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linha_actual, $admitido['Candidatura']['nomes']);
        if ($pagina != 1) {
        $excel->mergeCells('E' . $linha_actual . ':H' . $linha_actual);
        $excel->getStyle('E' . $linha_actual . ':H' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->getStyle('E' . $linha_actual . ':H' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('I' . $linha_actual, $admitido['Candidatura']['data_nascimento']);
        if ($pagina != 1) {
        $excel->getStyle('I' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->getStyle('I' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('J' . $linha_actual, $admitido['Genero']['name']);
        if ($pagina != 1) {
        $excel->getStyle('J' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $excel->getStyle('J' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    }
        $linha_actual++;
        $total++;
    }

}**/



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

$this->PhpExcel->output('boletim_matriculas_'.Configure::read('OpenSGA.ano_lectivo').'.xlsx');
