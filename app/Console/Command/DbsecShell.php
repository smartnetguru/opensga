<?php 
ini_set('memory_limit',"512M");
App::uses('AuditableConfig', 'Auditable.Lib');
class DbsecShell extends AppShell {
	public $uses = array('UemDra.DraCurso','UemDbsec.DbsecAvaliacaoTipo','UemDbsec.DbsecCurso','Curso','UnidadeOrganica','UemDbsec.DbsecDisciplina','Disciplina','UemDbsec.DbsecDisciplinaCurso','Planoestudo','Planoestudoano','UemDra.DraCurso','UemDbsec.DbsecEstudante','Aluno','UemDbsec.DbsecLeccionamento','Turma','Anolectivo','Semestrelectivo','Turma','CursosTurno','Matricula','UemDbsec.DbsecInscricao','Inscricao','User','Entidade','UemDra.DraConclusao');
        
        /**
         * @todo  Implementar se for necessario
         */
        public function importa_avaliacao_tipo(){
            $avaliacao_tipos = $this->DbsecAvaliacaoTipo->find('all');
            foreach($avaliacao_tipos as $at){
                debug($at);
            }
        }
        
        public function verifica_cursos(){
            $cursos = $this->DbsecCurso->find('all',array('conditions'=>array('relevante'=>1)));
            foreach($cursos as $curso){
                $curso_existe = $this->Curso->findByCodigo($curso['DbsecCurso']['curso_id']);
                if(!empty($curso_existe)){
                    $this->out("Sim");
                }
                else{
                    $fac_id = $curso['DbsecCurso']['dpt_id'];
                    $faculdade = $this->UnidadeOrganica->find('first',array('conditions'=>array('UnidadeOrganica.codigo'=>$fac_id,'UnidadeOrganica.nivel_unidade'=>2)));
                    
                    $curso_array = array(
					'Curso'=>array(
							'name'=>$curso['DbsecCurso']['curso_nome'],
							'grauacademico_id'=>$curso['DbsecCurso']['nivel'],
							'tipocurso_id'=>$curso['DbsecCurso']['nivel'],
							'unidade_organica_id'=>$faculdade['UnidadeOrganica']['id'],
							'codigo'=>$curso['DbsecCurso']['curso_id']
			)
			);
                    
			$this->Curso->create();
			$this->Curso->save($curso_array);
			$this->out('Curso Inserido--'.$this->Curso->id.'---'.$curso_array['Curso']['name']);
                }
            }
        }
        
        public function importa_disciplinas(){
            $disciplinas = $this->DbsecDisciplina->find('all');
            foreach($disciplinas as $disciplina){
                
                $codigo_existe = $this->Disciplina->findByCodigoAntigo($disciplina['DbsecDisciplina']['disc_id']);
                if(!empty($codigo_existe)){
                    debug($disciplina);
                    $this->out("Codigo");
                } else{
                    $nome_existe = $this->Disciplina->findByName($disciplina['DbsecDisciplina']['disc_nome']);{
                        if(!empty($nome_existe)){
                            debug($disciplina);
                            $this->out("Nome");
                        } else{
                            $array_disciplina = array(
                                'Disciplina'=>array(
                                    'codigo'=>$disciplina['DbsecDisciplina']['disc_id'],
                                    'name'=>$disciplina['DbsecDisciplina']['disc_nome'],
                                    'codigo_antigo'=>$disciplina['DbsecDisciplina']['disc_id']
                                )
                            );
                            $this->Disciplina->create();
                            $this->Disciplina->save($array_disciplina);
                            $this->out("Disciplina Criada--".$disciplina['DbsecDisciplina']['disc_id']);
                            
                        }
                }
                }
            }
        }
        
