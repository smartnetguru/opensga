<?php
App::uses('AppModel', 'Model');

/**
 * Artigo Model
 *
 * @property User $User
 * @property Entidade $Entidade
 * @property EstadoObjecto $EstadoObjecto
 * @property ArtigoEstadoArtigo $ArtigoEstadoArtigo
 * @property ArtigoAreaAcademica $ArtigoAreaAcademica
 * @property ArtigoAreaPesquisa $ArtigoAreaPesquisa
 * @property ArtigoMeta $ArtigoMeta
 */
class Artigo extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = [
        'user_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'entidade_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'data_publicacao' => [
            'datetime' => [
                'rule' => ['datetime'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'conteudo' => [
            'notBlank' => [
                'rule' => ['notBlank'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'titulo' => [
            'notBlank' => [
                'rule' => ['notBlank'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'estado_objecto_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'artigo_estado_artigo_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'slug' => [
            'notBlank' => [
                'rule' => ['notBlank'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
    ];

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Entidade' => [
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoObjecto' => [
            'className' => 'EstadoObjecto',
            'foreignKey' => 'estado_objecto_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'ArtigoEstadoArtigo' => [
            'className' => 'ArtigoEstadoArtigo',
            'foreignKey' => 'artigo_estado_artigo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'ArtigoAreaAcademica' => [
            'className' => 'ArtigoAreaAcademica',
            'foreignKey' => 'artigo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
        'ArtigoAreaPesquisa' => [
            'className' => 'ArtigoAreaPesquisa',
            'foreignKey' => 'artigo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
        'ArtigoMeta' => [
            'className' => 'ArtigoMeta',
            'foreignKey' => 'artigo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
    ];

    public function adicionaArtigo($data)
    {
        $userId = CakeSession::read('Auth.User.id');
        $data['Artigo']['user_id'] = $userId;
        $entidade = $this->Entidade->findByUserId($userId);
        if ($entidade) {
            $data['Artigo']['entidade_id'] = $entidade['Entidade']['id'];
        }
        if ($data['Artigo']['resumo'] == '') {
            $textoClean = strip_tags($data['Artigo']['conteudo']);
            $data['Artigo']['resumo'] = substr($textoClean, 0, 256);
        } else {
            $data['Artigo']['resumo'] = strip_tags($data['Artigo']['resumo']);
        }
        $data['Artigo']['slug'] = Inflector::slug($data['Artigo']['titulo']);
        if ($numeroSlug = $this->slugExists($data['Artigo']['slug'])) {
            $data['Artigo']['slug'] = $data['Artigo']['slug'] . '_' . $numeroSlug;
        }
        $this->create();
        if (!$this->save($data)) {
            debug($this->validationErrors);
        } else {
            return $this->id;
        }
    }

    public function slugExists($slug)
    {
        $totalSlug = $this->find('count', ['conditions' => ['slug' => $slug]]);
        return $totalSlug;
    }

}
