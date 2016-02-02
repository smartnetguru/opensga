<?php

    App::uses('CendAppController', 'Cend.Controller');

    class AlunosController extends CendAppController {

public $uses = ['Aluno'];
        public function index(){
            $this->helpers[] = 'Cache';
            $this->cacheAction = '10 minutes';

            $this->Aluno->Curso->contain([
                'CursosTurno'
            ]);
            $cursos = $this->Aluno->Curso->find('list',['conditions'=>['CursosTurno.turno_id'=>3]]);
            $conditions = [];
            $conditions['Curso.id']=array_keys($cursos);
            if ($this->request->is('post')) {
                if ($this->request->data['Aluno']['codigo'] != '') {
                    $conditions['Aluno.codigo'] = $this->request->data['Aluno']['codigo'];
                } else {
                    $conditions['Entidade.nomes LIKE'] = '%' . $this->request->data['Aluno']['nomes'] . '%';
                    $conditions['Entidade.apelido LIKE'] = '%' . $this->request->data['Aluno']['apelido'] . '%';
                }
            }
            $this->paginate = [
                'conditions' => $conditions,
                'contain'    => ['Entidade', 'Curso', 'EstadoAluno'],
            ];
            $alunos = $this->paginate('Aluno');

            if (count($alunos) == 1) {
                $this->redirect(['action' => 'perfil_estudante', $alunos[0]['Aluno']['id']]);
            }

            $this->set('alunos', $alunos);
        }
    }