        public function importa_plano_estudo(){
            $disciplina_curso = $this->DbsecDisciplinaCurso->find('all');
            foreach($disciplina_curso as $dc){
                $curso = $this->Curso->findByCodigo($dc['DbsecDisciplinaCurso']['id_curso']);
                $plano_estudo_existe = $this->Planoestudo->find('first',array('conditions'=>array('curso_id'=>$curso['Curso']['id'],'ano_criacao'=>$dc['DbsecDisciplinaCurso']['curriculum'])));
                if(empty($plano_estudo_existe)){
                    $this->Planoestudo->create();
                    $array_plano_estudo = array(
                        'Planoestudo'=>array(
                            'name'=>$curso['Curso']['name']." - ".$dc['DbsecDisciplinaCurso']['curriculum'],
                            'curso_id'=>$curso['Curso']['id'],
                            'ano_criacao'=>$dc['DbsecDisciplinaCurso']['curriculum'],
                            'codigo'=>$curso['Curso']['codigo']."-".$dc['DbsecDisciplinaCurso']['curriculum']
                        )
                    );
                    $this->Planoestudo->save($array_plano_estudo);
                    $plano_estudo_id = $this->Planoestudo->id;
                } else{
                    $plano_estudo_id = $plano_estudo_existe['Planoestudo']['id'];
                }
                
                $disciplina = $this->Disciplina->findByCodigo($dc['DbsecDisciplinaCurso']['id_disc']);
                if(empty($disciplina)){
                    
                    $disciplina_dbsec = $this->DbsecDisciplina->findByDiscId($dc['DbsecDisciplinaCurso']['id_disc']);
                    $disciplina = $this->Disciplina->findByName($disciplina_dbsec['DbsecDisciplinaCurso']['disc_nome']);
                    if(empty($disciplina)){
                        die(debug($dc['DbsecDisciplinaCurso']['id_disc']));
                    }
                }

                if($dc['DbsecDisciplinaCurso']['semestre']==1){
                    $semestre_sequencial = $dc['DbsecDisciplinaCurso']['nivel']*($dc['DbsecDisciplinaCurso']['semestre']+1)-1;
                }
                if($dc['DbsecDisciplinaCurso']['semestre']==2){
                    $semestre_sequencial = $dc['DbsecDisciplinaCurso']['nivel']*$dc['DbsecDisciplinaCurso']['semestre'];
                }
                $array_plano_ano = array(
                    'Planoestudoano'=>array(
                        'planoestudo_id'=>$plano_estudo_id,
                        'ano'=>$dc['DbsecDisciplinaCurso']['nivel'],
                        'semestre'=>$dc['DbsecDisciplinaCurso']['semestre'],
                        'carga_total'=>$dc['DbsecDisciplinaCurso']['cargaHoraria'],
                        'creditos'=>$dc['DbsecDisciplinaCurso']['peso'],
                        'disciplina_id'=>$disciplina['Disciplina']['id'],
                        'codigo'=>$disciplina['Disciplina']['codigo']."-".$curso['Curso']['codigo']."-".$dc['DbsecDisciplinaCurso']['curriculum'],
                        'ramo_id'=>$dc['DbsecDisciplinaCurso']['ramo'],
                        'semestre_sequencial'=>$semestre_sequencial
                    )
                );
                $plano_ano_existe = $this->Planoestudoano->find('first',array('conditions'=>array('planoestudo_id'=>$plano_estudo_id,'disciplina_id'=>$disciplina['Disciplina']['id'],'ramo_id'=>$dc['DbsecDisciplinaCurso']['ramo'])));
                if(empty($plano_ano_existe)){
                    $this->Planoestudoano->create();
                $this->Planoestudoano->save($array_plano_ano);
                $this->out('Plano Ano Criado');
                } else{
                    $this->out("Plano existia-------------------------------------");
                    debug($plano_ano_existe);
                    die(debug($array_plano_ano));
                }
                
            }
        }
        
