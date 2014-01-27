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
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 
 
 
class AjaxController extends AppController {
    
        public function get_cidades_by_provincia(){
            foreach($this->request->data as $k=>$v){
                
                $provincia_id = reset($v);
            }
            $this->loadModel('Cidade');
            $cidades = $this->Cidade->find('list',array('conditions'=>array('provincia_id'=>$provincia_id)));
            $this->set(compact('cidades'));
            
        }
        
        public function get_naturalidades_autocomplete() {
            $this->autoRender = false;
            $this->loadModel('Aluno');          
            
            $conditions = array(
                'Entidade.naturalidade LIKE ' => '%'. $this->request->query['term'] . '%'
            );
            
            $results = $this->Aluno->Entidade->find('all', array('fields' => array('naturalidade'),
                'conditions' => $conditions,
                'group' => array('naturalidade'),'limit'=>20
                    ));
            $codigos = Set::extract('../Entidade/naturalidade', $results);
            
            echo json_encode($codigos);
        
    }
    
    public function get_bairros_autocomplete() {
            $this->autoRender = false;
            $this->loadModel('Bairro');          
            
            $conditions = array(
                'name LIKE ' => '%'. $this->request->query['term'] . '%'
            );
            
            $results = $this->Aluno->Entidade->find('all', array('fields' => array('name'),
                'conditions' => $conditions,
                'group' => array('name'),'limit'=>20
                    ));
            $codigos = Set::extract('../Bairro/name', $results);
            
            echo json_encode($codigos);
        
    }
    
    public function get_escolas_by_distrito() {
         foreach($this->request->data as $k=>$v){
                
                $cidade_id = reset($v);
            }
            $this->loadModel('EscolaNivelMedio');
            $distritos = $this->EscolaNivelMedio->find('list',array('conditions'=>array('distrito_id'=>$cidade_id)));
            $this->set(compact('distritos'));
            $this->layout = 'ajax';
	}
        
        public function beforeFilter() {
            parent::beforeFilter();
            if($this->request->is('ajax')){
                $this->layout = 'ajax';
                $this->Auth->allow();
            }
            else{
                throw new MethodNotAllowedException();
            }
        }
}
?>