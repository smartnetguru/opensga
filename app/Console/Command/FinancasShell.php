<?php

    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('AppShell', 'Console/Command');

    /**
     * Class EntidadeShell
     *
     * @property Entidade $Entidade
     * @property Aluno $Aluno
     */
    class FinancasShell extends AppShell
    {

        public $uses = ['Aluno', 'FinanceiroTransacao'];


        public function base_fund()
        {
            $this->out('Init....');
            //Lemos a biblioteca PHPExcel
            App::import('Helper', 'PhpExcel');
            $this->PHPExcel = new PhpExcelHelper(new View());
            //Lemos o ficheiro excel a preencher. Aquele que foi fornecido pelos financiadores
            //$xls = $this->PHPExcel->loadWorksheetFromS3('/Reports/Financas/base_fund.xlsx');
            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'ficheiro_novo.xlsx');

            $worksheet = $xls->getActiveSheet();
            $linhaActual = 3;
            $naoEnconttados = [];
            //Vamos ler linha por linha do ficheiro por preencheer, comecando pela linha 3
            foreach ($worksheet->getRowIterator() as $row) {
                //Se encontrar uma linha em branco eh porque terminamos o ficheiro todo
                if ($worksheet->getCell('A' . $linhaActual)->getValue() == '') {
                    break;
                }

                //Pegamos o codigo da instuicao para apenas preencher as linhas da UEM(ou da UP nesse caso)
                $codigoInstituicao = $worksheet->getCell('C' . $linhaActual)->getValue();
                if ($codigoInstituicao != 1) {
                    $this->out('Saltando Linha -------' . $linhaActual);
                    $linhaActual++;
                    continue;

                }
                $nomeCurso = $worksheet->getCell('F' . $linhaActual)->getValue();
                $nomeGrau = $worksheet->getCell('K' . $linhaActual)->getValue();
                $nomeCompletoCurso = $nomeGrau . ' em ' . $nomeCurso;
                //Pegamos o nome do curso e procuramos por aquele curso na nossa BD MySQL
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
                LIKE' => $nomeCompletoCurso,
                        ],
                    ]);
                    if (empty($curso)) {

                        $nomeCurso = str_replace('-', ' ', $nomeCurso);

                        $cursoExplode = explode(' ', $nomeCurso);

                        $nomeCompletoCurso = $nomeGrau . '%' . $cursoExplode[0] . '%' . end($cursoExplode) . '%';
                        $curso = $this->Aluno->Curso->find('first', [
                            'conditions' => [
                                'Curso.name
                LIKE' => $nomeCompletoCurso,
                            ],
                        ]);

                        if (empty($curso)) {
                            $cursoOlds = $this->Aluno->Curso->find('list', ['order' => 'name']);

                            foreach ($cursoOlds as $k => $v) {
                                $this->out($k . '. ' . $v);
                            }
                            $this->out($nomeCompletoCurso);
                            $this->out('----------------------------');
                            $cursoId = $this->in($nomeCurso);
                            $curso = $this->Aluno->Curso->findById($cursoId);
                        }


                    }

                }


                $worksheet->setCellValue('E' . $linhaActual, 2014);
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


                $letras = ['V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE'];

                foreach ($letras as $letra) {
                    $conditions = [
                        'Aluno.ano_ingresso'    => $ano,
                        'Entidade.genero_id'    => $sexo,
                        'Aluno.curso_id'        => $curso['Curso']['id'],
                        'Aluno.estado_aluno_id' => [1, 11, 14],
                    ];
                    $this->Aluno->contain(['Entidade']);
                    //Ja temos todos requisitos(Curso, Ano de Ingresso e Sexo) entao podemos fazer um Select count(*)
                    $total = $this->Aluno->find('count', [
                        'conditions' => $conditions,
                    ]);
                    $worksheet->setCellValue($letra . $linhaActual, $total);
                    $this->out($nomeCompletoCurso . '-----' . $ano . '------------' . $genero . '----------' . $total . '------------'
                        . $letra);

                    $ano = $ano - 1;
                    $this->hr();

                }

                unset($conditions['Aluno.ano_ingresso']);

                $conditions['Aluno.ano_ingresso <='] = $ano;
                $this->Aluno->contain(['Entidade']);

                $total = $this->Aluno->find('count', [
                    'conditions' => $conditions,
                ]);
                unset($conditions['Aluno.ano_ingresso <=']);
                $worksheet->setCellValue('AF' . $linhaActual, $total);
                $this->out($nomeCompletoCurso . '-----RESTO------------' . $genero . '----------' . $total . '------------'
                    . $letra);

                $worksheet->getStyle('AG' . $linhaActual)
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

            //Por fim gravamos o excel ja preenchido num novo ficheiro.
            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('base_fund2.xlsx');

            $xls->disconnectWorksheets();
            unset($xls);

        }

        public function testaCheckDigito()
        {
            $digito = $this->FinanceiroTransacao->geraCheckDigito();
            debug($digito);
        }


    }
