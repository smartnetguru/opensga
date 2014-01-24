<?php

App::uses('AppController', 'Controller');

/**
 * Candidaturas Controller
 *
 * @property Candidatura $Candidatura
 * @property PaginatorComponent $Paginator
 */
class CandidaturasController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = array(
            'conditions' => array(
                'Candidatura.estado_matricula_id' => array(null, 5)
            ),
            'contain' => array(
                'AlunoViaAdmissao', 'EscolaNivelMedio', 'Curso', 'UnidadeOrganica', 'Genero', 'Provincia'
            )
        );
        $this->set('candidaturas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Candidatura->exists($id)) {
            throw new NotFoundException(__('Invalid candidatura'));
        }
        $options = array('conditions' => array('Candidatura.' . $this->Candidatura->primaryKey => $id));
        $this->set('candidatura', $this->Candidatura->find('first', $options));
    }


}
