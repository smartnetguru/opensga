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

	var $actsAs = array('Acl' => array('type' => 'requester'));

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
                $this->request->data['User']['password'] =Security::hash($this->request->data['User']['password'],'Blowfish');
                
            }
            
            if(isset($this->request->data['User']['username'])){
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
            $user_id = $data['User']['user_id'];
            $this->id = $user_id;
            if($data['User']['novasenha1'] != $data['User']['novasenha2']){
                return false;
            }

            $this->set('password', Security::hash($data['User']['novasenha1'],'blowfish'));
            $this->save();
            return true;
        }


        //Verifica se um dado Estudante é aluno
        public function isAluno($user_id){
           return true;
        }
        
        
        
        
        public function normalize_str($str)
	{
		$invalid = array('Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z',
				'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A',
				'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E',
				'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
				'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y',
				'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a',
				'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e',  'ë'=>'e', 'ì'=>'i', 'í'=>'i',
				'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
				'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y',  'ý'=>'y', 'þ'=>'b',
				'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', "`" => "'", "´" => "'", "„" => ",", "`" => "'",
				"´" => "'", "“" => "\"", "”" => "\"", "´" => "'", "&acirc;€™" => "'", "{" => "",
				"~" => "", "–" => "-", "’" => "'");
	
		$str = str_replace(array_keys($invalid), array_values($invalid), $str);
	
		return $str;
	}
	
	public function geraEmailUem($apelido,$nome){
		
		$nome = $this->normalize_str($nome);
		$nome = trim(strtolower($nome));
		
		$apelido = strtolower(trim($this->normalize_str($apelido)));
		
		$nome = utf8_encode($nome);
		$apelido = utf8_encode($apelido);
		$nome = preg_replace('/[^a-zA-Z0-9\s]/s','',$nome);
		
		$nome = preg_replace('/\s+/', ' ', $nome);
		$nomes  = explode(' ',$nome);
		$email = $nomes[0].'.'.$apelido.'@uem.ac.mz';
		
		//Verificar se existe algum email assim
		$email_existe = $this->findByUsername($email);
		if($email_existe){
			if(count($nomes)>1){
				$segundo_nome = trim($nomes[1]);
				$email = $nomes[0].'.'.$segundo_nome[0].'.'.$apelido.'@uem.ac.mz';
				$email_existe1 = $this->findByUsername($email);
				
				if($email_existe1){
					$email = $nomes[0].'.'.$segundo_nome.'.'.$apelido.'@uem.ac.mz';
					$email_existe3 = $this->findByUsername($email);
					if($email_existe3){
					$email = $apelido.'.'.$nomes[0].'@uem.ac.mz';
				$email_existe2 = $this->findByUsername($email);
				if($email_existe2){
					$email = $apelido.'.'.$nomes[0].'.'.$email_existe2['User']['id'].'@uem.ac.mz';
				}
					}	
				}
				
			}
			else{
				$email = $apelido.'.'.$nomes[0].'@uem.ac.mz';
				$email_existe2 = $this->findByUsername($email);
				if($email_existe2){
					$email = $apelido.'.'.$nomes[0].'.'.$email_existe2['User']['id'].'@uem.ac.mz';
					
				}
			}
		}
		return strtolower($email);
	}
        
        public function getFuncionarioActivoId($user_id){
            if($user_id==1 || $user_id==null)
                return 0;
            $this->Funcionario->contain();
            $funcionario = $this->Funcionario->findByUserId($user_id);
            
            return $funcionario['Funcionario']['id'];
        }

}
?>