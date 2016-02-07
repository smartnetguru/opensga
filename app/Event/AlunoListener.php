<?php
    App::uses('CakeEventListener', 'Event');


    class AlunoListener implements CakeEventListener
    {

        public function implementedEvents()
        {
            return [
                'Model.Aluno.beforeMatricula' => 'cadastraEntidadeForMatricula',
            ];
        }

        public function cadastraEntidadeForMatricula($event)
        {
            $this->Entidade = ClassRegistry::init('Entidade');
            $resultado = $this->Entidade->cadastraEntidade($event->data['data']);
            if ($resultado !== false) {
                $data = $event->data['data'];
                $data['Aluno']['entidade_id'] = $resultado;
                $data['Entidade']['id'] = $resultado;

                return $data;
            } else {
                return false;
            }

        }
    }

