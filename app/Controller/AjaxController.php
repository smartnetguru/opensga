<?php

    class AjaxController extends AppController
    {

        public $uses = [];

        public function beforeFilter()
        {
            parent::beforeFilter();
            if ($this->request->is('ajax')) {
                $this->layout = false;
                $this->Security->csrfCheck = false;
                $this->Security->validatePost = false;
                //Configure::write('debug', 0);
                $this->layout = 'ajax';
                $this->Auth->allow();
            } else {
                throw new MethodNotAllowedException();
            }
        }

        public function estudante_get_bairros_autocomplete()
        {
            $this->autoRender = false;
            $this->loadModel('Bairro');

            $conditions = [
                'name LIKE ' => '%' . $this->request->query['term'] . '%',
            ];

            $results = $this->Bairro->find('all', [
                'fields'     => ['name'],
                'conditions' => $conditions,
                'group'      => ['name'],
                'limit'      => 20,
            ]);
            $codigos = Set::extract('../Bairro/name', $results);

            echo json_encode($codigos);
        }

        public function estudante_get_cidades_by_provincia()
        {
            foreach ($this->request->data as $k => $v) {

                $provincia_id = reset($v);
            }
            $this->loadModel('Cidade');
            $cidades = $this->Cidade->find('list', ['conditions' => ['provincia_id' => $provincia_id]]);
            $this->set(compact('cidades'));
        }

        public function estudante_get_cursos_by_faculdade()
        {
            foreach ($this->request->data as $k => $v) {

                $faculdadeId = reset($v);
            }
            $this->loadModel('Curso');
            $departamentos = $this->Curso->UnidadeOrganica->children($faculdadeId);
            $unidadeOrganicas = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
            $unidadeOrganicas[] = $faculdadeId;
            $cursos = $this->Curso->find('list', ['conditions' => ['unidade_organica_id' => $unidadeOrganicas]]);
            $this->set(compact('cursos'));
        }

        public function estudante_get_cursos_by_unidade_organica()
        {
            $this->loadModel('Curso');
            $unidadeOrganicaId = $this->request->data['Curso']['unidade_organica_id'];

            $unidadeOrganicas = $this->Curso->UnidadeOrganica->children($unidadeOrganicaId);
            $todasUnidades = Hash::extract($unidadeOrganicas, '{n}.UnidadeOrganica.id');
            $todasUnidades[] = $unidadeOrganicaId;
            $cursos = $this->Curso->find('list', ['conditions' => ['unidade_organica_id' => $todasUnidades]]);
            $this->set(compact('cursos'));
        }

        public function estudante_get_escolas_by_distrito()
        {
            foreach ($this->request->data as $k => $v) {

                $cidade_id = reset($v);
            }
            $this->loadModel('EscolaNivelMedio');
            $distritos = $this->EscolaNivelMedio->find('list', ['conditions' => ['distrito_id' => $cidade_id]]);
            $this->set(compact('distritos'));
        }

        public function estudante_get_naturalidades_autocomplete()
        {
            $this->autoRender = false;
            $this->loadModel('Aluno');

            $conditions = [
                'Entidade.naturalidade LIKE ' => '%' . $this->request->query['term'] . '%',
            ];

            $results = $this->Aluno->Entidade->find('all', [
                'fields'     => ['naturalidade'],
                'conditions' => $conditions,
                'group'      => ['naturalidade'],
                'limit'      => 20,
            ]);
            $codigos = Set::extract('../Entidade/naturalidade', $results);

            echo json_encode($codigos);
        }

        public function get_bairros_autocomplete()
        {
            $this->autoRender = false;
            $this->loadModel('Bairro');

            $conditions = [
                'name LIKE ' => '%' . $this->request->query['term'] . '%',
            ];

            $results = $this->Bairro->find('all', [
                'fields'     => ['name'],
                'conditions' => $conditions,
                'group'      => ['name'],
                'limit'      => 20,
            ]);
            $codigos = Set::extract('../Bairro/name', $results);

            echo json_encode($codigos);
        }

        public function get_cidades_by_provincia()
        {
            foreach ($this->request->data as $k => $v) {

                $provincia_id = reset($v);
            }
            $this->loadModel('Cidade');
            $cidades = $this->Cidade->find('list', ['conditions' => ['provincia_id' => $provincia_id]]);
            $this->set(compact('cidades'));
        }

        public function get_cursos_by_faculdade()
        {
            foreach ($this->request->data as $k => $v) {

                $faculdadeId = reset($v);
            }
            $this->loadModel('Curso');
            $departamentos = $this->Curso->UnidadeOrganica->children($faculdadeId);
            $unidadeOrganicas = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
            $unidadeOrganicas[] = $faculdadeId;
            $cursos = $this->Curso->find('list', ['conditions' => ['unidade_organica_id' => $unidadeOrganicas]]);
            $this->set(compact('cursos'));
        }

        public function get_cursos_by_unidade_organica()
        {
            $this->loadModel('Curso');
            $unidadeOrganicaId = $this->request->data['Curso']['unidade_organica_id'];

            $unidadeOrganicas = $this->Curso->UnidadeOrganica->children($unidadeOrganicaId);
            $todasUnidades = Hash::extract($unidadeOrganicas, '{n}.UnidadeOrganica.id');
            $todasUnidades[] = $unidadeOrganicaId;
            $cursos = $this->Curso->find('list', ['conditions' => ['unidade_organica_id' => $todasUnidades]]);
            $this->set(compact('cursos'));
        }

        public function get_escolas_by_distrito()
        {
            foreach ($this->request->data as $k => $v) {

                $cidade_id = reset($v);
            }
            $this->loadModel('EscolaNivelMedio');
            $distritos = $this->EscolaNivelMedio->find('list', ['conditions' => ['distrito_id' => $cidade_id]]);
            $this->set(compact('distritos'));
        }

        public function get_naturalidades_autocomplete()
        {
            $this->autoRender = false;
            $this->loadModel('Aluno');

            $conditions = [
                'Entidade.naturalidade LIKE ' => '%' . $this->request->query['term'] . '%',
            ];

            $results = $this->Aluno->Entidade->find('all', [
                'fields'     => ['naturalidade'],
                'conditions' => $conditions,
                'group'      => ['naturalidade'],
                'limit'      => 20,
            ]);
            $codigos = Set::extract('../Entidade/naturalidade', $results);

            echo json_encode($codigos);
        }


        public function faculdade_get_bairros_autocomplete()
        {
            $this->autoRender = false;
            $this->loadModel('Bairro');

            $conditions = [
                'name LIKE ' => '%' . $this->request->query['term'] . '%',
            ];

            $results = $this->Bairro->find('all', [
                'fields'     => ['name'],
                'conditions' => $conditions,
                'group'      => ['name'],
                'limit'      => 20,
            ]);
            $codigos = Set::extract('../Bairro/name', $results);

            echo json_encode($codigos);
        }

        public function faculdade_get_cidades_by_provincia()
        {
            foreach ($this->request->data as $k => $v) {

                $provincia_id = reset($v);
            }
            $this->loadModel('Cidade');
            $cidades = $this->Cidade->find('list', ['conditions' => ['provincia_id' => $provincia_id]]);
            $this->set(compact('cidades'));
        }

        public function faculdade_get_cursos_by_faculdade()
        {
            foreach ($this->request->data as $k => $v) {

                $faculdadeId = reset($v);
            }
            $this->loadModel('Curso');
            $departamentos = $this->Curso->UnidadeOrganica->children($faculdadeId);
            $unidadeOrganicas = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
            $unidadeOrganicas[] = $faculdadeId;
            $cursos = $this->Curso->find('list', ['conditions' => ['unidade_organica_id' => $unidadeOrganicas]]);
            $this->set(compact('cursos'));
        }

        public function faculdade_get_cursos_by_unidade_organica()
        {
            $this->loadModel('Curso');
            $unidadeOrganicaId = $this->request->data['Curso']['unidade_organica_id'];

            $unidadeOrganicas = $this->Curso->UnidadeOrganica->children($unidadeOrganicaId);
            $todasUnidades = Hash::extract($unidadeOrganicas, '{n}.UnidadeOrganica.id');
            $todasUnidades[] = $unidadeOrganicaId;
            $cursos = $this->Curso->find('list', ['conditions' => ['unidade_organica_id' => $todasUnidades]]);
            $this->set(compact('cursos'));
        }

        public function faculdade_get_escolas_by_distrito()
        {
            foreach ($this->request->data as $k => $v) {

                $cidade_id = reset($v);
            }
            $this->loadModel('EscolaNivelMedio');
            $distritos = $this->EscolaNivelMedio->find('list', ['conditions' => ['distrito_id' => $cidade_id]]);
            $this->set(compact('distritos'));
        }

        public function faculdade_get_naturalidades_autocomplete()
        {
            $this->autoRender = false;
            $this->loadModel('Aluno');

            $conditions = [
                'Entidade.naturalidade LIKE ' => '%' . $this->request->query['term'] . '%',
            ];

            $results = $this->Aluno->Entidade->find('all', [
                'fields'     => ['naturalidade'],
                'conditions' => $conditions,
                'group'      => ['naturalidade'],
                'limit'      => 20,
            ]);
            $codigos = Set::extract('../Entidade/naturalidade', $results);

            echo json_encode($codigos);
        }

        public function faculdade_get_plano_estudos_by_curso()
        {
            foreach ($this->request->data as $k => $v) {

                $cursoId = reset($v);
            }
            $this->loadModel('PlanoEstudo');
            $planoEstudos = $this->PlanoEstudo->find('list', [
                'conditions' => [
                    'curso_id' => $cursoId,
                    'OR'       => ['estado_objecto_id is null', 'estado_objecto_id' => 1],
                ],
            ]);
            $this->set(compact('planoEstudos'));
        }

        public function faculdade_get_disciplinas_by_plano_estudo()
        {
            foreach ($this->request->data as $k => $v) {

                $planoEstudoId = reset($v);
            }
            $this->loadModel('DisciplinaPlanoEstudo');
            $this->DisciplinaPlanoEstudo->contain(['Disciplina']);

            $disciplinaPlanoEstudos = $this->DisciplinaPlanoEstudo->find('list', [
                'conditions' => [
                    'plano_estudo_id' => $planoEstudoId,
                    //'OR'       => ['estado_objecto_id is null', 'estado_objecto_id' => 1],
                ],
                'fields'=>['Disciplina.id','Disciplina.name']
            ]);
            $this->set('object',$disciplinaPlanoEstudos);

            $this->render('ajax_view');
        }

        public function faculdade_get_semestre_lectivos_by_ano_lectivo()
        {
            foreach ($this->request->data as $k => $v) {

                $dataId = reset($v);
            }
            $this->loadModel('SemestreLectivo');
            $object = $this->SemestreLectivo->find('list', [
                'conditions' => [
                    'ano_lectivo_id' => $dataId,
                    //'OR'       => ['estado_objecto_id is null', 'estado_objecto_id' => 1],
                ],
                'fields'=>['id','semestre']
            ]);
            $this->set(compact('object'));

            $this->render('ajax_view');
        }


    }


?>