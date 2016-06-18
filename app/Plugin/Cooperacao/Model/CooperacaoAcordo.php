<?php

App::uses('CooperacaoAppModel', 'Cooperacao.Model');

/**
 * CooperacaoAcordo Model
 * @property CooperacaoInstituicaoAcordo $CooperacaoInstituicaoAcordo
 * @property Instituicao $Instituicao
 * @property CooperacaoTipoAcordo $CooperacaoTipoAcordo
 * @property CooperacaoAcordoArea $CooperacaoAcordoArea
 * @property CooperacaoAcordoObservacao $CooperacaoAcordoObservacao
 * @property CooperacaoAcordoUnidadeOrganica $CooperacaoAcordoUnidadeOrganica
 * @property CooperacaoObjectivoAcordo $CooperacaoObjectivoAcordo
 */
class CooperacaoAcordo extends CooperacaoAppModel
{
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Instituicao' => [
            'className' => 'Instituicao',
            'foreignKey' => 'instituicao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'CooperacaoTipoAcordo' => [
            'className' => 'CooperacaoTipoAcordo',
            'foreignKey' => 'cooperacao_tipo_acordo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],

        'CooperacaoArea' => [
            'className' => 'CooperacaoArea',
            'foreignKey' => 'cooperacao_area_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [


        'CooperacaoAcordoObservacao' => [
            'className' => 'CooperacaoAcordoObservacao',
            'foreignKey' => 'cooperacao_acordo_id',
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
        'CooperacaoAcordoUnidadeOrganica' => [
            'className' => 'CooperacaoAcordoUnidadeOrganica',
            'foreignKey' => 'cooperacao_acordo_id',
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
        'CooperacaoObjectivoAcordo' => [
            'className' => 'CooperacaoObjectivoAcordo',
            'foreignKey' => 'cooperacao_acordo_id',
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

    public function cadastraAcordoCooperacao($data)
    {
        $dataSource = $this->getDataSource();
        $dataSource->begin();

        $array_acordo = [
            'CooperacaoAcordo' => [
                'codigo' => $data['CooperacaoAcordo']['codigo'],
                'name' => $data['CooperacaoAcordo']['name'],
//                'instituicao_id' => $data['CooperacaoAcordo']['instituicao_id'],
//                'data_assinatura' => $data['CooperacaoAcordo']['data_assinatura'],
//                'cooperacao_tipo_acordo_id' => $data['CooperacaoAcordo']['cooperacao_tipo_acordo_id'],
//                'prazo_validade' => $data['CooperacaoAcordo']['prazo_validade'],
//                'tempo_validade' => $data['CooperacaoAcordo']['tempo_validade'],
//                'cooperacao_area_id' => $data['CooperacaoAcordo']['cooperacao_area_id'],
//                'objectivos' => $data['CooperacaoAcordo']['objectivos'],
//                'observacoes' => $data['CooperacaoAcordo']['observacoes'],
                'cooperacao_estado_acordo_id' => 1,
            ],
        ];
//
//        if (isset($data['CooperacaoAcordo']['data_validade']) && $data['CooperacaoAcordo']['data_validade'] != '') {
//            $array_acordo['CooperacaoAcordo']['data_validade'] = $data['CooperacaoAcordo']['data_validade'];
//        } elseif (isset($data['CooperacaoAcordo']['prazo_validade']) && $data['CooperacaoAcordo']['prazo_validade'] != '') {
//            if ($data['CooperacaoAcordo']['tempo_validade'] == 1) {
//                $array_acordo['CooperacaoAcordo']['data_validade'] = $data['CooperacaoAcordo']['data_assinatura'] + $data['CooperacaoAcordo']['prazo_validade'] . " years";
//            } elseif ($data['CooperacaoAcordo']['tempo_validade'] == 2) {
//                $array_acordo['CooperacaoAcordo']['data_validade'] = $data['CooperacaoAcordo']['data_assinatura'] + $data['CooperacaoAcordo']['prazo_validade'] . " months";
//            } else {
//                $array_acordo['CooperacaoAcordo']['data_validade'] = $data['CooperacaoAcordo']['data_assinatura'] + $data['CooperacaoAcordo']['prazo_validade'] . " days";
//            }
//        } else {
//            //Indeterminado
//        }

        $this->create();
        $this->save($array_acordo);
        /* if ($this->save($array_acordo)) {
          foreach ($data['CooperacaoAcordo']['areas_cooperacao'] as $k => $v) {
          $array_acordo_area = [
          'cooperacao_acordo_id' => $this->id,
          'cooperacao_area_id' => $v
          ];
          $this->CooperacaoAcordoArea->create();
          if ($this->CooperacaoAcordoArea->save(array('CooperacaoAcordoArea' => $array_acordo_area))) {
          foreach ($data['objectivos'] as $k => $v) {
          if ($v != '') {
          $array_objectivo = [
          'cooperacao_acordo_id' => $this->id,
          'name' => $v
          ];
          $this->CooperacaoObjectivoAcordo->create();
          if ($this->CooperacaoObjectivoAcordo->save(array('CooperacaoObjectivoAcordo' => $array_objectivo))) {
          return $dataSource->commit();
          } else {
          return $dataSource->rollback();
          }
          }
          }
          }
          }
          } */
    }


}