        public function verifica_estudantes(){
            $estudantes = $this->DbsecEstudante->find('all');
            $existem = 0;
            $nao_existem = 0;
            foreach($estudantes as $estudante){
                $this->Aluno->recursive=-1;
                $estudante_sga = $this->Aluno->findByCodigo($estudante['DbsecEstudante']['est_num']);
                if(empty($estudante_sga)){
                    $nao_existem++;
                    debug($estudante['DbsecEstudante']['est_num']);
                }
                else{
                    $existem++;
                    
                }
            }
            $this->out("Existem".$existem);
            $this->out("Nao existem".$nao_existem);
        }
        
        public function importa_leccionamento(){
            $leccionamentos = $this->DbsecLeccionamento->find('all');
            $i=0;
            foreach($leccionamentos as $lec){
                $this->Planoestudo->recursive= -1;
                $this->Curso->recursive = -1;
                $curso = $this->Curso->findByCodigo($lec['DbsecLeccionamento']['id_curso']);
                 $plano_estudo = $this->Planoestudo->find('first',array('conditions'=>array('curso_id'=>$curso['Curso']['id'],'ano_criacao'=>$lec['DbsecLeccionamento']['curriculum'])));
                $this->Anolectivo->recursive = -1;
                $anolectivo = $this->Anolectivo->findByAno($lec['DbsecLeccionamento']['ano']);
                $this->Disciplina->recursive = -1;
                $disciplina = $this->Disciplina->findByCodigo($lec['DbsecLeccionamento']['id_disc']);
                if(!empty($disciplina)){
                    $semestre_lectivo = $this->Semestrelectivo->find('first',array('conditions'=>array('anolectivo_id'=>$anolectivo['Anolectivo']['id'],'semestre'=>$lec['DbsecLeccionamento']['semestre'])));
                    if(empty($semestre_lectivo)){
                        $array_semestre = array(
                            'Semestrelectivo'=>array(
                                'codigo'=>$anolectivo['Anolectivo']['ano']."-".$lec['DbsecLeccionamento']['semestre'],
                                'anolectivo_id'=>$anolectivo['Anolectivo']['id'],
                                'semestre'=>$lec['DbsecLeccionamento']['semestre'],
                                'semestre_id'=>$lec['DbsecLeccionamento']['semestre'],
                            )
                        );
                        $this->Semestrelectivo->create();
                        $this->Semestrelectivo->save($array_semestre);
                        $semestre_lectivo = $this->Semestrelectivo->find('first',array('conditions'=>array('anolectivo_id'=>$anolectivo['Anolectivo']['id'],'semestre'=>$lec['DbsecLeccionamento']['semestre'])));
                    }
                    
                    $array_turma = array(
                        'Turma'=>array(
                            'anolectivo_id'=>$anolectivo['Anolectivo']['id'],
                            'planoestudo_id'=>$plano_estudo['Planoestudo']['id'],
                            'disciplina_id'=>$disciplina['Disciplina']['id'],
                            'curso_id'=>$plano_estudo['Planoestudo']['curso_id'],
                            'estadoturma_id'=>1,
                            'codigo'=>$lec['DbsecLeccionamento']['id'],
                            'anocurricular'=>$lec['DbsecLeccionamento']['nivel'],
                            'semestrecurricular'=>$lec['DbsecLeccionamento']['semestre'],
                            'name'=>$disciplina['Disciplina']['name']." - ".$lec['DbsecLeccionamento']['ano']." - ".$plano_estudo['Planoestudo']['name'],
                            'semestrelectivo_id'=>$semestre_lectivo['Semestrelectivo']['id'],
                            'unidade_organica_id'=>$curso['Curso']['unidade_organica_id']
                        )
                    );
                    
                    $this->Turma->create();
                    $this->Turma->save($array_turma);
                    $this->out("Turma Criada--".$array_turma['Turma']['name']." ------ -----  ".$this->Turma->id);
                }
            }
        }
        
