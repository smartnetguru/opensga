<?php

    ini_set('memory_limit', "3096M");
    App::uses('AuditableConfig', 'Auditable.Lib');

    class DbsecShell extends AppShell
    {
//@formatter:off
    public $uses = [
        'HistoricoCurso',
        'TipoAvaliacao',
        'Curso',
        'UnidadeOrganica',
        'Disciplina',
        'PlanoEstudo',
        'DisciplinaPlanoEstudo',
        'Aluno',
        'Turma',
        'AnoLectivo',
        'SemestreLectivo',
        'Turma',
        'CursosTurno',
        'Matricula',
        'Inscricao',
        'User',
        'Entidade',
    ];

    public $folder = 'esnec';
    public $unidadeOrganicaId = 14;



    public function verifica_cursos()
    {
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'curso.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        $this->out('Comecando a funcao....');
        foreach ($worksheet->getRowIterator() as $ow) {
            $curso_id = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            if ($curso_id instanceof PHPExcel_RichText) {
                $curso_id = $curso_id->getPlainText();
            }

            if($curso_id=='3663'){
                $curso_id=3661;
            }
            if($curso_id==3664){
                $curso_id=3662;
            }

            $this->out('Verificando o curso----' . $curso_id);
            if ($curso_id == '' && !is_numeric($curso_id)) {
                $this->out('Parando no fim....');
                break;
            }
            $curso_existe = $this->Curso->findByCodigo($curso_id);
            if (!empty($curso_existe)) {
                $this->out("Curso Existe-->" . $curso_id);
            } else {
                $relevancia = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                if ($relevancia == 1) {


                    debug($curso_id);
                    die();
                    $fac_id = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();

                    $faculdade = $this->UnidadeOrganica->find('first',
                        ['conditions' => ['UnidadeOrganica.codigo' => $fac_id]]);

                    $curso_array = [
                        'Curso' => [
                            'name'                => $worksheet->getCell('B' . $linha_actual)->getCalculatedValue(),
                            'grau_academico_id'   => $worksheet->getCell('F' . $linha_actual)->getCalculatedValue(),
                            'tipo_curso_id'       => $worksheet->getCell('F' . $linha_actual)->getCalculatedValue(),
                            'unidade_organica_id' => $faculdade['UnidadeOrganica']['id'],
                            'codigo'              => $curso_id
                        ]
                    ];


                    $this->Curso->create();
                    $this->Curso->save($curso_array);
                    $this->out('Curso Inserido--' . $this->Curso->id . '---' . $curso_array['Curso']['name']);
                }
            }
            $linha_actual++;
        }
    }

    public function importa_disciplinas()
    {
        $unidadeOrganicaId = $this->unidadeOrganicaId;
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'disciplina.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        $this->Disciplina->query('Update disciplinas set codigo_antigo=null');
        foreach ($worksheet->getRowIterator() as $ow) {
            $codigo_disciplina = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            $nome_disciplina = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();

            if ($codigo_disciplina == '' && !is_numeric($codigo_disciplina)) {
                break;
            }

            $nome_existe = $this->Disciplina->findByName($nome_disciplina);
            {

                if (!empty($nome_existe)) {

                    $this->out("Ja existe Disciplina com Este nome");
                    $disciplinaId = $nome_existe['Disciplina']['id'];
                    $this->Disciplina->id = $nome_existe['Disciplina']['id'];
                    $this->Disciplina->set('codigo_antigo',$codigo_disciplina);
                    $this->Disciplina->set('id',$nome_existe['Disciplina']['id']);
                    $this->Disciplina->set('name',$nome_disciplina);
                    $this->Disciplina->set('codigo',null);
                    if($nome_disciplina=='Português III'){
                        debug($nome_existe);
                            debug($this->Disciplina->data);
                        //die(debug('1'));
                    }
                    if(!$this->Disciplina->save()){
                        if($nome_disciplina=='Arqueologia Marítima'){
                            debug($nome_existe);
                            debug($this->Disciplina->data);
                            debug($this->Disciplina->validationErrors);
                        die(debug('Leo'));
                    }
                    }

                } else {
                    $codigo_existe = $this->Disciplina->findByCodigoAntigo($codigo_disciplina);
                    if (empty($codigo_existe)) {
                        $array_disciplina = [
                            'Disciplina' => [
                                'name'          => $nome_disciplina,
                                'codigo_antigo' => $codigo_disciplina,
                                'codigo'=>null
                            ]
                        ];

                        $this->Disciplina->create();
                        if(!$this->Disciplina->save($array_disciplina)){

                      debug($this->Disciplina->validationErrors);
                    debug($array_disciplina);


                        }
                        $this->Disciplina->set('codigo', $this->Disciplina->id);
                        $this->Disciplina->save();
                        $disciplinaId = $this->Disciplina->id;
                    } else {
                        $array_disciplina = [
                            'Disciplina' => [
                                'name'          => $nome_disciplina,
                                'codigo_antigo' => $codigo_disciplina
                            ]
                        ];
                        $this->Disciplina->create();
                        $this->Disciplina->save($array_disciplina);
                        $this->Disciplina->set('codigo', $this->Disciplina->id);
                        $this->Disciplina->save();
                        $disciplinaId = $this->Disciplina->id;
                    }

                    $this->out("Disciplina Criada--" . $nome_disciplina);
                }
                //Gravamos a Disciplina Unidade Organica
                $disciplinaUnidadeExiste = $this->Disciplina->DisciplinaUnidadeOrganica->findByDisciplinaIdAndUnidadeOrganicaId($disciplinaId,
                    $unidadeOrganicaId);
                if (empty($disciplinaUnidadeExiste)) {
                    $arrayDisciplinaUnidade = [
                        'disciplina_id'       => $disciplinaId,
                        'unidade_organica_id' => $unidadeOrganicaId,
                        'estado_objecto_id'   => 1
                    ];
                    $this->Disciplina->DisciplinaUnidadeOrganica->create();
                    $this->Disciplina->DisciplinaUnidadeOrganica->save($arrayDisciplinaUnidade);
                    $this->out('DisciplinaUnidadeOrganica Gravada-------------------' . $this->Disciplina->DisciplinaUnidadeOrganica->id);
                }
            }
            $this->out("------------------------------------------------------------------------" . $linha_actual);
            $linha_actual++;
        }
    }


    public function importa_plano_estudo()
    {
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'disciplina_curso.xlsx');
        $xls2 = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'disciplina.xlsx');
        $worksheet2 = $xls2->getActiveSheet();
        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $ow) {
            $curso_codigo = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
            if($curso_codigo=='3663'){
                $curso_codigo=3661;

            }
            if($curso_codigo==3664){
                $curso_codigo=3662;
            }

            $curso = $this->Curso->findByCodigo($curso_codigo);
            if ($curso_codigo == '') {
                break;
            }

            $plano_estudo_existe = $this->PlanoEstudo->find('first', [
                'conditions' => [
                    'curso_id'    => $curso['Curso']['id'],
                    'ano_criacao' => $worksheet->getCell('J' . $linha_actual)->getCalculatedValue()
                ]
            ]);

            if (empty($plano_estudo_existe)) {
                $this->PlanoEstudo->create();
                $array_plano_estudo = [
                    'PlanoEstudo' => [
                        'name'          => $curso['Curso']['name'] . " - " . $worksheet->getCell('J' . $linha_actual)->getCalculatedValue(),
                        'curso_id'      => $curso['Curso']['id'],
                        'ano_criacao'   => $worksheet->getCell('J' . $linha_actual)->getCalculatedValue(),
                        'codigo'        => $curso['Curso']['codigo'] . "-" . $worksheet->getCell('J' . $linha_actual)->getCalculatedValue(),
                        'duracao'       => 4,
                        'semestres_ano' => 2,
                        'estado_objecto_id'=>1
                    ]
                ];

                if ($this->PlanoEstudo->save($array_plano_estudo)) {
                    $this->out('Plano de Estudos Criado------' . $array_plano_estudo['PlanoEstudo']['name']);
                    $plano_estudo_id = $this->PlanoEstudo->id;
                } else {
                    debug($this->PlanoEstudo->validationErrors);
                }


            } else {
                $plano_estudo_id = $plano_estudo_existe['PlanoEstudo']['id'];
            }

            $codigo_disciplina = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();

           if($codigo_disciplina=='D C II'){
                $codigo_disciplina='DO II';
            }

            if($codigo_disciplina=='D C III'){
                $codigo_disciplina='DO III';
            }

            if($codigo_disciplina=='D C IV'){
                $codigo_disciplina='DO IV';
            }

            if($codigo_disciplina=='EBE-24'){
                $codigo_disciplina='EFE-24';
            }

            if($codigo_disciplina=='EBE-29'){
                $codigo_disciplina='EFE-29';
            }

            if($codigo_disciplina=='EPO-11'){
                $codigo_disciplina='PORT III';
            }

            if($codigo_disciplina=='EPO-19'){
                $codigo_disciplina='PORT V';
            }

            if($codigo_disciplina=='IES'){
                $codigo_disciplina='ISO';
            }
            if($codigo_disciplina=='IG'){
                $codigo_disciplina='ING';
            }
            if($codigo_disciplina=='LLF II'){
                $codigo_disciplina='LLF-II';
            }
            if($codigo_disciplina=='MO8'){
                $codigo_disciplina='PGP';
            }
            if($codigo_disciplina=='LOA'){
                $codigo_disciplina='LOAS';
            }
if($codigo_disciplina=='MGAP 122'){
                $codigo_disciplina='OG';
            }
            if($codigo_disciplina=='GEA'){
                $codigo_disciplina='GEG';
            }
            if($codigo_disciplina=='HA'){
                $codigo_disciplina='HIA';
            }
            if($codigo_disciplina=='HIP'){
                $codigo_disciplina='HIPI';
            }

            $creditos = $worksheet->getCell('M' . $linha_actual)->getCalculatedValue();

            if($creditos==''){
                $creditos=0;
            }


            $disciplina = $this->Disciplina->findByCodigoAntigo($codigo_disciplina);

            if (empty($disciplina)) {
                debug(APP . 'Imports' . DS . $this->folder . DS . 'disciplina_curso.xlsx');
                debug($linha_actual);
                die(debug($codigo_disciplina));
            }


            if ($worksheet->getCell('G' . $linha_actual)->getCalculatedValue() == 1) {
                $semestre_sequencial = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue() * ($worksheet->getCell('G' . $linha_actual)->getCalculatedValue() + 1) - 1;
            }
            if ($worksheet->getCell('G' . $linha_actual)->getCalculatedValue() == 2) {
                $semestre_sequencial = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue() * $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
            }
            $ramo_id = $worksheet->getCell('L' . $linha_actual)->getCalculatedValue();
            if ($ramo_id == -1) {
                $ramo_id = null;
            }
            $array_plano_ano = [
                'DisciplinaPlanoEstudo' => [
                    'plano_estudo_id'     => $plano_estudo_id,
                    'ano_curricular'      => $worksheet->getCell('D' . $linha_actual)->getCalculatedValue(),
                    'semestre_curricular' => $worksheet->getCell('G' . $linha_actual)->getCalculatedValue(),
                    'carga_total'         => $worksheet->getCell('E' . $linha_actual)->getCalculatedValue(),
                    'creditos'            => $creditos,
                    'disciplina_id'       => $disciplina['Disciplina']['id'],
                    'codigo'              => $disciplina['Disciplina']['codigo'] . "-" . $curso['Curso']['codigo'] . "-" . $worksheet->getCell('J' . $linha_actual)->getCalculatedValue(),
                    'ramo_id'             => $ramo_id,
                    'semestre_sequencial' => $semestre_sequencial,
                    'estado_objecto_id'=>1
                ]
            ];


            $plano_ano_existe = $this->DisciplinaPlanoEstudo->find('first', [
                'conditions' => [
                    'plano_estudo_id'     => $plano_estudo_id,
                    'disciplina_id'       => $disciplina['Disciplina']['id'],
                    'ano_curricular'      => $worksheet->getCell('D' . $linha_actual)->getCalculatedValue(),
                    'semestre_curricular' => $worksheet->getCell('G' . $linha_actual)->getCalculatedValue(),
                ]
            ]);
            if (empty($plano_ano_existe)) {
                $this->DisciplinaPlanoEstudo->create();
                if($this->DisciplinaPlanoEstudo->save($array_plano_ano)){
                    $this->out('Plano Ano Criado---------------' . $this->DisciplinaPlanoEstudo->id);
                } else{
                    $plano_ano_existe2 = $this->DisciplinaPlanoEstudo->find('first', [
                        'conditions' => [
                            'plano_estudo_id'     => $plano_estudo_id,
                            'disciplina_id'       => $disciplina['Disciplina']['id'],
                        ]
                    ]);
                    if($plano_ano_existe2){
                        $this->DisciplinaPlanoEstudo->id = $plano_ano_existe2['DisciplinaPlanoEstudo']['id'];
                        if($this->DisciplinaPlanoEstudo->save($array_plano_ano)){
                            $this->out('Plano Ano Actualizado--------------------------'.$plano_ano_existe2['DisciplinaPlanoEstudo']['id']);
                        } else{
                            debug($array_plano_ano);
                            debug($plano_ano_existe2);
                            //debug($this->DisciplinaPlanoEstudo->getLog());
                            debug($this->DisciplinaPlanoEstudo->validationErrors);
                           // die();
                        }

                    }

                }

            } else {
                $this->out("Plano existia--------------".$linha_actual."-----------------------".$disciplina['Disciplina']['name']);

                //die(debug($array_plano_ano));
            }
            $linha_actual++;
        }
    }

    public function verifica_estudantes()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'estudante.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        $existem = 0;
        $nao_existem = 0;
        $cursoInvalido = 0;
        $this->out('Comecanco a verificacao........................');
        foreach ($worksheet->getRowIterator() as $ow) {
            $this->Aluno->recursive = -1;
            $codigo = trim($worksheet->getCell('A' . $linha_actual)->getCalculatedValue());
            $apelido = trim($worksheet->getCell('B' . $linha_actual)->getCalculatedValue());
            $nomes = trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue());
            $sexo = trim($worksheet->getCell('D' . $linha_actual)->getCalculatedValue());
            $bi = trim($worksheet->getCell('E' . $linha_actual)->getCalculatedValue());
            $cellDataNascimento = $worksheet->getCell('F' . $linha_actual);
            $anoIngresso = trim($worksheet->getCell('G' . $linha_actual)->getCalculatedValue());
            $endereco = trim($worksheet->getCell('H' . $linha_actual)->getCalculatedValue());
            $telefone = trim($worksheet->getCell('I' . $linha_actual)->getCalculatedValue());
            $celular = trim($worksheet->getCell('J' . $linha_actual)->getCalculatedValue());
            $idCurso = trim($worksheet->getCell('K' . $linha_actual)->getCalculatedValue());
            $nacionalidade = trim($worksheet->getCell('L' . $linha_actual)->getCalculatedValue());
            $email = trim($worksheet->getCell('M' . $linha_actual)->getCalculatedValue());
            $cellDataRegistro = $worksheet->getCell('O' . $linha_actual);
            $curriculum = trim($worksheet->getCell('P' . $linha_actual)->getCalculatedValue());
            $ramo = trim($worksheet->getCell('S' . $linha_actual)->getCalculatedValue());
            $statusId = trim($worksheet->getCell('T' . $linha_actual)->getCalculatedValue());

            if ($sexo == 'Masculino') {
                $generoId = 1;
            } else {
                $generoId = 2;
            }

            if($anoIngresso==3000){
                $anoIngresso= 2000;
            }

            $InvDateRegistro = $cellDataRegistro->getValue();
            if (PHPExcel_Shared_Date::isDateTime($cellDataRegistro)) {
                $dataRegistro = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($InvDateRegistro));
            } else {
                if (is_numeric($InvDateRegistro)) {
                    $dataRegistro = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($InvDateRegistro));
                }
            }


            $InvDateNascimento = $cellDataNascimento->getValue();
            if (PHPExcel_Shared_Date::isDateTime($cellDataNascimento)) {
                $dataNascimento = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($InvDateNascimento));
            } else {
                if (is_numeric($InvDateNascimento)) {
                    $dataNascimento = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($InvDateNascimento));
                }

            }

            if ($codigo == '') {
                break;
            }
            $this->out('Verificando Aluno----------------' . $codigo);
            $estudante_sga = $this->Aluno->findByCodigo($codigo);

            //debug($estudante_sga);
            if (empty($estudante_sga)) {
                $this->out('<error>Aluno Nao encontrado</error>');
                $nao_existem++;
                if ($apelido == '' && $nomes == '' ) {

                } else {
                    $curso = $this->Aluno->Curso->findByCodigo($idCurso);
                    if (empty($curso)) {
                        $this->out('<error>Curso Invalido</error>');
                        $cursoInvalido++;
                    } else {
                        $data = [
                            'Aluno'                 => [
                                'numero_estudante'           => $codigo,
                                'curso_id'                   => $curso['Curso']['id'],
                                'ano_ingresso'               => $anoIngresso,
                                'data_matricula'             => $dataRegistro,
                                'certificado_nivel_anterior' => '1',
                                'recenseamento_militar'      => '1',
                                'codigo'                     => $codigo,
                                'estado_aluno_id'            => 14
                            ],
                            'Entidade'              => [
                                'apelido'         => $apelido,
                                'nomes'           => $nomes,
                                'genero_id'       => $generoId,
                                'data_nascimento' => $dataNascimento,
                            ],
                            'Curso'                 => [
                                'unidade_organica_id' => $curso['Curso']['unidade_organica_id']
                            ],
                            'EntidadeContacto'      => [
                                '2' => $celular
                            ],
                            'EntidadeIdentificacao' => [
                                'documento_identificacao_id' => '1',
                                'numero'                     => $bi,
                            ],
                            'Matricula'             => [
                                'user_id' => '1'
                            ]
                        ];
                        $aluno = $this->Aluno->cadastraAluno($data);
                        if ($aluno === true) {
                            $this->out('Aluno novo Cadastrado----------------------------');
                        } else {
                            debug($InvDateNascimento);
                            debug($aluno);
                            debug($data);

                            //die();
                        }
                    }


                }

            } else {
                $curriculum = $curriculum;
                $this->PlanoEstudo->contain();
                $plano_estudo = $this->PlanoEstudo->find('first', [
                    'conditions' => [
                        'curso_id'    => $estudante_sga['Aluno']['curso_id'],
                        'ano_criacao' => $curriculum
                    ]
                ]);
                if (!empty($plano_estudo)) {
                    $this->Aluno->id = $estudante_sga['Aluno']['id'];
                    $this->Aluno->set('plano_estudo_id', $plano_estudo['PlanoEstudo']['id']);
                    $this->Aluno->save();
                    $this->out('Plano Estuddos Actualizado------------------' . $estudante_sga['Aluno']['codigo']);

                    $matriculas = $this->Matricula->find('all',
                        ['conditions' => ['aluno_id' => $estudante_sga['Aluno']['id']]]);
                    foreach ($matriculas as $matricula) {
                        $this->Matricula->id = $matricula['Matricula']['id'];
                        if ($matricula['Matricula']['plano_estudo_id'] == '') {
                            $this->Matricula->set('plano_estudo_id', $plano_estudo['PlanoEstudo']['id']);
                            $this->Matricula->save();
                            $this->out('Matricula Actualizada---' . $matricula['Matricula']['id']);
                        }
                    }
                }


                $existem++;
            }
            $linha_actual++;
            $this->out($linha_actual);
        }
        $this->out("Existem" . $existem);
        $this->out("Nao existem" . $nao_existem);
        $this->out('Curso Invalido-----' . $cursoInvalido);
    }

    public function importa_leccionamento()
    {
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'leccionamento.xlsx');


        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        $xls2 = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'disciplina.xlsx');
        $worksheet2 = $xls2->getActiveSheet();
        $this->out('Starting...');
        foreach ($worksheet->getRowIterator() as $row) {
            $this->PlanoEstudo->recursive = -1;
            $this->Curso->recursive = -1;
            $idDisciplina = trim($worksheet->getCell('A' . $linha_actual)->getCalculatedValue());
            $idCcurso = trim($worksheet->getCell('B' . $linha_actual)->getCalculatedValue());
            $ano = trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue());
            $semestre = trim($worksheet->getCell('D' . $linha_actual)->getCalculatedValue());
            $curriculum = trim($worksheet->getCell('F' . $linha_actual)->getCalculatedValue());
            $nivel = trim($worksheet->getCell('N' . $linha_actual)->getCalculatedValue());
            $ramo = trim($worksheet->getCell('G' . $linha_actual)->getCalculatedValue());
            $idTurma = trim($worksheet->getCell('E' . $linha_actual)->getCalculatedValue());

            if($ano=='2207'){

                $ano=2007;
            }
            if($ano=='9997'){

                $ano=1997;
            }
            if ($idCcurso == '') {
                $this->out('@@@@@@@'.$linha_actual);
                break;
            }



            if($idCcurso==20111){
                $idCcurso = 2011111;
            }
            if($idCcurso==0){
                $idCcurso = 2011111;
            }
            $curso = $this->Curso->findByCodigo($idCcurso);


            if (!empty($curso)) {
                $plano_estudo = $this->PlanoEstudo->find('first', [
                    'conditions' => [
                        'curso_id'    => $curso['Curso']['id'],
                        'ano_criacao' => $curriculum
                    ]
                ]);

                $anolectivo = $this->AnoLectivo->findByAno($ano);
                if(empty($anolectivo)){
                    if($ano<2015){
                        $arrayAnoLectivo = [
                            'AnoLectivo'=>[
                                'ano'=>$ano,
                                'num_semestre'=>2,
                                'codigo'=>$ano
                            ]
                        ];
                        $this->AnoLectivo->create();
                        if($this->AnoLectivo->save($arrayAnoLectivo)){
                            $anolectivo = $this->AnoLectivo->findByAno($ano);

                        } else{
                            debug($this->AnoLectivo->validationErrors);
                            die();
                        }


                    }
                }

$codigo_disciplina = $idDisciplina;

                if($codigo_disciplina=='D C II'){
                $codigo_disciplina='DO II';
            }

            if($codigo_disciplina=='D C III'){
                $codigo_disciplina='DO III';
            }

            if($codigo_disciplina=='D C IV'){
                $codigo_disciplina='DO IV';
            }

            if($codigo_disciplina=='EBE-24'){
                $codigo_disciplina='EFE-24';
            }

            if($codigo_disciplina=='EBE-29'){
                $codigo_disciplina='EFE-29';
            }

            if($codigo_disciplina=='EPO-11'){
                $codigo_disciplina='PORT III';
            }

            if($codigo_disciplina=='EPO-19'){
                $codigo_disciplina='PORT V';
            }

            if($codigo_disciplina=='IES'){
                $codigo_disciplina='ISO';
            }
            if($codigo_disciplina=='IG'){
                $codigo_disciplina='ING';
            }
            if($codigo_disciplina=='LLF II'){
                $codigo_disciplina='LLF-II';
            }
            if($codigo_disciplina=='MO8'){
                $codigo_disciplina='PGP';
            }
            if($codigo_disciplina=='LOA'){
                $codigo_disciplina='LOAS';
            }
if($codigo_disciplina=='MGAP 122'){
                $codigo_disciplina='OG';
            }
            if($codigo_disciplina=='GEA'){
                $codigo_disciplina='GEG';
            }

            if($codigo_disciplina=='HIP'){
                $codigo_disciplina='HIPI';
            }

$idDisciplina = $codigo_disciplina;
                $disciplina = $this->Disciplina->findByCodigoAntigo($idDisciplina);

                if (empty($disciplina)) {
                    if($idDisciplina==null){
                        $linha_actual++;

                        continue;
                    }
                    die(debug($idDisciplina));
                }
                if (!empty($disciplina)) {
                    $semestre_lectivo = $this->SemestreLectivo->find('first', [
                        'conditions' => [
                            'ano_lectivo_id' => $anolectivo['AnoLectivo']['id'],
                            'semestre'       => $semestre
                        ]
                    ]);
                    if (empty($semestre_lectivo)) {
                        $array_semestre = [
                            'SemestreLectivo' => [
                                'codigo'         => $anolectivo['AnoLectivo']['ano'] . "-" . trim($worksheet->getCell('E' . $linha_actual)->getCalculatedValue()),
                                'ano_lectivo_id' => $anolectivo['AnoLectivo']['id'],
                                'semestre'       => $semestre,
                                'semestre_id'    => $semestre,
                            ]
                        ];
                        $this->SemestreLectivo->create();
                        $this->SemestreLectivo->save($array_semestre);
                        $semestre_lectivo = $this->SemestreLectivo->find('first', [
                            'conditions' => [
                                'ano_lectivo_id' => $anolectivo['AnoLectivo']['id'],
                                'semestre'       => $semestre
                            ]
                        ]);
                    }

                    $disciplinaPlanoEstudo = $this->Disciplina->DisciplinaPlanoEstudo->findByPlanoEstudoIdAndDisciplinaId($plano_estudo['PlanoEstudo']['id'],
                        $disciplina['Disciplina']['id']);

                    if (!empty($disciplinaPlanoEstudo)) {

                        if($nivel==''){
                            $nivel= $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'];
                        }
                        $array_turma = [
                            'Turma' => [
                                'ano_lectivo_id'      => $anolectivo['AnoLectivo']['id'],
                                'plano_estudo_id'     => $plano_estudo['PlanoEstudo']['id'],
                                'disciplina_id'       => $disciplina['Disciplina']['id'],
                                'curso_id'            => $plano_estudo['PlanoEstudo']['curso_id'],
                                'estado_turma_id'     => 1,
                                'codigo'              => trim($worksheet->getCell('E' . $linha_actual)->getCalculatedValue()),
                                'ano_curricular'      => $nivel,
                                'semestre_curricular' => $semestre,
                                'name'                => $disciplina['Disciplina']['name'] . " - " . $ano . " - " . $plano_estudo['PlanoEstudo']['name'],
                                'semestre_lectivo_id' => $semestre_lectivo['SemestreLectivo']['id'],
                                'unidade_organica_id' => $curso['Curso']['unidade_organica_id'],
                                'ramo_id'=>$ramo
                            ]
                        ];
                    } else {
                        if($nivel==''){
                            $nivel= 0;
                        }
                        $array_turma = [
                            'Turma' => [
                                'ano_lectivo_id'      => $anolectivo['AnoLectivo']['id'],
                                'plano_estudo_id'     => $plano_estudo['PlanoEstudo']['id'],
                                'disciplina_id'       => $disciplina['Disciplina']['id'],
                                'curso_id'            => $plano_estudo['PlanoEstudo']['curso_id'],
                                'estado_turma_id'     => 1,
                                'codigo'              => trim($worksheet->getCell('E' . $linha_actual)->getCalculatedValue()),
                                'ano_curricular'      => $nivel,
                                'semestre_curricular' => $semestre,
                                'name'                => $disciplina['Disciplina']['name'] . " - " . $ano . " - " . $plano_estudo['PlanoEstudo']['name'],
                                'semestre_lectivo_id' => $semestre_lectivo['SemestreLectivo']['id'],
                                'unidade_organica_id' => $curso['Curso']['unidade_organica_id'],
                                'ramo_id'=>$ramo
                            ]
                        ];
                    }
                    $turma_existe = $this->Turma->find('first', [
                        'conditions' => array(
                            'disciplina_id'       => $disciplina['Disciplina']['id'],
                            'plano_estudo_id'     => $plano_estudo['PlanoEstudo']['id'],
                            'ano_lectivo_id'      => $anolectivo['AnoLectivo']['id'],
                            'curso_id'            => $plano_estudo['PlanoEstudo']['curso_id'],
                            'ano_curricular'      => $nivel,
                            'semestre_curricular' => $semestre,
                            'ramo_id'=>$ramo
                        )
                    ]);
                    if (empty($turma_existe)) {
                        $this->Turma->create();
                        if ($turmaGravada = $this->Turma->save($array_turma)) {

                            $this->out("Turma Criada--" . $array_turma['Turma']['name'] . " ------ -----  " . $this->Turma->id);
                        } else {
                            debug($array_turma);
                            debug($this->Turma->validationErrors);
                            die();
                        }


                    } else {

                        $this->out("Turma existia");

                    }


                }
                $this->out(trim($worksheet->getCell('F' . $linha_actual)->getCalculatedValue())."------------------------------------------------------------------------" . $linha_actual);
                $linha_actual++;

            } else{
                debug($idCcurso);
                debug('Curso');
                $linha_actual++;
            }

        }
    }


    public function importa_inscricao()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $this->out('Lendo---------------');
        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'inscricao.xlsx');

        $linha_actual = 18780;
        $worksheet = $xls->getActiveSheet();
        $xls2 = PHPExcel_IOFactory::load(APP . 'Imports' . DS . $this->folder . DS . 'disciplina.xlsx');
        $worksheet2 = $xls2->getActiveSheet();

        $this->out('Comecando-----------------');
        foreach ($worksheet->getRowIterator() as $row) {
            $this->Aluno->recursive = -1;

            $codigo = trim($worksheet->getCell('A' . $linha_actual)->getCalculatedValue());
            $idDisciplina = trim($worksheet->getCell('B' . $linha_actual)->getCalculatedValue());
            $cellDataInscricao = $worksheet->getCell('C' . $linha_actual);
            $idAnoLectivo = trim($worksheet->getCell('E' . $linha_actual)->getCalculatedValue());
            $idCursoFrequencia = trim($worksheet->getCell('U' . $linha_actual)->getCalculatedValue());
            $idCurso = trim($worksheet->getCell('O' . $linha_actual)->getCalculatedValue());
            $notaFrequencia = trim($worksheet->getCell('F' . $linha_actual)->getCalculatedValue());
            $notaFinal = trim($worksheet->getCell('I' . $linha_actual)->getCalculatedValue());

            $tipoInscricaoId = trim($worksheet->getCell('X' . $linha_actual)->getCalculatedValue());
            $notaExameNormal = trim($worksheet->getCell('G' . $linha_actual)->getCalculatedValue());
            $notaExameRecorrencia = trim($worksheet->getCell('H' . $linha_actual)->getCalculatedValue());
            $estadoInscricao = trim($worksheet->getCell('J' . $linha_actual)->getCalculatedValue());
            $idTurma = trim($worksheet->getCell('V' . $linha_actual)->getCalculatedValue());
            $anoCurriculum = trim($worksheet->getCell('M' . $linha_actual)->getCalculatedValue());


            $aluno = $this->Aluno->findByCodigo($codigo);

            if(!empty($aluno)){
                $InvDateRegistro = $cellDataInscricao->getValue();
                if (PHPExcel_Shared_Date::isDateTime($cellDataInscricao)) {
                    $dataInscricao = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($InvDateRegistro));
                } else {
                    if (is_numeric($InvDateRegistro)) {
                        $dataInscricao = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($InvDateRegistro));
                    }
                }

