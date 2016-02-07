<?php

    App::uses('AppModel', 'Model');

    /**
     * UnidadeOrganica Model
     *
     * @property TipoUnidadeOrganica $TipoUnidadeOrganica
     * @property AreaAcademica $AreaAcademica
     * @property AreaUnidade $AreaUnidade
     * @property UnidadeOrganica $ParentUnidadeOrganica
     * @property EstadoObjecto $EstadoObjecto
     * @property Docente $Docente
     * @property Funcionario $Funcionario
     * @property UnidadeOrganica $ChildUnidadeOrganica
     * @property Tipo $Tipo
     */
    class UnidadeOrganica extends AppModel
    {

        public $actsAs = ['Tree', 'Containable', 'Auditable'];
        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'TipoUnidadeOrganica'   => [
                'className'  => 'TipoUnidadeOrganica',
                'foreignKey' => 'tipo_unidade_organica_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'AreaAcademica'         => [
                'className'  => 'AreaAcademica',
                'foreignKey' => 'area_academica_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'AreaUnidade'           => [
                'className'  => 'AreaUnidade',
                'foreignKey' => 'area_unidade_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'ParentUnidadeOrganica' => [
                'className'  => 'UnidadeOrganica',
                'foreignKey' => 'parent_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'EstadoObjecto'         => [
                'className'  => 'EstadoObjecto',
                'foreignKey' => 'estado_objecto_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Director'              => [
                'className'  => 'Funcionario',
                'foreignKey' => 'director',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = [
            'Docente'              => [
                'className'    => 'Docente',
                'foreignKey'   => 'unidade_organica_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => '',
            ],
            'Funcionario'          => [
                'className'    => 'Funcionario',
                'foreignKey'   => 'unidade_organica_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => '',
            ],
            'Curso'                => [
                'className'    => 'Curso',
                'foreignKey'   => 'unidade_organica_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => '',
            ],
            'ChildUnidadeOrganica' => [
                'className'    => 'UnidadeOrganica',
                'foreignKey'   => 'parent_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => '',
            ],
        ];
        public $virtualFields = [
            'nome_codigo' => 'CONCAT(UnidadeOrganica.codigo," - ",UnidadeOrganica.name)',
        ];

        public $validate = [
            'name'                     => [
                'nameNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'Entidade em branco?',
                ],
                'nameIsUnique' => [
                    'rule'    => 'isUnique',
                    'message' => 'Entidade em branco?',
                ],
            ],
            'nivel_unidade'            => [
                'nivelUnidadeNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'Deve-se Indicar a que unidadeOrganica este funcionario pertence',
                ],
            ],
            'tipo_unidade_organica_id' => [
                'tipoUnidadeOrganicaIdNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'Deve-se Indicar a que unidadeOrganica este funcionario pertence',
                ],
            ],
            'parent_id'                => [
                'parentIdNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'Deve-se Indicar a que unidadeOrganica este funcionario pertence',
                ],
            ],
        ];

        /**
         * @param $unidade_organica_id
         * @return bool
         *
         * @Todo Verificar essa funcao. Nao eh consistente
         */
        public function isFromFaculdade($unidade_organica_id)
        {

            $unidades = $this->getPath($unidade_organica_id);
            if (count($unidades) == 1) {
                if ($unidades[0]['UnidadeOrganica']['tipo_unidade_organica_id'] == 1) {
                    return true;
                } else {
                    return false;
                }
            }
            if ($unidades[1]['UnidadeOrganica']['tipo_unidade_organica_id'] == 1) {
                return true;
            } else {
                return false;
            }
        }

        public function getFaculdadeByCursoId($curso_id)
        {
            $curso = $this->Curso->findById($curso_id);
            $unidadeOrganica = $this->findById($curso['Curso']['unidade_organica_id']);
            if ($unidadeOrganica['UnidadeOrganica']['tipo_unidade_organica_id'] == 2) {
                $unidadeOrganica = $this->findById($unidadeOrganica['UnidadeOrganica']['parent_id']);
            }

            return $unidadeOrganica;
        }

        public function getWithChilds($unidadeOrganicaId)
        {
            $unidadeOrganicas = $this->find('all', ['conditions' => ['parent_id' => $unidadeOrganicaId]]);
            if ($unidadeOrganicas) {
                $unidadesOrganicas = Hash::extract($unidadeOrganicas, '{n}.UnidadeOrganica.id');
                $unidadesOrganicas[] = $unidadeOrganicaId;

                return $unidadesOrganicas;
            } else {
                return [$unidadeOrganicaId];
            }
        }

    }
