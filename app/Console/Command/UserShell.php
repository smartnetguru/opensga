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


    public function getOptionParser()
    {
        $parser = parent::getOptionParser();
        $parser->addOption('userId');
        $parser->addOption('username');
        $parser->addOption('novaPassword');

        return $parser;


    }

}
