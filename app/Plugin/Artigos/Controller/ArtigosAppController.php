<?php

App::uses('AppController', 'Controller');

class ArtigosAppController extends AppController {

    public function beforeFilter(){
        parent::beforeFilter();

        $this->layout = 'guest_users';
    }

}