        public function actualiza_semestres(){
            $anolectivos = $this->Anolectivo->find('all');
            foreach($anolectivos as $anolectivo){
                $semestre_lectivo = $this->Semestrelectivo->find('first',array('conditions'=>array('anolectivo_id'=>$anolectivo['Anolectivo']['id'])));
                    if(empty($semestre_lectivo)){
                        $array_semestre = array(
                            array(
                             'Semestrelectivo'=>array(
                                'codigo'=>$anolectivo['Anolectivo']['ano']."-1",
                                'anolectivo_id'=>$anolectivo['Anolectivo']['id'],
                                'semestre'=>1,
                                'semestre_id'=>1,
                            )   
                            ),
                            array(
                            'Semestrelectivo'=>array(
                                'codigo'=>$anolectivo['Anolectivo']['ano']."-1",
                                'anolectivo_id'=>$anolectivo['Anolectivo']['id'],
                                'semestre'=>2,
                                'semestre_id'=>2,
                            )    
                            )
                            
                        );
                        $this->Semestrelectivo->create();
                        $this->Semestrelectivo->saveAll($array_semestre);
                        $this->out($anolectivo['Anolectivo']['id']);
            }
        }
        
        }
        
        Public function actualiza_turnos(){
            $cursos = $this->DraCurso->find('all');
            foreach($cursos as $curso){
                $curso_sga= $this->Curso->findByCodigo($curso['DraCurso']['curso_id']);
                $array_curso_turno = array(
                    'CursosTurno'=>array(
                        'curso_id'=>$curso_sga['Curso']['id'],
                        'turno_id'=>$curso['DraCurso']['regime']
                    )
                );
                $this->CursosTurno->create();
                $this->CursosTurno->save($array_curso_turno);
                
                
        }
        }
        
        public function actualiza_turnos_dbsec(){
            $cursos = $this->DbsecCurso->find('all');
            foreach($cursos as $curso){
               $curso_sga= $this->Curso->findByCodigo($curso['DbsecCurso']['curso_id']);
               $curso_turno_existe = $this->CursosTurno->findByCursoId($curso_sga['Curso']['id']);
               if(empty($curso_turno_existe)){
                   $array_curso_turno = array(
                    'CursosTurno'=>array(
                        'curso_id'=>$curso_sga['Curso']['id'],
                        'turno_id'=>$curso['DbsecCurso']['regime']
                    )
                );
                $this->CursosTurno->create();
                $this->CursosTurno->save($array_curso_turno);
               }
                
            }
        }
        
        public function actualiza_turnos_matriculas_turmas(){
            $matriculas = $this->Matricula->find('all');
            foreach($matriculas as $matricula){
                $turno = $this->CursosTurno->findByCursoId($matricula['Matricula']['curso_id']);
                $this->Matricula->id=$matricula['Matricula']['id'];
            }
        }
        
        public function actualiza_matricula_plano(){
            $this->Matricula->recursive=-1;
            $matriculas = $this->Matricula->find('all',array('conditions'=>array('planoestudo_id'=>null)));
            $i=0;
            foreach($matriculas as $matricula){
                $this->Aluno->recursive = -1;
                $aluno = $this->Aluno->findById($matricula['Matricula']['aluno_id']);
                if($aluno['Aluno']['codigo']==''){
                    
                }else{
                    $aluno_dbsec = $this->DbsecEstudante->findByEstNum($aluno['Aluno']['codigo']);
                if(!empty($aluno_dbsec)){
                    $this->Planoestudo->recursive=-1;
                    $planoestudo = $this->Planoestudo->find('first',array('conditions'=>array('curso_id'=>$matricula['Matricula']['curso_id'],'ano_criacao'=>$aluno_dbsec['DbsecEstudante']['curriculum'])));
                    $this->Aluno->id = $aluno['Aluno']['id'];
                    $this->Aluno->set('planoestudo_id',$planoestudo['Planoestudo']['id']);
                    $this->Aluno->save();
                    $this->Matricula->id = $matricula['Matricula']['id'];
                    $this->Matricula->set('planoestudo_id',$planoestudo['Planoestudo']['id']);
                    $this->Matricula->save();
                }
                }
                
                $i++;
        debug($i);
        }
        
        }
        
