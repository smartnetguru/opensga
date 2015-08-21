<?php

App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class UserShell extends AppShell {

	public $uses = array('User', 'Upload');

	/**
	 * Envia os dados da nova senha por email e sms
	 * Parametros: UserId e SenhaNova
	 */
	public function afterChangePassword() {

	}

    /**
     * Altera Password a partir da linha de comandos
     * @param --userId
     * @param --username
     * @param --novaPassword  Se nao for passada, uma senha aleatoria é gerada
     */
    public function changePassword()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        $parametros = $this->params;
        $conditions = array();
        if (isset($parametros['username'])) {
            $conditions['User.username'] = $parametros['username'];
        } elseif (isset($parametros['userId'])) {
            $conditions['User.id'] = $parametros['userId'];
        }
        if (empty($conditions)) {
            $this->out('<error>Nenhuma condicao foi fonecida</error>');
        } else {
            $user = $this->User->find('first', array('conditions' => $conditions));
            if (empty($user)) {
                $this->out('<error>Usuario nao encontrado</error>');
            } else {
                if (isset($this->params['novaPassword'])) {
                    $novaPassword = $this->User->resetPassword($user['User']['id'], $this->params['novaPassword']);
                } else {
                    $novaPassword = $this->User->resetPassword($user['User']['id']);
                }

                $this->out('<info>A sua senha foi alterada com sucesso</info>');
                $this->out('<comment>Sua nova Password:' . $novaPassword . '</comment>');
            }
        }
    }


    public function ajusta_password(){
        $users = $this->User->find('all',array('conditions'=>array('group_id'=>3,'ultimo_login is null')));
        $total = count($users);
        foreach($users as $user){
            $hash = $user['User']['password'];
            if(strlen($hash)<12 && strpos($hash,'e')===0){
                $this->out('Encontrou------------'.$hash);
                $this->User->id = $user['User']['id'];
                //Temos de Certificar que o Aro existe, principalmente para estudantes importados
                $aro = $this->User->Aro->find('first',
                    ['conditions' => ['model'       => $this->User->alias,
                                      'foreign_key' => $user['User']['id']
                    ]
                    ]);
                if (empty($aro)) {
                    $new_aro = [
                        'parent_id'   => $user['User']['group_id'],
                        'model'       => $this->User->alias
                    ];
                    $this->User->Aro->create();
                    $this->User->Aro->save($new_aro);
                }
                $this->User->set('password',Security::hash($user['User']['codigocartao'],'blowfish'));
                $this->User->save();

            } else{
                $this->out('passou');
            }
            $this->out($total--);

        }
    }


    public function getOptionParser()
    {
        $parser = parent::getOptionParser();
        $parser->addOption('userId');
        $parser->addOption('username');
        $parser->addOption('novaPassword');

        return $parser;


    }


    public function ajustaUserAro(){
        $users = $this->User->find('all');
        $count = count($users);
        foreach($users as $user){
            //Temos de Certificar que o Aro existe, principalmente para estudantes importados
            $aro = $this->User->Aro->find('first',
                ['conditions' => ['model'       => $this->User->alias,
                                  'foreign_key' => $user['User']['id']
                ]
                ]);
            if (empty($aro)) {
                $new_aro = [
                    'parent_id'   => $user['User']['group_id'],
                    'foreign_key' => $user['User']['id'],
                    'model'       => $this->User->alias
                ];
                $this->User->Aro->create();
                $this->User->Aro->save($new_aro);
                $this->out('Aro Salvo');
            }
            $this->out($count--);
        }
    }

}
