<?php
class OpenSGAShell extends AppShell {
    public $uses = array('Turma','Matricula','Curso','UnidadeOrganica','Candidatura');
    public function main() {
        $this->out('Hello world.');
    }
    
    public function teste(){
        $this->out('Teste');
        App::uses();
        $this->log('Teste de Shell Efectuado com Sucesso');
    }
    
    /**
     * Comando temporario para organizar a tabela de matriculas
     */
    public function organiza_tabela_matriculas(){
        
    }
    
    
        public function autenticidades(){
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
		if (!class_exists('PHPExcel'))
			throw new CakeException('Vendor class PHPExcel not found!');
                
                $xls  = PHPExcel_IOFactory::load(APP.'Reports'.DS.'autenticidades.xlsx');
                
                $worksheet = $xls->getActiveSheet();
                //debug($xls->getActiveSheetIndex());
                $linha_actual = 1;
                $numeros = array();
                foreach($worksheet->getRowIterator() as $row){
                    if($worksheet->getCell('A'.$linha_actual)->getValue()==''){
                        
                    }
                    else{
                   $numeros[] = $worksheet->getCell('A'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('B'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('C'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('D'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('E'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('F'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('G'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('H'.$linha_actual)->getCalculatedValue();
                   $numeros[] = $worksheet->getCell('I'.$linha_actual)->getCalculatedValue();
                    }
                    if($linha_actual==1600){
                        break;
                    }
                    $this->out($linha_actual);
                    $linha_actual++;
                    }
                    
                    $numeros_limpo = array_filter($numeros);
                    $numeros_sort = sort($numeros_limpo);
                    $resultado = array_unique($numeros_limpo);
                    
                    $xls  = PHPExcel_IOFactory::load(APP.'Reports'.DS.'novo.xlsx');
                
                $worksheet = $xls->getActiveSheet();
                    $linha_actual = 1;
                    foreach($resultado as $r){
                            $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual, $mudanca['CursoNovo']['UnidadeOrganica']['name']);    
                    }
                    
                     
                    
                }
    
    
    /**
     * Importa candidatos do excel
     * @todo Verificar esta funcao. Nao eh consistente
     * @throws CakeException
     */
    public function importa_candidatos_excel(){
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
		if (!class_exists('PHPExcel'))
			throw new CakeException('Vendor class PHPExcel not found!');
                
                $xls  = PHPExcel_IOFactory::load(APP.'Reports'.DS.'candidatos.xlsx');
                
                $worksheet = $xls->getActiveSheet();
                //debug($xls->getActiveSheetIndex());
                $linha_actual = 2;
                foreach($worksheet->getRowIterator() as $row){
                    if($worksheet->getCell('A'.$linha_actual)->getValue()==''){
                        break;
                    }
                    $array_candidato = array(
                        'Candidatura'=>array(
                            'numero_estudante' =>$worksheet->getCell('A'.$linha_actual)->getCalculatedValue(),
                            'nomes' =>$worksheet->getCell('B'.$linha_actual)->getValue(),
                            'apelido'=>$worksheet->getCell('C'.$linha_actual)->getValue(),
                            'nome_curso'=>$worksheet->getCell('D'.$linha_actual)->getValue()
                        
                        )
                    );
                    
                    $curso = $this->Curso->findByName($worksheet->getCell('D'.$linha_actual)->getValue());
                    $array_candidato['Candidatura']['curso_id'] = $curso['Curso']['id'];
                    
                    $faculdade = $this->UnidadeOrganica->findById($curso['Curso']['unidade_organica_id']);
                    if($faculdade['UnidadeOrganica']['tipo_unidade_organica_id']!=1){
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
    public function gerar_turmas(){
        $plano_estudos = $this->Turma->Planoestudo->find('list');
        $anolectivo_id = Configure::read('OpenSGA.ano_lectivo_id');
        $semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');
        
        foreach($plano_estudos as $planoestudo_id =>$plano_estudo){
            $turnos = $this->Turma->Turno->find('list');
            $disciplinas = $this->Turma->Planoestudo->getAllDisciplinasByPlanoestudo($planoestudo_id);
            foreach($turnos as $turno_id=>$turno){
                foreach($disciplinas as $disciplina){
                        
                                $turma = array();
                                $turma['anolectivo_id']=$anolectivo_id;
                                $turma['anocurricular']=$disciplina['p']['ano'];
                                $turma['semestrecurricular']=$disciplina['p']['semestre'];
                                $turma['curso_id']=$disciplina['pe']['curso_id'];
                                $turma['escola_id']=1;
                                $turma['planoestudo_id']=$planoestudo_id;
                                $turma['turno_id']=$turno_id;
                                $turma['disciplina_id']=$disciplina['d']['id'];
                                $turma['estadoturma_id']=1;
                                $turma['semestrelectivo_id']=$semestre_id;
                                $nome = $disciplina['d']['name']." - ".$disciplina['pe']['name'];
                                $turma['name']=$nome;

                                $turmas=array('Turma'=>$turma);

                                //Primeiro precisamos ver se a turma nao esta criada ainda
                                $turma_existe = $this->Turma->find('first',array('recursive'=>-1,'conditions'=>array('anolectivo_id'=>$anolectivo_id,'planoestudo_id'=>$planoestudo_id,'disciplina_id'=>$disciplina['d']['id'],'anocurricular'=>$turma['anocurricular'],'semestrecurricular'=>$turma['semestrecurricular'],'turno_id'=>$turma['turno_id'],'semestrelectivo_id'=>$semestre_id)));

                                if(!$turma_existe){
                                    $this->Turma->create();
                                    $this->Turma->save($turmas);
                                    $this->out('Turma Criada: '.$nome);
                                } else{
                                    $this->out('<error>Turma Existente: '.$nome.'</error>');
                                }
                                

                        }
            }
        }
        
    }
}