        public function importa_inscricao(){
            $inscricaos = $this->DbsecInscricao->find('all');
            $i=0;
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            foreach($inscricaos as $inscricao){
                $this->Aluno->recursive=-1;
                
                $aluno = $this->Aluno->findByCodigo(trim($inscricao['DbsecInscricao']['num_est']));
              
                $this->Disciplina->recursive=-1;
                $disciplina = $this->Disciplina->findByCodigo($inscricao['DbsecInscricao']['id_disc']);
                $this->Turma->recursive = -1;
                $turma = $this->Turma->findByCodigo($inscricao['DbsecInscricao']['id_lec']);
                
                $this->Anolectivo->recursive=-1;
                $anolectivo = $this->Anolectivo->findByAno($inscricao['DbsecInscricao']['ano_lectivo']);
                $this->Matricula->recursive=-1;
                $matricula = $this->Matricula->find('first',array('conditions'=>array('aluno_id'=>$aluno['Aluno']['id'],'anolectivo_id'=>$anolectivo['Anolectivo']['id'])));
                if(empty($matricula)){
                    $nova_matricula = array(
                     'Matricula'=>array(
                        
                         'aluno_id'=>$aluno['Aluno']['id'],
                         'curso_id'=>$aluno['Aluno']['curso_id'],
                         'planoestudo_id'=>$aluno['Aluno']['planoestudo_id'],
                         'data'=>$inscricao['DbsecInscricao']['data_registo'],
                         'estadomatricula_id'=>0,
                         'user_id'=>1,
                         'anolectivo_id'=>$anolectivo['Anolectivo']['id'],
                         'tipo_matricula_id'=>0
                     )
                 );
                    
                    $this->Matricula->create();
                 $this->Matricula->save($nova_matricula);
                $matricula = $this->Matricula->find('first',array('conditions'=>array('aluno_id'=>$aluno['Aluno']['id'],'anolectivo_id'=>$anolectivo['Anolectivo']['id']))); 
                }
                $this->Curso->recursive=-1;
                $curso_frequencia = $this->Curso->findByCodigo($inscricao['DbsecInscricao']['id_curso_freq']);
                $turma_frequencia = $this->Turma->find('first',array('conditions'=>array('curso_id'=>$curso_frequencia['Curso']['id'],'disciplina_id'=>$disciplina['Disciplina']['id'],'anolectivo_id'=>$anolectivo['Anolectivo']['id'])));
                $curso = $this->Curso->findByCodigo($inscricao['DbsecInscricao']['id_curso_freq']);
                if(empty($turma)){
                    $turma = $this->Turma->find('first',array('conditions'=>array('curso_id'=>$curso['Curso']['id'],'disciplina_id'=>$disciplina['Disciplina']['id'],'anolectivo_id'=>$anolectivo['Anolectivo']['id'])));
                }
                
                $array_inscricao = array(
                    'Inscricao'=>array(
                        'aluno_id'=>$aluno['Aluno']['id'],
                        'turma_id'=>$turma['Turma']['id'],
                        'estadoinscricao_id'=>1,
                        'nota_frequencia'=>$inscricao['DbsecInscricao']['nota_freq'],
                        'nota_final'=>$inscricao['DbsecInscricao']['media'],
                        'data'=>$inscricao['DbsecInscricao']['data_registo'],
                        'matricula_id'=>$matricula['Matricula']['id'],
                        'tipo_inscricao_id'=>$inscricao['DbsecInscricao']['tipo_id'],
                        'nota_exame_normal'=>$inscricao['DbsecInscricao']['nota'],
                        'nota_exame_recorrencia'=>$inscricao['DbsecInscricao']['nota_rec'],
                        'estado_inscricao'=>$inscricao['DbsecInscricao']['aprovado'],
                        'turma_frequencia_id'=>$turma_frequencia['Turma']['id']
                    )
                );
                
                $this->Inscricao->create();
                $this->Inscricao->save($array_inscricao);
                $this->out("Inscricao Criada----- ".$this->Inscricao->id);
            }
        }
        
