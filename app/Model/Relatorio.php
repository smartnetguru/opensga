<?php
    App::uses('AppModel', 'Model');

    /**
     * Role Model
     *
     *
     */
    class Relatorio extends AppModel
    {


        public $useTable = false;


        public function getResumoDiario($dataResumo = null)
        {

            if (!$dataResumo) {
                $dataResumo = date('Y-m-d', strtotime("-1 days"));
            }
            $this->Aluno = ClassRegistry::init('Aluno');
            $data = [];

            $data['Email']['headerTitle'] = 'Resumo Diário do SIGA';
            $data['Email']['data_resumo'] = $dataResumo;

            /*Acessos*/
            $data['Acessos']['global'] = $this->Aluno->Entidade->User->UserLoginHistory->find('count',
                ['conditions' => ['DATE(login_date)' => $dataResumo]]);


            /*Matriculas*/
            $estudantesMatriculados = $this->Aluno->Matricula->find('count',
                ['conditions' => ['DATE(data)' => $dataResumo, 'tipo_matricula_id' => 1]]);
            $matriculasRenovadas = $this->Aluno->Matricula->find('count',
                ['conditions' => ['DATE(data)' => $dataResumo, 'tipo_matricula_id' => 2]]);
            $reingressos = $this->Aluno->Matricula->find('count',
                ['conditions' => ['DATE(data)' => $dataResumo, 'tipo_matricula_id' => 3]]);
            $data['Matriculas']['novo_ingresso'] = $estudantesMatriculados;
            $data['Matriculas']['renovacao'] = $matriculasRenovadas;
            $data['Matriculas']['reingresso'] = $reingressos;


            /*Turmas*/
            $data['Turmas']['criadas'] = $this->Aluno->Inscricao->Turma->find('count',
                ['conditions' => ['DATE(created)' => $dataResumo]]);
            $data['Turmas']['fechadas'] = $this->Aluno->Inscricao->Turma->find('count',
                ['conditions' => ['DATE(data_fecho)' => $dataResumo, 'estado_turma_id' => 2]]);


            return $data;

        }
    }
