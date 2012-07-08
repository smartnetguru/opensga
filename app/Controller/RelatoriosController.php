<?php
/**
 * Relatorios Controller
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class RelatoriosController extends AppController {

	var $name = 'Relatorios';

	function index() {

	}
	
	function quick_info(){
		
	}
    
    public function estudantes_por_faculdade(){
        $this->loadModel('Aluno');
        $estudantes_faculdade = $this->Aluno->getEstudantesByFaculdade();
        $this->set(compact('estudantes_faculdade'));
        
    }
    
    public function estudantes_por_curso(){
        if($this->request->is('post') || $this->request->is('put')){
            $this->loadModel('Aluno');
            $estudantes_curso = $this->Aluno->getEstudantesByCurso($this->request->data['Curso']['curso_id']);
            $this->set(compact('estudantes_curso'));
            $this->set('resultado',true);
        }
        $this->loadModel('Curso');
        $cursos = $this->Curso->find('list');
        $this->set(compact('cursos'));
        
    }

}
?>