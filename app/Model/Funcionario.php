<?php

/**
 * Model do Funcionario
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 *
 */
class Funcionario extends AppModel {

	var $name = 'Funcionario';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
        'Entidade' => array(
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GrauAcademico' => array(
			'className' => 'GrauAcademico',
			'foreignKey' => 'grau_academico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoFuncionario' => array(
			'className' => 'TipoFuncionario',
			'foreignKey' => 'tipo_funcionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'unidade_organica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SuperiorHieraquico' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'superior_hierarquico',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasOne = array(
		'Docente'
	);

	/**
	 * Esta funcao faz o mesmo que find list, mas busca o name a partir da tabela entidades
	 */
	public function listaFuncionarios() {

		$this->contain('Entidade');

		$funcionarios = $this->find('all', array('fields' => array('id', 'Entidade.name')));

		$f = array();
		foreach ($funcionarios as $funcionario) {

			$f[$funcionario[$this->alias]['id']] = $funcionario['Entidade']['name'];
		}
		return $f;
	}

	function geraCodigo() {
		$id = $this->find('first', array('order' => array('Funcionario.created DESC'), 'fields' => 'id'));
		$ano = date('Y');
		$id_for = str_pad($id['Funcionario']['id'] + 1, 5, "0", STR_PAD_LEFT);
		$codigo = $ano . $id_for;
		return $codigo;
	}

	/**
	 *
	 * @param type $name
	 * @return string
	 *
	 * @deprecated Usa o geraUsername dos users que eh global
	 */
	function criaUsername($name) {
		$nome_lw = strtolower($name);
		$nome_ex = explode(' ', $nome_lw);
		$nome_1 = $nome_ex[0];
		$nome_2 = end($nome_ex);
		$nome = $nome_1 . "." . $nome_2;
		$numero = $this->User->find('count', array('conditions' => array('username' => $nome)));
		if ($numero > 0) {
			//$numero=$numero+1;
			$nome = $nome . $numero;
		}

		return $nome;
	}

	function getTurmasByFuncionario($funcionario_id) {
		$query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
		$resultado = $this->query($query);
		return $resultado;
	}

	public function cadastraFuncionario(array $data) {
		$dataSource = $this->getDataSource();

		$dataSource->begin();

		$data['Entidade']['name'] = $data['Entidade']['nomes'] . ' ' . $data['Entidade']['apelido'];

		$data['User']['name'] = $data['Entidade']['name'];

		$data['User']['username'] = $this->User->geraEmailUem(strtolower($data['Entidade']['apelido']), strtolower($data['Entidade']['nomes']));
		$data['User']['codigo'] = $this->geraCodigo();
		$data['User']['password'] = Security::hash('12345', 'blowfish');
		$data['User']['group_id'] = 2;

		$this->User->create();
		if ($this->User->save($data)) {
            //die(debug($this->User->id));
			$data['Entidade']['user_id'] = $this->User->id;
            $data['Entidade']['name'] = $data['Entidade']['nomes']." ".$data['Entidade']['apelido'];
			$this->Entidade->create();
			if ($this->Entidade->save($data)) {
				$data['Funcionario']['user_id'] = $this->User->id;
				$data['Funcionario']['entidade_id'] = $this->Entidade->id;

				$this->create();
				if ($this->save($data)) {
					 $dataSource->commit();
                    return true;
				}
			}
		}
		$dataSource->rollback();
        return false;
	}

	public function getByUserId($user_id) {
		$funcionario = $this->findByUserId($user_id);
		return $funcionario;
	}

	public function isFromUnidadeOrganica($useId, $unidadeOriganicaId) {
		return true;
	}

    public function getAllFuncionariosForResponsavelCurso(){
        $this->contain(['UnidadeOrganica','Entidade'=>['User'],'User']);
        $funcionarios = $this->find('list',[
            'conditions'=>[
                'UnidadeOrganica.codigo'=>['DRA','DRA_DR','DRA_DI']
            ],
            'fields'=>[
                'User.id','Entidade.name'
            ],
            'order'=>['Entidade.name']
        ]);

        return $funcionarios;
    }

}

?>