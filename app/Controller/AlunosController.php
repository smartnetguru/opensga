<?php
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
 App::uses('Sanitize', 'Utility');
 
class AlunosController extends AppController {

	var $name = 'Alunos';

	function index() {
		$this->Aluno->recursive = 0;
		 
            $this->set('alunos', $this->paginate(null, $this->_Filter));
		
		$escolas = $this->Aluno->Escola->find('list');
		$cursos = $this->Aluno->Curso->find('list');
		
		$this->set(compact('escolas','cursos'));
		$this->set('relatorio','aluno_relatorio');
		//$this->layout='3_colunas';
		
	}
        
            function index_ajax() {
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
	        App::Import('Model','Matricula');
	        $Matricula = new Matricula;			
		if (!$id) {
			$this->Session->setFlash('ID Invalido', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}

          $this->Aluno->contain(array(
              'Matricula'=>array(
                  'Planoestudo','Turno'
              ),
              'Curso','Entidade'=>array(
                  'Provincia','Cidade','Paise','Genero','Documento'
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
        $inscricoes_activas = $this->Aluno->Inscricao->find('all',array('conditions'=>array('Inscricao.aluno_id'=>$id)));
        
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
        $pagamentos = $this->Aluno->Pagamento->find('all',array('conditions'=>array('Pagamento.aluno_id'=>$id)));
        //debug($pagamentos);
		$this->set('aluno',$aluno);
		$users = $this->Aluno->User->find('list');
		$paises = $this->Aluno->Entidade->Paise->find('list');
		$cidades = $this->Aluno->Entidade->Cidade->find('list');
		$provincias = $this->Aluno->Entidade->Provincia->find('list');
        $provenienciacidades = $this->Aluno->Entidade->Cidade->find('list');
		$proveniencianomes = $this->Aluno->Entidade->Provincia->find('list');
		$documentos = $this->Aluno->Entidade->Documento->find('list');
		$areatrabalhos = $this->Aluno->Areatrabalho->find('list');
		$generos = $this->Aluno->Entidade->Genero->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$cursos = $this->Aluno->Curso->find('list');
		$planoestudos = $Matricula->Planoestudo->find('list');
		
		$this->set(compact('cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades','inscricoes_activas','todas_inscricoes','cadeiras_aprovadas','pagamentos'));
	}

    /**
     *Cadastro do aluno
     * 
     * Registra os dados do aluno, faz a matricula inicial e gera os pagamentos para o primeiro semestre
     * @Todo Resolver o problema da foto do aluno
     * @todo Garantir que so sao gerados pagamentos para alunos que devem pagar(Pos laboral,etc.). Possivelmente o funcionario pode escolher quais pagamentos vai gerar
     * @todo garantir que a escola numca seja null 
     * @todo testar bem a funcao que gera codigo
     * @todo criar manual de utilizador
     * @todo Nas listagens apenas devem aparecer codificadores e opcoes activas
     */
    function adicionar_estudante() {
        if ($this->request->is('post') || $this->request->is('put')) {
            $data_matricula = array();
            
            $dados = $this->request->data;
            
            $dados['Aluno']['codigo'] = $this->Aluno->geraCodigo();
            
            //Grava os dados do Usuario
            $this->Aluno->User->create();
            $dados['User']['username'] = $dados['Aluno']['codigo'];
            $dados['User']['password'] = md5($dados['Aluno']['codigo']);
            $dados['User']['codigocartao'] = $dados['Aluno']['codigo'];
            $dados['User']['name'] = $this->data['Entidade']['name'];
            $dados['User']['group_id'] = 3;
            if($this->Aluno->User->save($dados)){
                
                //Grava os dados da Entidade
                $dados['Aluno']['user_id'] = $this->Aluno->User->getLastInsertID();
                $dados['Entidade']['user_id']=$this->Aluno->User->getLastInsertID();
                $this->Aluno->Entidade->create();
                if($this->Aluno->Entidade->save($dados)){
                    
                    //Grava os dados do Aluno
                    $dados['Aluno']['entidade_id'] = $this->Aluno->Entidade->getLastInsertID();
                    //Escola nao pode ser null
                    if(!isset($dados['Aluno']['escola_id'])){
                        $dados['Aluno']['escola_id']=1;
                    }
                    $this->Aluno->create();
                    if ($this->Aluno->save($dados)) {

                        //Pega os dados da matricula e realiza a matricula
                        $data_matricula['aluno_id']= $this->Aluno->getInsertID();
                        $data_matricula['curso_id'] = $this->data['Aluno']['curso_id'];
                        $data_matricula['planoestudo_id'] = $this->data['Aluno']['planoestudo_id'];
                        $data_matricula['estadomatricula_id'] = 1;
                        $data_matricula['data'] = $this->data['Aluno']['dataingresso'];
                        $data_matricula['user_id'] = $this->Session->read('Auth.User.id');
                        $data_matricula['anolectivo_id'] = $this->Session->read('SGAConfig.anolectivo_id');
                        $data_matricula['turno_id'] = $this->data['Aluno']['turno_id'];
                        $data_matricula['nivel'] = $this->data['Aluno']['nivel'];

                        $matricula_gravar=array('Matricula'=>$data_matricula);
                        $this->Aluno->Matricula->create();
                        if($this->Aluno->Matricula->save($matricula_gravar)){
                            
                            //Registra os dados do pagamento
                            $this->Aluno->Pagamento->gerarPagamentos($this->Session->read('SGAConfig.anolectivo_id'),$this->Aluno->getLastInsertID(),$this->Session->read('SGAConfig.semestre'));
                            $this->Session->setFlash('Aluno Registrado com sucesso</p><p>A matricula do aluno foi registrada com sucesso</p>','default', array('class'=>'alert success'));
                            $this->redirect(array('controller'=>'inscricaos','action' => 'inscrever',$this->Aluno->getInsertID(),$this->Aluno->Matricula->getInsertID()));

                        } else {
                            $this->Session->setFlash('Problemas ao registrar a matricula deste aluno, por favor matricule de novo.','default',array('class'=>'alert error'));
                        }
                    } else { //Falhou o registro do pagamento
                        $this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default', array('class'=>'alert error'));
                    }
                    
                } else{ //falhou o registro da entidade
                    $this->Session->setFlash('Problemas ao registrar os dados da Entidade', 'default', array('class'=>'alert error'));
                }
                
                
            }
            else{ //falhou o registro do usuario
                $this->Session->setFlash(__('Problemas agravar os dados do Usuario'),'default',array('class'=>'alert error'));
            }
            
            
            


        }
        $cursos = $this->Aluno->Curso->find('list');

        $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');
        $users = $this->Aluno->Entidade->User->find('list');
        $paises = $this->Aluno->Entidade->Paise->find('list');
        $escola_nivel_medios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
        $cidades = $this->Aluno->Entidade->Cidade->find('list');
        $provincias = $this->Aluno->Entidade->Provincia->find('list');
        $provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
        $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
        $documentos = $this->Aluno->Entidade->Documento->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->Cidade->find('list');
        $this->set(compact('cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades','turnos','escola_nivel_medios'));
    }

	function editar_estudante($id = null) {
	        $this->Aluno->id = $id;
            
		if (!$this->Aluno->exists()) {
			$this->Session->setFlash('Este Aluno não existe', 'default',array('class'=>'alert error'));

			$this->redirect(array('action' => 'index'));
		}
        if($this->request->is('post') || $this->request->is('put')){
            if($this->request->data['Form']['aluno_id']!=$id){
                throw new NotFoundException('Tentativa de Fraude');
                $this->redirect(array('controller'=>'users','action'=>'logout'));
            }
            
            //Grava os dados do usuario
            $this->Aluno->User->id = $this->request->data['Form']['user_id'];
            $user_data = array(
                'User'=>array(
                    'name' => $this->request->data['Entidade']['name']
                )
            );
            if($this->Aluno->User->save($user_data)){
                
                //Grava os dados da Entidade
                $this->Aluno->Entidade->id = $this->request->data['Form']['entidade_id'];
                if($this->Aluno->Entidade->save($this->request->data)){
                     //Grava os dados do Aluno
                     if($this->Aluno->save($this->request->data)){
                         $this->Session->setFlash('Os dados do Estudante foram actualizados com Sucesso','default',array('alert success'));
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
            
            $aluno = $this->Aluno->findById($id);
            debug($aluno);
            die(debug($this->request->data));
        }
        
		if (!empty($this->data)) {
			if ($this->Aluno->save($this->data)) {
				$this->Session->setFlash('Os dados do aluno foram editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados do aluno. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Aluno->read(null, $id);
			
		}
		 $users = $this->Aluno->Entidade->User->find('list');
        $paises = $this->Aluno->Entidade->Paise->find('list');
        $escola_nivel_medios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
        $cidades = $this->Aluno->Entidade->Cidade->find('list');
        $provincias = $this->Aluno->Entidade->Provincia->find('list');
        $provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
        $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
        $documentos = $this->Aluno->Entidade->Documento->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->Cidade->find('list');
        $this->set(compact('cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades','turnos','escola_nivel_medios'));
	}




	function beforeRender(){
        parent::beforeRender();	
        $this->set('current_section','estudantes');
    }
		
	function ajax_update_cidade(){
		//var_dump($teste);
		
		$this->layout = 'ajax';
	}
        function pdf_index($id = null){
		    //App::Import('Model','Logmv');
	        //$logmv = new Logmv;
           Configure::write('debug',0); // Otherwise we cannot use this method while developing
             if (empty($this->data)) {
			$this->data = $this->Aluno->read(null, $id);
		}
		$users = $this->Aluno->User->find('list');
		$paises = $this->Aluno->Paise->find('list');
		$cidades = $this->Aluno->Cidade->find('list');
		$provincias = $this->Aluno->Provincia->find('list');
		$documentos = $this->Aluno->Documento->find('list');
		$areatrabalhos = $this->Aluno->Areatrabalho->find('list');
		//$generos = $this->Aluno->Generos->find('list');
		$generos = $this->Aluno->Genero->find('list');
		$this->set(compact('users', 'Paises', 'Cidades', 'Provincias', 'Documentos', 'tg0010areatrabalhos', 'generos'));
		  
		   $teste = array();
		   $teste[] = $id;
		   $teste[] = "Teste2";
           $this->set('teste1',$teste);
		   $this->layout = 'pdf'; //this will use the pdf.ctp layout
           //$this->render('/Alunos/pdf_teste');
		   $this->render();
        }
		
		function pdf_index_alunos(){
		      //App::Import('Model','Logmv');
	          //$logmv = new Logmv;
              Configure::write('debug',0); // Otherwise we cannot use this method while developing
		      $users = $this->Aluno->User->find('list');
			  $aluno = $this->Aluno->find('all');
		      $paises = $this->Aluno->Paise->find('list');
		      $cidades = $this->Aluno->Cidade->find('list');
		      $provincias = $this->Aluno->Provincia->find('list');
		      $documentos = $this->Aluno->Documento->find('list');
		      $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
              $cursos = $this->Aluno->Curso->find('list');
		      $this->set(compact('users', 'Paises', 't0003cursos','Cidades', 'Provincias', 'Documentos', 'tg0010areatrabalhos'));
            $listas = array();
             foreach ($aluno as $m){
                $lista = array();
                $lista[] =$m["Aluno"]["id"];
				$lista[] =$m["Aluno"]["codigo"];
				$lista[] =$m["Aluno"]["name"];
				
				  
				//   $lista[] =$m["Cursos"]["name"];
				//var_dump($m["Curso"]["name"]);
               // $listas[] =$m["Aluno"]["name"];
				//$listas[] =$m["Aluno"]["empresanome"];
				$listas[] =$lista;
                }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
		 //  $this->render('/Alunos/pdf_teste');
        }

		function exportar_excel(){
			App::import('Vendor', 'Spreadsheet_Excel_Writer', array('file' => 'Spreadsheet/Excel/Writer.php'));
			
			// Creating a workbook
			$workbook = new Spreadsheet_Excel_Writer();
			$format_bold =& $workbook->addFormat();
			$format_bold->setBold();
			
			$format_escola =& $workbook->addFormat();
			$format_escola->setBold();
			$format_escola->setAlign('center');
			
			$format_titulo =& $workbook->addFormat();
			$format_titulo->setBold();
			$format_titulo->setAlign('center');

			// sending HTTP headers
			$workbook->send('alunos_por_curso.xls');
			
			$cursos = $this->Aluno->Curso->find('list');
			
			foreach($cursos as $k=>$v){
				$this->Aluno->Matricula->recursive = 1;
				$alunos = $this->Aluno->Matricula->find('all',array('conditions'=>array('Matricula.curso_id'=>$k),'fields'=>array('Aluno.codigo','Aluno.name','Curso.name','Curso.codigo')));
				// Creating a worksheet
				$worksheet =& $workbook->addWorksheet($alunos[0]['Curso']['codigo']);
				$worksheet->setInputEncoding('utf-8');
				$worksheet->setColumn(0,0,12);
				$worksheet->setColumn(1,1,15);
				$worksheet->setColumn(2,2,45);
				$worksheet->setColumn(3,3,45);
				//$worksheet->insertBitmap(1,1,'/sga/img/logo.bmp');
				// The actual data
				
				$worksheet->write(0, 0, iconv("UTF-8", "ISO-8859-1",'ESCOLA SUPERIOR DE ECONOMIA E GESTÃO'),$format_escola);
				$worksheet->write(1, 0, iconv("UTF-8", "ISO-8859-1",'Lista de Estudantes de '.$alunos[0]['Curso']['name']),$format_titulo);
				$worksheet->setMerge(0, 0, 0, 3);
				$worksheet->setMerge(1, 0, 1, 3);
				$sequencia = 3;
				$worksheet->write($sequencia, 0, 'Sequencia',$format_bold);
				$worksheet->write($sequencia, 1, 'Codigo',$format_bold);
				$worksheet->write($sequencia, 2, 'Nome',$format_bold);
				$worksheet->write($sequencia, 3, 'Curso',$format_bold);
				
				foreach($alunos as $aluno){
					$sequencia++;	
					$worksheet->write($sequencia, 0, $sequencia-3);
					$worksheet->write($sequencia, 1,$aluno['Aluno']['codigo']);
					$worksheet->write($sequencia, 2,iconv("UTF-8", "ISO-8859-1", $aluno['Aluno']['name']));
					$worksheet->write($sequencia, 3, iconv("UTF-8", "ISO-8859-1", $aluno['Curso']['name']));
				}
				
				//var_dump($alunos);
			}
			
			
			
			
			
			$worksheet->write(3, 0, 'Juan Herrera');
			$worksheet->write(3, 1, 32);
			
			// Let's send the file
			$workbook->close();
		}
        
        public function pdf_boletim_matricula($aluno_id){
            $this->set('aluno_id',$aluno_id);
            $this->layout = 'jasper';
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
}
