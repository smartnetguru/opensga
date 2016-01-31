<?php

    ini_set('memory_limit', "2048M");
    ini_set('xdebug.max_nesting_level', 20000);
    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('CakeEmail', 'Network/Email');
    App::uses('Validation', 'Utility');
    App::uses('HttpSocket', 'Network/Http');

    /**
     * Class MatriculaShell
     *
     * @property Matricula $Matricula
     * @property Tarefa $Tarefa
     */
    class MatriculaShell extends AppShell {

        public $uses = ['Matricula', 'Tarefa', 'Message', 'Notification', 'UnidadeOrganica', 'Candidatura', 'Aluno', 'EstadoAluno', 'PlanoEstudo', 'Disciplina', 'DisciplinaPlanoEstudo', 'HistoricoCurso', 'AnoLectivo', 'AlumniCandidatoAlumni', 'Requisicoes.RequisicoesPedido', 'Entidade', 'User', 'SmsNotification'];



        public function processaMatriculaRenovada(){
            $matriculaId = $this->args[0];

            $this->Matricula->contain([
                'Aluno'=>[
                    'Entidade'=>'User'
                ],
                'Curso'
            ]);
            $matricula = $this->Matricula->findById($matriculaId);
            debug($matricula);

            //@todo Apaga a Tarefa se existir
            $tarefa = $this->Tarefa->find('all',['conditions'=>['Tarefa.user_id'=>$matricula['Aluno']['Entidade']['user_id'],'Tarefa.name Like'=>'%Renovar Matricula%']]);
            if($tarefa){
                $this->Tarefa->delete($tarefa['Tarefa']['id']);
            }

            $mensagem = "Caro Estudante, a sua renovacao de Matricula foi Confirmada. Nao precisa fazer mais nada a respeito";
            $this->Message->sendMessage(1,$matricula['Aluno']['Entidade']['User']['id'],'Confirmacao de Renovacao de Matricula',$mensagem);

            $this->Notification->sendNotification($matricula['Aluno']['Entidade']['User']['id'],'Renovacao de Matricula Confirmada','Matricula');

            $emailPessoal =$matricula['Aluno']['Entidade']['email'];
            $emails[] = $matricula['Aluno']['Entidade']['User']['username'];
            if(!empty($emailPessoal)){
                if(Validation::email($emailPessoal)){
                    $emails[] = $emailPessoal;
                }

            }


            $this->HttpSocket = new HttpSocket(array(
                'ssl_verify_host' => false
            ));

            $Email = new CakeEmail();
            $Email->config('smtp')
                //->template('resumo_diario', 'default')
                //->viewVars(['data' => $this->Relatorio->getResumoDiario()])
                ->emailFormat('html')
                ->domain('siga.uem.mz')
                ->to($emails)
                ->subject('SIGA- Resumo Diario ->' . date('Y-m-d'))
                ->send($mensagem);
            //@todo Envia SMS para o Usuario

        }

        public function renovaMatriculaFromFolder(){

            $folder = $this->args[0];
            $dir = new Folder($folder);
            $files = $dir->find('.*\.txt');
            foreach ($files as $file) {
                $file = new File($dir->pwd() . DS . $file);

                $this->Matricula->processaFicheiroRenovacaoLocal($file->path,2016);
                $this->out('Ficheiro Processado com Sucesso-------------'.$file->name);

                $file->close(); // Be sure to close the file when you're done
            }

        }

        public function exporta_renovacao_matriculas()
        {
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'renovacao.xlsx');

            $worksheet = $xls->getActiveSheet();
            $linha_actual = 2;
            $this->Aluno->Matricula->contain([
                'Aluno' => [
                    'Entidade'
                ],
                'AnoLectivo',
                'Curso' => [
                    'UnidadeOrganica'
                ]
            ]);
            $matriculas = $this->Aluno->Matricula->find('all',
                ['conditions' => ['Matricula.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id')]]);
            foreach ($matriculas as $matricula) {
                $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $matricula['Aluno']['codigo']);
                $xls->getActiveSheet()->setCellValue('B' . $linha_actual, $matricula['Aluno']['Entidade']['apelido']);
                $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $matricula['Aluno']['Entidade']['nomes']);
                $xls->getActiveSheet()->setCellValue('D' . $linha_actual, $matricula['AnoLectivo']['ano']);
                $xls->getActiveSheet()->setCellValue('E' . $linha_actual, $matricula['Matricula']['data']);
                $xls->getActiveSheet()->setCellValue('F' . $linha_actual, $matricula['Curso']['name']);
                $unidade_organica = $matricula['Curso']['UnidadeOrganica'];
                $faculdade = $unidade_organica;
                if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                    $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                    $faculdade = $unidade_organica_nova['UnidadeOrganica'];
                }
                $xls->getActiveSheet()->setCellValue('G' . $linha_actual, $faculdade['name']);
                $this->out($linha_actual . "---" . $matricula['Aluno']['codigo']);
                $linha_actual++;
            }
            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'renovacao' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
        }

    }
