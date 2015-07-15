<?php

    ini_set('memory_limit', "2048M");
    ini_set('xdebug.max_nesting_level', 20000);
    App::uses('AuditableConfig', 'Auditable.Lib');

    class S3Shell extends AppShell {

        public $uses = array('Inscricao', 'Turma', 'Matricula', 'Curso', 'UnidadeOrganica', 'Candidatura', 'Aluno', 'EstadoAluno', 'PlanoEstudo', 'Disciplina', 'DisciplinaPlanoEstudo', 'HistoricoCurso', 'AnoLectivo', 'CandidatoAlumni', 'Requisicoes.RequisicoesPedido', 'Entidade', 'User', 'SmsNotification');

        

    }
