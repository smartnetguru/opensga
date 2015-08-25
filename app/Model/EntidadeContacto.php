<?php

App::uses('AppModel', 'Model');

/**
 * EntidadeContacto Model
 *
 * @property Entidade $Entidade
 * @property TipoContacto $TipoContacto
 * @property EstadoObjecto $EstadoObjecto
 */
class EntidadeContacto extends AppModel
{
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Entidade'      => [
            'className'  => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'TipoContacto'  => [
            'className'  => 'TipoContacto',
            'foreignKey' => 'tipo_contacto_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'EstadoObjecto' => [
            'className'  => 'EstadoObjecto',
            'foreignKey' => 'estado_objecto_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ]
    ];

    public function actualizaContactos($data)
    {
        $dataSource = $this->getDataSource();
        $dataSource->begin();

        //Grava Bairro e Avenida
        $bairroExiste = $this->Entidade->CidadeMorada->Bairro->find('first',
            ['conditions' => ['cidade_id' => $data['EntidadeContacto'][9], 'name' => $data['EntidadeContacto'][6]]]);
        if (empty($bairroExiste)) {
            $arrayNovoBairro = [
                'Bairro' => [
                    'name'      => $data['EntidadeContacto'][6],
                    'cidade_id' => $data['EntidadeContacto'][9]
                ]
            ];
            $this->Entidade->CidadeMorada->Bairro->create();
            $this->Entidade->CidadeMorada->Bairro->save($arrayNovoBairro);
            $bairroMoradaId = $this->Entidade->CidadeMorada->Bairro->id;
        } else {
            $bairroMoradaId = $bairroExiste['Bairro']['id'];
        }

        $ruaExiste = $this->Entidade->CidadeMorada->Rua->find('first',
            ['conditions' => ['cidade_id' => $data['EntidadeContacto'][9], 'name' => $data['EntidadeContacto'][5]]]);
        if (empty($ruaExiste)) {
            $arrayNovaRua = [
                'Rua' => [
                    'name'      => $data['EntidadeContacto'][5],
                    'cidade_id' => $data['EntidadeContacto'][9]
                ]
            ];
            $this->Entidade->CidadeMorada->Rua->create();
            $this->Entidade->CidadeMorada->Rua->save($arrayNovaRua);
            $ruaMoradaId = $this->Entidade->CidadeMorada->Rua->id;
        } else {
            $ruaMoradaId = $ruaExiste['Rua']['id'];
        }

        $data['Entidade']['telemovel'] = $data['EntidadeContacto'][2];
        $data['Entidade']['cidade_morada'] = $data['EntidadeContacto'][9];
        $data['Entidade']['bairro_morada'] = $bairroMoradaId;
        $data['Entidade']['caixa_postal_morada'] = $data['EntidadeContacto'][8];

        $data['Entidade']['email'] = $data['EntidadeContacto'][1];

        $data['Entidade']['estado_entidade_id'] = 1;
        $data['Entidade']['avenida_rua'] = $ruaMoradaId;
        $this->Entidade->id = $data['Aluno']['entidade_id'];
        $this->Entidade->save($data);


        $contactos = $data['EntidadeContacto'];
        foreach ($contactos as $k => $v) {
            $contactoActual = $this->find('first', [
                'conditions' => [
                    'entidade_id'       => $data['Aluno']['entidade_id'],
                    'tipo_contacto_id'  => $k,
                    'estado_objecto_id' => 1
                ]
            ]);
            if (!empty($contactoActual)) {
                if ($contactoActual['EntidadeContacto']['valor'] != $v) {
                    $this->Entidade->EntidadeContacto->create();
                    if ($this->Entidade->EntidadeContacto->save(
                        [
                            'EntidadeContacto' => [
                                'entidade_id'       => $data['Aluno']['entidade_id'],
                                'tipo_contacto_id'  => $k,
                                'valor'             => $v,
                                'estado_objecto_id' => 1
                            ]
                        ]
                    )
                    ) {
                        $this->id = $contactoActual['EntidadeContacto']['id'];
                        $this->set('estado_objecto_id', 2);
                    }
                }
            } else {
                $this->Entidade->EntidadeContacto->create();
                $this->Entidade->EntidadeContacto->save(
                    [
                        'EntidadeContacto' => [
                            'entidade_id'       => $data['Aluno']['entidade_id'],
                            'tipo_contacto_id'  => $k,
                            'valor'             => $v,
                            'estado_objecto_id' => 1
                        ]
                    ]
                );
            }
        }

        return $dataSource->commit();
    }

}
