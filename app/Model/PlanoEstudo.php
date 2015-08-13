<?php

/**
 * Model do plano de estudo
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA-Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 *
 * @property PlanoEstudo @PlanoEstudo
 * @todo Dar a possibilidade de activar e desactivar um plano de estudos
 */
class PlanoEstudo extends AppModel {

	public $name = 'PlanoEstudo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoObjecto' => array(
			'className' => 'EstadoObjecto',
			'foreignKey' => 'estado_objecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(
		'DisciplinaPlanoEstudo' => array(
			'className' => 'DisciplinaPlanoEstudo',
			'foreignKey' => 'plano_estudo_id',
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
	public $validate = array(
		'name' => array(
			'nameRule-1' => array(
				'rule' => 'notBlank',
				'required' => 'create',
				'message' => 'O nome do Plano de Estudos e obrigatorio'
			),
            'nameRule-2'=>[
                'rule'=>'isUnique',
                'required'=>true,
                'message'=>'Nao podem existir dois planos de estudo com mesmo nome'
            ]
		),
		'curso_id' => array(
			'CursoRule-1' => array(
				'rule' => 'notBlank',
				'required' => 'create',
				'message' => 'O Curso tem de ser indicado'
			)
		),
		'duracao' => array(
			'duracaoRule-1' => array(
				'rule' => 'naturalNumber',
				'required' => 'create',
				'message' => 'A Duracao do Plano tem que ser um Numero Natural'
			)
		),
		'semestres_ano' => array(
			'semestresAnoRule-1' => array(
				'rule' => 'naturalNumber',
				'required' => 'create',
				'message' => 'A Duracao do Plano tem que ser um Numero Natural'
			)
		),
		'ano_criacao' => array(
			'anoCriacaoRule-1' => array(
				'rule' => ['date','y'],
				'required' => 'create',
				'message' => 'Ano de Criacao Invalido'
			),
            'EvitaDuplicadosCursoAno' => array(
                'rule' => array('checkUnique', array('curso_id', 'ano_criacao')),

                'message' => 'Nao podem existir dois planos de estudo para o mesmo curso, no mesmo ano'
            )
		),
	);

    public $virtualFields = array(
        'total_creditos' => 'SELECT SUM(creditos) FROM disciplina_plano_estudos as DisciplinaPlanoEstudo WHERE DisciplinaPlanoEstudo.plano_estudo_id = PlanoEstudo.id'
    );

	/**
	 * Nao usar esta funcao
	 * @param type $plano_id
	 * @return type
	 *
	 * @fixme Rever como se buscam as precedencias
	 */
	function getAllDisciplinasByPlanoEstudo($plano_id) {
		trigger_error("Deprecated function called.", E_USER_NOTICE);
		App::import('Model', 'planoestudoano');
		//$planoestudoano = new DisciplinaPlanoEstudo;
		$query = "Select p.id,plano_estudo_id,ano,semestre,cargahorariateoricas,cargahorariapraticas,d.id,d.name,d.codigo,pe.curso_id,pe.name ";
		$query .="from planoestudoanos p,disciplinas d,planoestudos pe ";
		$query .="where p.disciplina_id = d.id and p.plano_estudo_id = {$plano_id} and p.plano_estudo_id=pe.id ";
		$query .="order by ano, semestre, d.name ";
		$disciplinas = $this->query($query);
		for ($i = 0; $i < count($disciplinas); $i++) {
			//$disciplinas[$i]['pr']=$this->getAllPrecedenciasByDisciplina($disciplinas[$i]['d']['id'],$plano_id);
		}
		return $disciplinas;
	}

	public function getAllDisciplinas($planoId) {

		$this->DisciplinaPlanoEstudo->contain(array(
			'Disciplina', 'PlanoEstudo', 'Precedencia' => array(
				'DisciplinaPrecedente', 'TipoPrecedencia', 'DisciplinaPlanoEstudoPrecedente'
			)
		));
		$disciplinas = $this->DisciplinaPlanoEstudo->find('all', array('conditions' => array('plano_estudo_id' => $planoId)));

		return $disciplinas;
	}

	public function cadastraPrecedencias($data) {
		$datasource = $this->getDataSource();
		$datasource->begin();

		if (!empty($data['pobrigatorias'])) {
			foreach ($data['pobrigatorias'] as $po) {
				if ($po != 0) {
					$novaPrecedencia = array('disciplina_plano_estudo_id' => $data['DisciplinaPlanoEstudo']['id'], 'plano_estudo_id' => $data['PlanoEstudo']['plano_estudo_id'], 'tipo_precedencia_id' => 1, 'disciplina_id' => $data['PlanoEstudo']['disciplina_id'], 'disciplina_precedente' => $po);

					$this->DisciplinaPlanoEstudo->Precedencia->create();
					$this->DisciplinaPlanoEstudo->Precedencia->save(array('Precedencia' => $novaPrecedencia));
				}
			}
			if (!empty($data['paconselhadas'])) {
				foreach ($data['paconselhadas'] as $po) {
					if ($po != 0) {
						$novaPrecedencia = array('disciplina_plano_estudo_id' => $data['DisciplinaPlanoEstudo']['id'], 'plano_estudo_id' => $data['PlanoEstudo']['plano_estudo_id'], 'tipo_precedencia_id' => 2, 'disciplina_id' => $data['PlanoEstudo']['disciplina_id'], 'disciplina_precedente' => $po);

						$this->DisciplinaPlanoEstudo->Precedencia->create();
						$this->DisciplinaPlanoEstudo->Precedencia->save(array('Precedencia' => $novaPrecedencia));
					}
				}
				return $this->commit();
			}
		}


		return $this->rollback();
	}

	function deleteAllDisciplinasByPlanoEstudo($plano_id) {
		App::import('Model', 'planoestudoano');
		$planoestudoano = new DisciplinaPlanoEstudo;
		$query = "delete from planoestudoanos  where plano_estudo_id = {$plano_id} ";
		$resultado = $this->query($query);
		return $resultado;
	}

	function deleteAllGrupoDiscByPlanoEstudo($plano_id) {
		App::import('Model', 'Grupodisciplina');
		$planoestudogruposdisc = new Grupodisciplina;
		$query = "delete from grupodisciplinas where plano_estudo_id = {$plano_id} ";
		$resultado = $this->query($query);
		return $resultado;
	}

	function getAllMatriculasByPlanoEstudo($plano_id) {
		App::import('Model', 'planoestudoano');
		$planoestudoano = new DisciplinaPlanoEstudo;
		$query = "select tm.id ";
		$query .="from planoestudos tp , matriculas tm ";
		$query .="where tm.plano_estudo_id=tp.id and tm.plano_estudo_id = {$plano_id} ";
		$resultado = $this->query($query);

		//var_dump($resultado);
		return $resultado;
	}

	function getAllPrecedenciasByDisciplina($disciplina_id, $plano_id = null) {
		App::Import('Model', 'Grupodisciplina');
		$grupodisciplinas = new Grupodisciplina;


		$o = $grupodisciplinas->find('all', array('conditions' => array('plano_estudo_id' => $plano_id, 'disciplina_id' => $disciplina_id, 'tipoprecedencia_id' => 'O'), 'fields' => array('Grupodisciplina.id', 'Disciplina.name')));
		$obr = array();
		foreach ($o as $ob) {
			$obr[$ob['Grupodisciplina']['id']] = $ob['Disciplina']['name'];
		}
		$a = $grupodisciplinas->find('all', array('conditions' => array('plano_estudo_id' => $plano_id, 'disciplina_id' => $disciplina_id, 'tipoprecedencia_id' => 'A'), 'fields' => array('Grupodisciplina.id', 'Disciplina.name')));
		$acs = array();
		foreach ($a as $ac) {

			$acs[$ac['Grupodisciplina']['id']] = $ac['Disciplina']['name'];
		}
		$precedencias = array('a' => $acs, 'o' => $obr);


		return $precedencias;
	}

	/**
	 * Retorna todas as disciplinas que podem ser precedentes da disciplina em questao
	 * @param type $disciplina_id
	 * @param type $plano_id
	 *
	 */
	public function getAllDisciplinasForPrecedencia($planoEstudoId, $disciplinaId) {
		//Primeiro verificamos o ano e o semestre da disciplina em questao
		$disciplinaPlano = $this->DisciplinaPlanoEstudo->find('first', array('conditions' => array('disciplina_id' => $disciplinaId, 'plano_estudo_id' => $planoEstudoId)));
		//Agora buscamos todas as disciplinas daquele plano que podem ser precedentes

		$this->DisciplinaPlanoEstudo->contain(array(
			'Disciplina'
		));
		$disciplinasPrecedentes = $this->DisciplinaPlanoEstudo->find('all', array(
			'conditions' => array(
				'plano_estudo_id' => $planoEstudoId,
				"OR" => array(
					'ano_curricular <' => $disciplinaPlano['DisciplinaPlanoEstudo']['ano_curricular'],
					"AND" => array(
						'semestre_curricular <' => $disciplinaPlano['DisciplinaPlanoEstudo']['semestre_curricular'],
						'ano_curricular' => $disciplinaPlano['DisciplinaPlanoEstudo']['ano_curricular']
					)
				)
			)
				)
		);

		return $disciplinasPrecedentes;
	}


    public function getPlanoEstudoIdealForAluno($alunoId){
        $this->Curso->Aluno->contain(array(
            'Curso'
        ));
        $aluno = $ths->Curso->Aluno->findById($alunoId);
        debug($aluno);

    }

    /**
     * Retorna o total de creditos para um plano de Estudos
     *
     * @Todo implementar isso usando Virtual Fields
     * @param $planoEstudoId
     * @return mixed
     */
    public function getTotalCreditos($planoEstudoId){
        $totalCreditos = $this->DisciplinaPlanoEstudo->find('all',array(
        'conditions'=>array(
            'plano_estudo_id'=>$planoEstudoId
        ),
        'fields'=>array('sum(creditos) as total_creditos')));
        return $totalCreditos[0][0]['total_creditos'];
    }

}
