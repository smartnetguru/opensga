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
     *@property Matricula $Matricula
     *
     *
     */
    class MatriculasController extends AppController
    {

        var $name = 'Matriculas';

        public function carregar_ficheiro_renovacao()
        {
            $this->loadModel('Upload');
            if ($this->request->is('post')) {

                $type = $this->request->data['Upload']['file']['type'];
                if ($type == 'text/plain') {

                    $upload_sucesso = $this->Upload->uploadFiles('uploads', [$this->request->data['Upload']['file']],
                        'renovacao');
                    if (isset($upload_sucesso['urls'])) {


                        $this->request->data['Upload']['name'] = $this->request->data['Upload']['file']['name'];
                        $this->request->data['Upload']['size'] = $this->request->data['Upload']['file']['size'];
                        $this->request->data['Upload']['file_url'] = $upload_sucesso['urls'][0];
                        $this->request->data['Upload']['tipo_upload_id'] = 1;
                        $this->Upload->create();
                        $this->Upload->save($this->request->data);


                        //CakeRabbit::publish();
                        $processado = $this->Matricula->processaFicheiroRenovacao($upload_sucesso['urls'][0],
                            $this->request->data['Upload']['ano_lectivo']);
                        if ($processado) {
                            $this->Session->setFlash(__('Ficheiro de Renovação Processado com Sucesso'), 'default',
                                ['class' => 'alert success']);
                            $this->redirect(['action' => 'renovacao_matriculas', 2014]);
                        }
                    }
                } else {
                    $this->Session->setFlash(__('Tentou carregar um ficheiro no formato errado.'), 'default',
                        ['class' => 'alert error']);
                }
            }

            $anoLectivos = $this->Matricula->AnoLectivo->find('list', [
                'order'  => 'ano DESC',
                'fields' => [
                    'ano',
                    'ano'
                ]
            ]);
            $this->set(compact('anoLectivos'));
        }

        /**
         * Instrucoes sobre como o aluno fazer a renovacao de matricula
         */
        public function estudante_como_renovar()
        {
            echo "Detalhes até amanha";
        }

        public function exportar_extracto_renovacao()
        {
            if ($this->request->is('post')) {
                $this->Matricula->contain(['FinanceiroPagamento']);
                $matriculas = $this->Matricula->find('all', [
                    'conditions' => [
                        'tipo_matricula_id'    => 2,
                        'data between ? and ?' => [
                            $this->request->data['Matricula']['data_inicio'],
                            $this->request->data['Matricula']['data_fim']
                        ]
                    ]
                ]);


                $this->set(compact('matriculas'));

                $this->render('exportar_extracto_renovacao_excel');
            }
        }

        public function exportar_matriculas()
        {
            $this->Matricula->contain([
                'AnoLectivo'
            ]);
            $matriculas = $this->Matricula->find('all', ['conditions' => ['AnoLectivo.ano' => 2013]]);
            die(debug($matriculas));
        }

        public function faculdade_print_comprovativo_matricula($alunoId)
        {
            $this->Matricula->Aluno->contain([
                'Entidade' => ['User'],
                'Curso'
            ]);

            $aluno = $this->Matricula->Aluno->findById($alunoId);
            $this->set(compact('aluno', 'faculdade'));

        }

        public function fazer_reingresso($alunoId)
        {
            $this->Matricula->Aluno->id = $alunoId;
            if (!$this->Matricula->Aluno->exists()) {
                throw new NotFoundException(__('Aluno Invalido'));
            }

            if ($this->request->is('post') || $this->request->is('put')) {
                $this->Matricula->create();
                $this->Matricula->save($this->request->data);
                $this->Session->setFlash(__('Reingresso realizado com sucesso'), 'default',
                    ['class' => 'alert alert-success']);
                $this->redirect([
                    'controller' => 'alunos',
                    'action'     => 'perfil_estudante',
                    $this->request->data['Matricula']['aluno_id']
                ]);
            }

            $aluno = $this->Matricula->Aluno->getAlunoForAction($alunoId);
            $renovacoesFalta = $this->Matricula->getStatusRenovacao($alunoId);
            if (count($renovacoesFalta) < 2) {
                $this->Session->setFlash(__('Este estudante tem menos de 2 anos fora da Universidade. Deve renovar a matricula em vez de reingresso'),
                    'default', ['class' => 'alert info']);
                $this->redirect(['controller' => 'alunos', 'action' => 'perfil_estudante', $alunoId]);
            }
            $anoRenovacoes = [];
            foreach ($renovacoesFalta as $k => $v) {
                $anoRenovacoes[$v['AnoLectivo']['id']] = $v['AnoLectivo']['ano'];
            }
            $this->Matricula->contain('AnoLectivo', 'EstadoMatricula', 'Curso', 'TipoMatricula');
            $matriculas = $this->Matricula->find('all',
                ['conditions' => ['aluno_id' => $alunoId], 'order' => 'AnoLectivo.ano']);

            $this->set(compact('aluno', 'renovacoesFalta', 'matriculas', 'anoRenovacoes'));
        }

        /**
         * Overview das Matriculas
         * Mostra o grafico de Novos ingressos por Curso
         *
         * @todo So se anula a matricula do presente ano Lectivo :)
         */
        function index()
        {
            $this->paginate = [
                'contain' => [
                    'Aluno' => [
                        'Entidade'
                    ],
                    'Curso',
                    'EstadoMatricula',
                    'AnoLectivo',
                    'TipoMatricula'
                ],
                'order'   => 'Matricula.data DESC',
                'limit'   => '10'
            ];

            $matriculas = $this->paginate('Matricula');

            $this->set(compact('matriculas'));
        }

        public function print_boletim_matricula($alunoId)
        {
            $this->Matricula->Aluno->contain([
                'Entidade'        => [
                    'Genero',
                    'PaisNascimento',
                    'EstadoCivil',
                    'EntidadeIdentificacao' => [
                        'DocumentoIdentificacao'
                    ]
                ],
                'Curso'           => [
                    'UnidadeOrganica'
                ],
                'AlunoNivelMedio' => [
                    'EscolaNivelMedio' => [
                        'Provincia'
                    ]
                ]
            ]);
            $aluno = $this->Matricula->Aluno->findById($alunoId);

            $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($aluno['Curso']['unidade_organica_id']);
            if ($faculdade['UnidadeOrganica']['tipo_unidade_organica_id'] != 1) {
                $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($faculdade['UnidadeOrganica']['parent_id']);
            }

            $contactos = $this->Matricula->Aluno->processaContacto($alunoId);
            $this->set(compact('aluno', 'faculdade', 'contactos'));
        }

        public function print_comprovativo_matricula($alunoId)
        {
            $this->Matricula->Aluno->contain([
                'Entidade' => ['User'],
                'Curso'
            ]);

            $aluno = $this->Matricula->Aluno->findById($alunoId);
            $this->set(compact('aluno', 'faculdade'));
        }

        public function print_comprovativo_renovacao_matricula($matriculaId)
        {
            $this->Matricula->contain([
                'Aluno' => [
                    'Entidade',
                    'User'
                ],
                'AnoLectivo',
                'Curso',
                'User'  => [
                    'Entidade'
                ]
            ]);
            $aluno = $this->Matricula->findById($matriculaId);

            $this->set(compact('aluno'));
        }

        public function renovacao_matriculas($ano = null)
        {
            if ($ano == null) {
                $ano = date('Y');
            }

            $this->Matricula->AnoLectivo->contain();
            $anolectivo = $this->Matricula->AnoLectivo->findByAno($ano);
            $this->Matricula->contain([
                'Aluno' => [
                    'Entidade'
                ],
                'Curso',
                'AnoLectivo'
            ]);

            $this->paginate = [
                'contain'    => [
                    'Aluno' => [
                        'Entidade'
                    ],
                    'Curso',
                    'AnoLectivo'
                ],
                'order'      => 'Matricula.data DESC',
                'limit'      => '10',
                'conditions' => ['ano_lectivo_id' => $anolectivo['AnoLectivo']['id'], 'tipo_matricula_id' => 2]
            ];


            $matriculas = $this->paginate('Matricula');

            $this->set(compact('anolectivo', 'matriculas', 'total'));
        }

        public function renovar_matricula($alunoId)
        {

            $this->Matricula->Aluno->id = $alunoId;
            if (!$this->Matricula->Aluno->exists()) {
                throw new NotFoundException(__('Aluno Invalido'));
            }

            if ($this->request->is('post') || $this->request->is('put')) {

                if ($this->Matricula->renovaMatricula($this->request->data)) {
                    $this->Session->setFlash(__('A Matricula do Aluno foi renovada com Sucesso'), 'default',
                        ['class' => 'alert alert-success']);
                } else {
                    $this->Session->setFlash(__('Problemas na renovacao de matricula'), 'default',
                        ['class' => 'alert alert-danger']);
                }

                $this->redirect([
                    'controller' => 'alunos',
                    'action'     => 'perfil_estudante',
                    $this->request->data['Matricula']['aluno_id']
                ]);
            }

            $aluno = $this->Matricula->Aluno->getAlunoForAction($alunoId);
            $renovacoesFalta = $this->Matricula->getStatusRenovacao($alunoId, true);
            $this->Matricula->contain('AnoLectivo', 'EstadoMatricula', 'Curso', 'TipoMatricula');
            $matriculas = $this->Matricula->find('all',
                ['conditions' => ['aluno_id' => $alunoId], 'order' => 'AnoLectivo.ano']);

            $this->set(compact('aluno', 'renovacoesFalta', 'matriculas'));
        }

        public function report_matriculados_ano()
        {
            $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
            $anoLectivos = $this->Matricula->AnoLectivo->find('list', [
                'conditions' => ['AnoLectivo.ano >=' => $anoLectivoAno - 10],
                'fields'     => ['AnoLectivo.ano'],
                'order'      => ['AnoLectivo.ano Desc']
            ]);

            $anoLectivoIds = array_keys($anoLectivos);

            $matriculas = [];
            $novosIngressos = $renovacao = $reingresso = [];
            foreach ($anoLectivos as $k => $v) {
                $this->Matricula->contain([
                    'TipoMatricula',
                    'AnoLectivo'
                ]);
                $matricula = $this->Matricula->find('all', [
                    'conditions' => ['Matricula.ano_lectivo_id' => $k],
                    'fields'     => ['TipoMatricula.name', 'count(*) as total', 'AnoLectivo.ano'],
                    'group'      => ['TipoMatricula.name'],
                    'order'      => ['TipoMatricula.id ASC'],
                ]);
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
            $this->Matricula->contain([
                'AnoLectivo',
                'TipoMatricula'
            ]);

            $this->set(compact('anoLectivos', 'matriculas', 'novosIngressos', 'renovacao', 'reingresso'));
        }

        public function report_matriculados_curso()
        {
            $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
            debug($anoLectivoAno);
        }

        public function relatorios_matriculados_por_ano(){
            $chart = new Highchart();

            $chart->chart = array(
                'renderTo' => 'container',
                'type' => 'line',
                'marginRight' => 130,
                'marginBottom' => 25
            );

            $chart->title = array(
                'text' => 'Monthly Average Temperature',
                'x' => - 20
            );
            $chart->subtitle = array(
                'text' => 'Source: WorldClimate.com',
                'x' => - 20
            );

            $chart->xAxis->categories = array(
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            );

            $chart->yAxis = array(
                'title' => array(
                    'text' => 'Temperature (°C)'
                ),
                'plotLines' => array(
                    array(
                        'value' => 0,
                        'width' => 1,
                        'color' => '#808080'
                    )
                )
            );
            $chart->legend = array(
                'layout' => 'vertical',
                'align' => 'right',
                'verticalAlign' => 'top',
                'x' => - 10,
                'y' => 100,
                'borderWidth' => 0
            );

            $chart->series[] = array(
                'name' => 'Tokyo',
                'data' => array(
                    7.0,
                    6.9,
                    9.5,
                    14.5,
                    18.2,
                    21.5,
                    25.2,
                    26.5,
                    23.3,
                    18.3,
                    13.9,
                    9.6
                )
            );
            $chart->series[] = array(
                'name' => 'New York',
                'data' => array(
                    - 0.2,
                    0.8,
                    5.7,
                    11.3,
                    17.0,
                    22.0,
                    24.8,
                    24.1,
                    20.1,
                    14.1,
                    8.6,
                    2.5
                )
            );
            $chart->series[] = array(
                'name' => 'Berlin',
                'data' => array(
                    - 0.9,
                    0.6,
                    3.5,
                    8.4,
                    13.5,
                    17.0,
                    18.6,
                    17.9,
                    14.3,
                    9.0,
                    3.9,
                    1.0
                )
            );
            $chart->series[] = array(
                'name' => 'London',
                'data' => array(
                    3.9,
                    4.2,
                    5.7,
                    8.5,
                    11.9,
                    15.2,
                    17.0,
                    16.6,
                    14.2,
                    10.3,
                    6.6,
                    4.8
                )
            );

            $chart->tooltip->formatter = new HighchartJsExpr(
                "function() { return '<b>'+ this.series.name +'</b><br/>'+ this.x +': '+ this.y +'°C';}");
        }

        public function relatorios(){

        }

        public function estudante_index(){

            $userId = $this->Session->read('Auth.User.id');

            $this->Matricula->Aluno->contain([
                'Entidade'
            ]);
            $aluno = $this->Matricula->Aluno->find('first', ['conditions' => ['Entidade.user_id' => $userId]]);
            if (empty($aluno)) {
                throw new NotFoundException('Este aluno não existe no Sistema');
            }

            $this->paginate = [
                'contain' => [
                    'Aluno' => [
                        'Entidade'
                    ],
                    'Curso',
                    'EstadoMatricula',
                    'AnoLectivo',
                    'TipoMatricula'
                ],
                'order'   => 'Matricula.data DESC',
                'limit'   => '10',
                'conditions'=>[
                    'Matricula.aluno_id'=>$aluno['Aluno']['id']
                ]
            ];

            $matriculas = $this->paginate('Matricula');

            $this->set(compact('matriculas'));

        }

        /**
         * @todo Implementar a funcao
         */
        public function estudante_renovar_matricula(){

            $userId = $this->Session->read('Auth.User.id');
            $aluno = $this->Matricula->Aluno->getByUserId($userId);

            $referenciaRenovacao = $this->Matricula->getReferenciaRenovacaoMatricula($aluno['Aluno']['id']);

            $valorRenovacao = $this->Matricula->getValorRenovacaoMatricula($aluno['Aluno']['id']);

            $this->set(compact('valorRenovacao','referenciaRenovacao'));


        }

        /**
         * @todo Implementar a funcao
         */
        public function estudante_ver_matricula(){

        }

        /**
         * @todo Implementar a funcao
         */
        public function estudante_anular_matricula(){

        }


    }

?>