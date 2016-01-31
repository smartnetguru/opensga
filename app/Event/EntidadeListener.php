<?php
    App::uses('CakeEventListener', 'Event');


    /**
     * Class EntidadeListener
     *
     * @property Entidade $Entidade
     */
    class EntidadeListener implements CakeEventListener {

        public function implementedEvents() {
            return array(
                'Model.Entidade.beforeCreate' => 'cadastraUserForEntidade',

            );
        }

        public function cadastraUserForEntidade($event){
            $this->Entidade = ClassRegistry::init('Entidade');
            $resultado = $this->Entidade->User->cadastraUser($event->data['data']);
            if($resultado!==false){
                $data = $event->data['data'];
                $data['Entidade']['user_id'] = $resultado;
                $data['Aluno']['user_id'] = $resultado;
                return $data;
            } else{
                return false;
            }
        }
    }

