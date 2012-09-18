<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
/**
 * Bibliotecas incluidas
 */

 
 /**
 * Modelo Turma
 *
 * Modelo para a manipulação da turma
 * Executa todas as conexões á base de dados que envolvam directamente a tabela turmas. 
  * Todas as funções para a manipulação da tabela turmas devem ser definidas aqui
 * 
 *
 * @package       opensga
 * @subpackage    opensga.core.modelo
 * @link          http://book.cakephp.org/view/1000/Models
  * @Todo Colocar o link para a documentação aqui
 */
class Turma extends AppModel {
	var $name = 'Turma';
    var $recursive = 0;
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Semestrelectivo' => array(
			'className' => 'Semestrelectivo',
			'foreignKey' => 'semestrelectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 'planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turno' => array(
			'className' => 'Turno',
			'foreignKey' => 'turno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 'disciplina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Assistente' => array(
			'className' => 'Docente',
			'foreignKey' => 'assistente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'docente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),		
		'Escola' => array(
			'className' => 'Escola',
			'foreignKey' => 'escola_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 'planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Estadoturma' => array(
			'className' => 'Estadoturma',
			'foreignKey' => 'estadoturma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
        
	);

	var $hasMany = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'turma_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
        'Avaliacao' => array(
			'className' => 'Avaliacao',
			'foreignKey' => 'turma_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
        'Turmatipoavaliacao' => array(
			'className' => 'Turmatipoavaliacao',
			'foreignKey' => 'turma_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

		/**
		 * Cria todas as turmas referentes a aquele ano lectivo e aquele semestre
		 * @Todo Testar essa funcao
		 * @Todo Para facilitar vamos considerar so um plano de estudos activo
         * @todo Podemos usar transactions aqui ;)
		 */
		function criarTurmas($planoestudo_id){
				$datasource = $this->getDataSource();
                $datasource->begin();
                
                $anolectivo_id = Configure::read('OpenSGA.ano_lectivo_id');
                $semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');
                $disciplinas = $this->Planoestudo->getAllDisciplinasByPlanoestudo($planoestudo_id);
                //$semestre = $this->Semestrelectivo->findById($semestre_id);
                $turnos = $this->Turno->find('list');
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
                                $turma_existe = $this->find('first',array('recursive'=>-1,'conditions'=>array('anolectivo_id'=>$anolectivo_id,'planoestudo_id'=>$planoestudo_id,'disciplina_id'=>$disciplina['d']['id'],'anocurricular'=>$turma['anocurricular'],'semestrecurricular'=>$turma['semestrecurricular'],'turno_id'=>$turma['turno_id'],'semestrelectivo_id'=>$semestre_id)));

                                if(!$turma_existe){
                                    $this->create();
                                    $this->save($turmas);
                                }

                        }
                }
                $datasource->commit();

		}
		
