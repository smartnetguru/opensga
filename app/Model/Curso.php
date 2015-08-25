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
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 *
 * @property GrauAcademico $GrauAcademico
 * @property UnidadeOrganica $UnidadeOrganica
 * @property TipoCurso $TipoCurso
 * @property PlanoEstudo $PlanoEstudo
 * @property Matricula $Matricula
 * @property CursosTurno $CursosTurno
 * @property Turma $Turma
 * @property CursoResponsavel $CursoResponsavel
 */
class Curso extends AppModel
{

    var $name = 'Curso';
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    var $belongsTo = [
        'GrauAcademico'    => [
            'className'  => 'GrauAcademico',
            'foreignKey' => 'grau_academico_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'UnidadeOrganica'  => [
            'className'  => 'UnidadeOrganica',
            'foreignKey' => 'unidade_organica_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'TipoCurso'        => [
            'className'  => 'TipoCurso',
            'foreignKey' => 'tipo_curso_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'CursoResponsavel' => [
            'className'  => 'CursoResponsavel',
            'foreignKey' => 'curso_responsavel_id',
            'conditions' => array('CursoResponsavel.estado_objecto_id'=>1),
            'fields'     => '',
            'order'      => ''
        ]
    ];
    var $hasMany = [
        'PlanoEstudo' => [
            'className'    => 'PlanoEstudo',
            'foreignKey'   => 'curso_id',
            'dependent'    => false,
            'conditions'   => '',
            'fields'       => '',
            'order'        => '',
            'limit'        => '',
            'offset'       => '',
            'exclusive'    => '',
            'finderQuery'  => '',
            'counterQuery' => ''
        ],
        'Turma'       => [
            'className'    => 'Turma',
            'foreignKey'   => 'curso_id',
            'dependent'    => false,
            'conditions'   => '',
            'fields'       => '',
            'order'        => '',
            'limit'        => '',
            'offset'       => '',
            'exclusive'    => '',
            'finderQuery'  => '',
            'counterQuery' => ''
        ],
        'CursosTurno' => [
            'className'    => 'CursosTurno',
            'foreignKey'   => 'curso_id',
            'dependent'    => false,
            'conditions'   => '',
            'fields'       => '',
            'order'        => '',
            'limit'        => '',
            'offset'       => '',
            'exclusive'    => '',
            'finderQuery'  => '',
            'counterQuery' => ''
        ],
        'Matricula'   => [
            'className'    => 'Matricula',
            'foreignKey'   => 'curso_id',
            'dependent'    => false,
            'conditions'   => '',
            'fields'       => '',
            'order'        => '',
            'limit'        => '',
            'offset'       => '',
            'exclusive'    => '',
            'finderQuery'  => '',
            'counterQuery' => ''
        ],
        'Aluno'       => [
            'className'    => 'Aluno',
            'foreignKey'   => 'curso_id',
            'dependent'    => false,
            'conditions'   => '',
            'fields'       => '',
            'order'        => '',
            'limit'        => '',
            'offset'       => '',
            'exclusive'    => '',
            'finderQuery'  => '',
            'counterQuery' => ''
        ]
    ];
    var $validate = [
        'codigo' => [
            'rule'    => 'isUnique',
            'message' => 'Este codigo ja foi usado por outro curso.'
        ],
        'name'   => [
            'rule'    => 'isUnique',
            'message' => 'Ja existe um curso com este nome.'
        ]
    ];

    public function cadastraCurso($data)
    {
        $datasource = $this->getDataSource();
        $datasource->begin();

        $this->create();
        if ($this->save($data)) {
            $array_curso_turno = [
                'CursosTurno' => [
                    'curso_id' => $this->id,
                    'turno_id' => $data['Curso']['turno_id']
                ]
            ];

            $this->CursosTurno->create();
            if ($this->CursosTurno->save($array_curso_turno)) {
                return $this->commit();
            }
        }

        return $this->rollback();
    }

    function geraCodigo()
    {
        $id = $this->find('first', ['order' => ['Curso.created DESC'], 'fields' => 'id']);
        $ano = date('Y');
        $id_for = str_pad($id['Curso']['id'] + 1, 4, "0", STR_PAD_LEFT);
        $codigo = "C" . $id_for;

        return $codigo;
    }

    public function getPlanoEstudoRecente($curso_id)
    {
        return $this->PlanoEstudo->find('first', [
            'conditions' => ['curso_id' => $curso_id, 'estado_objecto_id' => 1],
            'order'      => 'ano_criacao DESC'
        ]);
    }


