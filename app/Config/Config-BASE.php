<?php

    /**
     * Configurações Básicas do OpenSGA. Melhor colocar num ficheiro do que na Base de Dados ;)
     */

    /**
     *Ano Lectivo Corrente
     */
    $config = [];
    $config['OpenSGA']['desenvolvedor'] = 'Elisio Leonardo';
    $config['OpenSGA']['site']['url'] = 'http://localhost/opensga';
    $config['OpenSGA']['instituicao']['sigla'] = 'eseg';
    $config['OpenSGA']['instituicao']['sigla_logo'] = 'UNIVERSIDADE';
    $config['OpenSGA']['instituicao']['nome'] = 'OpenSGA - Sistema de Gestão Académica';
    $config['OpenSGA']['instituicao']['portal_url'] = '#';
    $config['OpenSGA']['ano_lectivo_id'] = 31;
    $config['OpenSGA']['ano_lectivo'] = 2015;
    $config['OpenSGA']['semestre_lectivo_id'] = 68;
    $config['OpenSGA']['semestre_lectivo'] = 1;

    $config['OpenSGA']['PlanoEstudo']['formato'] = 'eseg';

    $config['OpenSGA']['save_path'] = '/home/backstageel/SIGAFiles';
    $config['OpenSGA']['gdata']['admin']['password'] = '';
    $config['OpenSGA']['gdata']['admin']['email'] = 'elisio.leonardo@uem.ac.mz';
    $config['OpenSGA']['gdata']['client'] = 'uem.ac.mz';

    /**
     *Modulos Activos
     */
    $config['OpenSGA']['modulos']['disciplinas'] = 1;
    $config['OpenSGA']['modulos']['plano_estudos'] = 1;
    $config['OpenSGA']['modulos']['faculdades'] = 1;
    $config['OpenSGA']['modulos']['departamentos'] = 1;
    $config['OpenSGA']['modulos']['seccoes'] = 1;
    $config['OpenSGA']['modulos']['sala_aulas'] = 1;
    $config['OpenSGA']['modulos']['e-sade'] = 1;
    $config['OpenSGA']['modulos']['financeiro'] = 1;

    /**
     *Configuracoes do Modulo de Matriculas
     */
    $config['OpenSGA']['matriculas']['regimes'] = 1;


    /**
     *Configuracao do Modulo Financeiro
     */
    $config['OpenSGA']['financeiro']['cobrar_matricula'] = 1;
    $config['OpenSGA']['financeiro']['cobrar_inscricao'] = 1;

    /**
     *Modelo de Cobranca de Inscricoes:
     * 1- As inscricoes sao cobradas por cadeira, e cadeiras em atraso possuem preco diferente. ESEG
     * 2- As inscricoes sao cobradas por cadeiras e cadeiras em atraso possuem mesmo preco. UEM
     */
    $config['OpenSGA']['financeiro']['modelo_inscricao'] = 1;

    /**
     *Gerar Mensalidades na inscricao?
     * 1- Mensalidades sao cobradas normalmente para cadeiras normais. Cadeiras em atraso pagam por cadeira. Limite: 3 cadeiras em atraso. ESEG
     * 2- Gerar apenas para cursos Pós Laboral. Mensalidades sao cobradas normalmente. Nao importam cadeiras em atraso. UEM
     */
    $config['OpenSGA']['financeiro']['gerar_propinas_inscricao'] = 1;

?>
