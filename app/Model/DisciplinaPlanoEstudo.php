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
     ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.controller
     * @since         OpenSGA v 0.10.0.0
     *
     */
    class DisciplinaPlanoEstudo extends AppModel
    {
        public $name = 'DisciplinaPlanoEstudo';

        public $belongsTo = [
            'Disciplina'  => [
                'className'  => 'Disciplina',
                'foreignKey' => 'disciplina_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'PlanoEstudo' => [
                'className'  => 'PlanoEstudo',
                'foreignKey' => 'plano_estudo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],

        ];

        public $hasMany = [
            'Precedencia' => [
                'className'    => 'Precedencia',
                'foreignKey'   => 'disciplina_plano_estudo_id',
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

        public $validate = [
            'disciplina_id' => [
                'EvitaDuplicados' => [
                    'rule' => ['checkUnique', ['disciplina_id', 'plano_estudo_id']],

                    'message' => 'Uma Disciplina nao pode estar no mesmo plano de Estudo duas vezes',
                ],
            ],

        ];


        function findDisciplinasByPrecendencia($plano, $ano = 1, $semestre = 1)
        {
            $disciplinas_id = $this->find('list', [
                'conditions' => ['DisciplinaPlanoEstudo.ano <' => $ano],
                'fields'     => ['DisciplinaPlanoEstudo.disciplina_id'],
            ]);
            App::Import('Model', 'Disciplina');
            $disciplina = new Disciplina;

            $disciplinas = [];
            foreach ($disciplinas_id as $did) {
                $disciplina = $disciplina->findById($did);
                $nome_disciplina = $disciplina["Disciplina"]["name"];
                $disciplinas[$did] = $nome_disciplina;
            }

            return $disciplinas;
        }
    }

?>