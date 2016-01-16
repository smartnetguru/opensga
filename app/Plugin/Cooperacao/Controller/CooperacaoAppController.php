<?php

App::uses('AppController', 'Controller');

class CooperacaoAppController extends AppController {
    
    
    public function beforeFilter() {
        parent::beforeFilter();
        
        $this->layout='default';
    }

}
