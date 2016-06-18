<?php

/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2012  INFOmoz (Inform�tica-Mo�ambique)
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0
 *
 */
class GroupsController extends AppController
{

    var $name = 'Groups';

    function index()
    {
        $this->Group->contain([
            'EstadoObjecto',
        ]);
        $this->set('groups', $this->paginate());

    }

    function ver_grupo($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(sprintf(__('Invalid %s', true), 'group'));
            $this->redirect(['action' => 'index']);
        }
        $this->set('group', $this->Group->read(null, $id));
    }

    function novo_grupo()
    {
        if (!empty($this->data)) {

            $this->Group->create();
            if ($this->Group->save($this->data)) {
                $this->Session->setFlash(__('Dados gravados com sucesso'), 'default', ['class' => 'alert success']);
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('Erro ao gravar dados. Por favor tente de novo.'), 'default',
                    ['class' => 'alert error']);
            }
        }
    }

    function editar_grupo($id = null)
    {
        $this->Group->id = $id;
        if (!$this->Group->exists()) {
            throw new NotFoundException(__('Grupo de Utilizadores Inválida'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Group->save($this->request->data)) {
                $this->Session->setFlash(__('Dados editados com sucesso'), 'default', ['class' => 'alert success']);
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('Problemas ao editar grupo. Por favor, tente novamente'), 'default',
                    ['class' => 'alert error']);
            }
        } else {
            $this->request->data = $this->Group->read(null, $id);
        }
    }

    /**
     *
     * @param type $id
     */
    function desactivar_grupo($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Group->id = $id;
        if (!$this->Group->exists()) {
            throw new NotFoundException(__('Grupo de Utilizadores nao encontrado'));
        }

        //Primeiro devemos ver se o grupo nao possui membros

        $this->Group->set('estado_objecto_id', 2);
        if ($this->Group->save()) {
            $this->Session->setFlash(__('Objecto desactivado com sucesso'), 'default',
                ['class' => 'alert success']);
            $this->redirect(['action' => 'index']);
        } else {
            $this->Session->setFlash(__('Problemas ao desactivar objecto. Por favor, tente novamente'), 'default',
                ['class' => 'alert error']);
        }
    }


}

?>