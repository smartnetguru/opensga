<?php

App::uses('CendAppController', 'Cend.Controller');
App::uses('OpenSGAExcel', 'Lib');

class CandidaturasController extends CendAppController
{

    public $uses = ['Candidatura'];

    /**
     * Lista de Candidatos não Matriculados.
     *
     * @todo Pesquisar Candidatos ainda não funciona!
     *
     * @return void
     */
    public function index()
    {

        $this->Candidatura->Curso->contain([
            'CursosTurno',
        ]);
        $cursos = $this->Candidatura->Curso->find('list', ['conditions' => ['CursosTurno.turno_id' => 3]]);
        $conditions = ['Candidatura.estado_candidatura_id' => 2, 'Curso.id' => array_keys($cursos)];

        $this->paginate = [
            'conditions' => $conditions,
            'order' => ['Candidatura.id' => 'DESC'],
            'contain' => [
                'AlunoViaAdmissao',
                'EscolaNivelMedio',
                'Curso',
                'UnidadeOrganica',
                'Genero',
                'ProvinciaNascimento',
            ],
        ];
        $this->set('candidaturas', $this->paginate());
    }

    public function print_lista_admitidos()
    {

        $this->Candidatura->Curso->contain([
            'CursosTurno',
        ]);
        $cursos = $this->Candidatura->Curso->find('list', ['conditions' => ['CursosTurno.turno_id' => 3]]);

        $this->Candidatura->contain(['Curso', 'Genero', 'ProvinciaCandidatura']);
        $candidatos = $this->Candidatura->find('all', [
                'conditions' => [
                    'Curso.id' => array_keys($cursos),
                    'estado_candidatura_id' => 2,
                ],
                'order' => ['nome_faculdade', 'nome_curso', 'apelido', 'nomes'],
            ]
        );
        $this->set(compact('candidatos'));
    }

    public function print_boletins_admitidos()
    {
        $this->Candidatura->Aluno->contain([
            'Entidade' => [
                'Genero',
                'PaisNascimento',
                'EstadoCivil',
                'EntidadeIdentificacao' => [
                    'DocumentoIdentificacao',
                ],
            ],
            'Curso' => [
                'UnidadeOrganica',
            ],
            'AlunoNivelMedio' => [
                'EscolaNivelMedio' => [
                    'Provincia',
                ],
            ],
        ]);
        $aluno = $this->Candidatura->Aluno->findById($alunoId);

        $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($aluno['Curso']['unidade_organica_id']);
        if ($faculdade['UnidadeOrganica']['tipo_unidade_organica_id'] != 1) {
            $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($faculdade['UnidadeOrganica']['parent_id']);
        }

        $contactos = $this->Matricula->Aluno->processaContacto($alunoId);
        $this->set(compact('aluno', 'faculdade', 'contactos'));
    }

    public function print_boletim_matricula($numeroCandidato)
    {

    }

    public function print_boletim_provincia()
    {

        if ($this->request->is('post')) {
            $this->Candidatura->contain([
                'ProvinciaNascimento',
                'Curso'
            ]);
            $this->Candidatura->Curso->contain([
                'CursosTurno',
            ]);
            $cursos = $this->Candidatura->Curso->find('list', ['conditions' => ['CursosTurno.turno_id' => 3]]);

            $candidatos = $this->Candidatura->find('all', [
                'conditions' => [
                    'Candidatura.estado_candidatura_id' => 2,
                    // 'provincia_candidatura'             => $this->request->data['Candidatura']['provincia_id'],
                    'Candidatura.estado_candidatura_id' => 2,
                    'Curso.id' => array_keys($cursos)
                ],
            ]);


            $provincia = $this->Candidatura->ProvinciaNascimento->findById
            ($this->request->data['Candidatura']['provincia_id']);

            $this->Excel = new OpenSGAExcel();
            $zip = new ZipArchive();
            $filename = TMP . 'candidatos' . $this->request->data['Candidatura']['provincia_id'] . ".zip";

            if ($zip->open($filename, ZipArchive::CREATE) !== true) {
                exit("cannot open <$filename>\n");
            }


            foreach ($candidatos as $candidato) {
                App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
                if (!class_exists('PHPExcel')) {
                    throw new CakeException('Vendor class PHPExcel not found!');
                }

                $this->Excel->xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'print_boletim_matricula.xlsx');

                $this->Excel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png',
                    'A1', 10, 210, 135); //Logotipo
                $this->Excel->xls->getActiveSheet()->setCellValue('A1',
                    Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao


//Faculdade
                $this->Excel->xls->getActiveSheet()->setCellValue('A3',
                    $candidato['Candidatura']['nome_faculdade']); //Nome da Instituicao
//Curso
                $this->Excel->xls->getActiveSheet()->setCellValue('A4',
                    $candidato['Curso']['name']); //Nome da Instituicao
//Ano Lectivo
                $this->Excel->xls->getActiveSheet()->setCellValue('B7',
                    $candidato['Candidatura']['ano_lectivo_admissao']);
//Numero de estudante
                $this->Excel->xls->getActiveSheet()->setCellValue('F7',
                    $candidato['Candidatura']['numero_estudante']);
//Apelido
                $this->Excel->xls->getActiveSheet()->setCellValue('C10', $candidato['Candidatura']['apelido']);
//Nomes
                $this->Excel->xls->getActiveSheet()->setCellValue('C11', $candidato['Candidatura']['nomes']);


                $this->Excel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Boletim de Matrícula');
                $this->Excel->xls->getActiveSheet()->setShowGridlines(false);


                $this->Excel->xls->getSecurity()->setLockWindows(true);
                $this->Excel->xls->getSecurity()->setLockStructure(true);
                $this->Excel->xls->getSecurity()->setWorkbookPassword("PHPExcel");


                $this->Excel->xls->getActiveSheet()->getProtection()->setPassword('PHPExcel');
                $this->Excel->xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
                $this->Excel->xls->getActiveSheet()->getProtection()->setSort(true);
                $this->Excel->xls->getActiveSheet()->getProtection()->setObjects(true);
                $this->Excel->xls->getActiveSheet()->getProtection()->setInsertRows(true);
                $this->Excel->xls->getActiveSheet()->getProtection()->setFormatCells(true);

                $this->Excel->outputServer(TMP . 'boletim_matricula_' .
                    $candidato['Candidatura']['numero_estudante'] . '.xlsx');
                $zip->addFile(TMP . 'boletim_matricula_' .
                    $candidato['Candidatura']['numero_estudante'] . '.xlsx', 'boletim_matricula_' .
                    $candidato['Candidatura']['numero_estudante'] . '.xlsx');
                //unlink(TMP.'boletim_matricula_'.$candidato['Candidatura']['numero_estudante'] . '.xlsx');

            }

            $zip->close();
            $this->response->file($filename, [
                'name' => 'boletim_matriculas_'
                    . Inflector::slug($provincia['ProvinciaNascimento']['name']) . '.zip',
                'download' => true
            ]);
            return $this->response;
        }

        $provincias = $this->Candidatura->ProvinciaNascimento->find('list');
        $this->set(compact('provincias'));


    }

    public function beforeFilter()
    {
        parent::beforeFilter();

        $this->Security->unlockedActions = ['print_boletim_provincia'];
    }

    public function print_boletim_curso()
    {

    }


}