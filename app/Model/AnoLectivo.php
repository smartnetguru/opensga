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
     * @copyright       Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
     ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.10.0.0
     *
     *
     * @property SemestreLectivo $SemestreLectivo
     * @Property Turma $Turma
     * @property RegimeLectivo $RegimeLectivo
     * @property Matricula $Matricula
     */
    class AnoLectivo extends AppModel {
        var $belongsTo = array(
            'RegimeLectivo' => array(
                'className'  => 'RegimeLectivo',
                'foreignKey' => 'regime_lectivo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            )
        );
        var $displayField = 'ano';
        var $hasMany = array(
            'Turma'           => array(
                'className'    => 'Turma',
                'foreignKey'   => 'ano_lectivo_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ),
            'SemestreLectivo' => array(
                'className'    => 'SemestreLectivo',
                'foreignKey'   => 'ano_lectivo_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            )
        );

        public $validate = array(
            'ano' => array(
                'anoDate' => array(
                    'rule' => array('date','y'),
                    'required' => 'create',
                    'message' => 'Introduza um ano Lectivo valido',
                    'allowEmpty'=>false
                ),
                'anoUnique' => array(
                    'rule' => 'isUnique',
                    'required' => 'create',
                    'message' => 'Este Ano Lectivo já existe no Sistema',
                    'allowEmpty'=>false
                )
            ),
            'codigo' => array(
                'codigoRule-1' => array(
                    'rule' => 'isUnique',
                    'required' => 'create',
                    'message' => 'Já existe um Ano lectivo com este código'
                )
            )
        );

        /**
         * Devolve o id do ano lectivo, dado o ano
         * @param type $ano
         * @return type
         */
        public function getAnoLectivoIdByAno($ano) {
            $anolectivo = $this->findByAno($ano);

            return $anolectivo['AnoLectivo']['id'];
        }

        public function criaAnoLectivo($data){
            if(empty($data['AnoLectivo']['ano'])){
                return false;
            }
            if(!date_parse($data['AnoLectivo']['ano'])){
                return false;
            }
            if(empty($data['AnoLectivo']['codigo'])){
                $data['AnoLectivo']['codigo'] = $data['AnoLectivo']['ano'];
            }

            $dataSource = $this->getDataSource();
            $dataSource->begin();

            $this->create();
            if($this->save($data)){
                $semestres = array();
                $semestres[] = array(
                    'SemestreLectivo'=>array(
                        'ano_lectivo_id'=>$this->id,
                        'codigo'=>$data['AnoLectivo']['ano'].'-1',
                        'semestre'=>1,
                        'semestre_id'=>1
                    )
                );
                $semestres[] = array(
                    'SemestreLectivo'=>array(
                        'ano_lectivo_id'=>$this->id,
                        'codigo'=>$data['AnoLectivo']['ano'].'-2',
                        'semestre'=>2,
                        'semestre_id'=>2
                    )
                );
                $this->SemestreLectivo->create();
                if($this->SemestreLectivo->saveAll($semestres)){
                    $dataSource->commit();

                    return $this->id;
                } else{
                    $dataSource->rollback();
                    return [false,$this->SemestreLectivo->validationErros];
                }
            } else{
                $dataSource->rollback();
                return [false,$this->validationErrors];
            }
        }


    }

?>