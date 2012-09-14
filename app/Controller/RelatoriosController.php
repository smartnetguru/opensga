<?php
/**
 * Relatorios Controller
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class RelatoriosController extends AppController {

	var $name = 'Relatorios';

	function index() {

	}
	
	function quick_info(){
		
	}
    
    /**
     * Resumo dos acontecimentos do semestre.
     * Se semestre_id for null, retorna resumo do semestre actual
     */
    public function resumo_semestral($semestre_id = null){
        $this->loadModel('Aluno');
        $this->loadModel('Semestrelectivo');
        
        if($semestre_id==null){
            $semestre_id=Configure::read('OpenSGA.semestre_lectivo_id');
        }
        $this->Semestrelectivo->id = $semestre_id;
        if(!$this->Semestrelectivo->exists()){
            throw new NotFoundException('Este Semestre Lectivo não existe no Sistema');
        }
        
        $ano_lectivo_id = $this->Aluno->Matricula->Anolectivo->Semestrelectivo->field('anolectivo_id',array('Semestrelectivo.id'=>$semestre_id));
        //Resumo de Alunos
        $total_alunos_activos = $this->Aluno->find('count',array('conditions'=>array('NOT'=>array('Aluno.estadoentidade_id'=>array(2,3,4)))));
        $total_novos_ingressos = $this->Aluno->Matricula->find('count',array('conditions'=>array('Matricula.tipo_matricula_id'=>array(0,1),'Matricula.anolectivo_id'=>$ano_lectivo_id)));
        $total_matriculas_renovadas = $this->Aluno->Matricula->find('count',array('conditions'=>array('Matricula.tipo_matricula_id'=>2,'Matricula.anolectivo_id'=>$ano_lectivo_id)));
        $total_nao_matriculados = $total_alunos_activos - $total_novos_ingressos - $total_matriculas_renovadas;
        
        //Resumo de Tesouraria
        $facturas_geradas = $this->Aluno->FinanceiroPagamento->find('count',array('conditions'=>array('FinanceiroPagamento.semestrelectivo_id'=>$semestre_id)));
        $facturas_pagas = $this->Aluno->FinanceiroPagamento->find('count',array('conditions'=>array('FinanceiroPagamento.financeiro_estado_pagamento_id'=>2,'semestrelectivo_id'=>$semestre_id)));
        $facturas_divida = $this->Aluno->FinanceiroPagamento->find('count',array('conditions'=>array('FinanceiroPagamento.financeiro_estado_pagamento_id'=>1,'FinanceiroPagamento.semestrelectivo_id'=>$semestre_id)));
        $valor_arrecadado = $this->Aluno->FinanceiroPagamento->find('all',array('conditions'=>array('FinanceiroPagamento.semestrelectivo_id'=>$semestre_id,'FinanceiroPagamento.financeiro_estado_pagamento_id'=>2),'fields'=>'sum(FinanceiroPagamento.valor) as valor'));
        $valor_divida = $this->Aluno->FinanceiroPagamento->find('all',array('conditions'=>array('FinanceiroPagamento.financeiro_estado_pagamento_id'=>1,'FinanceiroPagamento.semestrelectivo_id'=>$semestre_id),'fields'=>'sum(FinanceiroPagamento.valor) as valor'));
        
        $total_depositos = $this->Aluno->Entidade->FinanceiroDeposito->find('count',array('semestrelectivo_id'=>Configure::read('OpenSGA.semestre_lectivo_id')));
        $valor_depositos = $this->Aluno->Entidade->FinanceiroDeposito->find('all',array('conditions'=>array('semestrelectivo_id'=>$semestre_id),'fields'=>'sum(FinanceiroDeposito.valor) as valor'));
        
        //debug($total_depositos);
        
		
		$this->set(compact('facturas_geradas','facturas_pagas','facturas_divida','valor_arrecadado','valor_divida','total_depositos','valor_depositos'));
        $this->set(compact('total_alunos_activos','total_novos_ingressos','total_matriculas_renovadas','total_nao_matriculados'));
    }
    
    public function estudantes_por_faculdade(){
        $this->loadModel('Aluno');
        $estudantes_faculdade = $this->Aluno->getEstudantesByFaculdade();
        $this->set(compact('estudantes_faculdade'));
        
    }
    
    public function estudantes_por_curso(){
        $this->loadModel('Aluno');
        $estudantes_curso = $this->Aluno->getEstudantesByCurso();
        $this->set(compact('estudantes_curso'));
        
    }

}
?>