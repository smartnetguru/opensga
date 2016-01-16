<?php

App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
if (!class_exists('PHPExcel')) {
    throw new CakeException('Vendor class PHPExcel not found!');
}

//die(debug($aluno));
$this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'print_boletim_matricula.xlsx');


/**
 * No futuro imprimir foto no boletim
 *
 * if($has_foto_entidade){
 * $this->PhpExcel->addImage(APP.'Assets'.DS.'Fotos'.DS.'Estudantes'.DS.$aluno['Aluno']['codigo'].'.JPG','N1',5,180,175); //Fotografia
 * } else{
 * $this->PhpExcel->addImage(WWW_ROOT.'img'.DS.'default_profile_picture.jpg','N1',5,180,175); //Fotografia
 * }
 */
$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png',
    'A1', 10, 210, 135); //Logotipo
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A1',
    Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao


//Faculdade
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A3', $faculdade['UnidadeOrganica']['name']); //Nome da Instituicao
//Curso
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A4', $aluno['Curso']['name']); //Nome da Instituicao
//Ano Lectivo
$this->PhpExcel->xls->getActiveSheet()->setCellValue('B7', $aluno['Aluno']['ano_ingresso']);
//Numero de estudante
$this->PhpExcel->xls->getActiveSheet()->setCellValue('F7', $aluno['Aluno']['codigo']);
//Apelido
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C10', $aluno['Entidade']['apelido']);
//Nomes
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C11', $aluno['Entidade']['nomes']);
//Data de Nascimento
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C12', $aluno['Entidade']['data_nascimento']);
//Pai
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C13', $aluno['Entidade']['nome_pai']);
//Mae
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C14', $aluno['Entidade']['nome_mae']);
//Natural de
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C15', $aluno['Entidade']['naturalidade']);
//Nacionalidade
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C16', $aluno['Entidade']['PaisNascimento']['name']);
if (isset($aluno['Entidade']['EntidadeIdentificacao'])) {
//Documento Identificacao
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('D17',
        $aluno['Entidade']['EntidadeIdentificacao'][0]['DocumentoIdentificacao']['name']);
//Emitido Por
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('C18',
        $aluno['Entidade']['EntidadeIdentificacao'][0]['local_emissao']);
//Numero Identificacao
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('H17',
        $aluno['Entidade']['EntidadeIdentificacao'][0]['numero']);
//Data Emissao
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('H18',
        $aluno['Entidade']['EntidadeIdentificacao'][0]['data_emissao']);

}
//Sexo
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H15', $aluno['Entidade']['Genero']['name']);
//Estado Civil
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H16', $aluno['Entidade']['EstadoCivil']['name']);
//Distrito
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C21', $contactos['distrito']);
//Rua
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C22', $contactos['rua']);
//Numero
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C23', $contactos['numero']);
//Quarteirao
$this->PhpExcel->xls->getActiveSheet()->setCellValue('C24', $contactos['quarteirao']);
//Bairro
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H21', $contactos['bairro']);
//Celular
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H22', $contactos['telemovel']);
//Telefone Fixo
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H23', $contactos['telefone']);
//Telefone de Emergencia
$this->PhpExcel->xls->getActiveSheet()->setCellValue('H24', $contactos['telemovel_emergencia']);
if(isset($aluno['AlunoNivelMedio'])){
    //ANO DE Conclusao
    $this->PhpExcel->xls->getActiveSheet()->setCellValue('E27', $aluno['AlunoNivelMedio']['ano_conclusao']);

//Escola de Conclusao
    if (isset($aluno['AlunoNivelMedio']['EscolaNivelMedio']['name'])) {
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('C28', $aluno['AlunoNivelMedio']['EscolaNivelMedio']['name']);
    }
//Provincia de Conclusao
    if (isset($aluno['AlunoNivelMedio']['EscolaNivelMedio']['Provincia']['name'])) {
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('B29',
            $aluno['AlunoNivelMedio']['EscolaNivelMedio']['Provincia']['name']);
    }
}

//Nota
$this->PhpExcel->xls->getActiveSheet()->setCellValue('I27', $aluno['AlunoNivelMedio']['nota_final']);
//Data Assinatura
$this->PhpExcel->xls->getActiveSheet()->setCellValue('A33', $aluno['Aluno']['created']);

$this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Boletim de Matrícula');
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

$this->PhpExcel->output('boletim_matricula_' . $aluno['Aluno']['codigo'] . '.xlsx');
