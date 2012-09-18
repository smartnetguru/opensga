<?php
class OpenSGAShell extends AppShell {
    public $uses = array('Turma');
    public function main() {
        $this->out('Hello world.');
    }
    
    public function teste(){
        $this->out('Teste');
        App::uses();
        $this->log('Teste de Shell Efectuado com Sucesso');
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