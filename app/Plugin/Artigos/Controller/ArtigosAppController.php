<?php

App::uses('AppController', 'Controller');

class ArtigosAppController extends AppController
{

    public function beforeFilter()
    {
        parent::beforeFilter();

        $this->layout = 'guest_users';
    }

    public function beforeRender()
    {
        parent::beforeRender();

        Configure::write('OpenSGA.instituicao.sigla_logo', 'UEM (<b style="color:red">Experimental</b>)');
    }

}
