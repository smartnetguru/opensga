<?php

/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 *
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 *
 * Este software � distribuido sob a perspectiva de que possa ser �til para
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 *
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 *
 * @property Avaliacao $Avaliacao
 * @property Turma $Turma
 * @property TipoAvaliacao $TipoAvaliacao
 * @property EstadoTurmaAvaliacao $EstadoTurmaAvaliacao
 */
class TurmaTipoAvaliacao extends AppModel
{

    var $name = 'TurmaTipoAvaliacao';
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    var $belongsTo = [
        'Turma' => [
            'className' => 'Turma',
            'foreignKey' => 'turma_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'TipoAvaliacao' => [
            'className' => 'TipoAvaliacao',
            'foreignKey' => 'tipo_avaliacao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoTurmaAvaliacao' => [
            'className' => 'EstadoTurmaAvaliacao',
            'foreignKey' => 'estado_turma_avaliacao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
    var $hasMany = [
        'Avaliacao' => [
            'className' => 'Avaliacao',
            'foreignKey' => 'Turma_tipo_avaliacao_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
    ];

    public $validate = [
        'turma_id' => [
            'cursoRule-3' => [
                'rule' => 'notBlank',
                'required' => 'create',
                'message' => 'É necessário indicar a turma a qual a avaliacao pertence',
            ],
        ],
        'tipo_avaliacao_id' => [
            'anoLectivoRule-3' => [
                'rule' => 'notBlank',
                'required' => 'create',
                'message' => 'É necessário indicar o tipo de avaliacao',
            ],
        ],
        'estado_turma_avaliacao_id' => [
            'planoEstudoRule-3' => [
                'rule' => 'notBlank',
                'required' => 'create',
                'message' => 'O estado da avaliacao deve ser indicado',
            ],
        ],
        'peso' => [
            'pesoNotBlank' => [
                'rule' => 'notBlank',
                'required' => 'create',
                'message' => 'O Peso da Avaliacao deve ser indicado',
            ],
            'pesoBetween' => [
                'rule' => ['range', -0.01, 100.01],
                'required' => 'create',
                'message' => 'O Peso da Avaliacao deve ser indicado',
            ],
        ],
        'ordem' => [
            'anoCurricularRule-3' => [
                'rule' => 'notBlank',
                'required' => 'create',
                'message' => 'A Ordem do Teste deve ser indicada',
            ],
        ],
        'data_marcada' => [
            'semestreCurricularRule-3' => [
                'rule' => 'notBlank',
                'required' => 'create',
                'message' => 'A data Marcada não pode estar vazia',
            ],
        ],


    ];

    public function getTotalPesos($turmaId)
    {
        $totalPesos = $this->find('all',
            ['conditions' => ['turma_id' => $turmaId], 'fields' => ['SUM(peso) as total']]);

        return $totalPesos[0][0]['total'];
    }

}

?>