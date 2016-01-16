<?php
App::uses('OpenSGAWord','Lib');
// Template processor instance creation

$objPHPWord = new OpenSGAWord();
$templateProcessor = $objPHPWord->loadTemplateFromS3('Reports/HistoricoCursos/print_certificado_conclusao.docx');

// Variables on different parts of document
$templateProcessor->setValue('nomeEstudante', $historicoCurso['Aluno']['Entidade']['name']);
$templateProcessor->setValue('nomePai', $historicoCurso['Aluno']['Entidade']['nome_pai']);
$templateProcessor->setValue('nomeMae', $historicoCurso['Aluno']['Entidade']['nome_mae']);
$templateProcessor->setValue('naturalidade', $historicoCurso['Aluno']['Entidade']['naturalidade']);
$templateProcessor->setValue('distritoNascimento', $historicoCurso['Aluno']['Entidade']['CidadeNascimento']['name']);
$templateProcessor->setValue('provinciaNascimento', $historicoCurso['Aluno']['Entidade']['ProvinciaNascimento']['name']);
$templateProcessor->setValue('cursoGenero', $historicoCurso['Aluno']['Curso']['genero']);
$templateProcessor->setValue('cursoNome', $historicoCurso['Aluno']['Curso']['name']);
$templateProcessor->setValue('diaConclusao', $historicoCurso['HistoricoCurso']['data_conclusao']);
$templateProcessor->setValue('mesConclusao', $historicoCurso['Aluno']['Entidade']['name']);
$templateProcessor->setValue('anoConclusao', $historicoCurso['Aluno']['Entidade']['name']);
$templateProcessor->setValue('totalCreditos', $historicoCurso['Aluno']['HistoricoCurso']['total_creditos']);
$templateProcessor->setValue('notaFinal', $historicoCurso['Aluno']['HistoricoCurso']['nota_final']);
$templateProcessor->setValue('dataImpressao', $historicoCurso['Aluno']['Entidade']['name']);// On section/content




$temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
ob_clean();
$templateProcessor->saveAs($temp_file);


// Your browser will name the file "myFile.docx"
// regardless of what it's named on the server
// Redirect output to a client’s web browser (.docx)
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment;filename=certificado_conclusao.docx');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
readfile($temp_file); // or echo file_get_contents($temp_file);
unlink($temp_file);  // remove temp file

