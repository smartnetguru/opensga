<?php
/**
 * Controller de Pagamentos
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.contabilidade
 * @since         OpenSGA v 0.1.0

 * 
 */
 
 
class PagamentosController extends AppController {

	var $name = 'Pagamentos';
    
    /**
     *Pagina inicial da Contabilidade. Mostra pagamento pendentes e resumos de facturamento 
     */
	function index() {
		
        //Resumo Mensal
        $facturas_geradas = $this->Pagamento->find('count',array('conditions'=>array('MONTH(Pagamento.created)'=>date('m'),'YEAR(Pagamento.created)'=>date('Y'))));
        $facturas_pagas = $this->Pagamento->find('count',array('conditions'=>array('MONTH(Pagamento.data_pagamento)'=>date('m'),'YEAR(Pagamento.data_pagamento)'=>date('Y'),'Pagamento.estadopagamento_id'=>2)));
        $facturas_divida = $this->Pagamento->find('count',array('conditions'=>array('Pagamento.estadopagamento_id'=>1)));
        
        $valor_arrecadado = $this->Pagamento->find('all',array('conditions'=>array('MONTH(Pagamento.data_pagamento)'=>date('m'),'YEAR(Pagamento.data_pagamento)'=>date('Y'),'Pagamento.estadopagamento_id'=>2),'fields'=>'sum(Pagamento.valor) as valor'));
        
        $valor_divida = $this->Pagamento->find('all',array('conditions'=>array('Pagamento.estadopagamento_id'=>1),'fields'=>'sum(Pagamento.valor) as valor'));
        
        //debug($valor_arrecadado);
        
		
		$this->set(compact('facturas_geradas','facturas_pagas','facturas_divida','valor_arrecadado','valor_divida'));
	}
    
    

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pagamento', $this->Pagamento->read(null, $id));
	}

	
	/**
	 * Gera Todos os pagamentos referente aos estudantes matriculados para um determinado semestre
	 */
	function gerar_pagamentos(){
			
		if(!empty($this->data)){
			$this->Pagamento->gerarPagamentos($this->data['Pagamento']['ano_lectivo']);	
		}	
		
		$anolectivos = $this->Pagamento->Anolectivo->find('list');
		$this->set(compact('anolectivos'));
	}
	
	
	function imprimir_facturas($aluno_id){
		$pagamentos = $this->Pagamento->find('all',array('conditions'=>array('Pagamento.aluno_id'=>$aluno_id)));
		
		$listas=array();
		foreach($pagamentos as $pagamento){
			$lista=array();
			
			$lista['codigo']=	$pagamento['Pagamento']['codigo'];
			$lista['codigo_aluno']=$pagamento['Aluno']['codigo'];
			$lista['aluno']=$pagamento['Aluno']['name'];
			$lista['pagamento']=$pagamento['Tipopagamento']['name'];
			$lista['data_limite']=$pagamento['Pagamento']['data_limite'];
			$lista['estado']=$pagamento['Estadopagamento']['name'];
			$listas[]=$lista;
		}
		
		$this->set('lista',$listas);
		$this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
	}
	
	
	function add() {
		if (!empty($this->data)) {
			$this->Pagamento->create();
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(__('The pagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagamento could not be saved. Please, try again.', true));
			}
		}
		$alunos = $this->Pagamento->Aluno->find('list');
		$contas = $this->Pagamento->Contum->find('list');
		$this->set(compact('alunos', 'contas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(__('The pagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pagamento->read(null, $id);
		}
		$alunos = $this->Pagamento->Aluno->find('list');
		$contas = $this->Pagamento->Contum->find('list');
		$this->set(compact('alunos', 'contas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pagamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pagamento->delete($id)) {
			$this->Session->setFlash(__('Pagamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pagamento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	// Valor total em divida, total pago este mes e 20mt
	function relatorio_sidebar(){
		$divida = $this->Pagamento->find('all',array('conditions'=>array('Pagamento.estadopagamento_id'=>1),'fields'=>array('SUM(Pagamento.valor) as divida')));
		
		$this->set('divida',$divida[0][0]['divida']);
		var_dump($divida);
	}
	
    public function pesquisar_aluno(){
        if($this->request->is('post') || $this->request->is('put')){
            
            $this->Pagamento->Aluno->contain(array('Entidade','Curso','Matricula'
            ));
            $alunos = $this->Pagamento->Aluno->find('all',array('conditions'=>array('OR'=>array(array('Entidade.name LIKE'=>'%'.$this->request->data['Aluno']['name'].'%'),array('Aluno.codigo LIKE'=>$this->request->data['Aluno']['codigo'])))));
            
            $this->set(compact('alunos'));
            $this->set('mostrar_resultado',true);
           
        }
    }
    
    public function validar_pagamentos($aluno_id){
        $this->Pagamento->Aluno->id = $aluno_id;
        if(!$this->Pagamento->Aluno->exists()){
            throw  new NotFoundException('Nao existe Aluno com este ID');
        }
        
        if($this->request->is('post')||$this->request->is('put')){
            
            foreach($this->request->data['pagamento'] as $codigo_pagoA){
                $codigo_pago = $codigo_pagoA['id'];
                if($codigo_pago> 0){
                    $pagamento = $this->Pagamento->findByCodigo($codigo_pago);
                    $tipopagamento = substr($codigo_pago, 8, 2);
                    if($tipopagamento =='11'){
                        $valor = $this->request->data['valor'][$codigo_pago];
                        if($valor>800){
                            $valor = $valor-800;
                            $pagamento_matricula = $this->Pagamento->find('first',array('conditions'=>array('Pagamento.aluno_id'=>$pagamento['Pagamento']['aluno_id'],'Pagamento.tipopagamento_id'=>1,'Pagamento.anolectivo_id'=>$pagamento['Pagamento']['anolectivo_id'])));
                            $this->Pagamento->id = $pagamento_matricula['Pagamento']['id'];
                            $this->Pagamento->set('valor',800);
                            $this->Pagamento->set('estadopagamento_id',2);
                            $this->Pagamento->set('data_pagamento',date('Y-m-d H:i:s'));
                            $this->Pagamento->save();
                            $this->Pagamento->id=null;
                        }
                        while($valor >=200){
                            //Regista as inscricoes uma a uma ;)
                            //No futuro ver quantas cadeiras se inscreveu... Don't be evil ;)
                            $pagamento_i=array();
				$pagamento_i['aluno_id'] = $pagamento['Pagamento']['aluno_id'];
				$pagamento_i['valor'] = 200;
				$pagamento_i['tipopagamento_id'] = $pagamento['Pagamento']['tipopagamento_id'];
				$pagamento_i['anolectivo_id'] = $pagamento['Pagamento']['anolectivo_id'];
				
                $pagamento_i['data_limite'] =date('Y-m-d H:i:s');
                
                    
				
				
				/**
				 * @Todo o digito numerico aqui deve ser automatizado antes do proximo semestre :-)
				 * FIXME O digito numerico deve ser mudado antes do proximo semestre :-)
				 */
                $codigo_pagamento = $this->Pagamento->geraCodigo($pagamento['Pagamento']['aluno_id'],$pagamento['Pagamento']['tipopagamento_id'],$pagamento['Pagamento']['anolectivo_id']);
                
				//$codigo_pagamento = $aluno['Aluno']['codigo'].$tp['Tipopagamento']['codigo']."01";
				
				$pagamento_i['codigo'] = $codigo_pagamento;
				$pagamento_i['estadopagamento_id']=2;
				$pagamentos = array('Pagamento'=>$pagamento_i);
				
				
					$this->Pagamento->create();
					$this->Pagamento->save($pagamentos);
                    $valor = $valor-200;
					
				
                            
                            
                            
                        }
                        
                        $this->Pagamento->delete($pagamento['Pagamento']['id']);
                    }
                   else{
                      $this->Pagamento->id = $pagamento['Pagamento']['id'];
                    $this->Pagamento->set('estadopagamento_id',2);
                    $this->Pagamento->set('valor',$this->request->data['valor'][$codigo_pago]);
                    $this->Pagamento->set('data_pagamento',date('Y-m-d H:i:s'));
                    $this->Pagamento->save();
 
                   }
                    
                                        
                    
                }
            }
            $this->Session->setFlash('Os Pagamentos foram actualizados com sucesso');
            //$this->redirect(array('controller'=>'pagamentos','action'=>'pesquisar_aluno'));
            
        }
        $this->Pagamento->contain(array('Tipopagamento','Anolectivo','Estadopagamento'));
        $pagamentos_pendentes = $this->Pagamento->find('all',array('conditions'=>array('Pagamento.aluno_id'=>$aluno_id,'Pagamento.estadopagamento_id'=>1,'Pagamento.tipopagamento_id !='=>'1')));
        $this->set(compact('pagamentos_pendentes'));
        
    }
	
    	function beforeRender(){
            parent::beforeRender();
            $this->set('current_section','contabilidade');
        }
}
