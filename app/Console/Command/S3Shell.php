<?php

ini_set('memory_limit', "2048M");
ini_set('xdebug.max_nesting_level', 20000);
App::uses('AuditableConfig', 'Auditable.Lib');

class S3Shell extends AppShell
{

    public $uses = [
        'Inscricao',
        'Turma',
        'Matricula',
        'Curso',
        'UnidadeOrganica',
        'Candidatura',
        'Aluno',
        'EstadoAluno',
        'PlanoEstudo',
        'Disciplina',
        'DisciplinaPlanoEstudo',
        'HistoricoCurso',
        'AnoLectivo',
        'AlumniCandidatoAlumni',
        'Requisicoes.RequisicoesPedido',
        'Entidade',
        'User',
        'SmsNotification',
    ];

    public function test()
    {
        $message = [

            //'Type'=>'cake',
            'Command' => 'S3',
            'Action' => 'recebeErro',
            //'turmaId' => 1,
        ];
        RabbitMQ::publish($message);
    }

    public function recebeErro()
    {
        throw new Exception('Erro qualquer');
    }


}