        public function normalize_str($str)
	{
		$invalid = array('Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z',
				'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A',
				'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E',
				'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
				'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y',
				'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a',
				'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e',  'ë'=>'e', 'ì'=>'i', 'í'=>'i',
				'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
				'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y',  'ý'=>'y', 'þ'=>'b',
				'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', "`" => "'", "´" => "'", "„" => ",", "`" => "'",
				"´" => "'", "“" => "\"", "”" => "\"", "´" => "'", "&acirc;€™" => "'", "{" => "",
				"~" => "", "–" => "-", "’" => "'");
	
		$str = str_replace(array_keys($invalid), array_values($invalid), $str);
	
		return $str;
	}
        public function geraEmailUem($apelido,$nome){
		
		$nome = $this->normalize_str($nome);
		$nome = trim(strtolower($nome));
		
		$apelido = strtolower(trim($this->normalize_str($apelido)));
		
		$nome = utf8_encode($nome);
		$apelido = utf8_encode($apelido);
		$nome = preg_replace('/[^a-zA-Z0-9\s]/s','',$nome);
		
		$nome = preg_replace('/\s+/', ' ', $nome);
		$nomes  = explode(' ',$nome);
		$email = $nomes[0].'.'.$apelido.'@uem.ac.mz';
		
		//Verificar se existe algum email assim
		$email_existe = $this->User->findByUsername($email);
		if($email_existe){
			if(count($nomes)>1){
				$segundo_nome = trim($nomes[1]);
				$email = $nomes[0].'.'.$segundo_nome[0].'.'.$apelido.'@uem.ac.mz';
				$email_existe1 = $this->User->findByUsername($email);
				
				if($email_existe1){
					$email = $nomes[0].'.'.$segundo_nome.'.'.$apelido.'@uem.ac.mz';
					$email_existe3 = $this->User->findByUsername($email);
					if($email_existe3){
					$email = $apelido.'.'.$nomes[0].'@uem.ac.mz';
				$email_existe2 = $this->User->findByUsername($email);
				if($email_existe2){
					$email = $apelido.'.'.$nomes[0].'.'.$email_existe2['User']['id'].'@uem.ac.mz';
				}
					}	
				}
				
			}
			else{
				$email = $apelido.'.'.$nomes[0].'@uem.ac.mz';
				$email_existe2 = $this->User->findByUsername($email);
				if($email_existe2){
					$email = $apelido.'.'.$nomes[0].'.'.$email_existe2['User']['id'].'@uem.ac.mz';
					
				}
			}
		}
		return strtolower($email);
	}
        
