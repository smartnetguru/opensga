<?php

ini_set('memory_limit', "2512M");
App::import('Vendor', 'zend_include_path');
App::import('Vendor', 'Zend_Loader', true, false, 'Zend/Loader.php');

class GoogleShell extends AppShell
{

    public $uses = ['Turma', 'Entidade', 'User'];


    public function cria_contas()
    {
        Zend_Loader::loadClass('Zend_Gdata');
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
        Zend_Loader::loadClass('Zend_Gdata_Gapps');

        $service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient('elisio.leonardo@uem.ac.mz', 'COLOCAR SENHA AQUI',
            $service);
        $gdata = new Zend_Gdata_Gapps($client, 'uem.ac.mz');

        $this->Entidade->contain(['User', 'Aluno']);
        $users = $this->Entidade->find('all',
            ['conditions' => ['User.codigo_activacao' => null], 'order' => 'User.id DESC']);
        var_dump(count($users));
        $ii = 0;
        foreach ($users as $u) {

            $usernames = explode('@', $u['User']['username']);
            $usernames[0] = str_replace(' ', '', $usernames[0]);
            $mudar_apelido = false;
            if ($u['Entidade']['apelido'] == null) {
                $apelidos = explode(' ', trim($u['Entidade']['name']));
                $mudar_apelido = true;
                $u['Entidade']['apelido'] = end($apelidos);
            }

            try {
                debug($u);
                $usuario = $gdata->createUser($usernames[0], $u['Entidade']['nomes'], $u['Entidade']['apelido'],
                    'dra02062013');
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
            } catch (Exception $e) {
                var_dump($usernames[0]);
                var_dump($u['Entidade']['nomes']);
                var_dump($u['Entidade']['apelido']);
                var_dump($e->getMessage());
                continue;
            }

            $user = $gdata->retrieveUser($usernames[0]);
            if ($user) {
                $user = $user->save();
                if ($user != null) {
                    $this->User->id = $u['User']['id'];
                    $this->User->set('codigo_activacao', 1);
                    if ($mudar_apelido) {
                        $this->User->set('apelido', $u['Entidade']['apelido']);
                    }
                    $this->User->save();
                }
                $this->out($ii++);
                var_dump($user->login->userName);
            }
        }
    }

    public function cria_conta()
    {
        Zend_Loader::loadClass('Zend_Gdata');
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
        Zend_Loader::loadClass('Zend_Gdata_Gapps');

        $service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient('elisio.leonardo@uem.ac.mz', '', $service);
        $gdata = new Zend_Gdata_Gapps($client, 'uem.ac.mz');

        $this->Entidade->contain(['User', 'Aluno']);
        $users = $this->Entidade->find('all',
            ['conditions' => ['User.codigo_activacao' => null], 'order' => 'User.id DESC']);
        var_dump(count($users));
        $ii = 0;
        foreach ($users as $u) {

            $usernames = explode('@', $u['User']['username']);
            $usernames[0] = str_replace(' ', '', $usernames[0]);
            $mudar_apelido = false;
            if ($u['Entidade']['apelido'] == null) {
                $apelidos = explode(' ', trim($u['Entidade']['name']));
                $mudar_apelido = true;
                $u['Entidade']['apelido'] = end($apelidos);
            }

            try {
                debug($u);
                $usuario = $gdata->createUser($usernames[0], $u['Entidade']['nomes'], $u['Entidade']['apelido'],
                    'dra02062013');
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
            } catch (Exception $e) {
                var_dump($usernames[0]);
                var_dump($u['Entidade']['nomes']);
                var_dump($u['Entidade']['apelido']);
                var_dump($e->getMessage());
                continue;
            }

            $user = $gdata->retrieveUser($usernames[0]);
            if ($user) {
                $user = $user->save();
                if ($user != null) {
                    $this->User->id = $u['User']['id'];
                    $this->User->set('codigo_activacao', 1);
                    if ($mudar_apelido) {
                        $this->User->set('apelido', $u['Entidade']['apelido']);
                    }
                    $this->User->save();
                }
                $this->out($ii++);
                var_dump($user->login->userName);
            }
        }
    }

