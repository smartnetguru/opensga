<?php
use Ghunti\HighchartsPHP\Highchart;
use Ghunti\HighchartsPHP\HighchartJsExpr;

/**
 * Controller do Docente. Todas as funções referentes ao docente devem ser definidas aqui
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.docentes
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0.0
 *
 * @property Docente $Docente
 *
 */
class DocentesController extends AppController
{

    var $name = 'Docentes';

    function index()
    {
        $this->Docente->contain([
            'Entidade' => [
                'User'
            ],
            'UnidadeOrganica',
            'DocenteCategoria'
        ]);
        $this->set('docentes', $this->paginate());
    }

    /**
     * Pagina de Perfil do docente
     * @param type $id
     */
    function perfil_docente($docente_id = null)
    {
        if (!$docente_id) {
            $this->Session->setFlash(__('Invalid docente', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Docente->contain([
            'Entidade' => [
                'User',
                'PaisNascimento',
                'CidadeNascimento',
                'ProvinciaNascimento',
                'DocumentoIdentificacao',
                'Genero'
            ],
            'UnidadeOrganica'
        ]);

        $docente = $this->Docente->findById($docente_id);
        $this->set(compact('docente'));
    }

    public function docente_meu_perfil()
    {


        $docente = $this->Docente->getByUserID($this->Session->read('Auth.User.id'));
        $this->Docente->contain([
            'Entidade' => [
                'User',
                'PaisNascimento',
                'CidadeNascimento',
                'ProvinciaNascimento',
                'DocumentoIdentificacao',
                'Genero'
            ],
            'UnidadeOrganica'
        ]);
        $docente = $this->Docente->findById($docente['Docente']['id']);
        $this->set(compact('docente'));
    }

    public function mostrar_foto($docente_id)
    {
        $this->viewClass = 'Media';
        App::uses('Folder', 'Utility');
        App::uses('File', 'Utility');
        $this->Docente->contain();
        $docente = $this->Docente->findById($docente_id);
        if (!empty($docente)) {
            App::uses('File', 'Utility');
            $path = APP . 'Assets' . DS . 'Fotos' . DS . 'Docentes' . DS . $docente['UnidadeOrganica']['codigo'] . DS;

            $file_path = $path . $docente_id . '.jpg';
            $folder_novo = new Folder($path);

            $file = new File($file_path);

            if (!$file->exists()) {
                $docente_id = 'default_profile_picture';
                $path = WWW_ROOT . DS . 'img' . DS;
            }


            $params = [
                'id'        => $docente_id . '.jpg',
                'name'      => 'fotografia',
                'extension' => 'jpg',
                'mimeType'  => [
                    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                ],
                'path'      => $path
            ];
            $this->set($params);
        } else {
            throw new NotFoundException('Estudante não encontrado. Mostrar foto');
        }
    }

    function faculdade_index()
    {
        $unidadeOrganicaId = $this->Session->read('Auth.User.unidade_organica_id');
        $conditions = [];
        if ($this->request->is('post')) {
            if (isset($this->request->data['Docente']['unidade_organica_id'])) {
                $unidadeOrganicaId = $this->request->data['Docente']['unidade_organica_id'];

            }
            if (isset($this->request->data['Docente']['apelido'])) {
                $conditions['Entidade.apelido Like'] = '%' . $this->request->data['Docente']['apelido'] . '%';
            }
            if (isset($this->request->data['Docente']['nomes'])) {
                $conditions['Entidade.nomes Like'] = '%' . $this->request->data['Docente']['nomes'] . '%';
            }
        }
        $conditions['Docente.unidade_organica_id'] = $unidadeOrganicaId;

        $this->Docente->contain([
            'Entidade' => [
                'User'
            ],
            'UnidadeOrganica',
            'DocenteCategoria'
        ]);
        $this->paginate = [
            'conditions' => [
                $conditions
            ],
            'order'      => [
                'Entidade.name' => 'Asc'
            ]
        ];
        $this->set('docentes', $this->paginate());

        $options['joins'] = [
            [
                'table'      => 'docente_unidade_organicas',
                'alias'      => 'DocenteUnidadeOrganica',
                'type'       => 'LEFT',
                'conditions' => [
                    'UnidadeOrganica.id = DocenteUnidadeOrganica.unidade_organica_id',
                ]
            ]
        ];

        $options['conditions'] = [
            'NOT' => ['DocenteUnidadeOrganica.docente_id' => null]
        ];

        $options['order'] = 'UnidadeOrganica.name ASC';

        $unidadeOrganicas = $this->Docente->UnidadeOrganica->find('list', $options);
        $this->set(compact('unidadeOrganicas'));
    }

    /**
     * Pagina de Perfil do docente
     * @param type $id
     */
    function faculdade_perfil_docente($docente_id = null)
    {
        if (!$docente_id) {
            $this->Session->setFlash(__('Invalid docente', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Docente->contain([
            'Entidade'               => [
                'User',
                'PaisNascimento',
                'CidadeNascimento',
                'ProvinciaNascimento',
                'DocumentoIdentificacao',
                'Genero'
            ],
            'DocenteUnidadeOrganica' => [
                'UnidadeOrganica'
            ]
        ]);
        $docente = $this->Docente->findById($docente_id);
        $this->set(compact('docente'));
    }

    /**
     * Registra um novo docente no Sistema
     *
     * @todo Validar campos
     *
     * @todo testar todos os campos
     */
    function faculdade_adicionar_docente()
    {
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];

            if ($this->Docente->cadastraDocente($this->request->data)) {
                $this->Session->setFlash("Dados registrados com sucesso", 'default',
                    ['class' => 'alert alert-success']);
                $this->redirect(['controller' => 'docentes', 'action' => 'perfil_docente', $this->Docente->id]);
            } else {
                $this->Session->setFlash('Problemas ao registrar dados', 'default', ['class' => 'alert alert-danger']);
                debug($this->Docente->invalidFields());
                debug($this->Docente->Entidade->invalidFields());
                debug($this->request->data);
            }
        }

        $entidades = $this->Docente->Entidade->find('list');
        $docenteCategorias = $this->Docente->DocenteCategoria->find('list');
        $paises = $this->Docente->Entidade->PaisNascimento->find('list');
        $cidadeNascimentos = $this->Docente->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Docente->Entidade->ProvinciaNascimento->find('list');
        $documentoIdentificacaos = $this->Docente->Entidade->DocumentoIdentificacao->find('list');
        $generos = $this->Docente->Entidade->Genero->find('list');
        $unidadeOrganicas = $this->Docente->UnidadeOrganica->find('list',
            ['conditions' => ['tipo_unidade_organica_id' => 1]]);
        $naturalidade = '';
        $estadoCivil = $this->Docente->Entidade->EstadoCivil->find('list');
        $unidadeOrganicaId = $this->Session->read('Auth.User.unidade_prganica_id');
        $this->set(compact('entidades', 'docenteCategorias', 'paises', 'provincias', 'cidadeNascimentos', 'generos',
            'documentoIdentificacaos', 'unidadeOrganicas', 'naturalidade', 'estadoCivil', 'unidadeOrganicaId'));

    }

    function faculdade_editar_docente($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid docente', true));
            $this->redirect(['action' => 'index']);
        }
        if (!empty($this->data)) {
            if ($this->Docente->save($this->data)) {
                $this->Session->setFlash(__('The docente has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The docente could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Docente->read(null, $id);
        }
        $entidades = $this->Docente->Entidade->find('list');
        $docenteCategorias = $this->Docente->DocenteCategoria->find('list');
        $paises = $this->Docente->Entidade->PaisNascimento->find('list');
        $cidades = $this->Docente->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Docente->Entidade->ProvinciaNascimento->find('list');
        $documento_identificacaos = $this->Docente->Entidade->DocumentoIdentificacao->find('list');
        $generos = $this->Docente->Entidade->Genero->find('list');
        $unidadeOrganicas = $this->Docente->UnidadeOrganica->find('list');
        $this->set(compact('entidades', 'docenteCategorias', 'paises', 'provincias', 'cidades', 'generos',
            'documento_identificacaos', 'unidadeOrganicas'));
    }

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Security->csrfCheck = false;
    }


    public function relatorios()
    {

    }

    public function relatorios_docentes_por_faculdade()
    {
        $unidadeOrganicas = $this->Docente->DocenteUnidadeOrganica->UnidadeOrganica->find('list',
            ['conditions' => ['tipo_unidade_organica_id' => 1]]);
        $arrayX = [];
        $arrayY = [];

        foreach ($unidadeOrganicas as $k => $v) {
            $totalDocentes = $this->Docente->DocenteUnidadeOrganica->find('count',
                ['conditions' => ['unidade_organica_id' => $k, 'estado_objecto_id' => 1]]);
            $arrayX[] = $v;
            $arrayY[] = $totalDocentes;
        }
        $chart = new Highchart();
        $chart->chart->renderTo = "docentes-faculdade";
        $chart->chart->type = "column";
        $chart->title->text = "Docentes Cadastrados por Faculdade";
        $chart->subtitle->text = "Fonte: siga.uem.mz";


        $chart->xAxis->categories = $arrayX;

        $chart->yAxis->min = 0;
        $chart->yAxis->title->text = "Total de Docentes";
        $chart->legend->layout = "vertical";
        $chart->legend->backgroundColor = "#FFFFFF";
        $chart->legend->align = "left";
        $chart->legend->verticalAlign = "top";
        $chart->legend->x = 100;
        $chart->legend->y = 70;
        $chart->legend->floating = 1;
        $chart->legend->shadow = 1;

        $chart->tooltip->formatter = new HighchartJsExpr("function() {
    return '' + this.x +': '+ this.y +'';}");

        $chart->plotOptions->column->pointPadding = 0.2;
        $chart->plotOptions->column->borderWidth = 0;

        $chart->series[] = [
            'name' => "Total de Docentes",
            'data' => $arrayY,
        ];


        $this->set(compact('chart'));
    }

}
