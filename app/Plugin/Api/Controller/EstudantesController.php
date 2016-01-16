<?php

App::uses('AppController', 'Controller');
/**
 * CerimoniaGraduacaos Controller
 *
 * @property CerimoniaGraduacao $CerimoniaGraduacao
 * @property PaginatorComponent $Paginator
 */
class EstudantesController extends ApiAppController {

    
    public function get_dados_estudante($codigo_aluno,$password){
        
        
        $password_v = 'estudantes'.'get_dados_estudante'.$codigo_aluno.'SIG@2013';
        $password_md5 = md5($password_v);
        if($password!=$password_md5){
            return false;
        }
        $this->loadModel('Aluno');
        $this->Aluno->contain(array(
            'Entidade'=>array(
                'fields'=>array(
                    'name','apelido','data_nascimento','nomes','telemovel','email'
                ),'Genero'
            ),
            'Curso'=>array(
                'UnidadeOrganica'
            )
        ));
        $aluno = $this->Aluno->findByCodigo($codigo_aluno);
        if(!empty($aluno)){
            $unidade_organica = $aluno['Curso']['UnidadeOrganica'];
            $faculdade = $unidade_organica;
            if($unidade_organica['tipo_unidade_organica_id']==2){
                $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                $faculdade = $unidade_organica_nova['UnidadeOrganica'];
            }
            $dados_cartao = array(
                'numero_estudante'=>$aluno['Aluno']['codigo'],
                'apelido'=>$aluno['Entidade']['apelido'],
                'nomes'=>$aluno['Entidade']['nomes'],
                'nome_completo'=>$aluno['Entidade']['name'],
                'ano_ingresso'=>$aluno['Aluno']['ano_ingresso'],
                'curso'=>$aluno['Curso']['name'],
                'faculdade'=>$faculdade['name'],
                'codigo_curso'=>$aluno['Curso']['codigo'],
                'codigo_faculdade'=>$faculdade['codigo'],
                'telemovel'=>$aluno['Entidade']['telemovel'],
                'email'=>$aluno['Entidade']['email'],
                //Nome e numero do encarregado

            );
            $this->set('dados_cartao',$dados_cartao);
            $this->set('_serialize',array('dados_cartao'));
        }


        //$this->autoRender = false;
    }


    public function get_estudante_for_fotografia($codigo_aluno,$password){


        $password_v = 'estudantes'.'get_estudante_for_fotografia'.$codigo_aluno.'SIG@2013';
        $password_md5 = md5($password_v);
        if($password!=$password_md5){
            
            //throw new NotFoundException();
        }
        $this->loadModel('Aluno');
        
        $this->Aluno->contain(array(
            'Entidade'=>array(
                'fields'=>array(
                    'name','apelido','data_nascimento','nomes'
                ),'Genero'
            ),
            'Curso'=>array(
                'UnidadeOrganica'
            )
        ));
        $aluno = $this->Aluno->findByCodigo($codigo_aluno);
        
        $unidade_organica = $aluno['Curso']['UnidadeOrganica'];
        $faculdade = $unidade_organica;
        if($unidade_organica['tipo_unidade_organica_id']==2){
            $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
            $faculdade = $unidade_organica_nova['UnidadeOrganica'];
        }
        $dados_estudante = array(
            'numero_estudante'=>$aluno['Aluno']['codigo'],
            'apelido'=>$aluno['Entidade']['apelido'],
            'nomes'=>$aluno['Entidade']['nomes'],
            'nome_completo'=>$aluno['Entidade']['name'],
            'ano_ingresso'=>$aluno['Aluno']['ano_ingresso'],
            'curso'=>$aluno['Curso']['name'],
            'faculdade'=>$faculdade['name'],
        );
        
        $this->set('dados_estudante',$dados_estudante);
        $this->set('_serialize',array('dados_estudante'));
    }

    public function pesquisa_estudante($apelido=null,$nomes=null,$numero_estudante=null,$password=null){
        $apelido = $this->request->params['named']['apelido'];
        $nomes = $this->request->params['named']['nomes'];
        $numero_estudante = $this->request->params['named']['numero_estudante'];
        $password = $this->request->params['named']['password'];

        $password_v = 'estudantes'.'pesquisa_estudante'.$apelido.$nomes.$numero_estudante.'SIG@2013';
        $password_md5 = md5($password_v);
        if($password!=$password_md5){
            return false;
        }
        $this->loadModel('Aluno');
        $this->Aluno->contain(array(
            'Entidade'=>array(
                'fields'=>array(
                    'name','apelido','data_nascimento','nomes','telemovel','email'
                ),'Genero'
            ),
            'Curso'=>array(
                'UnidadeOrganica'
            )
        ));

        $conditions=array();
        if ($numero_estudante!=null && $numero_estudante!='') {

            $conditions['Aluno.codigo'] = $numero_estudante;
        } else {
            $conditions['Entidade.nomes LIKE'] = '%' . $nomes . '%';
            $conditions['Entidade.apelido LIKE'] = '%' . $apelido . '%';
        }


        $alunos = $this->Aluno->find('all',array('conditions'=>$conditions));


       if($alunos){
           $this->set('dados_cartao',$alunos);
           $this->set('_serialize',array('dados_cartao'));
       } else{
           //return new NotFoundException('Aluno Nao encontrado');
       }




        //$this->autoRender = false;
    }


    public function get_all_estudantes_by_curso($curso_id,$password){


        $password_v = 'estudantes'.'get_all_estudantes_by_curso'.$curso_id.'SIG@2013';
        $password_md5 = md5($password_v);
        if($password!=$password_md5){
            return false;
        }
        $this->loadModel('Aluno');
        $this->Aluno->contain(array(
            'Entidade'=>array(
                'fields'=>array(
                    'name','apelido','data_nascimento','nomes','telemovel','email'
                ),'Genero'
            ),
            'Curso'=>array(
                'UnidadeOrganica'
            )
        ));
        $alunos = $this->Aluno->findAllByCursoId($curso_id);


        $this->set('dados_cartao',$alunos);
        $this->set('_serialize',array('dados_cartao'));

        //$this->autoRender = false;
    }

    public function verifica_numero_estudante($codigo_aluno){



        $this->loadModel('Aluno');
        $this->Aluno->contain();
        $aluno = $this->Aluno->findByCodigo($codigo_aluno);

        if($aluno){
            $numero_estudante = $aluno['Aluno']['codigo'];
            $this->set('numero_estudante',$numero_estudante);
            $this->set('_serialize',array('numero_estudante'));
        } else{
            $numero_estudante = 0;
            $this->set('numero_estudante',$numero_estudante);
            $this->set('_serialize',array('numero_estudante'));
        }


        //$this->autoRender = false;
    }



}