    public function organiza_contas()
    {
        Zend_Loader::loadClass('Zend_Gdata');
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
        Zend_Loader::loadClass('Zend_Gdata_Gapps');

        $service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient('elisio.leonardo@uem.ac.mz', 'COLOCAR SENHA AQUI',
            $service);
        $gdata = new Zend_Gdata_Gapps($client, 'uem.ac.mz');

        $this->Entidade->contain(['User', 'Aluno']);
        $users = $this->Entidade->find('all', ['conditions' => ['order' => 'User.id DESC']]);
        var_dump(count($users));
        $ii = 0;
        foreach ($users as $u) {

            $usernames = explode('@', $u['User']['username']);
            $usernames[0] = str_replace(' ', '', $usernames[0]);
            $passwordNova = 'e' . $u['Aluno'][0]['codigo'];
            $this->out($usernames[0]);
            $this->out($passwordNova);
            $mudar_apelido = false;
            if ($u['Entidade']['apelido'] == null) {
                $apelidos = explode(' ', trim($u['Entidade']['name']));
                $mudar_apelido = true;
                $u['Entidade']['apelido'] = end($apelidos);
            }

            try {
                debug($u);
                die();
                $usuario = $gdata->createUser($usernames[0], $u['Entidade']['nomes'], $u['Entidade']['apelido'],
                    'dra02062013');
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
            } catch (Exception $e) {
                var_dump($usernames[0]);
                var_dump($u['Entidade']['nomes']);
                var_dump($u['Entidade']['apelido']);
                var_dump($e->getMessage());
                continue;
            }

            $user = $gdata->retrieveUser($usernames[0]);
            if ($user) {
                $user = $user->save();
                if ($user != null) {
                    $this->User->id = $u['User']['id'];
                    $this->User->set('codigo_activacao', 1);
                    if ($mudar_apelido) {
                        $this->User->set('apelido', $u['Entidade']['apelido']);
                    }
                    $this->User->save();
                }
                $this->out($ii++);
                var_dump($user->login->userName);
            }
        }
    }


    public function altera_contas()
    {
        Zend_Loader::loadClass('Zend_Gdata');
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
        Zend_Loader::loadClass('Zend_Gdata_Gapps');

        $service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient('elisio.leonardo@uem.ac.mz', 'COLOCAR SENHA AQUI',
            $service);
        $gdata = new Zend_Gdata_Gapps($client, 'uem.ac.mz');

        $this->Entidade->contain(['User', 'Aluno']);
        $users = $this->Entidade->find('all',
            ['conditions' => ['User.codigo_activacao' => 1], 'order' => 'User.id DESC']);
        var_dump(count($users));
        $ii = 0;
        foreach ($users as $u) {

            $usernames = explode('@', $u['User']['username']);
            $usernames[0] = str_replace(' ', '', $usernames[0]);
            $user = $gdata->retrieveUser($usernames[0]);
            if ($user) {
                $user->login->password = $u['Aluno']['codigo'];
                $user->login->changePasswordAtNextLogin = true;
                $user = $user->save();
                if ($user != null) {
                    $this->User->id = $u['User']['id'];
                    $this->User->set('codigo_activacao', 2);
                    $this->User->save();
                }
                $this->out($ii++);
                $this->out($user->login->userName);
            }
        }
    }


    /**
     * Altera senha do email e envia por sms
     * Parametros: UserID e SenhaNova
     */
    public function changeEmailPassword()
    {
        Zend_Loader::loadClass('Zend_Gdata');
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
        Zend_Loader::loadClass('Zend_Gdata_Gapps');

        $service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient(Configure::read('OpenSGA.dgata.admin.email'),
            Configure::read('OpenSGA.gdata.admin.password'), $service);
        $gdata = new Zend_Gdata_Gapps($client, Configure::read('OpenSGA.gdata.client'));

        $this->Entidade->contain(['User', 'Aluno']);
        $entidade = $this->Entidade->find('first',
            ['conditions' => ['User.id' => $this->args[0]], 'order' => 'User.id DESC']);

        $usernames = explode('@', $entidade['User']['username']);
        $usernames[0] = str_replace(' ', '', $usernames[0]);
        $user = $gdata->retrieveUser($usernames[0]);
        if ($user) {
            $user->login->password = $entidade['Aluno']['codigo'];
            $user->login->changePasswordAtNextLogin = true;
            $user = $user->save();
            if ($user != null) {
                $telemovel = $entidade['Entidade']['telemovel'];
                $mensagem = "Caro Usuario, a sua senha do email institucional da UEM foi alterada para: {$this->args[1]}. www.siga.uem.mz/webmail";
            } else {

            }
        }
    }

}
