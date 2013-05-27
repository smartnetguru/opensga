<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 * Copyright (C) 2010-2012  INFOmoz,Lda(http://infomoz.net)
 * Copyright (C) 2012  SIGA-Sistemas,Lda
 *
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0
 * @version       OpenSGA v 0.6.0

 *
 */


class User extends AppModel {
	var $name = 'User';
	//The Associations below have been created with all possible keys, those that are not needed can be removed


	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	var $actsAs = array('Acl' => array('type' => 'requester'),'Auditable.Auditable');

	 function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		} else {
			$groupId = $this->field('group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('Group' => array('id' => $groupId));
		}
	}

	/*
	function parentNode(){
		return null;
	}
*/

    /*
	function bindNode($user) {
		return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}
	*/


		function getUserByFuncionario($funcionario_id){
            $query = "SELECT us.id FROM users us, funcionarios tf WHERE tf.user_id = us.id AND tf.id = {$funcionario_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }

		function getAlunoIDByUser($user_id){
            $query = "SELECT ta.id FROM users us, Alunos ta WHERE ta.user_id = us.id AND us.id = {$user_id} ";
           	$resultado = $this->query($query);
			return $resultado[0]["ta"]["id"];
        }

		function getFuncionarioIDByUser($user_id){
            $query = "SELECT tf.id FROM users us, funcionarios tf WHERE tf.user_id = us.id AND us.id = {$user_id} ";
           	$resultado = $this->query($query);
			return $resultado[0]["tf"]["id"];
        }


		function deleteUser($user_id){
            $query = "delete from users where id = {$user_id} ";
           	$resultado = $this->query($query);
			//var_dump($query);
			return $resultado;
        }

		function beforeSave($options=array()){
            //So gera Password e Username se for novo cadastro
            if(isset($this->request->data['User']['password'])){
                $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
                $this->request->data['User']['username'] = $this->geraUsername($this->request->data['User']['name']);
            }
			return true;
		}

		/**
		 * Gera o nome de Usuario de Cada Utilizador de acordo com criterios pre-estabelecidos
		 * Por Enquanto Ele usa a estrutura "primeironome.ultimonome<sequencia>"
		 */
		function geraUsername($nome){
			$nomes = explode(' ', $nome);

			$username = strtolower($nomes[0]).".".strtolower(end($nomes));

			$username1 = $username;
			$numero = 1;
			$linha=1;
			while($linha!=0){
				$users = $this->find('all',array('conditions'=>array('username'=>$username)));
				$linha = count($users);
				if($linha==0){

					return $username;
				}
				else{

					$username = $username1.$numero;
					$numero++;
				}
			}

            return $username;
		}

        public function alteraPassword($data){
            $user_id = SessionComponent::read('Auth.User.id');
            $this->id = $user_id;
            if($data['User']['novasenha1'] != $data['User']['novasenha2']){
                return false;
            }

            $senha_antiga = AuthComponent::password($data['User']['senhaantiga']);
            $senha  = $this->field('password');
            if($senha != $senha_antiga){
                return false;
            }

            $this->set('password', AuthComponent::password($data['User']['novasenha1']));
            $this->save();
            return true;
        }


        //Verifica se um dado Estudante é aluno
        public function isAluno($user_id){
           return true;
        }

}
?>