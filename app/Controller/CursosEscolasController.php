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
class CursosEscolasController extends AppController
{

    var $name = 'CursosEscolas';

    function index()
    {
        $this->CursosEscola->recursive = 0;
        $this->set('cursosEscolas', $this->paginate());
    }

    function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('Invalid cursos escola', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('cursosEscola', $this->CursosEscola->read(null, $id));
    }

    function add()
    {
        if (!empty($this->data)) {
            $this->CursosEscola->create();
            if ($this->CursosEscola->save($this->data)) {
                $this->Session->setFlash(__('The cursos escola has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The cursos escola could not be saved. Please, try again.', true));
            }
        }
        $escolas = $this->CursosEscola->Escola->find('list');
        $cursos = $this->CursosEscola->Curso->find('list');
        $this->set(compact('escolas', 'cursos'));
    }

    function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid cursos escola', true));
            $this->redirect(['action' => 'index']);
        }
        if (!empty($this->data)) {
            if ($this->CursosEscola->save($this->data)) {
                $this->Session->setFlash(__('The cursos escola has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The cursos escola could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->CursosEscola->read(null, $id);
        }
        $escolas = $this->CursosEscola->Escola->find('list');
        $cursos = $this->CursosEscola->Curso->find('list');
        $this->set(compact('escolas', 'cursos'));
    }

    function delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for cursos escola', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->CursosEscola->delete($id)) {
            $this->Session->setFlash(__('Cursos escola deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Cursos escola was not deleted', true));
        $this->redirect(['action' => 'index']);
    }
}