    public function getPlanoEstudoIdRecente($curso_id)
    {
        $planoEstudo = $this->PlanoEstudo->find('first', [
            'conditions' => ['curso_id' => $curso_id, 'estado_objecto_id' => 1],
            'order'      => 'ano_criacao DESC'
        ]);
        if (!empty($planoEstudo)) {
            return $planoEstudo['PlanoEstudo']['id'];
        }

        return null;
    }


    public function getTurnoIdByCursoId($curso_id)
    {
        $curso_turno = $this->CursosTurno->findByCursoId($curso_id);

        return $curso_turno['CursosTurno']['turno_id'];
    }

    public function getAllIdsByUnidadeOrganica($unidades_organicas)
    {

        $cursos = $this->find('all', ['conditions' => ['unidade_organica_id' => $unidades_organicas]]);

        return Hash::extract($cursos, '{n}.Curso.id');
    }

    public function getFaculdadeByCursoId($cursoId)
    {
        $this->contain('UnidadeOrganica');
        $curso = $this->findById($cursoId);
        $faculdade['UnidadeOrganica'] = $curso['UnidadeOrganica'];
        if ($faculdade['UnidadeOrganica']['tipo_unidade_organica_id'] == 2) {
            $faculdadeNova = $this->UnidadeOrganica->findById($faculdade['UnidadeOrganica']['parent_id']);

            return $faculdadeNova;
        }

        return $faculdade;
    }

    public function getCursoForView($cursoId)
    {
        $this->contain([
            'TipoCurso',
            'GrauAcademico',
            'UnidadeOrganica',
            'CursoResponsavel' => [
                'User' => ['Entidade' => ['Funcionario']]
            ]
        ]);
        $curso = $this->read(null, $cursoId);

        return $curso;
    }

    /**
     * Define Encarregado de Um dado Curso
     *
     * Actualiza as tabelas Curso e Curso_responsavel
     * @param $data
     */
    public function setResponsavelCurso($data)
    {
        $dataSource = $this->getDataSource();
        $dataSource->begin();

        $funcionario = $this->CursoResponsavel->Funcionario->getByUserId($data['CursoResponsavel']['user_id']);
        $data['CursoResponsavel']['funcionario_id'] = $funcionario['Funcionario']['id'];

        //Primeiro desactivamos o antigo responsavel, se existir
        $this->contain('CursoResponsavel');
        $curso = $this->findById($data['CursoResponsavel']['curso_id']);
        $responsavel_antigo = $curso['Curso']['user_responsavel_curso'];
        if($responsavel_antigo!= $data['CursoResponsavel']['user_id']){
            $this->CursoResponsavel->id = $curso['CursoResponsavel']['id'];
            $this->CursoResponsavel->set('data_fim',$data['CursoResponsavel']['data_inicio']);
            $this->CursoResponsavel->set('estado_objecto_id',2);
            $this->CursoResponsavel->save();
        }

        $this->CursoResponsavel->create();
        if ($this->CursoResponsavel->save($data)) {
            $this->id = $data['CursoResponsavel']['curso_id'];
            $this->set('user_responsavel_curso', $data['CursoResponsavel']['user_id']);
            $this->set('curso_responsavel_id', $this->CursoResponsavel->id);
            if ($this->save()) {
                $dataSource->commit();

                return true;
            } else {
                $dataSource->rollback();

                return false;
            }
        } else {
            $dataSource->rollback();

            return false;
        }
    }

    public function getAllCursosSemEncarregado()
    {
        $cursos = $this->find('all', [
            'conditions' => [
                'Curso.user_responsavel_curso is null'
            ]
        ]);

        return $cursos;
    }


    public function getCursosSemPlanoEstudos($unidadeOrganicaId = null,$type='all')
    {

        $options['joins'] = array(
            array('table' => 'plano_estudos',
                  'alias' => 'PlanoEstudo',
                  'type' => 'left',
                  'conditions' => array(
                      'Curso.id = PlanoEstudo.curso_id'
                  )
            ),
            array('table' => 'unidade_organicas',
                  'alias' => 'UnidadeOrganica',
                  'type' => 'left',
                  'conditions' => array(
                      'Curso.unidade_organica_id = UnidadeOrganica.id'
                  )
            ),

        );

        $options['fields']='*';
        $options['conditions'] = array(
            'PlanoEstudo.curso_id' => null
        );
        if(isset($unidadeOrganicaId)){
            $options['conditions']['Curso.unidade_organica_id'] = $unidadeOrganicaId;
        }

        $cursos = $this->find($type, $options);
        return $cursos;
    }

}

?>