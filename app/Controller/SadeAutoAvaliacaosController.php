<?php
    App::uses('AppController', 'Controller');

    /**
     * SadeAutoAvaliacaos Controller
     *
     * @property SadeAutoAvaliacao $SadeAutoAvaliacao
     */
    class SadeAutoAvaliacaosController extends AppController
    {


        /**
         * index method
         *
         * @return void
         */
        public function index()
        {
            $this->SadeAutoAvaliacao->recursive = 0;
            $this->set('sadeAutoAvaliacaos', $this->paginate());
        }

        /**
         * view method
         *
         * @param string $id
         * @return void
         */
        public function view($id = null)
        {
            $this->SadeAutoAvaliacao->id = $id;
            if (!$this->SadeAutoAvaliacao->exists()) {
                throw new NotFoundException(__('Invalid sade auto avaliacao'));
            }
            $this->set('sadeAutoAvaliacao', $this->SadeAutoAvaliacao->read(null, $id));
        }

        /**
         * add method
         *
         * @return void
         */
        public function add()
        {
            if ($this->request->is('post')) {
                $this->SadeAutoAvaliacao->create();
                if ($this->SadeAutoAvaliacao->save($this->request->data)) {
                    $this->Session->setFlash(__('The sade auto avaliacao has been saved'));
                    $this->redirect(['action' => 'index']);
                } else {
                    $this->Session->setFlash(__('The sade auto avaliacao could not be saved. Please, try again.'));
                }
            }
            $entidades = $this->SadeAutoAvaliacao->Entidade->find('list');
            $sadeParametros = $this->SadeAutoAvaliacao->SadeParametro->find('list');
            $anolectivos = $this->SadeAutoAvaliacao->AnoLectivo->find('list');
            $semestrelectivos = $this->SadeAutoAvaliacao->SemestreLectivo->find('list');
            $sadeAvaliacaos = $this->SadeAutoAvaliacao->SadeAvaliacao->find('list');
            $this->set(compact('entidades', 'sadeParametros', 'anolectivos', 'semestrelectivos', 'sadeAvaliacaos'));
        }

        /**
         * edit method
         *
         * @param string $id
         * @return void
         */
        public function edit($id = null)
        {
            $this->SadeAutoAvaliacao->id = $id;
            if (!$this->SadeAutoAvaliacao->exists()) {
                throw new NotFoundException(__('Invalid sade auto avaliacao'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->SadeAutoAvaliacao->save($this->request->data)) {
                    $this->Session->setFlash(__('The sade auto avaliacao has been saved'));
                    $this->redirect(['action' => 'index']);
                } else {
                    $this->Session->setFlash(__('The sade auto avaliacao could not be saved. Please, try again.'));
                }
            } else {
                $this->request->data = $this->SadeAutoAvaliacao->read(null, $id);
            }
            $entidades = $this->SadeAutoAvaliacao->Entidade->find('list');
            $sadeParametros = $this->SadeAutoAvaliacao->SadeParametro->find('list');
            $anolectivos = $this->SadeAutoAvaliacao->AnoLectivo->find('list');
            $semestrelectivos = $this->SadeAutoAvaliacao->SemestreLectivo->find('list');
            $sadeAvaliacaos = $this->SadeAutoAvaliacao->SadeAvaliacao->find('list');
            $this->set(compact('entidades', 'sadeParametros', 'anolectivos', 'semestrelectivos', 'sadeAvaliacaos'));
        }

        /**
         * delete method
         *
         * @param string $id
         * @return void
         */
        public function delete($id = null)
        {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            $this->SadeAutoAvaliacao->id = $id;
            if (!$this->SadeAutoAvaliacao->exists()) {
                throw new NotFoundException(__('Invalid sade auto avaliacao'));
            }
            if ($this->SadeAutoAvaliacao->delete()) {
                $this->Session->setFlash(__('Sade auto avaliacao deleted'));
                $this->redirect(['action' => 'index']);
            }
            $this->Session->setFlash(__('Sade auto avaliacao was not deleted'));
            $this->redirect(['action' => 'index']);
        }

        /**
         * Pagina de Auto-Avaliação do Docente
         *
         * @todo Quando se coloca uma letra no campo parametro ele nao valida
         */
        public function docente()
        {
            if ($this->request->is('post') || $this->request->is('put')) {
                $user_id = $this->Session->read('Auth.User.id');
                $entidade = $this->SadeAutoAvaliacao->Entidade->find('first',
                    ['conditions' => ['Entidade.user_id' => $user_id]]);
                $respostas = $this->request->data['SadeAutoAvaliacao'];
                $parametros_find = array_keys($respostas);

                $parametros = $this->SadeAutoAvaliacao->SadeParametro->find('all',
                    ['conditions' => ['SadeParametro.codigo' => $parametros_find]]);
                $parametros_array = [];
                foreach ($parametros as $p) {
                    $parametros_array[$p['SadeParametro']['codigo']] = [
                        'quantidade' => $p['SadeParametro']['quantidade_padrao'],
                        'pontos'     => $p['SadeParametro']['pontos_padrao'],
                    ];
                }

                foreach ($respostas as $k => $v) {
                    //$sade_parametro = $this->SadeAutoAvaliacao->SadeParametro->find('first',array('conditions'=>array('SadeParametro.codigo'=>$k)));
                    $sade_auto_avaliacao = [];
                    $sade_auto_avaliacao['resposta'] = $v['resposta'];
                    $sade_auto_avaliacao['entidade_id'] = $entidade['Entidade']['id'];
                    $sade_auto_avaliacao['sade_parametro_id'] = $k;
                    $sade_auto_avaliacao['data'] = date('Y-m-d');
                    $sade_auto_avaliacao['ano_lectivo_id'] = $this->Session->read('SGAConfig.ano_lectivo_id');
                    $sade_auto_avaliacao['semestre_lectivo_id'] = $this->Session->read('SGAConfig.semestre_lectivo_id');
                    if ($v['resposta'] >= $parametros_array[$k]['quantidade']) {
                        $sade_auto_avaliacao['pontos_obtidos'] = $parametros_array[$k]['pontos'];
                    } else {
                        $sade_auto_avaliacao['pontos_obtidos'] = 0;
                    }
                    $avaliacao_antiga = $this->SadeAutoAvaliacao->find('first', [
                        'conditions' => [
                            'SadeAutoAvaliacao.sade_parametro_id' => $k,
                            'SadeAutoAvaliacao.entidade_id'       => $entidade['Entidade']['id'],
                            'SadeAutoAvaliacao.ano_lectivo_id'    => $this->Session->read('SGAConfig.ano_lectivo_id'),
                        ],
                    ]);

                    if ($avaliacao_antiga) {
                        $this->SadeAutoAvaliacao->id = $avaliacao_antiga['SadeAutoAvaliacao']['id'];
                        $this->SadeAutoAvaliacao->save($sade_auto_avaliacao);
                    } else {
                        $this->SadeAutoAvaliacao->create();
                        $this->SadeAutoAvaliacao->save($sade_auto_avaliacao);
                    }
                }
                $this->Session->setFlash('Auto Avaliacao Realizada');
                $this->redirect(['controller' => 'docentes', 'action' => 'perfil', $entidade['Entidade']['id']]);

            }

            //buscar os parametros e warawara
            $user_id = $this->Session->read('Auth.User.id');
            $entidade = $this->SadeAutoAvaliacao->Entidade->find('first',
                ['conditions' => ['Entidade.user_id' => $user_id]]);
            $this->SadeAutoAvaliacao->contain();
            $avaliacao_antiga = $this->SadeAutoAvaliacao->find('all', [
                'conditions' => [
                    'SadeAutoAvaliacao.entidade_id'    => $entidade['Entidade']['id'],
                    'SadeAutoAvaliacao.ano_lectivo_id' => $this->Session->read('SGAConfig.ano_lectivo_id'),
                ],
            ]);
            $auto_avaliacao = [];
            foreach ($avaliacao_antiga as $aa) {
                $auto_avaliacao[$aa['SadeAutoAvaliacao']['sade_parametro_id']] = [
                    'resposta'           => $aa['SadeAutoAvaliacao']['resposta'],
                    'pontos_obtidos'     => $aa['SadeAutoAvaliacao']['pontos_obtidos'],
                    'pontos_bonificados' => $aa['SadeAutoAvaliacao']['pontos_bonificados'],
                ];
            }


            $this->set(compact('auto_avaliacao'));
        }

        public function assistente()
        {
            if ($this->request->is('post') || $this->request->is('put')) {
                $user_id = $this->Session->read('Auth.User.id');
                $entidade = $this->SadeAutoAvaliacao->Entidade->find('first',
                    ['conditions' => ['Entidade.user_id' => $user_id]]);
                $respostas = $this->request->data['SadeAutoAvaliacao'];
                $parametros_find = array_keys($respostas);

                $parametros = $this->SadeAutoAvaliacao->SadeParametro->find('all',
                    ['conditions' => ['SadeParametro.codigo' => $parametros_find]]);
                $parametros_array = [];
                foreach ($parametros as $p) {
                    $parametros_array[$p['SadeParametro']['codigo']] = [
                        'quantidade' => $p['SadeParametro']['quantidade_padrao'],
                        'pontos'     => $p['SadeParametro']['pontos_padrao'],
                    ];
                }

                foreach ($respostas as $k => $v) {
                    //$sade_parametro = $this->SadeAutoAvaliacao->SadeParametro->find('first',array('conditions'=>array('SadeParametro.codigo'=>$k)));
                    $sade_auto_avaliacao = [];
                    $sade_auto_avaliacao['resposta'] = $v['resposta'];
                    $sade_auto_avaliacao['entidade_id'] = $entidade['Entidade']['id'];
                    $sade_auto_avaliacao['sade_parametro_id'] = $k;
                    $sade_auto_avaliacao['data'] = date('Y-m-d');
                    $sade_auto_avaliacao['ano_lectivo_id'] = $this->Session->read('SGAConfig.ano_lectivo_id');
                    $sade_auto_avaliacao['semestre_lectivo_id'] = $this->Session->read('SGAConfig.semestre_lectivo_id');
                    if ($v['resposta'] >= $parametros_array[$k]['quantidade']) {
                        $sade_auto_avaliacao['pontos_obtidos'] = $parametros_array[$k]['pontos'];
                    } else {
                        $sade_auto_avaliacao['pontos_obtidos'] = 0;
                    }
                    $avaliacao_antiga = $this->SadeAutoAvaliacao->find('first', [
                        'conditions' => [
                            'SadeAutoAvaliacao.sade_parametro_id' => $k,
                            'SadeAutoAvaliacao.entidade_id'       => $entidade['Entidade']['id'],
                            'SadeAutoAvaliacao.ano_lectivo_id'    => $this->Session->read('SGAConfig.ano_lectivo_id'),
                        ],
                    ]);

                    if ($avaliacao_antiga) {
                        $this->SadeAutoAvaliacao->id = $avaliacao_antiga['SadeAutoAvaliacao']['id'];
                        $this->SadeAutoAvaliacao->save($sade_auto_avaliacao);
                    } else {
                        $this->SadeAutoAvaliacao->create();
                        $this->SadeAutoAvaliacao->save($sade_auto_avaliacao);
                    }
                }
                $this->Session->setFlash('Auto Avaliacao Realizada');
                $this->redirect(['controller' => 'docentes', 'action' => 'perfil', $entidade['Entidade']['id']]);

            }

            //buscar os parametros e warawara
            $user_id = $this->Session->read('Auth.User.id');
            $entidade = $this->SadeAutoAvaliacao->Entidade->find('first', ['conditions' => ['Entidade.user_id' => 2]]);
            $this->SadeAutoAvaliacao->contain();
            $avaliacao_antiga = $this->SadeAutoAvaliacao->find('all', [
                'conditions' => [
                    'SadeAutoAvaliacao.entidade_id'    => $entidade['Entidade']['id'],
                    'SadeAutoAvaliacao.ano_lectivo_id' => $this->Session->read('SGAConfig.ano_lectivo_id'),
                ],
            ]);
            $auto_avaliacao = [];
            foreach ($avaliacao_antiga as $aa) {
                $auto_avaliacao[$aa['SadeAutoAvaliacao']['sade_parametro_id']] = [
                    'resposta'           => $aa['SadeAutoAvaliacao']['resposta'],
                    'pontos_obtidos'     => $aa['SadeAutoAvaliacao']['pontos_obtidos'],
                    'pontos_bonificados' => $aa['SadeAutoAvaliacao']['pontos_bonificados'],
                ];
            }


            $this->set(compact('auto_avaliacao'));

        }

        public function investigador()
        {
            if ($this->request->is('post') || $this->request->is('put')) {
                $user_id = $this->Session->read('Auth.User.id');
                $entidade = $this->SadeAutoAvaliacao->Entidade->find('first',
                    ['conditions' => ['Entidade.user_id' => $user_id]]);
                $respostas = $this->request->data['SadeAutoAvaliacao'];
                $parametros_find = array_keys($respostas);

                $parametros = $this->SadeAutoAvaliacao->SadeParametro->find('all',
                    ['conditions' => ['SadeParametro.codigo' => $parametros_find]]);
                $parametros_array = [];
                foreach ($parametros as $p) {
                    $parametros_array[$p['SadeParametro']['codigo']] = [
                        'quantidade' => $p['SadeParametro']['quantidade_padrao'],
                        'pontos'     => $p['SadeParametro']['pontos_padrao'],
                    ];
                }

                foreach ($respostas as $k => $v) {
                    //$sade_parametro = $this->SadeAutoAvaliacao->SadeParametro->find('first',array('conditions'=>array('SadeParametro.codigo'=>$k)));
                    $sade_auto_avaliacao = [];
                    $sade_auto_avaliacao['resposta'] = $v['resposta'];
                    $sade_auto_avaliacao['entidade_id'] = $entidade['Entidade']['id'];
                    $sade_auto_avaliacao['sade_parametro_id'] = $k;
                    $sade_auto_avaliacao['data'] = date('Y-m-d');
                    $sade_auto_avaliacao['ano_lectivo_id'] = $this->Session->read('SGAConfig.ano_lectivo_id');
                    $sade_auto_avaliacao['semestre_lectivo_id'] = $this->Session->read('SGAConfig.semestre_lectivo_id');
                    if ($v['resposta'] >= $parametros_array[$k]['quantidade']) {
                        $sade_auto_avaliacao['pontos_obtidos'] = $parametros_array[$k]['pontos'];
                    } else {
                        $sade_auto_avaliacao['pontos_obtidos'] = 0;
                    }
                    $avaliacao_antiga = $this->SadeAutoAvaliacao->find('first', [
                        'conditions' => [
                            'SadeAutoAvaliacao.sade_parametro_id' => $k,
                            'SadeAutoAvaliacao.entidade_id'       => $entidade['Entidade']['id'],
                            'SadeAutoAvaliacao.ano_lectivo_id'    => $this->Session->read('SGAConfig.ano_lectivo_id'),
                        ],
                    ]);

                    if ($avaliacao_antiga) {
                        $this->SadeAutoAvaliacao->id = $avaliacao_antiga['SadeAutoAvaliacao']['id'];
                        $this->SadeAutoAvaliacao->save($sade_auto_avaliacao);
                    } else {
                        $this->SadeAutoAvaliacao->create();
                        $this->SadeAutoAvaliacao->save($sade_auto_avaliacao);
                    }
                }
                $this->Session->setFlash('Auto Avaliacao Realizada');
                $this->redirect(['controller' => 'docentes', 'action' => 'perfil', $entidade['Entidade']['id']]);

            }

            //buscar os parametros e warawara
            $user_id = $this->Session->read('Auth.User.id');
            $entidade = $this->SadeAutoAvaliacao->Entidade->find('first',
                ['conditions' => ['Entidade.user_id' => $user_id]]);
            $this->SadeAutoAvaliacao->contain();
            $avaliacao_antiga = $this->SadeAutoAvaliacao->find('all', [
                'conditions' => [
                    'SadeAutoAvaliacao.entidade_id'    => $entidade['Entidade']['id'],
                    'SadeAutoAvaliacao.ano_lectivo_id' => $this->Session->read('SGAConfig.ano_lectivo_id'),
                ],
            ]);
            $auto_avaliacao = [];
            foreach ($avaliacao_antiga as $aa) {
                $auto_avaliacao[$aa['SadeAutoAvaliacao']['sade_parametro_id']] = [
                    'resposta'           => $aa['SadeAutoAvaliacao']['resposta'],
                    'pontos_obtidos'     => $aa['SadeAutoAvaliacao']['pontos_obtidos'],
                    'pontos_bonificados' => $aa['SadeAutoAvaliacao']['pontos_bonificados'],
                ];
            }


            $this->set(compact('auto_avaliacao'));

        }

        public function update_form()
        {
            $dados = $this->request->data['SadeAutoAvaliacao'];
            $codigos = array_keys($dados);
            $codigo = $codigos[0];
            $parametro = $this->SadeAutoAvaliacao->SadeParametro->find('first',
                ['conditions' => ['SadeParametro.codigo' => $codigo]]);
            if (is_numeric($dados[$codigo]['resposta']) && $dados[$codigo]['resposta'] >= $parametro['SadeParametro']['quantidade_padrao']) {
                $this->set('pontos_obtidos', $parametro['SadeParametro']['pontos_padrao']);
            } else {
                $this->set('pontos_obtidos', 0);

            }
        }
    }
