<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 * @property Aluno $Aluno
 * @property Matricula $Matricula
 * 
 */
 App::uses('Sanitize', 'Utility');
 
class EntidadesController extends AppController {

	public $name = 'Entidades';
    
    public function index(){
        
    }
    
    public function mostrar_foto($entidade_id){
        $this->viewClass = 'Media';
    // Render app/webroot/files/example.docx
    $params = array(
        'id'        => $entidade_id.'.jpg',
        'name'      => 'fotografia',
        'extension' => 'jpg',
        'mimeType'  => array(
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ),
        'path'      => 'entidades_fotos' . DS
    );
    $this->set($params);
    }


    function email_test()
    {
        $this->layout = 'Emails/html/default';
        $this->loadModel('Relatorio');

        $user = $this->Relatorio->getResumoDiario(date('Y-m-d'));
        $this->set('data', $user);

        return $this->render('/Emails/html/resumo_diario');
    }

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('email_test');
    }
    
    
    
    

}
