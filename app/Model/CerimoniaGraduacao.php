<?php
    App::uses('AppModel', 'Model');

    /**
     * CerimoniaGraduacao Model
     *
     * @property CandidatoGraduacao $CandidatoGraduacao
     */
    class CerimoniaGraduacao extends AppModel
    {


        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = [
            'CandidatoGraduacao' => [
                'className'    => 'CandidatoGraduacao',
                'foreignKey'   => 'cerimonia_graduacao_id',
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


        /**
         * @fixme Corrigir isso urgente
         * @return int|null
         */

        public function getProximaCerimoniaId()
        {
            $cerimoniaGraduacao = $this->find('first', ['conditions' => ['data <' => date('Y-m-d 00:00:00')]]);
            if (!empty($cerimoniaGraduacao)) {
                return 5;
            } else {
                return null;
            }
        }

    }
