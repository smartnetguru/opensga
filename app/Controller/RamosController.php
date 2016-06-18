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
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author          Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 *
 */
class RamosController extends AppController
{

    var $name = 'Ramos';

    function index()
    {
        $this->Ramo->recursive = 0;
        $this->set('ramos', $this->paginate());
    }

    function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('Invalid ramo', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('ramo', $this->Ramo->read(null, $id));
    }

    function add()
    {
        if (!empty($this->data)) {
            $this->Ramo->create();
            if ($this->Ramo->save($this->data)) {
                $this->Session->setFlash(__('The ramo has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The ramo could not be saved. Please, try again.', true));
            }
        }
        $cursos = $this->Ramo->Curso->find('list');
        $this->set(compact('cursos'));
    }

    function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid ramo', true));
            $this->redirect(['action' => 'index']);
        }
        if (!empty($this->data)) {
            if ($this->Ramo->save($this->data)) {
                $this->Session->setFlash(__('The ramo has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The ramo could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Ramo->read(null, $id);
        }
        $cursos = $this->Ramo->Curso->find('list');
        $this->set(compact('cursos'));
    }

    function delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for ramo', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->Ramo->delete($id)) {
            $this->Session->setFlash(__('Ramo deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Ramo was not deleted', true));
        $this->redirect(['action' => 'index']);
    }
}

?>