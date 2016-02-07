<?php

    App::uses('AppModel', 'Model');

    /**
     * Precedencia Model
     *
     * @property DisciplinaPlanoEstudo $DisciplinaPlanoEstudo
     * @property TipoPrecedencia $TipoPrecedencia
     * @property Disciplina $Disciplina
     * @property EstadoObjecto $EstadoObjecto
     */
    class Permissao extends AppModel
    {


        public $useTable = false;
        public function funcionario($userId)
        {

        }

    }
