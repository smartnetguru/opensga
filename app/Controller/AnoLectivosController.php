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
     ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.controller
     * @since         OpenSGA v 0.10.0.0
     *
     */
    class AnoLectivosController extends AppController
    {
        function index()
        {
            $this->AnoLectivo->recursive = 0;
            $this->paginate = ['order' => 'AnoLectivo.ano DESC'];
            $this->set('anolectivos', $this->paginate());
        }

        function ver_ano_lectivo($id = null)
        {
            //App::Import('Model','Logmv');
            //$logmv = new Logmv;
            if (!$id) {
                $this->Session->setFlash('Invalido %s', 'flasherror');
                $this->redirect(['action' => 'index']);
            }
            $this->set('anolectivo', $this->AnoLectivo->read(null, $id));
            if (empty($this->data)) {
                //$this->set('user', $this->User->read(null, $id));
                $this->data = $this->AnoLectivo->read(null, $id);
                //$logmv->logview(6,$this->Session->read('Auth.User.id'),$this->data["AnoLectivo"]["id"],$this->data["AnoLectivo"]["codigo"]);
            }
            $anolectivo = $this->AnoLectivo->find('list');
            //$this->set(compact('users'));
            //$groups = $this->User->Group->find('list');
            $this->set(compact('anolectivo'));
        }

        function novo_ano_lectivo()
        {

            if ($this->request->is('post')) {
                $this->AnoLectivo->create();
                if ($this->AnoLectivo->save($this->request->data)) {
                    $semestres = [];
                    $semestres[] = [
                        'SemestreLectivo' => [
                            'ano_lectivo_id' => $this->AnoLectivo->id,
                            'codigo'         => $this->request->data['AnoLectivo']['ano'] . '-1',
                            'semestre'       => 1,
                            'semestre_id'    => 1,
                        ],
                    ];
                    $semestres[] = [
                        'SemestreLectivo' => [
                            'ano_lectivo_id' => $this->AnoLectivo->id,
                            'codigo'         => $this->request->data['AnoLectivo']['ano'] . '-2',
                            'semestre'       => 2,
                            'semestre_id'    => 2,
                        ],
                    ];
                    $this->AnoLectivo->SemestreLectivo->create();
                    if ($this->AnoLectivo->SemestreLectivo->saveAll($semestres)) {
                        $this->Session->setFlash(__('O Ano lectivo e os seus semestres foram registrados com Sucesso'),
                            'default', ['class' => 'alert success']);
                        $this->redirect(['action' => 'index']);
                    } else {
                        $this->Session->setFlash(__('O ano lectivo foi gravado, mas os semestres não'), 'default',
                            ['class' => 'alert error']);
                    }
                } else {
                    $this->Session->setFlash(__('Não foi possivel gravar os dados. Tente novamente'), 'default',
                        ['class' => 'alert error']);
                }
            }


        }

        public function definir_ano_lectivo_actual()
        {
            $this->loadModel('Config');

            if ($this->request->is('post')) {
                $anoLectivo = $this->AnoLectivo->findById($this->request->data['AnoLectivo']['ano_lectivo_id']);

                //Altar primeiro o ano_lectivo
                $config = $this->Config->findByName('ano_lectivo');
                if ($config) {
                    $this->Config->id = $config['Config']['id'];
                    $this->Config->set('value', $anoLectivo['AnoLectivo']['ano']);
                    $this->Config->save();
                } else {
                    $this->Config->create();
                    $this->Config->save([
                        'name'  => 'ano_lectivo',
                        'value' => $anoLectivo['AnoLectivo']['ano'],
                    ]);
                }

                //Agora Alterar o Ano Lectivo ID
                $config = $this->Config->findByName('ano_lectivo_id');
                if ($config) {
                    $this->Config->id = $config['Config']['id'];
                    $this->Config->set('value', $anoLectivo['AnoLectivo']['id']);
                    $this->Config->save();
                } else {
                    $this->Config->create();
                    $this->Config->save([
                        'name'  => 'ano_lectivo_id',
                        'value' => $anoLectivo['AnoLectivo']['id'],
                    ]);
                }
                $this->Session->setFlash('Ano Lectivo Alterado com Sucesso', 'default',
                    ['class' => 'alert alert-success']);
                $this->redirect(['action' => 'index']);


            }
            $anoLectivos = $this->AnoLectivo->find('list', ['order' => 'ano DESC']);

            $this->set(compact('anoLectivos'));
        }

        /**
         * @Todo definir o ano a partir das Configuracoes Gerais
         * Define o Semestre Lectivo Actualmente em vigor, baseado no Ano Lectivo Activo
         */
        public function definir_semestre_actual()
        {
            $this->loadModel('Config');

            if ($this->request->is('post')) {

                $semestreLectivo = $this->AnoLectivo->SemestreLectivo->findById($this->request->data['SemestreLectivo']['semestre_lectivo_id']);

                //Altar primeiro o ano_lectivo
                $config = $this->Config->findByName('semestre_lectivo');
                if ($config) {
                    $this->Config->id = $config['Config']['id'];
                    $this->Config->set('value', $semestreLectivo['SemestreLectivo']['semestre']);
                    $this->Config->save();
                } else {
                    $this->Config->create();
                    $this->Config->save([
                        'name'  => 'semestre_lectivo',
                        'value' => $semestreLectivo['SemestreLectivo']['semestre'],
                    ]);
                }

                //Agora Alterar o Ano Lectivo ID
                $config = $this->Config->findByName('semestre_lectivo_id');
                if ($config) {
                    $this->Config->id = $config['Config']['id'];
                    $this->Config->set('value', $semestreLectivo['SemestreLectivo']['id']);
                    $this->Config->save();
                } else {
                    $this->Config->create();
                    $this->Config->save([
                        'name'  => 'semestre_lectivo_id',
                        'value' => $semestreLectivo['SemestreLectivo']['id'],
                    ]);
                }
                $this->Session->setFlash('Semestre Lectivo Alterado com Sucesso', 'default',
                    ['class' => 'alert alert-success']);
                $this->redirect(['action' => 'index']);

            }
            $anoLectivos = $this->AnoLectivo->find('list', ['order' => 'ano DESC']);

            $semestreLectivos = $this->AnoLectivo->SemestreLectivo->find('list', [
                'conditions' => [
                    'ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'),
                ],
                'fields'     => ['id', 'semestre'],
            ]);


            $this->set(compact('anoLectivos', 'semestreLectivos'));

        }

    }

?>