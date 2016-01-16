<?php

App::uses('AppController', 'Controller');

class ApiAppController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();


    }

}
