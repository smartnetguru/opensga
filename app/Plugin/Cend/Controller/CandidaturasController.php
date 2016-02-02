<?php

    App::uses('CendAppController', 'Cend.Controller');

    class CandidaturasController extends CendAppController {

        public $uses = ['Candidatura'];
        /**
         * Lista de Candidatos não Matriculados.
         *
         * @todo Pesquisar Candidatos ainda não funciona!
         *
         * @return void
         */
        public function index() {

            $this->Candidatura->Curso->contain([
                'CursosTurno'
            ]);
            $cursos = $this->Candidatura->Curso->find('list',['conditions'=>['CursosTurno.turno_id'=>3]]);
            $conditions = ['Candidatura.estado_candidatura_id'=>2,'Curso.id'=>array_keys($cursos)];

            $this->paginate = array(
                'conditions' => $conditions,
                'order'=>array('Candidatura.id'=>'DESC'),
                'contain' => array(
                    'AlunoViaAdmissao', 'EscolaNivelMedio', 'Curso', 'UnidadeOrganica', 'Genero', 'ProvinciaNascimento'
                )
            );
            $this->set('candidaturas', $this->paginate());
        }



    }