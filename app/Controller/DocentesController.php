<?php
/**
 * Controller do Docente. Todas as funções referentes ao docente devem ser definidas aqui
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.docentes
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0.0

 *
 * @property Docente $Docente
 *
 */
class DocentesController extends AppController {

	var $name = 'Docentes';

	function index() {
		$this->Docente->recursive = 2;
		$this->set('docentes', $this->paginate());
	}

    /**
     *Pagina de Perfil do docente
     * @param type $id
     */
	function perfil_docente($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		$docente = $this->Docente->findById($id);
        $this->set('docente', $this->Docente->read(null, $id));
        $this->set('entidade', $this->Docente->Entidade->findById($docente['Entidade']['id']));
		$users = $this->Docente->Entidade->User->find('list');
		$paises = $this->Docente->Entidade->Cidade->find('list');
		$provincias = $this->Docente->Entidade->Cidade->find('list');
		$proveniencianomes = $this->Docente->Entidade->Provincia->find('list');
		$documentos = $this->Docente->Entidade->DocumentoIdentificacao->find('list');
		$generos = $this->Docente->Entidade->Genero->find('list');
        $cidadenascimentos = $this->Docente->Entidade->CidadeNascimento->find('list');

        $this->set(compact('users', 'paises', 'cidades', 'provincias', 'documentos','generos','cidadenascimentos','proveniencianomes','provenienciacidades'));
	}

    /**
     *Registra um novo docente no Sistema
     *
     * @todo Terminar a optimizacao dos views
     *
     * @todo testar todos os campos
     */
	function registar_docente() {
		if (!empty($this->data)) {
			$this->Docente->create();

			//Antes de Gravar o Docente precisamos gravar o Usuario e a Entidade
			//Primeiro vamos criar um usuario na tabela users
			//O Username sera o email, logo este campo eh obrigatorio
			$this->Docente->Entidade->User->create();
			$user_data = array('User'=>array('username'=>$this->data['Entidade']['email'],'password'=>'12345','group_id'=>4,'name'=>$this->data['Entidade']['name']));

			if($this->Docente->Entidade->User->save($user_data)){

				$entidade_data['Entidade']['user_id'] = $this->Docente->Entidade->User->getLastInsertID();
				$this->Docente->Entidade->create();
				if($this->Docente->Entidade->save($entidade_data)){

					//Finalmente Podemos gravar os dados do docente
					$docente_data = array('Docente'=>$this->data['Docente']);
					$docente_data['Docente']['entidade_id'] = $this->Docente->Entidade->getLastInsertID();
                    $docente_data['Docente']['name'] = $this->request->data['Entidade']['name'];
					if ($this->Docente->save($docente_data)) {
						$this->Docente->configuraAcl($this->Docente->Entidade->User->getLastInsertID());
						$this->Session->setFlash(__('Docente Registrado com Sucesso'),'default',array('class'=>'alert success'));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('Erro ao registrar Docente, tente de novo'),'default',array('class'=>'alert error'));
					}

				}
			}

		}

		$entidades = $this->Docente->Entidade->find('list');
		$docenteCategorias = $this->Docente->DocenteCategoria->find('list');
		$this->set(compact('entidades', 'seccaos', 'docenteCategorias','faculdades','departamentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('The docente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Docente->read(null, $id);
		}
		$entidades = $this->Docente->Entidade->find('list');
		$seccaos = $this->Docente->Seccao->find('list');
		$docenteCategorias = $this->Docente->DocenteCategorium->find('list');
		$this->set(compact('entidades', 'seccaos', 'docenteCategorias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for docente', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Docente->delete($id)) {
			$this->Session->setFlash(__('Docente deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Docente was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

    public function capturar_foto($docente_id){
        $this->Docente->id = $docente_id;
        if (!$this->Docente->exists()) {
            throw new NotFoundException(__('Aluno Invalido'));
        }
        $entidade = $this->Docente->findById($docente_id);
        $this->Session->write('SGATemp.entidade_id_4_foto',$entidade['Entidade']['id']);
        $this->redirect(array('controller'=>'users','action'=>'captura_foto'));
    }
}
