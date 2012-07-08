<?php
/**
 * Controller do Funcionario
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 
 
class FuncionariosController extends AppController {

	var $name = 'Funcionarios';

	function index() {
	
		$this->Funcionario->recursive = 2;
		$this->set('groups',$this->Funcionario->User->Group->find('list'));
		$this->set('funcionarios', $this->paginate());
	}

	function perfil_funcionario($id = null) {
	    //App::Import('Model','Logmv');
	    //$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('Funcionario', $this->Funcionario->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Funcionario->read(null, $id);
			
		}
                $users = $this->Funcionario->User->find('list');
		$grauacademicos = $this->Funcionario->Grauacademico->find('list');
		$paises = $this->Funcionario->Paise->find('list');
		$cidades = $this->Funcionario->Cidade->find('list');
		$provincias = $this->Funcionario->Provincia->find('list');
		$documentos = $this->Funcionario->DocumentoIdentificacao->find('list');
		$cargos = $this->Funcionario->Cargo->find('list');
		$departamentos = $this->Funcionario->Departamento->find('list');
		$tipofuncionarios = $this->Funcionario->Tipofuncionario->find('list');
                $generos = $this->Funcionario->Genero->find('list');
                $cargos = $this->Funcionario->Cargo->find('list');
				$departamento = $this->Funcionario->Departamento->find('list');
		$this->set(compact('users', 'Grauacademicos', 'Paises', 'Cidades', 'Provincias', 'DocumentoIdentificacaos', 'tg0005cargos', 'tg0006departamentos', 'tg0011tipofuncionarios','generos','tg0005cargos','tg0006departamento'));
	
	}

	function registar_funcionario() {
	    
		if (!empty($this->data)) {
			if($this->Funcionario->cadastraFuncionario($this->request->data)){
                $this->Session->setFlash('Funcionário registrado com sucesso','default',array('class'=>'alert success'));
                $this->redirect(array('action'=>'index'));
                
            }
            else{
                $this->Session->setFlash('Problemas ao registar funcionario. Verifique o formulário e tente de novo','default',array('class'=>'alert nerror'));
            }
        }
        
		$users = $this->Funcionario->User->find('list');
		$grauacademicos = $this->Funcionario->Grauacademico->find('list');
		$cargos = $this->Funcionario->Cargo->find('list');
        $faculdades = $this->Funcionario->Faculdade->find('list');
		$departamentos = $this->Funcionario->Departamento->find('list');
        $seccaos = $this->Funcionario->Seccao->find('list');
		$tipofuncionarios = $this->Funcionario->Tipofuncionario->find('list');
		$documento_identificacaos = $this->Funcionario->Entidade->DocumentoIdentificacao->find('list');
        $unidades_organicas = $this->Funcionario->UnidadeOrganica->find('list');
	    $paises = $this->Funcionario->Entidade->Paise->find('list');
		$cidades = $this->Funcionario->Entidade->Cidade->find('list');
		$provincias = $this->Funcionario->Entidade->Provincia->find('list');
        $generos = $this->Funcionario->Entidade->Genero->find('list');
		
	   
		$this->set(compact('users', 'Grauacademicos','tipofuncionarios','departamentos','cargos','faculdades','seccaos','unidade_organicas','documento_identificacaos','paises','cidades','provincias','generos'));
		
	}

	function editar_funcionario($id = null) {
        $this->Funcionario->id=$id;
        if(!$this->Funcionario->exists()){
            throw new NotFoundException('Funcionário Invalido');
        }
	    //App::Import('Model','Logmv');
	    //$logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Funcionario->save($this->data)) {
			//$logmv->logUpdate(16,$this->Session->read('Auth.User.id'),$id,$this->data['Funcionario']["name"]);
				$this->Session->setFlash('Dados Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Funcionario->read(null, $id);
		}
		$users = $this->Funcionario->User->find('list');
		$grauacademicos = $this->Funcionario->Grauacademico->find('list');
		$paises = $this->Funcionario->Paise->find('list');
		$cidades = $this->Funcionario->Cidade->find('list');
		$provincias = $this->Funcionario->Provincia->find('list');
		$documentos = $this->Funcionario->DocumentoIdentificacao->find('list');
		$cargos = $this->Funcionario->Cargo->find('list');
		$departamentos = $this->Funcionario->Departamento->find('list');
		$tipofuncionarios = $this->Funcionario->Tipofuncionario->find('list');
                $generos = $this->Funcionario->Genero->find('list');
                $cargos = $this->Funcionario->Cargo->find('list');
				$departamento = $this->Funcionario->Departamento->find('list');
		$this->set(compact('users', 'Grauacademicos', 'Paises', 'Cidades', 'Provincias', 'DocumentoIdentificacaos', 'tg0005cargos', 'tg0006departamentos', 'tg0011tipofuncionarios','generos','tg0005cargos','tg0006departamento'));
	}

	function delete($id = null) {
	    //App::Import('Model','Logmv');
	    //$logmv = new Logmv;
	    App::Import('Model','User');
        $users = new User;
		App::Import('Model','Turma');
        $turmas = new Turma;
	
		if (!$id) {
			$this->Session->setFlash('Codigo Invalido para %s','flasherror');
			$this->redirect(array('action'=>'index'));
		}
		
		$dados = $turmas->getTurmasByFuncionario($id);
		
		if(empty($dados)){
		
		$user_id = $users->getUserByFuncionario($id);
		
		//var_dump($user_id[0]["us"]["id"]);
		$users = $users->deleteUser($user_id[0]["us"]["id"]);
		
		if ($this->Funcionario->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		}
		$this->Session->setFlash('Nao e possivel apagar. Turmas associadas ao Funcionario','flasherror');
		$this->redirect(array('action' => 'index'));
	}

        function beforeRender(){
            $this->set('current_section','administracao');
        }
        public function beforeFilter() {
            parent::beforeFilter();
            
        }
        
        public function importa_cenas(){
            App::import('Vendor', 'excel_reader2');
            $data = new Spreadsheet_Excel_Reader('i.xls', true);
            debug($data);
            $this->set('data', $data);
        }
}
?>