$codigo_disciplina = $idDisciplina;

                if($codigo_disciplina=='D C II'){
                $codigo_disciplina='DO II';
            }

            if($codigo_disciplina=='D C III'){
                $codigo_disciplina='DO III';
            }

            if($codigo_disciplina=='D C IV'){
                $codigo_disciplina='DO IV';
            }

            if($codigo_disciplina=='EBE-24'){
                $codigo_disciplina='EFE-24';
            }

            if($codigo_disciplina=='EBE-29'){
                $codigo_disciplina='EFE-29';
            }

            if($codigo_disciplina=='EPO-11'){
                $codigo_disciplina='PORT III';
            }

            if($codigo_disciplina=='EPO-19'){
                $codigo_disciplina='PORT V';
            }

            if($codigo_disciplina=='IES'){
                $codigo_disciplina='ISO';
            }
            if($codigo_disciplina=='IG'){
                $codigo_disciplina='ING';
            }
            if($codigo_disciplina=='LLF II'){
                $codigo_disciplina='LLF-II';
            }
            if($codigo_disciplina=='MO8'){
                $codigo_disciplina='PGP';
            }
            if($codigo_disciplina=='LOA'){
                $codigo_disciplina='LOAS';
            }
if($codigo_disciplina=='MGAP 122'){
                $codigo_disciplina='OG';
            }
            if($codigo_disciplina=='GEA'){
                $codigo_disciplina='GEG';
            }

            if($codigo_disciplina=='HIP'){
                $codigo_disciplina='HIPI';
            }

