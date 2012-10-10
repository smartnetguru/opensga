<?php
App::uses('AppController','Controller');
App::uses('Sanitize', 'Utility');
/**
 * Controller de alunos
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 *
 * @property Aluno $Aluno
 * @property Matricula $Matricula
 *
 */
class AlunosController extends AppController
{

	public $name = 'Alunos';

	function index()
    {
		$this->Aluno->recursive = 0;
		$escolas = $this->Aluno->Escola->find('list');
		$cursos = $this->Aluno->Curso->find('list');

        $this->set('alunos', $this->paginate(null, $this->_Filter));
		$this->set(compact('escolas','cursos'));
		$this->set('relatorio','aluno_relatorio');

	}

    function index_ajax()
    {
		$this->Aluno->recursive = 0;
        $conditions = array();
        $conditions['limit']=Sanitize::escape( $_GET['iDisplayLength'] );
        $conditions['offset']=Sanitize::escape( $_GET['iDisplayStart'] );
        $aColumns = array('Entidade.name','Aluno.codigo');

    	/*
    	 * Filtering
    	 * NOTE this does not match the built-in DataTables filtering which does it
    	 * word by word on any field. It's possible to do here, but concerned about efficiency
    	 * on very large tables, and MySQL's regex functionality is very limited
    	 */

    	if ( $_GET['sSearch'] != "" )
    	{
    		$conditions['conditions']['OR']=array();
    		for ( $i=0 ; $i<count($aColumns) ; $i++ )
    		{
    			$conditions['conditions']['OR'][$aColumns[$i]." LIKE"]="%".$_GET['sSearch']."%";
    		}

    		//debug($conditions);
    	}

        $alunos = $this->Aluno->find('all',$conditions);
        $alunos_count = $this->Aluno->find('count');
        $alunos_count_filter = $this->Aluno->find('count',$conditions);
        $iTotal=$alunos_count;
        $iFilteredTotal = $alunos_count_filter;
        $escolas = $this->Aluno->Escola->find('list');
        $cursos = $this->Aluno->Curso->find('list');

        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );


