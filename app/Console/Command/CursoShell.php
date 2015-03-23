<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class CursoShell extends AppShell {

	public $uses = array('Curso');


    public function organiza_cursos_faculdade(){
        $cursos = $this->Curso->find('all');
        foreach($cursos as $curso){
            $unidadeOrganicaId= $curso['Curso']['unidade_organica_id'];
            $unidadeOrganica = $this->Curso->UnidadeOrganica->findById($unidadeOrganicaId);
            if($unidadeOrganica['UnidadeOrganica']['tipo_unidade_organica_id'] ==2){
                $novaUnidade = $this->Curso->UnidadeOrganica->findById($unidadeOrganica['UnidadeOrganica']['parent_id']);
                if($novaUnidade){
                    $this->out('alterando unidade'.$unidadeOrganica['UnidadeOrganica']['name']);
                    $this->Curso->id = $curso['Curso']['id'];
                    $this->Curso->set('unidade_organica_id',$novaUnidade['UnidadeOrganica']['id']);
                    $this->Curso->save();
                }
            } elseif($unidadeOrganica['UnidadeOrganica']['tipo_unidade_organica_id'] !=1){
                debug($curso);
            }
        }
    }


}
