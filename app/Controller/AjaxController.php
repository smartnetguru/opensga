<?php

class AjaxController extends AppController {

	public function get_cidades_by_provincia() {
		foreach ($this->request->data as $k => $v) {

			$provincia_id = reset($v);
		}
		$this->loadModel('Cidade');
		$cidades = $this->Cidade->find('list', array('conditions' => array('provincia_id' => $provincia_id)));
		$this->set(compact('cidades'));
	}

	public function get_cursos_by_unidade_organica() {
		$this->loadModel('Curso');
		$unidadeOrganicaId = $this->request->data['Curso']['unidade_organica_id'];

		$unidadeOrganicas = $this->Curso->UnidadeOrganica->children($unidadeOrganicaId);
		$todasUnidades = Hash::extract($unidadeOrganicas, '{n}.UnidadeOrganica.id');
		$todasUnidades[] = $unidadeOrganicaId;
		$cursos = $this->Curso->find('list', array('conditions' => array('unidade_organica_id' => $todasUnidades)));
		$this->set(compact('cursos'));
	}

	public function get_naturalidades_autocomplete() {
		$this->autoRender = false;
		$this->loadModel('Aluno');

		$conditions = array(
			'Entidade.naturalidade LIKE ' => '%' . $this->request->query['term'] . '%'
		);

		$results = $this->Aluno->Entidade->find('all', array('fields' => array('naturalidade'),
			'conditions' => $conditions,
			'group' => array('naturalidade'), 'limit' => 20
		));
		$codigos = Set::extract('../Entidade/naturalidade', $results);

		echo json_encode($codigos);
	}

	public function get_bairros_autocomplete() {
		$this->autoRender = false;
		$this->loadModel('Bairro');

		$conditions = array(
			'name LIKE ' => '%' . $this->request->query['term'] . '%'
		);

		$results = $this->Bairro->find('all', array('fields' => array('name'),
			'conditions' => $conditions,
			'group' => array('name'), 'limit' => 20
		));
		$codigos = Set::extract('../Bairro/name', $results);

		echo json_encode($codigos);
	}

    public function estudante_get_bairros_autocomplete() {
        $this->autoRender = false;
        $this->loadModel('Bairro');

        $conditions = array(
            'name LIKE ' => '%' . $this->request->query['term'] . '%'
        );

        $results = $this->Bairro->find('all', array('fields' => array('name'),
                                                    'conditions' => $conditions,
                                                    'group' => array('name'), 'limit' => 20
        ));
        $codigos = Set::extract('../Bairro/name', $results);

        echo json_encode($codigos);
    }

	public function get_escolas_by_distrito() {
		foreach ($this->request->data as $k => $v) {

			$cidade_id = reset($v);
		}
		$this->loadModel('EscolaNivelMedio');
		$distritos = $this->EscolaNivelMedio->find('list', array('conditions' => array('distrito_id' => $cidade_id)));
		$this->set(compact('distritos'));
	}

    public function get_cursos_by_faculdade() {
        foreach ($this->request->data as $k => $v) {

            $faculdadeId = reset($v);
        }
        $this->loadModel('Curso');
        $departamentos = $this->Curso->UnidadeOrganica->children($faculdadeId);
        $unidadeOrganicas = Hash::extract($departamentos,'{n}.UnidadeOrganica.id');
        $unidadeOrganicas[] = $faculdadeId;
        $cursos = $this->Curso->find('list',array('conditions'=>array('unidade_organica_id'=>$unidadeOrganicas)));
        $this->set(compact('cursos'));
    }

	public function beforeFilter() {
		parent::beforeFilter();
		if ($this->request->is('ajax')) {
			$this->layout = 'ajax';
			$this->Auth->allow();
		} else {
			throw new MethodNotAllowedException();
		}
	}

}

?>