<?php 
ini_set('memory_limit',"2048M");
class DraShell extends AppShell {
	public $uses = array('UemDra.DraEscola','UemDra.Faculdade','UemDra.DraSeccao','UemDra.DraDepartamento','UemDra.DraProvincia','UemDra.DraCurso','UemDra.DraPessoa','Provincia','UnidadeOrganica','Curso','User','Entidade','Aluno','UemDra.DraMatricula','Matricula','Anolectivo','EscolaNivelMedio','UemDra.DraHistorico','HistoricoCurso','MudancaCurso','UemDra.DraMudancaCurso','UemDra.DraEstudanteHistorico','UemDra.DraObservacaoEstudante','AlunoEstado','MotivoEstadoAluno');
	
	public function main() {
		$this->out('Hello world.');
	}
	
	public function getCodigoProvincia($codigo_antigo){
		$provincia = $this->DraProvincia->findById($codigo_antigo);
		
		$nome_provincia = $provincia['DraProvincia']['nome'];
		
		$provincia2 = $this->Provincia->findByName($nome_provincia);
		
		return $provincia2['Provincia']['id'];
	}
	
	public function importa_unidade_organica(){
		$this->out('Inicio da Importacao.');
		
		$this->out('--------------Importando Faculdades--------------------');
		$faculdades = $this->Faculdade->find('all');
		foreach($faculdades as $faculdade){
			$codigo_provincia = $this->getCodigoProvincia($faculdade['Faculdade']['provincia_id']);
			
			$faculdade_array = array(
					'UnidadeOrganica'=>array(
							'name'=>$faculdade['Faculdade']['nome'],
							'codigo'=>trim($faculdade['Faculdade']['fac_id']),
							'tipo_unidade_organica_id'=>1,
							'nivel_unidade'=>1
							
			)
					
			);
			$this->UnidadeOrganica->create();
			$this->UnidadeOrganica->save($faculdade_array);
			$this->out('Faculdade Inseriida--'.$this->UnidadeOrganica->id.'---'.$faculdade_array['UnidadeOrganica']['name']);
		}
		$this->out('Faculdades Importadas');
		
		$this->out('--------------Importando Departamentos--------------------');
		$departamentos = $this->DraDepartamento->find('all');
		foreach($departamentos as $departamento){
			
			$fac_id = $departamento['DraDepartamento']['fac_id'];
			$fac_id = trim($fac_id);
			
			$faculdade = $this->UnidadeOrganica->find('first',array('conditions'=>array('UnidadeOrganica.codigo'=>$fac_id,'UnidadeOrganica.nivel_unidade'=>1)));
			
			$faculdade_array = array(
					'UnidadeOrganica'=>array(
							'name'=>$departamento['DraDepartamento']['nome'],
							'codigo'=>trim($departamento['DraDepartamento']['dept_id']),
							'tipo_unidade_organica_id'=>2,
							'nivel_unidade'=>2,
							'parent_id'=>$faculdade['UnidadeOrganica']['id']
								
					)
		);
			
			$this->UnidadeOrganica->create();
			$this->UnidadeOrganica->save($faculdade_array);
			$this->out('Departamento Inserido--'.$this->UnidadeOrganica->id.'---'.$faculdade_array['UnidadeOrganica']['name']);
			
		}
		
		$this->out('--------------Importando Seccoes--------------------');
		
	}
	
	
	public function importa_curso(){
		$cursos  = $this->DraCurso->find('all');
		foreach($cursos as $curso){
			
			$fac_id = $curso['DraCurso']['dpt_id'];
			$faculdade = $this->UnidadeOrganica->find('first',array('conditions'=>array('UnidadeOrganica.codigo'=>$fac_id,'UnidadeOrganica.nivel_unidade'=>2)));
			
			$curso_array = array(
					'Curso'=>array(
							'name'=>$curso['DraCurso']['curso_nome'],
							'grauacademico_id'=>$curso['DraCurso']['nivel'],
							'tipocurso_id'=>$curso['DraCurso']['nivel'],
							'unidade_organica_id'=>$faculdade['UnidadeOrganica']['id'],
							'codigo'=>$curso['DraCurso']['curso_id']
			)
			);
			$this->Curso->create();
			$this->Curso->save($curso_array);
			$this->out('Curso Inserido--'.$this->Curso->id.'---'.$curso_array['Curso']['name']);
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
	public function importa_pessoa(){
		App::import('Component','Auth');
		App::import('Controller','ComponentCollection');
		$collection = new ComponentCollection();
		$this->Auth = new AuthComponent($collection);
		
		$pessoas = $this->DraPessoa->find('all');
		$iii=0;
		foreach($pessoas as $pessoa){
		
			$dataSource = $this->User->getDataSource();
			
			$dataSource->begin();
			$email_pessoa = $this->geraEmailUem($pessoa['DraPessoa']['apelido'],$pessoa['DraPessoa']['nomes']);
			$this->out($email_pessoa);
			//Primeiro criar um user
			$user_array = array(
					'User'=>array(
							'username'=>$email_pessoa,
							'password'=>Security::hash('dra02062013', 'blowfish'),
							'codigocartao'=>$pessoa['DraEstudante']['est_num'],
							'group_id'=>3,
							'estado_objecto_id'=>$pessoa['DraEstudante']['status']
							
			)
			);

			$this->User->create();
			if($this->User->save($user_array)){
				$pessoa_array = array(
						'Entidade'=>array(
								'codigo'=>$pessoa['DraPessoa']['id'],
								'apelido'=>$pessoa['DraPessoa']['apelido'],
								'nomes'=>$pessoa['DraPessoa']['nomes'],
								'name'=>$pessoa['DraPessoa']['nomes'].' '.$pessoa['DraPessoa']['apelido'],
								'nome_pai'=>$pessoa['DraPessoa']['pai_nome'],
								'nome_mae'=>$pessoa['DraPessoa']['mae_nome'],
								'nacionalidade'=>$pessoa['DraPessoa']['nacionalidade'],
								'pais_nascimento'=>$pessoa['DraPessoa']['nacionalidade'],
								'created'=>$pessoa['DraPessoa']['data_registo'],
								'data_nascimento'=>$pessoa['DraPessoa']['data_nascimento'],
								'user_id'=>$this->User->id,
								'estado_civil'=>$pessoa['DraPessoa']['estado_civil'],
								'cidade_nascimento'=>$pessoa['DraPessoa']['distrito'],
						)
				);
				$this->Entidade->create();
				if($this->Entidade->save($pessoa_array)){
					$aluno_array = array(
							'Aluno'=>array(
									'entidade_id'=>$this->Entidade->id,
									'codigo'=>$pessoa['DraEstudante']['est_num'],
									'user_id'=>$this->User->id,
									'curso_id',
									'estadoentidade_id'=>$pessoa['DraEstudante']['status'],
									'numero_estudante'=>$pessoa['DraEstudante']['est_num'],
									'aluno_via_admissao_id'=>$pessoa['DraEstudante']['via_ingresso'],
									'ano_ingresso'=>$pessoa['DraEstudante']['ano_ingresso'],
									'created'=>$pessoa['DraEstudante']['data_registo'],
									'estado_aluno_id'=>$pessoa['DraEstudante']['status']
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
						
						$this->out($iii.'----User Inserido--'.$this->User->id.'---'.$user_array['User']['username']);
						$iii++;
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
	
	public function actualiza_passwords(){
		$this->User->recursive=-1;
		$users = $this->User->find('all');
		foreach($users as $user){
			$user_id = $user['User']['id'];
			$this->User->id=$user_id;
			if($user_id==1)
				$senha2=Security::hash('chimoio2007', 'blowfish');
			else
				$senha2=Security::hash('dra02062013', 'blowfish');
			$this->User->set('password',$senha2);
			$this->User->save();
			var_dump($user_id);
			
		}
	}
	
	public function valida_alunos_importados(){
		var_dump("inicio");
		$this->out("teste");
		$alunos_dra = $this->DraPessoa->find('all');
		$numeros_dra = Hash::extract($alunos_dra, '{n}.DraEstudante.est_num');
		
		$this->Aluno->recursive=-1;
		$alunos_sga = $this->Aluno->find('all');
		$numeros_sga = Hash::extract($alunos_sga, '{n}.Aluno.codigo');
		var_dump(count($numeros_dra));
		var_dump(count($numeros_sga));
		$resultado = array_diff($numeros_dra,$numeros_sga);
		var_dump(count($resultado));
		sort($resultado);
		
		var_dump(count($resultado));
		CakeLog::error(json_encode($resultado));
		var_dump("hehe");
		
	}
	
	public function actualiza_apelido(){
		$this->Entidade->recursive = -1;
		$entidades = $this->Entidade->find('all');
		
		foreach($entidades as $entidade){
			$this->Entidade->id=$entidade['Entidade']['id'];
			$nomes = explode(" ",$entidade['Entidade']['name']);
			$apelido = end($nomes);
			$this->Entidade->set('apelido',$apelido);
			$this->Entidade->save();
			$this->out($entidade['Entidade']['id']);
		}
	}
        
        public function importa_matriculas(){
             $dra_matriculas = $this->DraMatricula->find('all');
             foreach($dra_matriculas as $matricula){
                 $this->Aluno->recursive = -1;
                 $aluno = $this->Aluno->findByCodigo($matricula['DraMatricula']['est_num']);
                 
                 $ano = $matricula['DraMatricula']['ano_lectivo'];
                 
                 $ano_lectivo = $this->Anolectivo->findByAno($ano);
                 if(empty($ano_lectivo)){
                     $novo_ano_lectivo = array(
                         'Anolectivo'=>array(
                             'ano'=>$ano,
                             'num_semestre'=>2
                         )
                     );
                     $this->Anolectivo->create();
                     $this->Anolectivo->save($novo_ano_lectivo);
                     $ano_lectivo = $this->Anolectivo->findByAno($ano);
                 }
                 
                 $nova_matricula = array(
                     'Matricula'=>array(
                         'codigo'=>$matricula['DraMatricula']['id'],
                         'aluno_id'=>$aluno['Aluno']['id'],
                         'curso_id'=>$aluno['Aluno']['curso_id'],
                         'planoestudo_id'=>null,
                         'data'=>$matricula['DraMatricula']['data'],
                         'estadomatricula_id'=>$matricula['DraMatricula']['apagado'],
                         'user_id'=>1,
                         'anolectivo_id'=>$ano_lectivo['Anolectivo']['id'],
                         'tipo_matricula_id'=>$matricula['DraMatricula']['reingresso']
                     )
                 );
                 $this->Matricula->create();
                 $this->Matricula->save($nova_matricula);
             }
        }
        
        
        public function importa_escolas(){
            $escolas  = $this->DraEscola->find('all');
            foreach($escolas as $escola){
               $array_escola = array(
                  'EscolaNivelMedio'=>array(
                      'name' =>$escola['DraEscola']['nome'],
                      'provincia_id'=>$this->getCodigoProvincia($escola['DraEscola']['prov_id']),
                      'distrito_id'=>$escola['DraEscola']['dist_id'],
                      'pais_id'=>152
                  ) 
               );
               
               $this->EscolaNivelMedio->create();
               $this->EscolaNivelMedio->save($array_escola);
                $this->out($this->EscolaNivelMedio->id);
            }
        }
        
        
        public function importa_mudanca_curso(){
            $historicos = $this->DraMudancaCurso->find('all');
            foreach($historicos as $historico){
                
                $this->Aluno->contain();
                $aluno = $this->Aluno->findByCodigo(trim($historico['DraMudancaCurso']['est_num']));
                $this->Curso->contain();
                $curso_sga = $this->Curso->find('first',array('conditions'=>array('Curso.codigo'=>trim($historico['DraMudancaCurso']['curso_id_ant']))));
                $this->Curso->contain();
                $curso_sga_2 = $this->Curso->find('first',array('conditions'=>array('Curso.codigo'=>trim($historico['DraMudancaCurso']['curso_id_act']))));
                
                $array_historico = array(
                    'MudancaCurso'=>array(
                        'aluno_id'=>$aluno['Aluno']['id'],
                        'codigo'=>$historico['DraMudancaCurso']['id'],
                        'curso_antigo'=>$curso_sga['Curso']['id'],
                        'curso_novo'=>$curso_sga_2['Curso']['id'],
                        'data_mudanca'=>$historico['DraMudancaCurso']['data_registo'],
                        'observacao'=>$historico['DraMudancaCurso']['observacao']
                    )
                );
                
                $this->MudancaCurso->create();
               $this->MudancaCurso->save($array_historico);
                $this->out($this->MudancaCurso->id);
            }
        }
        
                public function importa_historico_curso(){
            $historicos = $this->DraHistorico->find('all');
            foreach($historicos as $historico){
                
                $this->Aluno->contain();
                $aluno = $this->Aluno->findByCodigo(trim($historico['DraHistorico']['est_num']));
                $this->Curso->contain();
                $curso_sga = $this->Curso->find('first',array('conditions'=>array('Curso.codigo'=>trim($historico['DraHistorico']['curso_id']))));
                $this->Anolectivo->contain();
                $ano_lectivo_ingresso = $this->Anolectivo->findByAno($historico['DraHistorico']['ano_ingresso']);
                $this->Anolectivo->contain();
                $ano_lectivo_fim = $this->Anolectivo->findByAno($historico['DraHistorico']['ano_fim']);
                $array_historico = array(
                    'HistoricoCurso'=>array(
                        'aluno_id'=>$aluno['Aluno']['id'],
                        'curso_id'=>$curso_sga['Curso']['id'],
                        'ano_ingresso'=>$historico['DraHistorico']['ano_ingresso'],
                        'ano_fim'=>$historico['DraHistorico']['ano_fim'],
                        'ano_lectivo_ingresso'=>$ano_lectivo_ingresso['Anolectivo']['id'],
                        'ano_lectivo_fim'=>$ano_lectivo_fim['Anolectivo']['id'],
                        'nota_final'=>$historico['DraHistorico']['nota_final'],
                        'data_conclusao'=>$historico['DraHistorico']['data_conclusao'],
                        'conclusao_confirmada'=>$historico['DraHistorico']['conclusao_confirm']
                    )
                );
                $this->HistoricoCurso->create();
                $this->HistoricoCurso->save($array_historico);
                $this->out($this->HistoricoCurso->id);
            }
        }
        
        public function importa_estudante_historico(){
            $estudante_historico = $this->DraEstudanteHistorico->find('all');
            foreach($estudante_historico as $eh){
                $this->Aluno->contain();
                $aluno = $this->Aluno->findByCodigo(trim($eh['DraEstudanteHistorico']['est_num']));
                
                $array_estado = array(
                    'AlunoEstado'=>array(
                        'aluno_id'=>$aluno['Aluno']['id'],
                        'estado_anterior'=>$eh['DraEstudanteHistorico']['status_anterior'],
                        'estado_actual'=>$eh['DraEstudanteHistorico']['status_actual'],
                        'motivo_estado_aluno_id'=>$eh['DraEstudanteHistorico']['observacao_id'],
                        'observacao'=>$eh['DraEstudanteHistorico']['observacao'],
                        'data_mudanca'=>$eh['DraEstudanteHistorico']['data_registo']
                    )
                );
                $this->AlunoEstado->create();
                $this->AlunoEstado->save($array_estado);
                $this->out($this->AlunoEstado->id);
                
            }
        }
        
        public function importa_observacao_estudante(){
            $observacao = $this->DraObservacaoEstudante->find('all');
            foreach($observacao as $o){
                $array_motivo = array(
                    'MotivoEstadoAluno'=>array(
                        'name'=>$o['DraObservacaoEstudante']['descricao']
                    )
                );
                
                $this->MotivoEstadoAluno->create();
                $this->MotivoEstadoAluno->save($array_motivo);
                $this->out($this->MotivoEstadoAluno->id);
            }
        }
	
	
}

?>