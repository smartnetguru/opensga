<?php
	App::uses('AppController', 'Controller');

	/**
	 * FinanceiroPagamentos Controller
	 *
	 * @property FinanceiroPagamento $FinanceiroPagamento
	 */
	class FinanceiroPagamentosController extends AppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			//Resumo Mensal
			$facturas_geradas = $this->FinanceiroPagamento->find('count', [
				'conditions' => [
					'MONTH(FinanceiroPagamento.created)' => date('m'),
					'YEAR(FinanceiroPagamento.created)'  => date('Y'),
				],
			]);
			$facturas_pagas = $this->FinanceiroPagamento->find('count', [
				'conditions' => [
					'MONTH(FinanceiroPagamento.data_pagamento)'          => date('m'),
					'YEAR(FinanceiroPagamento.data_pagamento)'           => date('Y'),
					'FinanceiroPagamento.financeiro_estado_pagamento_id' => 2,
				],
			]);
			$facturas_divida = $this->FinanceiroPagamento->find('count',
				['conditions' => ['FinanceiroPagamento.financeiro_estado_pagamento_id' => 1]]);

			$valor_arrecadado = $this->FinanceiroPagamento->find('all', [
				'conditions' => [
					'MONTH(FinanceiroPagamento.data_pagamento)'          => date('m'),
					'YEAR(FinanceiroPagamento.data_pagamento)'           => date('Y'),
					'FinanceiroPagamento.financeiro_estado_pagamento_id' => 2,
				],
				'fields'     => 'sum(FinanceiroPagamento.valor) as valor',
			]);

			$valor_divida = $this->FinanceiroPagamento->find('all', [
				'conditions' => ['FinanceiroPagamento.financeiro_estado_pagamento_id' => 1],
				'fields'     => 'sum(FinanceiroPagamento.valor) as valor',
			]);

			//debug($valor_arrecadado);


			$this->set(compact('facturas_geradas', 'facturas_pagas', 'facturas_divida', 'valor_arrecadado',
				'valor_divida'));
		}

		/**
		 * view method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->FinanceiroPagamento->id = $id;
			if (!$this->FinanceiroPagamento->exists()) {
				throw new NotFoundException(__('Invalid financeiro pagamento'));
			}
			$this->set('financeiroPagamento', $this->FinanceiroPagamento->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->FinanceiroPagamento->create();
				if ($this->FinanceiroPagamento->save($this->request->data)) {
					$this->Session->setFlash(__('The financeiro pagamento has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The financeiro pagamento could not be saved. Please, try again.'));
				}
			}
			$alunos = $this->FinanceiroPagamento->Aluno->find('list');
			$financeiroContas = $this->FinanceiroPagamento->FinanceiroContum->find('list');
			$financeiroTipoPagamentos = $this->FinanceiroPagamento->FinanceiroTipoPagamento->find('list');
			$anolectivos = $this->FinanceiroPagamento->AnoLectivo->find('list');
			$financeiroEstadoPagamentos = $this->FinanceiroPagamento->FinanceiroEstadoPagamento->find('list');
			$this->set(compact('alunos', 'financeiroContas', 'financeiroTipoPagamentos', 'anolectivos',
				'financeiroEstadoPagamentos'));
		}

		/**
		 * edit method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			$this->FinanceiroPagamento->id = $id;
			if (!$this->FinanceiroPagamento->exists()) {
				throw new NotFoundException(__('Invalid financeiro pagamento'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->FinanceiroPagamento->save($this->request->data)) {
					$this->Session->setFlash(__('The financeiro pagamento has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The financeiro pagamento could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->FinanceiroPagamento->read(null, $id);
			}
			$alunos = $this->FinanceiroPagamento->Aluno->find('list');
			$financeiroContas = $this->FinanceiroPagamento->FinanceiroContum->find('list');
			$financeiroTipoPagamentos = $this->FinanceiroPagamento->FinanceiroTipoPagamento->find('list');
			$anolectivos = $this->FinanceiroPagamento->AnoLectivo->find('list');
			$financeiroEstadoPagamentos = $this->FinanceiroPagamento->FinanceiroEstadoPagamento->find('list');
			$this->set(compact('alunos', 'financeiroContas', 'financeiroTipoPagamentos', 'anolectivos',
				'financeiroEstadoPagamentos'));
		}

		/**
		 * delete method
		 *
		 * @throws MethodNotAllowedException
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->FinanceiroPagamento->id = $id;
			if (!$this->FinanceiroPagamento->exists()) {
				throw new NotFoundException(__('Invalid financeiro pagamento'));
			}
			if ($this->FinanceiroPagamento->delete()) {
				$this->Session->setFlash(__('Financeiro pagamento deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Financeiro pagamento was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
