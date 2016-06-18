<?php
App::uses('AppController', 'Controller');

/**
 * Controller de Disciplinas
 *
 * @copyright       Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package         opensga
 * @subpackage      opensga.core.controller
 * @since           OpenSGA v 0.1.0
 *
 * @todo            Txunar ver disciplia
 * @todo            funcao de activar/desactivar disciplina
 *
 * @property Disciplina $Disciplina
 *
 *
 *
 */
class DisciplinasController extends AppController
{

    /**
     *Adiciona disciplinas de uma determinada Faculdade á Base de Dados.
     * Alem de adicionar a tabela Disciplinas, adiciona tambem na disciplina_unidade_organicas
     *
     */
    public function adicionar_disciplina()
    {
        if ($this->request->is('post')) {
            $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
            //Primeiro ver se a disciplina existe
            $disciplina = $this->Disciplina->findByName($this->request->data['Disciplina']['name']);

            if (!empty($disciplina)) {
                $this->Disciplina->id = $disciplina['Disciplina']['id'];
                $array_disciplina_unidade = [
                    'DisciplinaUnidadeOrganica' => [
                        'disciplina_id' => $disciplina['Disciplina']['id'],
                        'unidade_organica_id' => $unidade_organica_id,
                        'estado_objecto_id' => 1,
                    ],
                ];
                $disciplina_unidade_existe = $this->Disciplina->DisciplinaUnidadeOrganica->find('first', [
                    'conditions' => [
                        'disciplina_id' => $disciplina['Disciplina']['id'],
                        'unidade_organica_id' => $unidade_organica_id,
                    ],
                ]);
                if (empty($disciplina_unidade_existe)) {
                    $this->Disciplina->DisciplinaUnidadeOrganica->create();
                    $this->Disciplina->DisciplinaUnidadeOrganica->save($array_disciplina_unidade);
                    $this->Session->setFlash(__('Dados Gravados com Sucesso'), 'default',
                        ['class' => 'alert alert-success']);

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Session->setFlash(__('Esta Disciplina ja estava cadastrada'), 'default',
                        ['class' => 'alert alert-info']);

                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->request->data['Disciplina']['unidade_organica_id'] = $unidade_organica_id;
                $resultado = $this->Disciplina->cadastraDisciplina($this->request->data);

                if ($resultado) {

                    $this->Session->setFlash(__('Dados Gravados com Sucesso'), 'default',
                        ['class' => 'alert alert-success']);

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Session->setFlash(__('Problemas ao Registrar dados.'), 'default',
                        ['class' => 'alert alert-danger']);
                }
            }
        }
        $unidadeOrganicas = $this->Disciplina->DisciplinaUnidadeOrganica->UnidadeOrganica->find('list');
        $this->set(compact('unidadeOrganicas'));
    }

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('faculdade_adicionar_disciplina');
    }

    public function faculdade_adicionar_disciplina()
    {

        if ($this->request->is('post')) {

            $unidadeOrganicaId = $this->Session->read('Auth.User.unidade_organica_id');
            $this->request->data['Disciplina']['unidade_organica_id'] = $unidadeOrganicaId;
            $resultado = $this->Disciplina->cadastraDisciplina($this->request->data);
            if ($resultado === true) {
                $this->Session->setFlash(__('Dados Gravados com Sucesso'), 'default',
                    ['class' => 'alert alert-success']);

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('Problemas ao Registrar dados:' . $resultado['errors']), 'default',
                    ['class' => 'alert alert-danger']);
            }

        }
        $this->set('siga_page_title', 'Cadastro de Nova Disciplina');
        $this->set('siga_page_overview', '');
    }

    function faculdade_index()
    {

        $unidadeOrganicaId = $this->Session->read("Auth.User.unidade_organica_id");
        $this->paginate = [
            'conditions' => ['DisciplinaUnidadeOrganica.unidade_organica_id' => $unidadeOrganicaId],
            'order' => 'Disciplina.name ASC',
            'contain' => [
                'Disciplina',
            ],
        ];
        $disciplinas = $this->paginate('DisciplinaUnidadeOrganica');
        $this->set('disciplinas', $disciplinas);
        $this->set('siga_page_title', 'Lista de Disciplinas Cadastradas');
        $this->set('siga_page_overview', 'Lista de Disciplinas cadastradas para esta unidade orgânica');
    }

    function faculdade_ver_disciplina($id = null)
    {

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(['action' => 'index']);
        }
        $this->set('disciplina', $this->Disciplina->read(null, $id));
        // var_dump($this->data);
        if (empty($this->data)) {
            $this->data = $this->Disciplina->read(null, $id);
        }
        $this->set(compact('grupodisciplinars'));
    }

    function index()
    {
        $this->Disciplina->DisciplinaUnidadeOrganica->contain(['Disciplina', 'UnidadeOrganica']);
        $disciplinas = $this->paginate('DisciplinaUnidadeOrganica');
        $this->set('disciplinas', $disciplinas);
    }

    function ver_disciplina($id = null)
    {

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(['action' => 'index']);
        }
        $this->set('disciplina', $this->Disciplina->read(null, $id));
        // var_dump($this->data);
        if (empty($this->data)) {
            $this->data = $this->Disciplina->read(null, $id);
        }
        $grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
        $this->set(compact('grupodisciplinars'));
    }

}

?>