        public function importa_pessoa_dbsec(){
		App::import('Component','Auth');
		App::import('Controller','ComponentCollection');
		$collection = new ComponentCollection();
		$this->Auth = new AuthComponent($collection);
		
		$estudantes = $this->DbsecEstudante->find('all');
		$iii=0;
		foreach($estudantes  as $estudante){
                    $this->out($iii++);
                        $aluno = $this->Aluno->findByCodigo(trim($estudante['DbsecEstudante']['est_num']));
                        if(empty($aluno)){
			$dataSource = $this->User->getDataSource();
			
			$dataSource->begin();
			$email_pessoa = $this->geraEmailUem($estudante['DbsecEstudante']['apelido'],$estudante['DbsecEstudante']['nomes']);
			
			//Primeiro criar um user
			$user_array = array(
					'User'=>array(
							'username'=>$email_pessoa,
							'password'=>Security::hash('dra02062013', 'blowfish'),
							'codigocartao'=>$estudante['DbsecEstudante']['est_num'],
							'group_id'=>3,
							'estado_objecto_id'=>$estudante['DbsecEstudante']['status_id']
							
			)
			);

			$this->User->create();
			if($this->User->save($user_array)){
				$pessoa_array = array(
						'Entidade'=>array(
								
								'apelido'=>$estudante['DbsecEstudante']['apelido'],
								'nomes'=>$estudante['DbsecEstudante']['nomes'],
								'name'=>$estudante['DbsecEstudante']['nomes'].' '.$estudante['DbsecEstudante']['apelido'],
								
								'created'=>$estudante['DbsecEstudante']['data_registo'],
								'data_nascimento'=>$estudante['DbsecEstudante']['data_nascimento'],
								'user_id'=>$this->User->id,
								
						)
				);
				$this->Entidade->create();
				if($this->Entidade->save($pessoa_array)){
                                    $curso = $this->Curso->findByCodigo($estudante['DbsecEstudante']['id_curso']);
                                    $planoestudo = $this->Planoestudo->find('first',array('conditions'=>array('curso_id'=>$curso['Curso']['id'],'ano_criacao'=>$estudante['DbsecEstudante']['ano_ingresso'])));
					$aluno_array = array(
							'Aluno'=>array(
									'entidade_id'=>$this->Entidade->id,
									'codigo'=>$estudante['DbsecEstudante']['est_num'],
									'user_id'=>$this->User->id,
									'curso_id'=>$curso['Curso']['id'],
									'estadoentidade_id'=>$estudante['DbsecEstudante']['status_id'],
									'numero_estudante'=>$estudante['DbsecEstudante']['est_num'],
									'planoestudo_id'=>$planoestudo['Planoestudo']['id'],
									'ano_ingresso'=>$estudante['DbsecEstudante']['ano_ingresso'],
									'created'=>$estudante['DbsecEstudante']['data_registo'],
									'estado_aluno_id'=>$estudante['DbsecEstudante']['status_id']
					)
					);
					
					$id_curso = $pessoa['DraEstudante']['id_curso'];
					if($id_curso==null)$id_curso=0;
					$curso_dra = $this->DraCurso->find('first',array('conditions'=>array('curso_id'=>$id_curso)));
					$curso_sga = $this->Curso->find('first',array('conditions'=>array('Curso.codigo'=>$id_curso)));
					$aluno_array['Aluno']['curso_id']=$curso_sga['Curso']['id'];
					$aluno_array['Aluno']['curso_ingresso_id']=$curso_sga['Curso']['id'];
					$aluno_array['Aluno']['regime_ingresso_id']=$curso_dra['DraCurso']['regime'];
					$aluno_array['Aluno']['turno_ingresso']=$curso_dra['DraCurso']['regime'];
					$this->Aluno->create();
					if($this->Aluno->save($aluno_array)){
						
						
						$dataSource->commit();
					}
					else{
						var_dump($user_array);
						var_dump($pessoa_array);
						var_dump($aluno_array);
						$dataSource->showLog();
						$dataSource->rollback();
						$dataSource->showLog();
						App::uses('View', 'View');
						$null = null;
						$View = new View($null, false);
						$dump =  $View->element('sql_dump');
						CakeLog::error($dump);
						
						die();
					}
				}
			}
                        }
			
		}
	}
        
        public function importa_conclusao(){
            $conclusaos = $this->DraConclusao->find('all',array('conditions'=>array('ano_fim NOT'=>NULL)));
            $datasource = $this->Aluno->getDataSource();
                $datasource->begin();
                $i=0;
            foreach($conclusaos as $conclusao){
                $this->Aluno->recursive=-1;
                $aluno = $this->Aluno->findByCodigo(trim($conclusao['DraConclusao']['est_num']));
                if(!empty($aluno)){
                $curso = $this->Curso->findByCodigo($conclusao['DraConclusao']['curso_id']);
                $this->Aluno->id = $aluno['Aluno']['id'];
                $this->Aluno->set('estado_aluno_id',3);
                $this->Aluno->set('curso_id',$curso['Curso']['id']);
                $this->Aluno->set('data_conclusao',$conclusao['DraConclusao']['data_conclusao']);
                $this->Aluno->set('nota_conclusao',$conclusao['DraConclusao']['nota_final']);
                $this->Aluno->save();
                } else{
                    
                }
                $this->out($i++);
            }
          $datasource->commit();
        }
	
}

?>