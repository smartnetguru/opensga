<?php
App::uses('AppController', 'Controller');

/**
 * AlumniCandidatoAlumnis Controller
 *
 * @property AlumniCandidatoAlumni $AlumniCandidatoAlumni
 */
class AlumniCandidatoAlumnisController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {

        $this->AlumniCandidatoAlumni->contain([
            'Genero',
            'UnidadeOrganica',
            'Curso',
            'GrauAcademico',
        ]);
        $this->paginate = [
            'conditions' => [
                'OR' => [
                    'AlumniCandidatoAlumni.estado_objecto_id is null',
                    'AlumniCandidatoAlumni.estado_objecto_id' => 1,
                ],
            ],
            'order' => 'AlumniCandidatoAlumni.created desc',
        ];
        $cursos = $this->AlumniCandidatoAlumni->Curso->find('list');
        $this->set(compact('cursos'));
        $this->set('candidatoAlumnis', $this->paginate());

        $this->set('siga_page_title', 'Candidaturas Pendentes - Alumni');
        $this->set('siga_page_overview', 'Candidaturas a Alumni por avaliar');
    }

    /**
     * view method
     *
     * @throws NotFoundException
     *
     * @param string $id
     *
     * @return void
     */
    public function perfil_candidato_alumni($id = null)
    {
        if (!$this->AlumniCandidatoAlumni->exists($id)) {
            throw new NotFoundException(__('Invalid candidato alumni'));
        }
        $options = ['conditions' => ['AlumniCandidatoAlumni.' . $this->AlumniCandidatoAlumni->primaryKey => $id]];
        $this->set('candidatoAlumni', $this->AlumniCandidatoAlumni->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function cadastro_alumni()
    {
        if ($this->request->is('post')) {
            $this->AlumniCandidatoAlumni->create();
            if ($this->AlumniCandidatoAlumni->saveCandidatoAlumni($this->request->data)) {
                $this->Session->setFlash(__('Os seus dados foram gravados com sucesso. Brevemente entraremos em
				contacto'));
                $this->redirect(['action' => 'agradecimento']);
            } else {
                debug($this->AlumniCandidatoAlumni->validationErrors);
                $this->Session->setFlash(__('Problemas ao gravar dados. Por favor corrija os erros e tente novamente
				.'));
            }
        }
        $generos = $this->AlumniCandidatoAlumni->Genero->find('list');
        $estadoCivils = $this->AlumniCandidatoAlumni->EstadoCivil->find('list');
        $unidadeOrganicas = $this->AlumniCandidatoAlumni->UnidadeOrganica->find('list',
            ['conditions' => ['tipo_unidade_organica_id' => 1]]);
        $cursos = $this->AlumniCandidatoAlumni->Curso->find('list');
        $grauAcademicos = $this->AlumniCandidatoAlumni->GrauAcademico->find('list');
        $paisNascimentos = $this->AlumniCandidatoAlumni->PaisNascimento->find('list');
        $provinciaNascimentos = $this->AlumniCandidatoAlumni->ProvinciaNascimento->find('list');
        $cidadeNascimentos = $this->AlumniCandidatoAlumni->CidadeNascimento->find('list');
        $paisMoradas = $this->AlumniCandidatoAlumni->PaisMorada->find('list');
        $provinciaMoradas = $this->AlumniCandidatoAlumni->ProvinciaMorada->find('list');
        $cidadeMoradas = $this->AlumniCandidatoAlumni->CidadeMorada->find('list');
        $this->loadModel('DocumentoIdentificacao');
        $documentoIdentificacaos = $this->DocumentoIdentificacao->find('list');
        $this->layout = 'guest_users';

        $this->set('siga_page_title', 'Pre-Registro de Alumni');
        $this->set('siga_page_overview', 'Preencha o formulario abaixo para se registar como Alumni da UEM');
        $this->set('naturalidade', '');
        $this->set(compact('generos', 'estadoCivils', 'unidadeOrganicas', 'cursos', 'grauAcademicos',
            'paisNascimentos', 'provinciaNascimentos', 'cidadeNascimentos', 'paisMoradas', 'provinciaMoradas',
            'cidadeMoradas', 'documentoIdentificacaos'));


    }

    /**
     * edit method
     *
     * @throws NotFoundException
     *
     * @param string $id
     *
     * @return void
     */
    public function editar_candidato_alumni($id = null)
    {
        if (!$this->AlumniCandidatoAlumni->exists($id)) {
            throw new NotFoundException(__('Invalid candidato alumni'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->AlumniCandidatoAlumni->save($this->request->data)) {
                $this->Session->setFlash(__('The candidato alumni has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The candidato alumni could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['AlumniCandidatoAlumni.' . $this->AlumniCandidatoAlumni->primaryKey => $id]];
            $this->request->data = $this->AlumniCandidatoAlumni->find('first', $options);
        }
        $generos = $this->AlumniCandidatoAlumni->Genero->find('list');
        $estadoCivils = $this->AlumniCandidatoAlumni->EstadoCivil->find('list');
        $unidadeOrganicas = $this->AlumniCandidatoAlumni->UnidadeOrganica->find('list');
        $cursos = $this->AlumniCandidatoAlumni->Curso->find('list');
        $grauAcademicos = $this->AlumniCandidatoAlumni->GrauAcademico->find('list');
        $this->set(compact('generos', 'estadoCivils', 'unidadeOrganicas', 'cursos', 'grauAcademicos'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     *
     * @param string $id
     *
     * @return void
     */
    public function cancelar_candidatura_alumni($candidatoId = null)
    {
        $this->AlumniCandidatoAlumni->id = $candidatoId;
        if (!$this->AlumniCandidatoAlumni->exists()) {
            throw new NotFoundException(__('Invalid candidato alumni'));
        }
        $this->request->onlyAllow('post', 'delete');
        $this->AlumniCandidatoAlumni->set('estado_objecto_id', 3);
        if ($this->AlumniCandidatoAlumni->save()) {
            $this->Flash->success('A Candidatura foi Cancelada com Sucesso');
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Candidato alumni was not deleted'));
        $this->redirect(['action' => 'index']);
    }

    public function aprovar_candidatura_alumni()
    {

    }

    public function beforeFilter()
    {
        parent::beforeFilter();

        $this->Auth->allow(['cadastro_alumni', 'agradecimento']);
        $this->disableCache();
    }

    public function agradecimento()
    {
        $this->layout = 'guest_users';

    }
}