/**
 * Esta função retorna todas as turmas do plano curricular do aluno
 *
 * A função filtra as turmas existentes no sistema de acordo com as condições da
 * matricula do aluno.
 * Retorna um array contendo o ID da turma e o nome da disciplina correspondente a turma
 *
 * @param int $aluno_id o ID do aluno em questão
 * @return array Um array contendo todas as turmas do plano curricular do aluno
 * @access public
 * @link http://book.cakephp.org/view/1031/Saving-Your-Data
 * @Todo Colocar o link para a documentação aqui
 * @Todo Filtrar para apenas mostrar as turmas em que o aluno pode se inscrever
 */
        function getAllByAlunoForInscricao($aluno_id,$matricula_id){
        	$matricula=$this->Inscricao->Matricula->findByAlunoId($aluno_id);
			$this->Inscricao->Aluno->recursive=-1;
			//Primeiro vamos pegar todas as disciplinas do plano de estudos
            $todas_disciplinas = $this->Planoestudo->getAllDisciplinas($matricula['Matricula']['planoestudo_id']);
            
            //Inscricoes activas
            $inscricoes_activas = $this->Inscricao->Aluno->getAllInscricoesActivasandAprovadasForInscricao($aluno_id);
            
            //De todas_disciplinas, remover inscricoes activas
            
            
			
            $conditions = array('Turma.planoestudo_id'=>$matricula['Matricula']['planoestudo_id'],'Turma.estadoturma_id'=>1,'Turma.turno_id'=>$matricula['Matricula']['turno_id'],'NOT'=>array('Turma.disciplina_id'=>$inscricoes_activas),'Turma.anolectivo_id'=>Configure::read('OpenSGA.ano_lectivo_id'));
            if(Configure::read('OpenSGA.modulos.escolas')==1){
                $aluno = $Aluno->findById($aluno_id,'escola_id');
                $conditions['Turma.escola_id']=$aluno['Aluno']['escola_id'];
            }
			$turmas = $this->find('all', array('conditions'=>$conditions,'fields'=>array('Turma.id','Disciplina.name','Disciplina.id','Turma.anocurricular','Turma.semestrecurricular'),'order'=>array('Turma.anocurricular','Turma.semestrecurricular')));
            
			return $turmas;
			
        }
		
		
		
		function getAllTurmasInscritas(){
			
		}
        function getAllTurmasActivasByPlanoEstudo($plano){
			$this->recursive=0;
			$turmas = $this->find('all',array('conditions'=>array('planoestudo_id'=>$plano,'estado'=>1),'fields'=>array('Turma.id','Disciplina.name')));
    
			
			return $turmas;
            
        }

	
		// Faz o update do estado da turma para fechada
		function upDateTurma($t0009anolectivo_id, $curso_id){
            $query = "update t0010turmas tt set tt.estado = 3 where tt.t0003curso_id = {$curso_id} and tt.t0009anolectivo_id = {$t0009anolectivo_id}";
            $resultado = $this->query($query);
			//var_dump($query);
			return $resultado;
		
        }

	
				// Contacta os alunos inscritos numa determinada turma
		function getAlunosInscritos($turma_id){
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;		
        }

				// Devolve todos os estudante aprovados
		function getAlunosAprovados($turma_id){
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =2 and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);
			return $resultado;			

		}
		
		// Devolve todos os estudante reprovados
		function getAlunosReprovados($turma_id){
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =3 and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);
			return $resultado;			

		}
		
		// Devolve a media da turma
		function getSomaNotaFinal($turma_id){
            $query = "select sum(notafinal) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;	
			
		}

		
		// Devolve o nome do docente da turma
		function getDocente($turma_id){
            $query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_id = tf.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;	
			
		}	

		// Devolve o nome do assistente da turma
		function getAssistente($turma_id){
            $query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_ass_id = tf.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}	


		// Devolve o nome do plano
		function getPlanoEstudo($turma_id){
            $query = "select tp.name from t0010turmas tt, t0005planoestudos tp, t0013inscricaos ti where ti.t0010turma_id = tt.id and  tt.t0005planoestudo_id = tp.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		// Devolve o nome da Turma
		function getTurma($turma_id){
            $query = "select tt.name from t0010turmas tt, t0013inscricaos ti where ti.t0010turma_id = tt.id  and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		
		// Devolve o turno da Turma
		function getTurno($turma_id){
            $query = "select ttu.name from t0010turmas tt, t0013inscricaos ti, tg0012turnos ttu where ti.t0010turma_id = tt.id and tt.turno_id = ttu.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
				// Devolve o ano curricular
		function getAnoCurricular($turma_id){
			$query = "select tt.anocurricular from t0010turmas tt, t0013inscricaos ti where ti.t0010turma_id = tt.id  and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
				// Devolve o semestre curricular da turma
		function getSemestreCurricular($turma_id){
            $query = "select tt.semestrecurricular from t0010turmas tt, t0013inscricaos ti where ti.t0010turma_id = tt.id  and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		// Devolve o ano lectivo
		function getAnoLectivo($turma_id){
            $query = "select tal.codigo from t0010turmas tt, t0013inscricaos ti, t0009anolectivos tal where ti.t0010turma_id = tt.id and tt.t0009anolectivo_id = tal.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
					// Devolve o nome do curso
	function getCursoAluno($aluno_id=1){
		$query = "select tc.name from turmas tt, inscricaos ti, cursos tc where ti.turma_id = tt.id and tt.curso_id = tc.id and ti.turma_id = {$aluno_id}";
		$resultado = $this->query($query);
		return $resultado;	
			
	}
	
	function getAluno($turma_id){
		$query = "select ta.name from t0010turmas tt, Alunos ta, t0013inscricaos ti, t0011matriculas tm where tm.Aluno_id = ta.id and tm.tg0021estadomatricula_id =1 and ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id} order by ta.name ";
		//var_dump($query);
		$resultado = $this->query($query);
		//var_dump($resultado);
		return $resultado;	
			
	}

	
	// Devolve a turma de um determinado aluno
	function getTurmaAluno($t0009anolectivo_id, $curso_id, $planoestudo_id, $aluno_id){
	$query = "select tt.name from turmas tt, inscricaos ti where tt.id=ti.t0010turma_id and tt.t0009anolectivo_id = {$t0009anolectivo_id} and tt.t0003curso_id ={$curso_id} and tt.t0005planoestudo_id = {$planoestudo_id} and ti.Aluno_id = {$aluno_id}";
	//var_dump($query);
	$resultado = $this->query($query);
	//var_dump($resultado);
	return $resultado;	
			
	}
	 
	// Devolve as turmas de um determinado ano Curricular
	/*function getTurmaAnoCurricular($t0009anolectivo_id){
		$query = "select tt.anocurricular from t0010turmas tt where tt.t0009anolectivo_id = {$t0009anolectivo_id}";
		$resultado = $this->query($query);
		var_dump($query);
		return $resultado;				
	}*/

        		// Devolve o turno da Turma
	function getTurnoTurma($turma_id){
            $query = "select ttu.name from t0010turmas tt, tg0012turnos ttu where  tt.turno_id = ttu.id and tt.id = {$turma_id}";
            
            $resultado = $this->query($query);
            //var_dump($resultado);
            return $resultado;
	}
    
    /**
     *Fecha todas as turmas e inscricoes de um dado semestre. 
     */
    public function fecharTodasTurmas($semestre=null){
        if($semestre==null){
            $semestre = Configure::read('OpenSGA.semestre_lectivo_id');
        }
        $dataSource = $this->getDataSource();    
        $dataSource->begin();
            
        $this->contain('Inscricao');
        $turmas = $this->find('all',array('conditions'=>array('Turma.semestrelectivo_id'=>$semestre,'Turma.estadoturma_id'=>1),'limit'=>100));
        
        
        
        foreach($turmas as $turma){
            $inscricaos = $turma['Inscricao'];
            foreach($inscricaos as $inscricao){
                if($inscricao['estadoinscricao_id']==1){
                    $this->Inscricao->id = $inscricao['id'];
                    $this->Inscricao->set('estadoinscricao_id',6);
                    $this->Inscricao->save();
                }
            }
            
            //Fechamos a turma tambem
            $this->id = $turma['Turma']['id'];
            $this->set('estadoturma_id',3);
            $this->save();
        }
        
        //return $dataSource->rollback();
        return $dataSource->commit();
    }
    
    

		function getTurmasByFuncionario($funcionario_id){
            $query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }
        
        public function hasAvaliacoesAbertas($turma_id){
            $avaliacoes = $this->Turmatipoavaliacao->find('all',array('conditions'=>array('Turmatipoavaliacao.turma_id'=>$turma_id)));
            debug($avaliacoes);
        }
	
}
?>