        $this->set('output',$output);
        $this->set('alunos',$alunos);
	}


    /**
     * @Todo Optimizar esta pagina
     * @Todo Colocar os links para as opcoes do estudante
     * @param type $id
     */
	function perfil_estudante($id = null){
        $this->Aluno->id=$id;
        if(!$this->Aluno->exists()){
            throw new NotFoundException('Esta aluno não existe no Sistema');
        }


        $this->Aluno->Inscricao->getAllCadeirasInscritasByAlunoSemestre($id);

          $this->Aluno->contain(array(
              'Matricula'=>array(
                  'Planoestudo','Turno'
              ),
              'Curso','Entidade'=>array(
                  'ProvinciaNascimento','CidadeNascimento','PaisNascimento','Genero','DocumentoIdentificacao'
              ),
              'AlunoNivelMedio'=>array(
                  'EscolaNivelMedio'
              )
          ));
          $aluno = $this->Aluno->find('first',array('conditions'=>array('Aluno.id'=>$id)));
          //debug($aluno);
         $this->Aluno->Inscricao->contain(array(
             'Turma'=>array(
                 'fields'=>array(
                     'id','disciplina_id','anocurricular','semestrecurricular'),
                     'Disciplina'=>array(
                         'fields'=>array('id','name')
                     )
                    ),
             'Matricula'=>array(
                 'fields'=>array('id','anolectivo_id'),
                 'Anolectivo'=>array(
                     'fields'=>array('id','ano')
                 )

             )
                )
            );
        $inscricoes_activas = $this->Aluno->Inscricao->find('all',array('conditions'=>array('Inscricao.aluno_id'=>$id,'Inscricao.estadoinscricao_id'=>1)));

         $this->Aluno->Inscricao->contain(array(
             'Turma'=>array(
                 'fields'=>array(
                     'id','disciplina_id','anocurricular','semestrecurricular'),
                     'Disciplina'=>array(
                         'fields'=>array('id','name')
                     )
                    ),
             'Matricula'=>array(
                 'fields'=>array('id','anolectivo_id'),
                 'Anolectivo'=>array(
                     'fields'=>array('id','ano')
                 )

             )
                )
            );
        $todas_inscricoes = $this->Aluno->Inscricao->find('all',array('conditions'=>array('Inscricao.aluno_id'=>$id)));

         $this->Aluno->Inscricao->contain(array(
             'Turma'=>array(
                 'fields'=>array(
                     'id','disciplina_id','anocurricular','semestrecurricular'),
                     'Disciplina'=>array(
                         'fields'=>array('id','name')
                     )
                    ),
             'Matricula'=>array(
                 'fields'=>array('id','anolectivo_id'),
                 'Anolectivo'=>array(
                     'fields'=>array('id','ano')
                 )

             )
                )
            );
        $cadeiras_aprovadas = $this->Aluno->Inscricao->find('all',array('conditions'=>array('Inscricao.aluno_id'=>$id)));

        $this->Aluno->Pagamento->contain(array(
            'Tipopagamento'
        ));

        if($this->Aluno->isMatriculado($id,$this->Session->read('SGAConfig.anolectivo_id'))){
            $this->set('is_matriculado',1);
        }
        else{
            $this->set('is_matriculado',0);
        }

        $is_bolseiro = $this->Aluno->isBolseiro($id)?1:0;

        $pagamentos = $this->Aluno->Pagamento->find('all',array('conditions'=>array('Pagamento.aluno_id'=>$id)));
        //debug($pagamentos);
		$this->set('aluno',$aluno);
		$users = $this->Aluno->User->find('list');
		$paises = $this->Aluno->Entidade->PaisNascimento->find('list');
		$cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$proveniencianomes = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
		$documentos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
		$areatrabalhos = $this->Aluno->Areatrabalho->find('list');
		$generos = $this->Aluno->Entidade->Genero->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$cursos = $this->Aluno->Curso->find('list');
		$planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');

        $is_bolseiro = $this->Aluno->isBolseiro($id,  $this->Session->read('SGAConfig.anolectivo_id'));

		$this->set(compact('cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades','inscricoes_activas','todas_inscricoes','cadeiras_aprovadas','pagamentos','is_bolseiro'));
	}

    public function seleccionar_aluno($r_controller,$r_action){

    }

    /**
     *Cadastro do aluno
     *
     * Registra os dados do aluno, faz a matricula inicial
     * @Todo Resolver o problema da foto do aluno
     * @todo garantir que a escola numca seja null
     * @todo testar bem a funcao que gera codigo
     * @todo criar manual de utilizador
     * @todo Nas listagens apenas devem aparecer codificadores e opcoes activas
     */
    function adicionar_estudante() {
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'].' '.$this->request->data['Entidade']['apelido'];
            if($this->Aluno->cadastraAluno($this->request->data)){
                $this->Session->setFlash("Aluno Registrado com Sucesso");
                $this->redirect(array('controller'=>'alunos','action'=>'perfil_estudante',$this->Aluno->id));
            }
            else{
                $this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default', array('class'=>'alert error'));
            }

                        }


        $cursos = $this->Aluno->Curso->find('list');

        $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');
        $users = $this->Aluno->Entidade->User->find('list');

        $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
        $escola_nivel_medios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
        $cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
        $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
        $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');
        $estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $this->set(compact('nacionalidades','cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documento_identificacaos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades','turnos','escola_nivel_medios','estado_civil'));
    }

    /**
     * Edita os dados de perfil do estudante
     * @todo Funciona sim, mas falta usar transacoes :)
     */
	function editar_estudante($id = null) {
	        $this->Aluno->id = $id;

		if (!$this->Aluno->exists()) {
			$this->Session->setFlash('Este Aluno não existe', 'default',array('class'=>'alert error'));

			$this->redirect(array('action' => 'index'));
		}

        if($this->request->is('post') || $this->request->is('put')){
            //Grava os dados do usuario
            $this->Aluno->User->id = $this->Aluno->field('user_id');
            $user_data = array(
                'User'=>array(
                    'name' => $this->request->data['Entidade']['name']
                )
            );
            $entidade_id = $this->Aluno->field('entidade_id');
            if($this->Aluno->User->save($user_data)){

                //Grava os dados da Entidade
                $this->Aluno->Entidade->id = $entidade_id;
                if($this->Aluno->Entidade->save($this->request->data)){
                     //Grava os dados do Aluno
                     if($this->Aluno->save($this->request->data)){
                         $this->Session->setFlash(__('Os dados do Estudante foram actualizados com Sucesso'),'default',array('alert success'));
                         $this->redirect(array('controller'=>'alunos','action'=>'perfil_estudante',$id));
                     }
                     else{
                         $this->Session->setFlash(__('Problemas ao Editar dados da do Estudante'),'default',array('alert error'));
                     }
                } else {
                    $this->Session->setFlash(__('Problemas ao Editar dados da Entidade'),'default',array('alert error'));
                }
            }
            else{
                $this->Session->setFlash(__('Problemas ao Editar dados do Usuário'),'default',array('alert error'));
            }


        }

		if (empty($this->data)) {
			$this->data = $this->Aluno->read(null, $id);

		}

        $users = $this->Aluno->Entidade->User->find('list');
        $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
        $escola_nivel_medios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
        $cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
        $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
        $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $this->set(compact('cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documento_identificacaos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades','turnos','escola_nivel_medios'));
	}




	function beforeRender(){
        parent::beforeRender();
        $this->set('current_section','estudantes');
    }


        public function capturar_foto($aluno_id){
            $this->Aluno->id = $aluno_id;
            if (!$this->Aluno->exists()) {
                throw new NotFoundException(__('Aluno Invalido'));
            }
            $entidade = $this->Aluno->findById($aluno_id);
            $this->Session->write('SGATemp.entidade_id_4_foto',$entidade['Entidade']['id']);
            $this->redirect(array('controller'=>'users','action'=>'captura_foto'));
        }

        public function matricular($aluno_id){
            $this->Aluno->id = $aluno_id;
            if (!$this->Aluno->exists()) {
                throw new NotFoundException(__('Aluno Invalido'));
            }
            if($this->request->is('post') || $this->request->is('put')){
                $this->request->data['Sessao']['anolectivo_id'] = $this->Session->read('SGAConfig.anolectivo_id');
                $this->request->data['Sessao']['user_id'] = $this->Session->read('Auth.User.id');
                if($this->Aluno->setNovaMatricula($this->request->data)){
                    $this->Session->setFlash('Aluno Matriculado com sucesso','default',array('alert success'));
                    $this->redirect(array('action'=>'index'));
                }
                else{
                    $this->Session->setFlash('Problemas ao matricular aluno. Verifique se o aluno ainda nao esta matriculado','default',array('alert error'));
                    $this->redirect(array('action'=>'index'));
                }
            }
            $cursos = $this->Aluno->Matricula->Curso->find('list');
            $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');
            $anolectivos = $this->Aluno->Matricula->Anolectivo->find('list');
            $turnos = $this->Aluno->Matricula->Turno->find('list');

            $this->set(compact('cursos','planoestudos','anolectivos','turnos'));
        }

        public function mostrar_foto($codigo){
            $this->viewClass = 'Media';

            App::uses('File', 'Utility');
            $path = APP.'Assets'.DS.'Fotos'.DS.'Estudantes'.DS;
            $file = new File($path.$codigo.'.jpg');
            if(!$file->exists()){
                $codigo = 'default_profile_picture';
                $path = WWW_ROOT.DS.'img'.DS;
            }


            $params = array(
                'id'        => $codigo.'.jpg',
                'name'      => 'fotografia',
                'extension' => 'jpg',
                'mimeType'  => array(
                    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                ),
                'path'      => $path
            );
            $this->set($params);
        }
        public function pagar_factura($aluno_id,$pagamento_id){
            $this->Aluno->id = $aluno_id;
            $this->Aluno->Pagamento->id = $pagamento_id;
            if(!$this->Aluno->exists()){
                throw new NotFoundException('Este Aluno não existe');
            }
            if(!$this->Aluno->exists()){
                throw new NotFoundException('Este pagamento não existe');
            }
            App::uses('CakeTime','Utility');
            $CakeTime = new CakeTime();
            $this->set('aluno',$this->Aluno->read(null,$aluno_id));
            $this->Aluno->Pagamento->contain(array('Aluno'=>array('Entidade'),'Tipopagamento','Anolectivo'));
            $pagamento = $this->Aluno->Pagamento->read(null,$pagamento_id);
            $data_limite = $CakeTime->toUnix($pagamento['Pagamento']['data_limite']);
            $data_hoje = $CakeTime->toUnix(date('Y-m-d'));
            $dias_atraso = $data_hoje - $data_limite;

            $dias_atraso_k = $dias_atraso/60/60/24/7;

            $multa = $pagamento['Pagamento']['valor']+($pagamento['Pagamento']['valor']*0.1*$dias_atraso_k);
            $multa_2 = $pagamento['Pagamento']['valor']*0.1*$dias_atraso_k;

            $this->set(compact('dias_atraso_k','multa','multa_2'));
            $this->set('pagamento',$pagamento);



        }


        public function matricula_simples($aluno_id){
            $this->Aluno->Id = $aluno_id;
            if(!$this->Aluno->exists()){

            }
            $aluno = $this->Aluno->find('first',array('conditions'=>array('Aluno.id'=>$aluno_id)));
            if($this->request->is('post')||$this->request->is('put')){

                //Grava os dados da Entidade
                $this->Aluno->Entidade->id = $aluno['Entidade']['id'];
                $this->Aluno->Entidade->save($this->request->data);

                //Grava os dados dos Alunos
                $this->Aluno->id = $aluno['Aluno']['id'];
                $this->Aluno->save($this->request->data);


            }


            $cursos  =$this->Aluno->Curso->find('list');

            $turnos = $this->Aluno->Matricula->Turno->find('list');

            $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');

            $generos = $this->Aluno->Entidade->Genero->find('list');

            $this->set(compact('aluno','cursos','turnos','documento_identificacaos','generos'));

        }

        public function ficha_cadastro($aluno_id){
            $this->pdfConfig['orientation']='landscape';

            $this->Aluno->id=$aluno_id;
        if(!$this->Aluno->exists()){
            throw new NotFoundException('Esta aluno não existe no Sistema');
        }

          $this->Aluno->contain(array(
              'Matricula'=>array(
                  'Planoestudo','Turno'
              ),
              'Curso'=>array(
                  'Faculdade'
              ),
              'Entidade'=>array(
                  'ProvinciaNascimento','CidadeNascimento','PaisNascimento','Genero','DocumentoIdentificacao','EstadoCivil'
              ),
              'AlunoNivelMedio'=>array(
                  'EscolaNivelMedio'
              )
          ));
          $aluno = $this->Aluno->find('first',array('conditions'=>array('Aluno.id'=>$aluno_id)));

          if($aluno['Entidade']['apelido']==null){
              $aluno['Entidade']['apelido'] = $this->Aluno->Entidade->getApelidoFromName($aluno['Entidade']['name']);
          }
          if($aluno['Entidade']['nomes']==null){
              $aluno['Entidade']['nomes'] = $this->Aluno->Entidade->getNomesFromName($aluno['Entidade']['name']);
          }
          if($aluno['Aluno']['ano_ingresso']==null){
              $aluno['Aluno']['ano_ingresso']= date('Y',strtotime($aluno['Aluno']['dataingresso']));
          }

          $this->Aluno->Inscricao->contain(array(
             'Turma'=>array(
                 'fields'=>array(
                     'id','disciplina_id','anocurricular','semestrecurricular','anolectivo_id'),
                     'Disciplina'=>array(
                         'fields'=>array('id','name')
                     ),
                 'Anolectivo'
            ),
             'Matricula'=>array(
                 'fields'=>array('id','anolectivo_id'),
                 'Anolectivo'=>array(
                     'fields'=>array('id','ano')
                 )

             ),
              'Avaliacao'=>array()
                )
            );
          $inscricaos = $this->Aluno->Inscricao->find('all',array('conditions'=>array('Inscricao.aluno_id'=>$aluno_id)));
          //die(debug($inscricaos));
          $this->set('has_foto_entidade',$this->Aluno->hasFoto($aluno['Aluno']['codigo']));
          Configure::write('debug',0);

		$this->set(compact('aluno','inscricaos'));
        }
}