<?php

class OpenSGAShell extends AppShell {

    public $uses = array('Turma', 'Matricula', 'Curso', 'UnidadeOrganica', 'Candidatura','Aluno','EstadoAluno','Planoestudo','Disciplina');

    public function main() {
        $this->out('Hello world.');
    }

    public function teste() {
        $this->out('Teste');
        App::uses();
        $this->log('Teste de Shell Efectuado com Sucesso');
    }

    /**
     * Comando temporario para organizar a tabela de matriculas
     */
    public function organiza_tabela_matriculas() {
        
    }

    public function autenticidades() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'autenticidades.xlsx');

        $worksheet = $xls->getActiveSheet();
        //debug($xls->getActiveSheetIndex());
        $linha_actual = 1;
        $numeros = array();
        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                
            } else {
                $numeros[] = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('H' . $linha_actual)->getCalculatedValue();
                $numeros[] = $worksheet->getCell('I' . $linha_actual)->getCalculatedValue();
            }
            if ($linha_actual == 1600) {
                break;
            }
            //$this->out($linha_actual);
            $linha_actual++;
        }


        debug(count($numeros));

        $numeros_limpo = array_filter($numeros);
        sort($numeros_limpo);

        $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'novo.xlsx');

        $worksheet = $xls->getActiveSheet();

        $colunas = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I');
        $linha_actual = 2;
        $array_i = 2;


        while ($array_i <= count($numeros_limpo)) {

            foreach ($colunas as $c) {

                if (isset($numeros_limpo[$array_i - 1]) && $numeros_limpo[$array_i - 1] != null) {
                    $xls->getActiveSheet()->setCellValue($c . $linha_actual, $numeros_limpo[$array_i - 1]);
                    $this->out($array_i . "---" . $numeros_limpo[$array_i - 1]);
                }

                $array_i++;
            }
            $linha_actual++;
        }




        $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
        debug(getcwd());
        $objWriter->save('fixeiro.xlsx');

        //debug($resultado);
        debug(count($numeros_limpo));
        // clear memory
        $xls->disconnectWorksheets();
    }

    /**
     * Importa candidatos do excel
     * @todo Verificar esta funcao. Nao eh consistente
     * @throws CakeException
     */
    public function importa_candidatos_excel() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'candidatos.xlsx');

        $worksheet = $xls->getActiveSheet();
        //debug($xls->getActiveSheetIndex());
        $linha_actual = 2;
        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                break;
            }
            $array_candidato = array(
                'Candidatura' => array(
                    'numero_estudante' => $worksheet->getCell('A' . $linha_actual)->getCalculatedValue(),
                    'nomes' => $worksheet->getCell('B' . $linha_actual)->getValue(),
                    'apelido' => $worksheet->getCell('C' . $linha_actual)->getValue(),
                    'nome_curso' => $worksheet->getCell('D' . $linha_actual)->getValue()
                )
            );

            $curso = $this->Curso->findByName($worksheet->getCell('D' . $linha_actual)->getValue());
            $array_candidato['Candidatura']['curso_id'] = $curso['Curso']['id'];

            $faculdade = $this->UnidadeOrganica->findById($curso['Curso']['unidade_organica_id']);
            if ($faculdade['UnidadeOrganica']['tipo_unidade_organica_id'] != 1) {
                $faculdade = $this->UnidadeOrganica->findById($faculdade['UnidadeOrganica']['parent_id']);
            }

            $array_candidato['Candidatura']['unidade_organica_id'] = $curso['Curso']['unidade_organica_id'];
            $array_candidato['Candidatura']['nome_faculdade'] = $faculdade['UnidadeOrganica']['name'];

            $this->Candidatura->create();
            $this->Candidatura->save($array_candidato);
            debug($this->Candidatura->id);

            $linha_actual++;
        }
    }

    public function gerar_turmas() {
        $plano_estudos = $this->Turma->Planoestudo->find('list');
        $anolectivo_id = Configure::read('OpenSGA.ano_lectivo_id');
        $semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');

        foreach ($plano_estudos as $planoestudo_id => $plano_estudo) {
            $turnos = $this->Turma->Turno->find('list');
            $disciplinas = $this->Turma->Planoestudo->getAllDisciplinasByPlanoestudo($planoestudo_id);
            foreach ($turnos as $turno_id => $turno) {
                foreach ($disciplinas as $disciplina) {

                    $turma = array();
                    $turma['anolectivo_id'] = $anolectivo_id;
                    $turma['anocurricular'] = $disciplina['p']['ano'];
                    $turma['semestrecurricular'] = $disciplina['p']['semestre'];
                    $turma['curso_id'] = $disciplina['pe']['curso_id'];
                    $turma['escola_id'] = 1;
                    $turma['planoestudo_id'] = $planoestudo_id;
                    $turma['turno_id'] = $turno_id;
                    $turma['disciplina_id'] = $disciplina['d']['id'];
                    $turma['estadoturma_id'] = 1;
                    $turma['semestrelectivo_id'] = $semestre_id;
                    $nome = $disciplina['d']['name'] . " - " . $disciplina['pe']['name'];
                    $turma['name'] = $nome;

                    $turmas = array('Turma' => $turma);

                    //Primeiro precisamos ver se a turma nao esta criada ainda
                    $turma_existe = $this->Turma->find('first', array('recursive' => -1, 'conditions' => array('anolectivo_id' => $anolectivo_id, 'planoestudo_id' => $planoestudo_id, 'disciplina_id' => $disciplina['d']['id'], 'anocurricular' => $turma['anocurricular'], 'semestrecurricular' => $turma['semestrecurricular'], 'turno_id' => $turma['turno_id'], 'semestrelectivo_id' => $semestre_id)));

                    if (!$turma_existe) {
                        $this->Turma->create();
                        $this->Turma->save($turmas);
                        $this->out('Turma Criada: ' . $nome);
                    } else {
                        $this->out('<error>Turma Existente: ' . $nome . '</error>');
                    }
                }
            }
        }
    }

    public function importa_plano_estudo_excel() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'plano_estudos_unizambeze.xlsx');

        $worksheet = $xls->getActiveSheet();
        $worksheets = $xls->getAllSheets();
    }

    public function entrega_certificado() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'entrega_certificados.xlsx');

        $worksheet = $xls->getActiveSheet();
        

        $linha_actual = 2;
        foreach ($worksheet->getRowIterator() as $row) {

            $numero_estudante = $worksheet->getCell('A' . $linha_actual)->getValue();
            $aluno = $this->Aluno->findByCodigo($numero_estudante);

            $datasource = $this->Aluno->getDataSource();
            $datasource->begin();
            $this->Aluno->contain();
            
            $array_estado = array(
                'AlunoEstado' => array(
                    'aluno_id' => $aluno['Aluno']['id'],
                    'estado_anterior' => $aluno['Aluno']['estado_aluno_id'],
                    'estado_actual' => 1,
                    'motivo_estado_aluno_id' => 15,
                    'observacao' => "Entregou Certificado",
                    'data_mudanca' => date('Y-m-d'),
                    // 'anexo_url'=>$data['anexo_url'],
                    'funcionario_id' => 1
                )
            );
            
            
            $this->Aluno->AlunoEstado->create();
            $this->Aluno->AlunoEstado->save($array_estado);

            $this->Aluno->id = $aluno['Aluno']['id'];
            $this->Aluno->set('estado_aluno_id', 1);
            $this->Aluno->set('estadoentidade_id', 1);
            $this->Aluno->save();
           $datasource->commit();
            
            $this->out($this->Aluno->AlunoEstado->id);
            $linha_actual++;
        }
    }
    
    
    public function aproveitamento(){
        
        
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'aproveitamento2.xlsx');

        $worksheet = $xls->getActiveSheet();
        
        $cursos = $this->Curso->find('all',array('conditions'=>array('unidade_organica_id'=>28)));
        foreach($cursos as $curso){
            $myWorkSheet = new PHPExcel_Worksheet($xls, substr($curso['Curso']['name'],0,30));
            $worksheet = $xls->addSheet($myWorkSheet);
            
             $this->Planoestudo->contain();
        $planoestudo = $this->Planoestudo->find('first',array('conditions'=>array('curso_id'=>$curso['Curso']['id'],'ano_criacao <'=>2009),'order'=>array('ano_criacao DESC')));
        
        $planoestudoano = $this->Planoestudo->Planoestudoano->find('all',array('conditions'=>array('planoestudo_id'=>$planoestudo['Planoestudo']['id']),'order'=>array('ano','semestre')));
        
        $linha = 1;
        $coluna  =1;
        $ano_actual = $coluna;
        $semestre_actual = $coluna;
        $total_colunas = 0;
        foreach($planoestudoano as $pa){
            $worksheet->setCellValueByColumnAndRow($coluna,3,$pa['Disciplina']['name']);
            $worksheet->setCellValueByColumnAndRow($coluna,4,$pa['Disciplina']['codigo']);
            $worksheet->getStyleByColumnAndRow($coluna,3)->getAlignment()->setTextRotation(90);
            $worksheet->getStyleByColumnAndRow($coluna,4)->getAlignment()->setTextRotation(90);
            
            
            $total_colunas++;
            $coluna++;
        }
        //debug($planoestudo);
        //die();
        
        $alunos  = $this->Aluno->find('all',array('conditions'=>array('Aluno.ano_ingresso'=>2009,'Aluno.curso_id'=>$curso['Curso']['id'])));
        $linha = 5;
        $i=0;
        foreach($alunos as $aluno){
            $worksheet->setCellValueByColumnAndRow(0,$linha,''.$aluno['Aluno']['codigo']);
                $coluna  =1;
            while($coluna<=$total_colunas){
                $codigo_disciplina = $worksheet->getCellByColumnAndRow($coluna,4)->getValue();
                $disciplina = $this->Disciplina->findByCodigo($codigo_disciplina);
                $this->Aluno->Inscricao->contain(array(
                   'Turma' 
                ));
                $inscricao = $this->Aluno->Inscricao->find('first',array('conditions'=>array('Inscricao.aluno_id'=>$aluno['Aluno']['id'],'Turma.disciplina_id'=>$disciplina['Disciplina']['id']),'order'=>'data DESC'));
                if($inscricao)
                $worksheet->setCellValueByColumnAndRow($coluna,$linha,$inscricao['Inscricao']['nota_final']);
                
                $coluna++;
                $i++;
                $this->out($i);    
            }
            
                
            $linha++;
        }
        }
        //Comecamos por preencher as disciplinas
       
        
        
        $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
        debug(getcwd());
        $objWriter->save('aproveitamento2.xlsx');
    }

}