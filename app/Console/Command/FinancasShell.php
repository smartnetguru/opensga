<?php

App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

/**
 * Class EntidadeShell
 *
 * @property Entidade $Entidade
 */
class FinancasShell extends AppShell
{

    public $uses = ['Aluno'];


    public function base_fund()
    {
        App::import('Helper', 'PhpExcel');
        $this->PHPExcel = new PhpExcelHelper(new View());
        $xls = $this->PHPExcel->loadWorksheetFromS3('/Reports/Financas/base_fund.xlsx');
        /*
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'rafael.xlsx');

*/
        $worksheet = $xls->getActiveSheet();
        $linhaActual = 3;
        $naoEnconttados = [];
        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linhaActual)->getValue() == '') {
                debug($naoEnconttados);
                debug(count($naoEnconttados));
                break;
            }

            $codigoInstituicao = $worksheet->getCell('C' . $linhaActual)->getValue();
            if ($codigoInstituicao != 1) {
                $this->out('Saltando Linha -------' . $linhaActual);
                $linhaActual++;
                continue;

            }
            $nomeCurso = $worksheet->getCell('F' . $linhaActual)->getValue();
            $nomeGrau = $worksheet->getCell('K' . $linhaActual)->getValue();
            $nomeCompletoCurso = $nomeGrau . ' em ' . $nomeCurso;
            $curso = $this->Aluno->Curso->findByName($nomeCompletoCurso);
            if (empty($curso)) {
                $fim = substr($nomeCompletoCurso, -3);
                $nomeCompletoCurso = str_replace(' ', '%', trim($nomeCompletoCurso));
                if ($fim === 'lab') {

                    $nomeCompletoCurso = $nomeCompletoCurso . '%';
                }
                $curso = $this->Aluno->Curso->find('first', [
                    'conditions' => [
                        'Curso.name
                LIKE' => $nomeCompletoCurso
                    ]
                ]);
                if (empty($curso)) {
                    $naoEnconttados[] = $nomeCompletoCurso;
                    $linhaActual++;
                    continue;
                }


                //die();
            }


            $ano = $worksheet->getCell('E' . $linhaActual)->getValue();
            $sexo = $worksheet->getCell('M' . $linhaActual)->getValue();
            if ($sexo == 1) {
                $genero = 'Masculino';
            } else {
                $genero = 'Feminino';
            }

            $S = $worksheet->getCell('S' . $linhaActual)->getFormattedValue();
            $T = $worksheet->getCell('T' . $linhaActual)->getFormattedValue();
            $AG = $worksheet->getCell('AG' . $linhaActual)->getValue();
            $Format = $worksheet->getCell('AG' . $linhaActual)->getStyle()->getNumberFormat();
            debug($S);
            debug($T);
            debug($AG);
            debug($linhaActual);


            $letras = ['V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE'];

            foreach ($letras as $letra) {
                $conditions = [
                    'Aluno.ano_ingresso'    => $ano,
                    'Entidade.genero_id'    => $sexo,
                    'Aluno.curso_id'        => $curso['Curso']['id'],
                    'Aluno.estado_aluno_id' => [1, 11, 14]
                ];
                $this->Aluno->contain(['Entidade']);
                $total = $this->Aluno->find('count', [
                    'conditions' => $conditions
                ]);
                $worksheet->setCellValue($letra . $linhaActual, $total);
                $this->out($nomeCompletoCurso . '-----' . $ano . '------------' . $genero . '----------' . $total . '------------'
                    . $letra);

                $ano = $ano - 1;
                $this->hr();

            }

            unset($conditions['Aluno.ano_ingresso']);

            $conditions['Aluno.ano_ingresso <=']=$ano;
            $this->Aluno->contain(['Entidade']);

            $total = $this->Aluno->find('count', [
                'conditions' => $conditions
            ]);
            unset($conditions['Aluno.ano_ingresso <=']);
            $worksheet->setCellValue('AF' . $linhaActual, $total);
            $this->out($nomeCompletoCurso . '-----RESTO------------' . $genero . '----------' . $total . '------------'
                . $letra);
            debug('formato-------------------'.$worksheet->getStyle('AG'.$linhaActual)
                ->getNumberFormat()
                ->getFormatCode());

            $worksheet->getStyle('AG'.$linhaActual)
                ->getNumberFormat()
                ->setFormatCode(
                    PHPExcel_Style_NumberFormat::FORMAT_NUMBER
                );



            $this->hr();
            $worksheet->setCellValue('AG' . $linhaActual, $AG);
            $worksheet->setCellValue('S' . $linhaActual, $S);
            $worksheet->setCellValue('T' . $linhaActual, $T);
            $linhaActual++;
        }
        $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

        $objWriter->save('base_fund2.xlsx');

        $xls->disconnectWorksheets();
        unset($xls);

    }


}
