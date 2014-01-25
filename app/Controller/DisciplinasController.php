<?php

/**
 * Controller de Disciplinas
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0
 * 
 * @todo Txunar ver disciplia
 * @todo funcao de activar/desactivar disciplina

 *
 */
class DisciplinasController extends AppController {

    function index() {
        $this->Disciplina->recursive = 0;
        $disciplinas = $this->Disciplina->find('all');
        $this->set('disciplinas', $disciplinas);
    }

    
    /** 
     * Lista de Disciplinas para funcionarios das faculdades
     * @todo Ainda nao filtra por faculdade
     */
    function faculdade_index() {
        
        $this->paginate = array(
            'conditions' => array(
                //'DisciplinaUnidadeOrganica.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id')
            ),
            'contain' => array(
                'DisciplinaUnidadeOrganica'
            )
        );
        $disciplinas = $this->paginate('Disciplina');
        $this->set('disciplinas', $disciplinas);
    }

    function faculdade_ver_disciplina($id = null) {

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('disciplina', $this->Disciplina->read(null, $id));
        // var_dump($this->data);
        if (empty($this->data)) {
            $this->data = $this->Disciplina->read(null, $id);
        }
        $grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
        $this->set(compact('grupodisciplinars'));
    }

    function faculdade_adicionar_disciplina() {

        if ($this->request->is('post')) {
            $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
            //Primeiro ver se a disciplina existe
            $disciplina = $this->Disciplina->findByName($this->request->data['Disciplina']['name']);
            if (!empty($disciplina)) {
                $this->Disciplina->id = $disciplina['Disciplina']['id'];
                $array_disciplina_unidade = array(
                    'DisciplinaUnidadeOrganica' => array(
                        'disciplina_id' => $disciplina['Disciplina']['id'],
                        'unidade_organica_id' => $unidade_organica_id,
                        'estado_objecto_id' => 1
                    )
                );
                $disciplina_unidade_existe = $this->Disciplina->DisciplinaUnidadeOrganica->find('first', array(
                    'conditions' => array(
                        'disciplina_id' => $disciplina['Disciplina']['id'],
                        'unidade_organica_id' => $unidade_organica_id
                    )
                        ));
                if (empty($disciplina_unidade_existe)) {
                    $this->Disciplina->DisciplinaUnidadeOrganica->create();
                    $this->Disciplina->DisciplinaUnidadeOrganica->save($array_disciplina_unidade);
                    $this->Session->setFlash(__('Dados Gravados com Sucesso'), 'default', array('class' => 'alert success'));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Esta Disciplina ja estava cadastrada'), 'default', array('class' => 'alert info'));
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Disciplina->create();
                $this->request->data['Disciplina']['unidade_organica_id']=$unidade_organica_id;
                
                if ($this->Disciplina->cadastraDisciplina($this->request->data)) {
                    $this->Session->setFlash(__('Dados Gravados com Sucesso'), 'default', array('class' => 'alert success'));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Problemas ao Registrar dados.'), 'default', array('class' => 'alert error'));
                }
            }
        }
        $unidadeOrganicas = $this->Disciplina->UnidadeOrganica->find('list');
        $this->set(compact('unidadeOrganicas'));
    }


    function ver_disciplina($id = null) {

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
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