$idDisciplina = $codigo_disciplina;

                $disciplina = $this->Disciplina->findByCodigoAntigo($idDisciplina);

                if (empty($disciplina)) {
                    die(debug($idDisciplina));
                }
                if($idAnoLectivo=='2207'){

                    $idAnoLectivo=2007;
                }
                if($idAnoLectivo=='9997'){

                    $idAnoLectivo=1997;
                }

                if($idCurso==1421){
                    $idCurso=1211;
                }

                $this->Turma->recursive = -1;
                $curso = $this->Curso->findByCodigo($idCurso);
                if (!in_array($idCurso, [2012, 2013, 2014, 2015])) {
                    $this->out('Curso Encontrado-------------------'.$curso['Curso']['name']);

                    $turma = $this->Turma->find('first',array('conditions'=>array('codigo'=>$idTurma,'curso_id'=>$curso['Curso']['id'])));


                    $anolectivo = $this->AnoLectivo->findByAno($idAnoLectivo);
                    $matricula = $this->Matricula->find('first', [
                        'conditions' => [
                            'aluno_id'       => $aluno['Aluno']['id'],
                            'ano_lectivo_id' => $anolectivo['AnoLectivo']['id']
                        ]
                    ]);
                    if (empty($matricula)) {
                        $nova_matricula = [
                            'Matricula' => [
                                'aluno_id'            => $aluno['Aluno']['id'],
                                'curso_id'            => $aluno['Aluno']['curso_id'],
                                'plano_estudo_id'     => $aluno['Aluno']['plano_estudo_id'],
                                'data'                => $dataInscricao,
                                'estado_matricula_id' => 1,
                                'user_id'             => 1,
                                'ano_lectivo_id'      => $anolectivo['AnoLectivo']['id'],
                            ]
                        ];
                        if ($aluno['Aluno']['ano_ingresso'] == $idAnoLectivo) {
                            $nova_matricula['Matricula']['tipo_matricula_id'] = 1;
                        } else {
                            $nova_matricula['Matricula']['tipo_matricula_id'] = 2;
                        }

                        $this->Matricula->create();
                        $this->Matricula->save($nova_matricula);
                        $matricula = $this->Matricula->find('first', [
                            'conditions' => [
                                'aluno_id'       => $aluno['Aluno']['id'],
                                'ano_lectivo_id' => $anolectivo['AnoLectivo']['id']
                            ]
                        ]);
                        $this->out('--------------------------------Matricula Criada');
                    }

                    $curso_frequencia = $this->Curso->findByCodigo($idCursoFrequencia);
                    $turma_frequencia = $this->Turma->find('first', [
                        'conditions' => [
                            'curso_id'       => $curso_frequencia['Curso']['id'],
                            'disciplina_id'  => $disciplina['Disciplina']['id'],
                            'ano_lectivo_id' => $anolectivo['AnoLectivo']['id']
                        ]
                    ]);

                    if (empty($turma)) {
                        $turma = $this->Turma->find('first', [
                            'conditions' => [
                                'curso_id'       => $curso['Curso']['id'],
                                'disciplina_id'  => $disciplina['Disciplina']['id'],
                                'ano_lectivo_id' => $anolectivo['AnoLectivo']['id']
                            ]
                        ]);
                    }
                    if(empty($turma)){
                        $planoEstudo = $this->Turma->PlanoEstudo->findById($aluno['Aluno']['plano_estudo_id']);
                        $disciplinaPlanoEstudo = $this->Turma->Disciplina->DisciplinaPlanoEstudo->find('first',array('conditions'=>array('plano_estudo_id'=>$planoEstudo['PlanoEstudo']['id'],'disciplina_id'=>$disciplina['Disciplina']['id'])));
                        $semestreLectivo = $this->Turma->SemestreLectivo->findByAnoLectivoIdAndSemestre($anolectivo['AnoLectivo']['id'],$disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular']);
                        $array_turma = [
                            'Turma' => [
                                'ano_lectivo_id'      => $anolectivo['AnoLectivo']['id'],
                                'plano_estudo_id'     => $planoEstudo['PlanoEstudo']['id'],
                                'disciplina_id'       => $disciplina['Disciplina']['id'],
                                'curso_id'            => $planoEstudo['PlanoEstudo']['curso_id'],
                                'estado_turma_id'     => 1,
                                'codigo'              => $idTurma,
                                'ano_curricular'      => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'],
                                'semestre_curricular' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'],
                                'name'                => $disciplina['Disciplina']['name'] . " - " . $anolectivo['AnoLectivo']['ano'] . " - " . $planoEstudo['PlanoEstudo']['name'],
                                'semestre_lectivo_id' => $semestreLectivo['SemestreLectivo']['id'],
                            ]
                        ];

                        $this->Turma->create();
                        $this->Turma->save($array_turma);
                        $turma = $this->Turma->findById($this->Turma->id);
                    }
                    if(empty($turma_frequencia)){
                        $turma_frequencia = $turma;
                    }

                    $array_inscricao = [
                        'Inscricao' => [
                            'aluno_id'               => $aluno['Aluno']['id'],
                            'turma_id'               => $turma['Turma']['id'],
                            'estadoinscricao_id'     => 1,
                            'nota_frequencia'        => $notaFrequencia,
                            'nota_final'             => $notaFinal,
                            'data'                   => $dataInscricao,
                            'matricula_id'           => $matricula['Matricula']['id'],
                            'tipo_inscricao_id'      => $tipoInscricaoId,
                            'nota_exame_normal'      => $notaExameNormal,
                            'nota_exame_recorrencia' => $notaExameRecorrencia,
                            'estado_inscricao'       => $estadoInscricao,
                            'turma_frequencia_id'    => $turma_frequencia['Turma']['id'],
                            'turma_inscricao_id'               => $turma['Turma']['id'],
                        ]
                    ];


                    $this->Inscricao->contain();
                    $inscricao_existe = $this->Inscricao->find('first', [
                        'conditions' => [
                            'aluno_id' => $array_inscricao['Inscricao']['aluno_id'],
                            'turma_id' => $array_inscricao['Inscricao']['turma_id']
                        ]
                    ]);
                    // Completely remove all rules for a field
                    $this->Inscricao->validator()->remove('nota_frequencia');
                    $this->Inscricao->validator()->remove('nota_final');
                    $this->Inscricao->validator()->remove('nota_exame_normal');
                    $this->Inscricao->validator()->remove('nota_exame_recorrencia');
                    if (empty($inscricao_existe)) {
                        //  debug($array_inscricao);
                        $this->Inscricao->create();
                        if($this->Inscricao->save($array_inscricao)){
                            $this->out("Inscricao Criada----------".$idAnoLectivo."----------------- " . $this->Inscricao->id);
                        } else{
                            debug($array_inscricao);
                            debug($this->Inscricao->validationErrors);

                        }

                    } else {
                        $array_inscricao['Inscricao']['id'] = $inscricao_existe['Inscricao']['id'];
                        $this->Inscricao->save($array_inscricao);
                        $this->out($inscricao_existe['Inscricao']['id'] . 'Inscricao Actualizada--------------'.$idAnoLectivo.'-------------------' . $this->Inscricao->id);
                    }



                } else{
                    $this->out('Curso de Orientacao Encontrado------------------'.$idCurso);
                }
            }


            $linha_actual++;
            $this->out("----------------------------------------------------------------" . $linha_actual);
        }
    }

    public function importa_pessoa_dbsec()
    {
        App::import('Component', 'Auth');
        App::import('Controller', 'ComponentCollection');
        $collection = new ComponentCollection();
        $this->Auth = new AuthComponent($collection);

        $estudantes = $this->DbsecEstudante->find('all');
        $iii = 0;
        foreach ($estudantes as $estudante) {
            $this->out($iii++);
            $aluno = $this->Aluno->findByCodigo(trim($estudante['DbsecEstudante']['est_num']));
            if (empty($aluno)) {
                $dataSource = $this->User->getDataSource();

                $dataSource->begin();
                $email_pessoa = $this->geraEmailUem($estudante['DbsecEstudante']['apelido'],
                    $estudante['DbsecEstudante']['nomes']);

                //Primeiro criar um user
                $user_array = [
                    'User' => [
                        'username'          => $email_pessoa,
                        'password'          => Security::hash('dra02062013', 'blowfish'),
                        'codigocartao'      => $estudante['DbsecEstudante']['est_num'],
                        'group_id'          => 3,
                        'estado_objecto_id' => $estudante['DbsecEstudante']['status_id']
                    ]
                ];

                $this->User->create();
                if ($this->User->save($user_array)) {
                    $pessoa_array = [
                        'Entidade' => [
                            'apelido'         => $estudante['DbsecEstudante']['apelido'],
                            'nomes'           => $estudante['DbsecEstudante']['nomes'],
                            'name'            => $estudante['DbsecEstudante']['nomes'] . ' ' . $estudante['DbsecEstudante']['apelido'],
                            'created'         => $estudante['DbsecEstudante']['data_registo'],
                            'data_nascimento' => $estudante['DbsecEstudante']['data_nascimento'],
                            'user_id'         => $this->User->id,
                        ]
                    ];
                    $this->Entidade->create();
                    if ($this->Entidade->save($pessoa_array)) {
                        $curso = $this->Curso->findByCodigo($estudante['DbsecEstudante']['id_curso']);
                        $planoestudo = $this->PlanoEstudo->find('first', [
                            'conditions' => [
                                'curso_id'    => $curso['Curso']['id'],
                                'ano_criacao' => $estudante['DbsecEstudante']['ano_ingresso']
                            ]
                        ]);
                        $aluno_array = [
                            'Aluno' => [
                                'entidade_id'       => $this->Entidade->id,
                                'codigo'            => $estudante['DbsecEstudante']['est_num'],
                                'user_id'           => $this->User->id,
                                'curso_id'          => $curso['Curso']['id'],
                                'estadoentidade_id' => $estudante['DbsecEstudante']['status_id'],
                                'numero_estudante'  => $estudante['DbsecEstudante']['est_num'],
                                'plano_estudo_id'   => $planoestudo['PlanoEstudo']['id'],
                                'ano_ingresso'      => $estudante['DbsecEstudante']['ano_ingresso'],
                                'created'           => $estudante['DbsecEstudante']['data_registo'],
                                'estado_aluno_id'   => $estudante['DbsecEstudante']['status_id']
                            ]
                        ];

                        $id_curso = $pessoa['DraEstudante']['id_curso'];
                        if ($id_curso == null) {
                            $id_curso = 0;
                        }
                        $curso_dra = $this->DraCurso->find('first', ['conditions' => ['curso_id' => $id_curso]]);
                        $curso_sga = $this->Curso->find('first', ['conditions' => ['Curso.codigo' => $id_curso]]);
                        $aluno_array['Aluno']['curso_id'] = $curso_sga['Curso']['id'];
                        $aluno_array['Aluno']['curso_ingresso_id'] = $curso_sga['Curso']['id'];
                        $aluno_array['Aluno']['regime_ingresso_id'] = $curso_dra['DraCurso']['regime'];
                        $aluno_array['Aluno']['turno_ingresso'] = $curso_dra['DraCurso']['regime'];
                        $this->Aluno->create();
                        if ($this->Aluno->save($aluno_array)) {


                            $dataSource->commit();
                        } else {
                            var_dump($user_array);
                            var_dump($pessoa_array);
                            var_dump($aluno_array);
                            $dataSource->showLog();
                            $dataSource->rollback();
                            $dataSource->showLog();
                            App::uses('View', 'View');
                            $null = null;
                            $View = new View($null, false);
                            $dump = $View->element('sql_dump');
                            CakeLog::error($dump);

                            die();
                        }
                    }
                }
            }
        }
    }

    public function geraEmailUem($apelido, $nome)
    {

        $nome = $this->normalize_str($nome);
        $nome = trim(strtolower($nome));

        $apelido = strtolower(trim($this->normalize_str($apelido)));

        $nome = utf8_encode($nome);
        $apelido = utf8_encode($apelido);
        $nome = preg_replace('/[^a-zA-Z0-9\s]/s', '', $nome);

        $nome = preg_replace('/\s+/', ' ', $nome);
        $nomes = explode(' ', $nome);
        $email = $nomes[0] . '.' . $apelido . '@uem.ac.mz';

        //Verificar se existe algum email assim
        $email_existe = $this->User->findByUsername($email);
        if ($email_existe) {
            if (count($nomes) > 1) {
                $segundo_nome = trim($nomes[1]);
                $email = $nomes[0] . '.' . $segundo_nome[0] . '.' . $apelido . '@uem.ac.mz';
                $email_existe1 = $this->User->findByUsername($email);

                if ($email_existe1) {
                    $email = $nomes[0] . '.' . $segundo_nome . '.' . $apelido . '@uem.ac.mz';
                    $email_existe3 = $this->User->findByUsername($email);
                    if ($email_existe3) {
                        $email = $apelido . '.' . $nomes[0] . '@uem.ac.mz';
                        $email_existe2 = $this->User->findByUsername($email);
                        if ($email_existe2) {
                            $email = $apelido . '.' . $nomes[0] . '.' . $email_existe2['User']['id'] . '@uem.ac.mz';
                        }
                    }
                }
            } else {
                $email = $apelido . '.' . $nomes[0] . '@uem.ac.mz';
                $email_existe2 = $this->User->findByUsername($email);
                if ($email_existe2) {
                    $email = $apelido . '.' . $nomes[0] . '.' . $email_existe2['User']['id'] . '@uem.ac.mz';
                }
            }
        }

        return strtolower($email);
    }

    public function normalize_str($str)
    {
        $invalid = [
            'Š'         => 'S',
            'š'         => 's',
            'Đ'         => 'Dj',
            'đ'         => 'dj',
            'Ž'         => 'Z',
            'ž'         => 'z',
            'Č'         => 'C',
            'č'         => 'c',
            'Ć'         => 'C',
            'ć'         => 'c',
            'À'         => 'A',
            'Á'         => 'A',
            'Â'         => 'A',
            'Ã'         => 'A',
            'Ä'         => 'A',
            'Å'         => 'A',
            'Æ'         => 'A',
            'Ç'         => 'C',
            'È'         => 'E',
            'É'         => 'E',
            'Ê'         => 'E',
            'Ë'         => 'E',
            'Ì'         => 'I',
            'Í'         => 'I',
            'Î'         => 'I',
            'Ï'         => 'I',
            'Ñ'         => 'N',
            'Ò'         => 'O',
            'Ó'         => 'O',
            'Ô'         => 'O',
            'Õ'         => 'O',
            'Ö'         => 'O',
            'Ø'         => 'O',
            'Ù'         => 'U',
            'Ú'         => 'U',
            'Û'         => 'U',
            'Ü'         => 'U',
            'Ý'         => 'Y',
            'Þ'         => 'B',
            'ß'         => 'Ss',
            'à'         => 'a',
            'á'         => 'a',
            'â'         => 'a',
            'ã'         => 'a',
            'ä'         => 'a',
            'å'         => 'a',
            'æ'         => 'a',
            'ç'         => 'c',
            'è'         => 'e',
            'é'         => 'e',
            'ê'         => 'e',
            'ë'         => 'e',
            'ì'         => 'i',
            'í'         => 'i',
            'î'         => 'i',
            'ï'         => 'i',
            'ð'         => 'o',
            'ñ'         => 'n',
            'ò'         => 'o',
            'ó'         => 'o',
            'ô'         => 'o',
            'õ'         => 'o',
            'ö'         => 'o',
            'ø'         => 'o',
            'ù'         => 'u',
            'ú'         => 'u',
            'û'         => 'u',
            'ý'         => 'y',
            'ý'         => 'y',
            'þ'         => 'b',
            'ÿ'         => 'y',
            'Ŕ'         => 'R',
            'ŕ'         => 'r',
            "`"         => "'",
            "´"         => "'",
            "„"         => ",",
            "`"         => "'",
            "´"         => "'",
            "“"         => "\"",
            "”"         => "\"",
            "´"         => "'",
            "&acirc;€™" => "'",
            "{"         => "",
            "~"         => "",
            "–"         => "-",
            "’"         => "'"
        ];

        $str = str_replace(array_keys($invalid), array_values($invalid), $str);

        return $str;
    }

    public function importa_conclusao()
    {
        $conclusaos = $this->DraConclusao->find('all', ['conditions' => ['ano_fim NOT' => null]]);
        $datasource = $this->Aluno->getDataSource();
        $datasource->begin();
        $i = 0;
        foreach ($conclusaos as $conclusao) {
            $this->Aluno->recursive = -1;
            $aluno = $this->Aluno->findByCodigo(trim($conclusao['DraConclusao']['est_num']));
            if (!empty($aluno)) {
                $curso = $this->Curso->findByCodigo($conclusao['DraConclusao']['curso_id']);
                $this->Aluno->id = $aluno['Aluno']['id'];
                $this->Aluno->set('estado_aluno_id', 3);
                $this->Aluno->set('curso_id', $curso['Curso']['id']);
                $this->Aluno->set('data_conclusao', $conclusao['DraConclusao']['data_conclusao']);
                $this->Aluno->set('nota_conclusao', $conclusao['DraConclusao']['nota_final']);
                $this->Aluno->save();
            } else {

            }
            $this->out($i++);
        }
        $datasource->commit();
    }

    public function importa_docentes_dmi()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }
        debug("teste0");

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'dmi' . DS . 'docentes.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $row) {
            $nome_completo = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            if ($nome_completo == '') {
                break;
            }
            $explode_nome = explode(',', $nome_completo);

            $apelido = trim($explode_nome[0]);
            $nomes = trim($explode_nome[1]);
            $nome_completo = $nomes . ' ' . $apelido;
            $email = $this->User->geraEmailUem($apelido, $nomes);

            $p_genero = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
            if ($p_genero == '1') {
                $genero = 1;
            } else {
                $genero = 2;
            }

            $p_categoria = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
            if ($p_categoria == '1') {
                $cp = 1;
            } else {
                $p_categoria2 = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                if ($p_categoria2 == '1') {
                    $cp = 2;
                } else {
                    $p_categoria3 = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
                    if ($p_categoria3 == '1') {
                        $cp = 3;
                    } else {
                        $p_categoria4 = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
                        if ($p_categoria4 == '1') {
                            $cp = 4;
                        } else {
                            $p_categoria5 = $worksheet->getCell('H' . $linha_actual)->getCalculatedValue();
                            if ($p_categoria5 == '1') {
                                $cp = 5;
                            }
                        }
                    }
                }
            }

            $p_categoriaa = $worksheet->getCell('I' . $linha_actual)->getCalculatedValue();
            if ($p_categoriaa == '1') {
                $ca = 1;
            } else {
                $p_categoria2a = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                if ($p_categoria2a == '1') {
                    $ca = 2;
                } else {
                    $p_categoria3a = $worksheet->getCell('K' . $linha_actual)->getCalculatedValue();
                    if ($p_categoria3a == '1') {
                        $ca = 3;
                    } else {
                        $p_categoria4a = $worksheet->getCell('L' . $linha_actual)->getCalculatedValue();
                        if ($p_categoria4a == '1') {
                            $ca = 4;
                        }
                    }
                }
            }

            $p_regime = $worksheet->getCell('M' . $linha_actual)->getCalculatedValue();
            if ($p_regime == '1') {
                $regime = 1;
            }

            $array_user = [
                'User' => [
                    'username'             => $email,
                    'password'             => Security::hash('docentedra1', 'blowfish'),
                    'group_id'             => 4,
                    'verificar_permissoes' => 0,
                    'estado_email'         => 0,
                    'estado_objecto_id'    => 1
                ]
            ];

            $datasource = $this->User->getDatasource();
            $datasource->begin();
            $this->User->create();
            $this->User->save($array_user);
            $array_groups = [
                'GroupsUser' => [
                    'user_id'           => $this->User->id,
                    'group_id'          => 4,
                    'estado_objecto_id' => 1
                ]
            ];
            $this->User->GroupsUser->create();
            $this->User->GroupsUser->save($array_groups);

            $array_entidade = [
                'Entidade' => [
                    'user_id'   => $this->User->id,
                    'name'      => $nome_completo,
                    'apelido'   => $apelido,
                    'nomes'     => $nomes,
                    'genero_id' => $genero,
                ]
            ];
            $this->Entidade->create();
            $this->Entidade->save($array_entidade);

            $array_funcionario = [
                'user_id'             => $this->User->id,
                'entidade_id'         => $this->Entidade->id,
                'unidade_organica_id' => 28,
                ''
            ];
            debug($array_user);
            debug($array_entidade);
            debug($array_funcionario);
            $datasource->showLog();
            $this->Entidade->Funcionario->create();
            $this->Entidade->Funcionario->save($array_funcionario);

            $array_docente = [
                'Docente' => [
                    'entidade_id'               => $this->Entidade->id,
                    'categoria_profissional_id' => $cp,
                    'categoria_academica_id'    => $ca,
                    'unidade_organica_id'       => 28,
                    'regime_trabalho_id'        => $regime,
                    'funcionario_id'            => $this->Entidade->Funcionario->id
                ]
            ];
            $this->Entidade->Docente->create();
            $this->Entidade->Docente->save($array_docente);

            $datasource->commit();

            $this->out($this->Entidade->Docente->id);
            $linha_actual++;
        }
    }

}

?>