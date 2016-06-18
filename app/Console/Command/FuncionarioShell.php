<?php

App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');
App::uses('OpenSGAExcel', 'Lib');
App::uses('OpenSGAGoogle', 'Lib');
App::uses('CakeEmail', 'Network/Email');

/**
 * Class EntidadeShell
 *
 * @property Funcionario $Funcionario
 */
class FuncionarioShell extends AppShell
{

    public $uses = ['Funcionario'];


    public function importa_funcionarios()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        $objPHPExcel = new OpenSGAExcel();
        $this->out('Comecando....');
        $xls = $objPHPExcel->loadWorksheetFromS3('Imports/Funcionarios/funcionarios.xlsx');

        $this->out('Ficheiro do S3 Lido');
        $worksheet = $xls->getActiveSheet();
        $linhaActual = 2;
        $this->out('Iterando');

        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linhaActual)->getValue() == '') {
                break;
            }


            $nomes = trim($worksheet->getCell('A' . $linhaActual)->getCalculatedValue());
            $apelido = trim($worksheet->getCell('B' . $linhaActual)->getCalculatedValue());
            $categoria = trim($worksheet->getCell('C' . $linhaActual)->getCalculatedValue());
            $nuit = trim($worksheet->getCell('D' . $linhaActual)->getCalculatedValue());
            $orgao = trim($worksheet->getCell('E' . $linhaActual)->getCalculatedValue());
            $codigo = trim($worksheet->getCell('F' . $linhaActual)->getCalculatedValue());


            if ($nuit == null || $nomes == null || $apelido == null) {
                $linhaActual++;
                continue;
            }
            if ($orgao == 'Direccao do Registo Academico') {

                $linhaActual++;
                continue;
            }
            $unidadeOrganicaExiste = $this->Funcionario->UnidadeOrganica->findByName($orgao);
            if (!empty($unidadeOrganicaExiste)) {
                $this->out('Encontrada Unidade Organica----------' . $orgao);
                $unidadeOrganicaId = $unidadeOrganicaExiste['UnidadeOrganica']['id'];
            } else {
                $arrayUnidadeOrganica = [
                    'UnidadeOrganica' => [
                        'name' => ucwords(strtolower($orgao)),
                        'tipo_unidade_organica' => 4,
                        'nivel_unidade' => 2,
                        'parent_id' => 18,
                        'estado_objecto_id' => 1,
                    ],
                ];
                $this->Funcionario->UnidadeOrganica->create();
                if (!$this->Funcionario->UnidadeOrganica->save($arrayUnidadeOrganica)) {
                    die(debug($this->Funcionario->UnidadeOrganica->validationErrors));
                }
                $unidadeOrganicaId = $this->Funcionario->UnidadeOrganica->id;

            }
            if (in_array($categoria,
                [
                    'ASSIST ESTAGIARIO',
                    'ASSISTENTE',
                    'PROFESSOR ASSOCIADO',
                    'PROFESSOR AUXILIAR',
                    'PROFESSOR CATEDRATICO',
                    'PROFESSOR A',
                    'PROFESSOR C',
                    'MONITOR FINALISTA',
                    'MONITOR NAO FINALISTA',
                ])) {
                $isDocente = true;
                $categooriaDocenteExiste = $this->Funcionario->Entidade->Docente->DocenteCategoria->findByName($categoria);
                if (empty($categooriaDocenteExiste)) {
                    $arrayCategoriaDD = ['DocenteCategoria' => ['name' => $categoria]];
                    $this->Funcionario->Entidade->Docente->DocenteCategoria->create();
                    $this->Funcionario->Entidade->Docente->DocenteCategoria->save($arrayCategoriaDD);
                    $categoriaDocenteId = $this->Funcionario->Entidade->Docente->DocenteCategoria->id;
                    $this->out('Categoria do Docente Salvo----------------' . $categoria);

                } else {
                    $categoriaDocenteId = $categooriaDocenteExiste['DocenteCategoria']['id'];
                }

            } else {
                $isDocente = false;
            }
            $categoriaDB = $this->Funcionario->FuncionarioCategoria->findByName($categoria);
            if (empty($categoriaDB)) {
                $arrayCategoriaDB = ['FuncionarioCategoria' => ['name' => $categoria]];
                $this->Funcionario->FuncionarioCategoria->create();
                if (!$this->Funcionario->FuncionarioCategoria->save($arrayCategoriaDB)) {
                    debug($this->Funcionario->FuncionarioCategoria->validationErrors);
                }
                $this->out('Categoria Salva---------------' . $categoria);
                $categoriaFuncionarioId = $this->Funcionario->FuncionarioCategoria->id;
            } else {
                $categoriaFuncionarioId = $categoriaDB['FuncionarioCategoria']['id'];
            }

            $entidadeExiste = $this->Funcionario->Entidade->findByNuit($nuit);

            if (!empty($entidadeExiste)) {
                $this->out('Encontrada Entidade---->' . $entidadeExiste['Entidade']['name']);

                //Correccao temporaria para users sem grupo
                $user = $this->Funcionario->Entidade->User->findById($entidadeExiste['Entidade']['user_id']);
                if ($user['User']['group_id'] == null) {
                    $this->out('<error>Actualizando Codigo Mano</error>');
                    $this->Funcionario->Entidade->User->id = $user['User']['id'];
                    if ($isDocente) {
                        $groupId = 4;
                    } else {
                        $groupId = 2;
                    }
                    $this->Funcionario->Entidade->User->set('group_id', $groupId);
                    if (!$this->Funcionario->Entidade->User->save()) {
                        die(debug($this->Funcionario->Entidade->User->validationErrors));
                    }
                }
                $funcionarioExiste = $this->Funcionario->findByEntidadeId($entidadeExiste['Entidade']['id']);
                if (!empty($funcionarioExiste)) {
                    debug($isDocente);
                    $this->out('Encontrado Funcionario, Vamos Apenas Actualizar o Orgao e o Codigo');
                    $this->Funcionario->id = $funcionarioExiste['Funcionario']['id'];
                    $this->Funcionario->set('codigo', $codigo);
                    $this->Funcionario->set('funcionario_categoria_id', $categoriaFuncionarioId);
                    $this->Funcionario->set('unidade_organica_id', $unidadeOrganicaId);
                    if (!$this->Funcionario->save()) {
                        die(debug($this->Funcionario->validationErrors));
                    }
                    if ($isDocente) {
                        $docenteExiste = $this->Funcionario->Entidade->Docente->findByEntidadeId($entidadeExiste['Entidade']['id']);
                        debug($docenteExiste);
                        if (!empty($docenteExiste)) {
                            $this->Funcionario->Entidade->Docente->id = $docenteExiste['Docente']['id'];
                            $this->Funcionario->Entidade->Docente->set('docente_categoria_id', $categoriaDocenteId);
                            if (!$this->Funcionario->Entidade->Docente->save()) {
                                die(debug($this->Funcionario->Entidade->Docente->validationErrors));
                            }
                            $docenteUnidadeExiste = $this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->findByDocenteIdAndUnidadeOrganicaId($docenteExiste['Docente']['id'],
                                $unidadeOrganicaId);
                            if (empty($docenteUnidadeExiste)) {
                                $arrayDocenteUnidadeOrganica = [
                                    'docente_id' => $docenteExiste['Docente']['id'],
                                    'unidade_organica_id' => $unidadeOrganicaId,
                                    'estado_objecto_id' => 1,
                                ];
                                $this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->create();
                                if (!$this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->save($arrayDocenteUnidadeOrganica)) {
                                    die(debug($this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->validationErrors));
                                }
                            }
                        } else {
                            //Funcionario Existe, mas docente nao, e eh docente.
                            $arrayDocente = [
                                'Docente' => [
                                    'unidade_organica_id' => $unidadeOrganicaId,
                                    'docente_categoria_id' => $categoriaDocenteId,
                                    'entidade_id' => $funcionarioExiste['Funcionario']['entidade_id'],
                                ],
                            ];
                            $this->Funcionario->Entidade->Docente->create();
                            if (!$this->Funcionario->Entidade->Docente->save($arrayDocente)) {
                                die(debug($this->Funcionario->Entidade->Docente->validationErrors));
                            }
                            $arrayDocenteUnidadeOrganica = [
                                'docente_id' => $this->Funcionario->Entidade->Docente->id,
                                'unidade_organica_id' => $unidadeOrganicaId,
                                'estado_objecto_id' => 1,
                            ];
                            $this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->create();
                            if (!$this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->save($arrayDocenteUnidadeOrganica)) {
                                die(debug($this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->validationErrors));
                            }
                        }
                    }


                } else {
                    //Entidade Existe mas Funcionario nao
                    $arrayFuncionario = [
                        'Funcionario' => [
                            'codigo' => $codigo,
                            'entidade_id' => $entidadeExiste['Entidade']['id'],
                            'unidade_organica_id' => $unidadeOrganicaId,
                            'funcionario_categoria_id' => $categoriaFuncionarioId,
                            'user_id' => $entidadeExiste['Entidade']['user_id'],
                        ],
                    ];
                    $this->Funcionario->create();
                    if (!$this->Funcionario->save($arrayFuncionario)) {
                        die(debug($this->Funcionario->validationErrors));
                    }
                    if ($isDocente) {
                        //Funcionario Existe, mas docente nao, e eh docente.
                        $arrayDocente = [
                            'Docente' => [
                                'unidade_organica_id' => $unidadeOrganicaId,
                                'docente_categoria_id' => $categoriaDocenteId,
                                'entidade_id' => $entidadeExiste['Entidade']['id'],
                            ],
                        ];
                        $this->Funcionario->Entidade->Docente->create();
                        if (!$this->Funcionario->Entidade->Docente->save($arrayDocente)) {
                            die(debug($this->Funcionario->Entidade->Docente->validationErrors));
                        }
                        $arrayDocenteUnidadeOrganica = [
                            'docente_id' => $this->Funcionario->Entidade->Docente->id,
                            'unidade_organica_id' => $unidadeOrganicaId,
                            'estado_objecto_id' => 1,
                        ];
                        $this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->create();
                        if (!$this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->save($arrayDocenteUnidadeOrganica)) {
                            die(debug($this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->validationErrors));
                        }
                    }
                }
            } else {
                //Nao existe nada, cria tudo, comecando pelo user
                $this->out('Criando tudo novo--------------' . $nomes);
                $dataSource = $this->Funcionario->getDataSource();
                $dataSource->begin();
                $username = $this->Funcionario->User->geraEmailUEM($apelido, $nomes);
                if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
                    die(debug($username . '--------------Nao eh email'));
                }
                if ($isDocente) {
                    $password = Security::hash('uem2013', 'blowfish');
                    $groupId = 4;

                } else {
                    $password = Security::hash('uem1234567dra', 'blowfish');
                    $groupId = 2;
                }

                $this->Funcionario->User->create();
                if (!$this->Funcionario->User->save([
                    'User' => [
                        'username' => $username,
                        'password' => $password,
                        'group_id' => $groupId,
                    ],
                ])
                ) {
                    $dataSource->rollback();
                    debug($username);
                    debug($nomes);
                    debug($apelido);
                    debug($nuit);
                    die(debug($this->Funcionario->User->validationErrors));
                }
                $arrayEntidade = [
                    'Entidade' => [
                        'user_id' => $this->Funcionario->User->id,
                        'apelido' => ucwords(strtolower($apelido)),
                        'nomes' => ucwords(strtolower($nomes)),
                        'name' => ucwords(strtolower($nomes)) . ' ' . ucwords(strtolower($apelido)),
                        'nuit' => $nuit,
                        'codigo' => $codigo,
                    ],
                ];
                $this->Funcionario->Entidade->validator()->remove('nuit');
                $this->Funcionario->Entidade->validator()->remove('genero_id');
                $this->Funcionario->Entidade->validator()->remove('data_nascimento');
                $this->Funcionario->Entidade->validator()->remove('email');
                $this->Funcionario->Entidade->create();
                if (!$this->Funcionario->Entidade->save($arrayEntidade)) {
                    $dataSource->rollback();
                    die(debug($this->Funcionario->Entidade->validationErrors));
                }
                //Entidade Existe mas Funcionario nao
                $arrayFuncionario = [
                    'Funcionario' => [
                        'codigo' => $codigo,
                        'entidade_id' => $this->Funcionario->Entidade->id,
                        'unidade_organica_id' => $unidadeOrganicaId,
                        'funcionario_categoria_id' => $categoriaFuncionarioId,
                        'user_id' => $this->Funcionario->User->id,
                    ],
                ];
                $this->Funcionario->create();
                if (!$this->Funcionario->save($arrayFuncionario)) {
                    $dataSource->rollback();
                    die(debug($this->Funcionario->validationErrors));
                }
                if ($isDocente) {
                    //Funcionario Existe, mas docente nao, e eh docente.
                    $arrayDocenteNovo = [
                        'Docente' => [
                            'unidade_organica_id' => $unidadeOrganicaId,
                            'docente_categoria_id' => $categoriaDocenteId,
                            'entidade_id' => $this->Funcionario->Entidade->id,
                        ],
                    ];
                    $this->Funcionario->Entidade->Docente->create();
                    if (!$this->Funcionario->Entidade->Docente->save($arrayDocenteNovo)) {
                        $dataSource->rollback();
                        debug($arrayDocenteNovo);
                        die(debug($this->Funcionario->Entidade->Docente->validationErrors));
                    }
                    $arrayDocenteUnidadeOrganica = [
                        'docente_id' => $this->Funcionario->Entidade->Docente->id,
                        'unidade_organica_id' => $unidadeOrganicaId,
                        'estado_objecto_id' => 1,
                    ];
                    $this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->create();
                    if (!$this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->save($arrayDocenteUnidadeOrganica)) {
                        $dataSource->rollback();
                        die(debug($this->Funcionario->Entidade->Docente->DocenteUnidadeOrganica->validationErrors));
                    }
                }

                $dataSource->commit();
            }

            $this->out('-------------------------------------------------------');
            $this->out($linhaActual);
            $this->out('--------------------------------------------------------');

            $linhaActual++;
        }
    }

    /**
     * Processa o Cadastro de um Funcionario
     * Atribui Permissoes e Envia Emails
     */
    public function processaCadastroFuncionario()
    {
        $funcionarioId = $this->args[0];
        $this->Funcionario->contain(['Entidade' => ['User']]);
        $funcionario = $this->Funcionario->findById($funcionarioId);
        if (empty($funcionario)) {
            debug($funcionarioId);
            die();
        }

        //Atribui Permissoes
        $comando = 'OpenSGAAcl --userId ' . $funcionario['Entidade']['User']['id'];
        $this->dispatchShell($comando);

        $passwordEmail = 'siga12345UEM';
        if (empty($funcionario['Entidade']['nomes'])) {
            $firstName = $funcionario['Entidade']['name'];
            $lastName = $funcionario['Entidade']['name'];
        } else {
            $firstName = $funcionario['Entidade']['nomes'];
            $lastName = $funcionario['Entidade']['apelido'];
        }
        //Activa Email Institucional
        $google = new OpenSGAGoogle();
        try {

            $emailCriado = $google->createUser($funcionario['Entidade']['User']['username'], $firstName,
                $lastName, $passwordEmail
            );
        } catch (Exception $e) {
            debug($e->getMessage());
            debug($e->getCode());
        }

        //Envia Email e SMS para o Funcionario a Informar
        $emailBody = 'Caro ' . $funcionario['Entidade']['name'] . ', <br /> A sua conta no SIGA foi Criada com sucesso.<br />';
        $emailBody .= 'O seu username e email institucional é:' . $funcionario['Entidade']['User']['username'] . '<br />';
        $emailBody .= 'A senha inicial de acesso ao sistema é:siga12345UEM<br />';
        $emailBody .= 'Acesse o Sistema em http://siga.uem.mz<br /><br /><br />';

        if ($emailCriado) {
            $emailBody .= 'A sua conta de email institucional ja esta activa, e pode usar indo para o endereco www.gmail.com<br />';
            $emailBody .= 'A senha de acesso para o seu email institucional é siga12345UEM<br />';
        } else {
            $emailBody .= 'A sua conta de email institucional podera sera activada acedendo ao sistema<br />';
        }

        $emailBody .= 'Qualquer duvida contacte admin.siga@uem.ac.mz ou elisio.leonardo@uem.ac.mz';

        $emailPessoal = $funcionario['Entidade']['email'];

        if (empty($emailPessoal)) {
            $emailTo = $funcionario['Entidade']['User']['username'];
        } else {
            $emailTo = [$emailPessoal, $funcionario['Entidade']['User']['username']];
        }
        debug($emailTo);
        debug($emailCriado);
        die();
        $Email = new CakeEmail();
        $Email->config('smtp')
            ->emailFormat('html')
            ->to($emailTo)
            ->cc(['elisio.leonardo@gmail.com', 'sergiobata@gmail.com'])
            ->domain('siga.uem.mz')
            ->subject('Novo Usuario Cadastrado no SIGA')
            ->send($emailBody);


        //debug($funcionario);
        $this->log('Processando Cadastro de ' . $funcionario['Entidade']['name'], 'info');

    }

    public function processaAlteraUnidadeOrganica()
    {
        $funcionarioId = $this->args[0];
        $this->Funcionario->contain(['Entidade' => ['User']]);
        $funcionario = $this->Funcionario->findById($funcionarioId);
        if (empty($funcionario)) {
            debug($funcionarioId);
            die();
        }

        //Atribui Permissoes
        $comando = 'OpenSGAAcl funcionarios ' . $funcionario['Entidade']['User']['id'];
        $this->dispatchShell($comando);
    }


}
