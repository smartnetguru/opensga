<?php

ini_set('memory_limit', "512M");
App::import('Vendor', 'zend_include_path');
App::import('Vendor', 'Zend_Loader', true, false, 'Zend/Loader.php');

class GDataShell extends AppShell {

    public $uses = array('Turma', 'Entidade', 'User');

    public function main() {
        $this->out('Hello world.');
    }

    public function teste() {

        Zend_Loader::loadClass('Zend_Gdata');

        /**
         * @see Zend_Gdata_ClientLogin
         */
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');

        /**
         * @see Zend_Gdata_Gapps
         */
        Zend_Loader::loadClass('Zend_Gdata_Gapps');


        $service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient('elisio.leonardo@uem.ac.mz', 'Tesc&eatsop1', $service);
        $gdata = new Zend_Gdata_Gapps($client, 'uem.ac.mz');

        $user = $gdata->retrieveUser('elisio.leonardo');
        var_dump($user->login->userName);
    }

    public function cria_contas() {
        Zend_Loader::loadClass('Zend_Gdata');
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
        Zend_Loader::loadClass('Zend_Gdata_Gapps');

        $service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient('elisio.leonardo@uem.ac.mz', 'Tesc&eatsop1', $service);
        $gdata = new Zend_Gdata_Gapps($client, 'uem.ac.mz');

        $this->Entidade->contain(array('User','Aluno'));
        $users = $this->Entidade->find('all', array('conditions' => array('User.codigo_activacao' => NULL)));
        var_dump(count($users));
        $ii = 0;
        foreach ($users as $u) {
           
            $usernames = explode('@', $u['User']['username']);
            $usernames[0]=  str_replace(' ', '', $usernames[0]);
            $mudar_apelido = false;
            if($u['Entidade']['apelido']==null){
                $apelidos = explode(' ',trim($u['Entidade']['name']));
                $mudar_apelido=true;
                 $u['Entidade']['apelido']=end($apelidos);
            }
            try {
                $usuario = $gdata->createUser($usernames[0], $u['Entidade']['nomes'], $u['Entidade']['apelido'], 'dra02062013');
            } catch (Zend_Gdata_Gapps_ServiceException $ex) {
                $codigo = $ex->getErrors();
                if (key($codigo) == 1300) {
                    $this->out("User existe");
                    $user = $gdata->retrieveUser($usernames[0]);
                    $user->name->givenName = $u['Entidade']['nomes'];
                    $user->name->familyName = $u['Entidade']['apelido'];
                    $user->login->changePasswordAtNextLogin = true;
                    $user = $user->save();
                }
            } catch(Exception $e){
                debug($u);
            }

            $user = $gdata->retrieveUser($usernames[0]);
            $user->login->changePasswordAtNextLogin = true;
            $user = $user->save();
            if ($user != NULL) {
                $this->User->id = $u['User']['id'];
                $this->User->set('codigo_activacao', 1);
                if($mudar_apelido){
                    $this->User->set('apelido',$u['Entidade']['apelido']);
                }
                $this->User->save();
            }
            $this->out($ii++);
            var_dump($user->login->userName);
        }
    }

}