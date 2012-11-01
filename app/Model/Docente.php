<?php

/**
 * Classe Model para o Docente
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.estudantes.view
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0.0

 *
 * @property Entidade @Entidade
 * @property Seccao @Seccao
 * @property DocenteCategoria @DocenteCategoria
 */
class Docente extends AppModel {

    var $name = 'Docente';
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    var $belongsTo = array(
        'Entidade' => array(
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'DocenteCategoria' => array(
            'className' => 'DocenteCategoria',
            'foreignKey' => 'docente_categoria_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'UnidadeOrganica' => array(
            'className' => 'UnidadeOrganica',
            'foreignKey' => 'unidade_organica_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    function getByUserID($user_id) {
        //Primeiro retornamos a entidade
      
        $this->contain(array('Entidade'));
        $docente = $this->find('first', array('conditions' => array('Entidade.user_id' => $user_id),));

        return $docente['Docente']['id'];
    }

    public function cadastraDocente(array $data) {
        $dataSource = $this->getDataSource();

        $dataSource->begin();


        if (isset($data['Docente']['codigo']) && $data['Docente']['codigo'] == '') {
            $data['Docente']['codigo'] = $this->Entidade->User->geraUsername($data['Entidade']['name']);
        }

        //Grava os dados do Usuario
        $this->Entidade->User->create();
        $data['User']['username'] = $data['Docente']['codigo'];
        $data['User']['password'] = AuthComponent::password($data['Docente']['codigo']);
        $data['User']['codigocartao'] = $data['Docente']['codigo'];
        $data['User']['name'] = $data['Entidade']['name'];
        $data['User']['group_id'] = 4;
        if ($this->Entidade->User->save($data)) {
            //Grava os dados da Entidade
            $data['Docente']['user_id'] = $this->Entidade->User->getLastInsertID();
            $data['Entidade']['user_id'] = $this->Entidade->User->getLastInsertID();
            $this->Entidade->create();
            if ($this->Entidade->save($data)) {

                //Grava os dados do Docente
                $data['Docente']['entidade_id'] = $this->Entidade->getLastInsertID();
                $this->create();
                if ($this->save($data)) {
                    //Grava os dados de Identificacao

                    $identificacao = array('EntidadeIdentificacao' => $data['EntidadeIdentificacao']);
                    $identificacao['EntidadeIdentificacao']['entidade_id'] = $this->Entidade->getLastInsertID();
                    $identificacao['EntidadeIdentificacao']['estado_objecto_id'] = 1;

                    $this->Entidade->EntidadeIdentificacao->create();
                    $this->Entidade->EntidadeIdentificacao->save($identificacao);


                    //Grava os dados de Morada e Contactos

                    $contactos = $data['EntidadeContacto'];
                    foreach ($contactos as $k => $v) {
                        $this->Entidade->EntidadeContacto->create();
                        $this->Entidade->EntidadeContacto->save(
                                array(
                                    'EntidadeContacto' => array(
                                        'entidade_id' => $this->Entidade->getLastInsertID(),
                                        'tipo_contacto_id' => $k,
                                        'valor' => $v,
                                        'estado_objecto_id' => 1
                                    )
                                )
                        );
                    }

                    return $dataSource->commit();
                }
            }
        }


        $dataSource->rollback();
    }

        /**
     *Esta funcao faz o mesmo que find list, mas busca o name a partir da tabela entidades
         *@todo ver way de passar conditions como argumento
     */
    public function listaDocentes(){

        $funcionarios = $this->find('all',array('fields'=>array('id','Entidade.name')));

        $f=array();
        foreach($funcionarios as $funcionario){

            $f[$funcionario[$this->alias]['id']]=$funcionario['Entidade']['name'];
        }
        return $f;
    }

}
