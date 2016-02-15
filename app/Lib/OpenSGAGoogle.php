<?php

    class OpenSGAGoogle
    {


        public function cria_conta($username, $firstName, $lastName, $password)
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

        public function createUser($username, $firstName, $lastName, $password)
        {
            /**
             * Create Google_Client for making API calls
             */

            $cred = $this->init();
            $config = new Google_Config();
            $config->setClassConfig('Google_Cache_File', array('directory' => APP.'tmp/cache'));
            $client = new Google_Client($config);

            $client->setCache(new Google_Cache_File($client));

            $client->setApplicationName("This is the name");
            $cred->sub = 'elisio.leonardo@uem.ac.mz';
            $client->setAssertionCredentials($cred);
            if ($client->getAuth()->isAccessTokenExpired()) {
                $client->getAuth()->refreshTokenWithAssertion($cred);
            }
            /**
             * Create Google_Service_Directory
             */
            $service = new Google_Service_Directory($client);
            /**
             * Create the user
             */
            $nameInstance = new Google_Service_Directory_UserName();
            $nameInstance->setGivenName($firstName);
            $nameInstance->setFamilyName($lastName);
            $email = $username;
            $password = $password;
            $userInstance = new Google_Service_Directory_User();
            $userInstance->setName($nameInstance);
            $userInstance->setHashFunction("MD5");
            $userInstance->setPrimaryEmail($email);
            $userInstance->setPassword(hash("md5", $password));
            try {
                $createUserResult = $service->users->insert($userInstance);

                return $createUserResult;
            } catch (Google_IO_Exception $gioe) {
                echo "Error in connection: " . $gioe->getMessage();

                return false;
            } catch (Google_Service_Exception $gse) {

                if ($gse->getCode() == 409) {
                    return [false, ['Email ja foi Criado']];
                }
                debug($gse->getMessage());
                debug($gse->getCode());
                return false;
            } catch(Exception $e){
                debug($e->getMessage());
            }
        }

        public function init()
        {


            /**
             * Client id and service account name as reported
             * on https://console.developers.google.com/ - Projects - Credentials
             */
            $client_id = '482133242525-6hnbvlngksqetc3ho7tfipapukkaccqf.apps.googleusercontent.com'; // 'CLIENT ID' on Google
            $service_account_name = '482133242525-6hnbvlngksqetc3ho7tfipapukkaccqf@developer.gserviceaccount.com'; // 'EMAIL ADDRESS' on Google

            /**
             * This is the .p12 file generated on https://console.developers.google.com/ - Projects - Credentials
             */
            $key_file_location = Configure::read('GOOGLEP12Location');

            /**
             * Email address for admin user that should be used to perform API actions
             * Needs to be created via Google Apps Admin interface and be added to an admin role
             * that has permissions for Admin APIs for Users
             */
            $delegatedAdmin = 'elisio.leonardo@uem.ac.mz';

            /**
             * Array of scopes you need for whatever actions you want to perform
             * See https://developers.google.com/admin-sdk/directory/v1/guides/authorizing
             * The admin.directory.user is needed to create the user, the admin.directory.group is needed to add the
             * user to a group (see later on this file)
             */
            $scopes = [
                'https://www.googleapis.com/auth/admin.directory.user',
                'https://www.googleapis.com/auth/admin.directory.group',
            ];

            /**
             * Create AssertionCredentails object for use with Google_Client
             */
            $cred = new Google_Auth_AssertionCredentials(
                $service_account_name,
                $scopes,
                file_get_contents($key_file_location)
            );
            /**
             * API requests shall be used using the delegated admin
             */
//$cred->sub = $delegatedAdmin;
            return $cred;
        }
    }
