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
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.10.0.0
     *
     *
     *
     */
    class MatriculasController extends AppController {

        var $name = 'Matriculas';

        public function carregar_ficheiro_renovacao() {
            $this->loadModel('Upload');
            if ($this->request->is('post')) {

                $type = $this->request->data['Upload']['file']['type'];
                if ($type == 'text/plain') {

                    $upload_sucesso = $this->Upload->uploadFiles('uploads', array($this->request->data['Upload']['file']), 'renovacao');
                    if (isset($upload_sucesso['urls'])) {


                        $this->request->data['Upload']['name']           = $this->request->data['Upload']['file']['name'];
                        $this->request->data['Upload']['size']           = $this->request->data['Upload']['file']['size'];
                        $this->request->data['Upload']['file_url']       = $upload_sucesso['urls'][0];
                        $this->request->data['Upload']['tipo_upload_id'] = 1;
                        $this->Upload->create();
                        $this->Upload->save($this->request->data);


                        //CakeRabbit::publish();
                        $processado = $this->Matricula->processaFicheiroRenovacao($upload_sucesso['urls'][0],
                            $this->request->data['Upload']['ano_lectivo']);
                        if ($processado) {
                            $this->Session->setFlash(__('Ficheiro de Renovação Processado com Sucesso'), 'default', array('class' => 'alert success'));
                            $this->redirect(array('action' => 'renovacao_matriculas', 2014));
                        }
                    }
                } else {
                    $this->Session->setFlash(__('Tentou carregar um ficheiro no formato errado.'), 'default', array('class' => 'alert error'));
                }
            }

            $anoLectivos = $this->Matricula->AnoLectivo->find('list', array('order' => 'ano DESC', 'fields' => array('ano',
                'ano')));
            $this->set(compact('anoLectivos'));
        }

        /**
         * Instrucoes sobre como o aluno fazer a renovacao de matricula
         */
        public function estudante_como_renovar() {
            echo "Detalhes até amanha";
        }

        public function exportar_matriculas() {
            $this->Matricula->contain(array(
                'AnoLectivo'
            ));
            $matriculas = $this->Matricula->find('all', array('conditions' => array('AnoLectivo.ano' => 2013)));
            die(debug($matriculas));
        }

        public function exportar_extracto_renovacao(){
                if($this->request->is('post')){
                    $this->Matricula->contain(array('FinanceiroPagamento'));
                    $matriculas = $this->Matricula->find('all',array('conditions'=>array('tipo_matricula_id'=>2,
                        'data between ? and ?'=>array($this->request->data['Matricula']['data_inicio'],
                            $this->request->data['Matricula']['data_fim']))));


                    $this->set(compact('matriculas'));

                    $this->render('exportar_extracto_renovacao_excel');
                }
        }

        public function fazer_reingresso($alunoId) {
            $this->Matricula->Aluno->id = $alunoId;
            if (!$this->Matricula->Aluno->exists()) {
                throw new NotFoundException(__('Aluno Invalido'));
            }

            if ($this->request->is('post') || $this->request->is('put')) {
                $this->Matricula->create();
                $this->Matricula->save($this->request->data);
                $this->Session->setFlash(__('Reingresso realizado com sucesso'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->request->data['Matricula']['aluno_id']));
            }

            $aluno           = $this->Matricula->Aluno->getAlunoForAction($alunoId);
            $renovacoesFalta = $this->Matricula->getStatusRenovacao($alunoId);
            if (count($renovacoesFalta) < 2) {
                $this->Session->setFlash(__('Este estudante tem menos de 2 anos fora da Universidade. Deve renovar a matricula em vez de reingresso'), 'default', array('class' => 'alert info'));
                $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $alunoId));
            }
            $anoRenovacoes = array();
            foreach ($renovacoesFalta as $k => $v) {
                $anoRenovacoes[$v['AnoLectivo']['id']] = $v['AnoLectivo']['ano'];
            }
            $this->Matricula->contain('AnoLectivo', 'EstadoMatricula', 'Curso', 'TipoMatricula');
            $matriculas = $this->Matricula->find('all', array('conditions' => array('aluno_id' => $alunoId), 'order' => 'AnoLectivo.ano'));

            $this->set(compact('aluno', 'renovacoesFalta', 'matriculas', 'anoRenovacoes'));
        }

        /**
         * Overview das Matriculas
         * Mostra o grafico de Novos ingressos por Curso
         */
        function index() {
            $this->paginate = array(
                'contain' => array(
                    'Aluno' => array(
                        'Entidade'
                    ), 'Curso', 'EstadoMatricula', 'AnoLectivo', 'TipoMatricula'
                ),
                'order'   => 'Matricula.data DESC',
                'limit'   => '10'
            );

            $matriculas = $this->paginate('Matricula');

            $this->set(compact('matriculas'));
        }

        public function print_boletim_matricula($alunoId) {
            $this->Matricula->Aluno->contain(array(
                'Entidade'        => array(
                    'Genero', 'PaisNascimento', 'EstadoCivil', 'EntidadeIdentificacao' => array(
                        'DocumentoIdentificacao'
                    )
                ),
                'Curso'           => array(
                    'UnidadeOrganica'
                ),
                'AlunoNivelMedio' => array(
                    'EscolaNivelMedio' => array(
                        'Provincia'
                    )
                )
            ));
            $aluno = $this->Matricula->Aluno->findById($alunoId);

            $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($aluno['Curso']['unidade_organica_id']);
            if ($faculdade['UnidadeOrganica']['tipo_unidade_organica_id'] != 1) {
                $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($faculdade['UnidadeOrganica']['parent_id']);
            }

            $contactos = $this->Matricula->Aluno->processaContacto($alunoId);
            $this->set(compact('aluno', 'faculdade', 'contactos'));
        }

        public function print_comprovativo_matricula($alunoId) {
            $this->Matricula->Aluno->contain(array(
                'Entidade' => array('User'), 'Curso'
            ));

            $aluno = $this->Matricula->Aluno->findById($alunoId);
            $this->set(compact('aluno', 'faculdade'));
        }

        public function faculdade_print_comprovativo_matricula($alunoId) {
            $this->Matricula->Aluno->contain(array(
                'Entidade' => array('User'), 'Curso'
            ));

            $aluno = $this->Matricula->Aluno->findById($alunoId);
            $this->set(compact('aluno', 'faculdade'));

        }

        public function print_comprovativo_renovacao_matricula($matriculaId) {
            $this->Matricula->contain(array(
                'Aluno'                       => array(
                    'Entidade', 'User'
                ),
                'AnoLectivo', 'Curso', 'User' => array(
                    'Entidade'
                )
            ));
            $aluno = $this->Matricula->findById($matriculaId);

            $this->set(compact('aluno'));
        }

        public function renovacao_matriculas($ano = null) {
            if ($ano == null) {
                $ano = date('Y');
            }

            $this->Matricula->AnoLectivo->contain();
            $anolectivo = $this->Matricula->AnoLectivo->findByAno($ano);
            $this->Matricula->contain(array(
                'Aluno' => array(
                    'Entidade'
                ), 'Curso', 'AnoLectivo'
            ));

            $this->paginate = array(
                'contain'    => array(
                    'Aluno' => array(
                        'Entidade'
                    ), 'Curso', 'AnoLectivo'
                ),
                'order'      => 'Matricula.data DESC',
                'limit'      => '10',
                'conditions' => array('ano_lectivo_id' => $anolectivo['AnoLectivo']['id'], 'tipo_matricula_id' => 2)
            );


            $matriculas = $this->paginate('Matricula');

            $this->set(compact('anolectivo', 'matriculas', 'total'));
        }

        public function renovar_matricula($alunoId) {

            $this->Matricula->Aluno->id = $alunoId;
            if (!$this->Matricula->Aluno->exists()) {
                throw new NotFoundException(__('Aluno Invalido'));
            }

            if ($this->request->is('post') || $this->request->is('put')) {

                if ($this->Matricula->renovaMatricula($this->request->data)) {
                    $this->Session->setFlash(__('A Matricula do Aluno foi renovada com Sucesso'), 'default', array('class' => 'alert alert-success'));
                } else {
                    $this->Session->setFlash(__('Problemas na renovacao de matricula'), 'default', array('class' => 'alert alert-danger'));
                }

                $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->request->data['Matricula']['aluno_id']));
            }

            $aluno           = $this->Matricula->Aluno->getAlunoForAction($alunoId);
            $renovacoesFalta = $this->Matricula->getStatusRenovacao($alunoId, true);
            $this->Matricula->contain('AnoLectivo', 'EstadoMatricula', 'Curso', 'TipoMatricula');
            $matriculas = $this->Matricula->find('all', array('conditions' => array('aluno_id' => $alunoId), 'order' => 'AnoLectivo.ano'));

            $this->set(compact('aluno', 'renovacoesFalta', 'matriculas'));
        }

        public function report_matriculados_ano() {
            $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
            $anoLectivos   = $this->Matricula->AnoLectivo->find('list', array('conditions' => array('AnoLectivo.ano >=' => $anoLectivoAno - 10), 'fields' => array('AnoLectivo.ano'), 'order' => array('AnoLectivo.ano Desc')));

            $anoLectivoIds = array_keys($anoLectivos);

            $matriculas     = array();
            $novosIngressos = $renovacao = $reingresso = array();
            foreach ($anoLectivos as $k => $v) {
                $this->Matricula->contain(array(
                    'TipoMatricula', 'AnoLectivo'
                ));
                $matricula = $this->Matricula->find('all', array('conditions' => array('Matricula.ano_lectivo_id' => $k),
                                                                 'fields'     => array('TipoMatricula.name', 'count(*) as total', 'AnoLectivo.ano'),
                                                                 'group'      => array('TipoMatricula.name'),
                                                                 'order'      => array('TipoMatricula.id ASC'),
                ));
                foreach ($matricula as $m) {
                    if ($m['TipoMatricula']['id'] == 1) {
                        $novosIngressos[$m['AnoLectivo']['ano']] = $m[0]['total'];
                    } elseif ($m['TipoMatricula']['id'] == 2) {
                        $renovacao[$m['AnoLectivo']['ano']] = $m[0]['total'];
                    } elseif ($m['TipoMatricula']['id'] == 3) {
                        $reingresso[$m['AnoLectivo']['ano']] = $m[0]['total'];
                    }
                }

                $matriculas[$v] = $matricula;
            }
            $this->Matricula->contain(array(
                'AnoLectivo', 'TipoMatricula'
            ));

            $this->set(compact('anoLectivos', 'matriculas', 'novosIngressos', 'renovacao', 'reingresso'));
        }

        public function report_matriculados_curso() {
            $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
            debug($anoLectivoAno);
        }

    }

?>