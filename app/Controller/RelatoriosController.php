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

    function quick_info() {
        
    }

    /**
     * Resumo dos acontecimentos do semestre.
     * Se semestre_id for null, retorna resumo do semestre actual
     */
    public function resumo_semestral($semestre_id = null) {
        $this->loadModel('Aluno');
        $this->loadModel('SemestreLectivo');

        if ($semestre_id == null) {
            $semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');
        }
        $this->SemestreLectivo->id = $semestre_id;
        if (!$this->SemestreLectivo->exists()) {
            throw new NotFoundException('Este Semestre Lectivo não existe no Sistema');
        }

        $ano_lectivo_id = $this->Aluno->Matricula->AnoLectivo->SemestreLectivo->field('ano_lectivo_id', array('SemestreLectivo.id' => $semestre_id));
        //Resumo de Alunos
        $total_alunos_activos = $this->Aluno->find('count', array('conditions' => array('NOT' => array('Aluno.EstadoEntidade_id' => array(2, 3, 4)))));
        $total_novos_ingressos = $this->Aluno->Matricula->find('count', array('conditions' => array('Matricula.tipo_matricula_id' => array(0, 1), 'Matricula.ano_lectivo_id' => $ano_lectivo_id)));
        $total_matriculas_renovadas = $this->Aluno->Matricula->find('count', array('conditions' => array('Matricula.tipo_matricula_id' => 2, 'Matricula.ano_lectivo_id' => $ano_lectivo_id)));
        $total_nao_matriculados = $total_alunos_activos - $total_novos_ingressos - $total_matriculas_renovadas;

        //Resumo de Tesouraria
        $facturas_geradas = $this->Aluno->FinanceiroPagamento->find('count', array('conditions' => array('FinanceiroPagamento.semestre_lectivo_id' => $semestre_id)));
        $facturas_pagas = $this->Aluno->FinanceiroPagamento->find('count', array('conditions' => array('FinanceiroPagamento.financeiro_estado_pagamento_id' => 2, 'semestre_lectivo_id' => $semestre_id)));
        $facturas_divida = $this->Aluno->FinanceiroPagamento->find('count', array('conditions' => array('FinanceiroPagamento.financeiro_estado_pagamento_id' => 1, 'FinanceiroPagamento.semestre_lectivo_id' => $semestre_id)));
        $valor_arrecadado = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento.semestre_lectivo_id' => $semestre_id, 'FinanceiroPagamento.financeiro_estado_pagamento_id' => 2), 'fields' => 'sum(FinanceiroPagamento.valor) as valor'));
        $valor_divida = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento.financeiro_estado_pagamento_id' => 1, 'FinanceiroPagamento.semestre_lectivo_id' => $semestre_id), 'fields' => 'sum(FinanceiroPagamento.valor) as valor'));

        $total_depositos = $this->Aluno->Entidade->FinanceiroDeposito->find('count', array('semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id')));
        $valor_depositos = $this->Aluno->Entidade->FinanceiroDeposito->find('all', array('conditions' => array('semestre_lectivo_id' => $semestre_id), 'fields' => 'sum(FinanceiroDeposito.valor) as valor'));

        //debug($total_depositos);


        $this->set(compact('facturas_geradas', 'facturas_pagas', 'facturas_divida', 'valor_arrecadado', 'valor_divida', 'total_depositos', 'valor_depositos'));
        $this->set(compact('total_alunos_activos', 'total_novos_ingressos', 'total_matriculas_renovadas', 'total_nao_matriculados'));
    }

    public function estudantes_por_faculdade() {
        $this->loadModel('Aluno');
        $estudantes_faculdade = $this->Aluno->getEstudantesByFaculdade();
        $this->set(compact('estudantes_faculdade'));
    }

    public function estudantes_por_curso() {
        $this->loadModel('Aluno');
        $estudantes_curso = $this->Aluno->getTotalAlunosActivosPorCurso();

        $chartName = 'Line Chart';

        $mychart = $this->HighCharts->create($chartName, 'line');

        $curso_nome = Hash::extract($estudantes_curso, '{n}.Curso.name');
        $curso_total = Hash::extract($estudantes_curso, '{n}.0.total');
        debug($curso_total);
        $curso_float = array_map('floatval', $curso_total);
        debug($curso_float);
        $this->HighCharts->setChartParams(
                $chartName, array(
            'renderTo' => 'linewrapper', // div to display chart inside
            'chartWidth' => 5024,
            'chartHeight' => 800,
            'chartMarginTop' => 60,
            'chartMarginLeft' => 90,
            'chartMarginRight' => 30,
            'chartMarginBottom' => 510,
            'chartSpacingRight' => 10,
            'chartSpacingBottom' => 15,
            'chartSpacingLeft' => 0,
            'chartAlignTicks' => FALSE,
            'chartBackgroundColorLinearGradient' => array(0, 0, 0, 300),
            'chartBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
            'title' => 'Estudantes Matriculados por Curso - 2013',
            'titleAlign' => 'left',
            'titleFloating' => TRUE,
            'titleStyleFont' => '18px Metrophobic, Arial, sans-serif',
            'titleStyleColor' => '#0099ff',
            'titleX' => 20,
            'titleY' => 20,
            'legendEnabled' => TRUE,
            'legendLayout' => 'horizontal',
            'legendAlign' => 'center',
            'legendVerticalAlign ' => 'bottom',
            'legendItemStyle' => array('color' => '#222'),
            'legendBackgroundColorLinearGradient' => array(0, 0, 0, 25),
            'legendBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
            'tooltipEnabled' => TRUE,
            // 'tooltipBackgroundColorLinearGradient' 	=> array(0,0,0,50),   // triggers js error
            // 'tooltipBackgroundColorStops' 		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),
            //'plotOptionsLinePointStart' 		=> strtotime('-30 day') * 1000,
            //'plotOptionsLinePointInterval' 	=> 24 * 3600 * 1000,
            //'xAxisType' 				=> 'datetime',
            //'xAxisTickInterval' 			=> 10,
            //'xAxisStartOnTick' 			=> TRUE,
            //'xAxisTickmarkPlacement' 		=> 'on',
            //'xAxisTickLength' 			=> 10,
            //'xAxisMinorTickLength' 		=> 5,
            'xAxisLabelsEnabled' => TRUE,
            'xAxisLabelsAlign' => 'right',
            'xAxisLabelsStep' => 1,
            'xAxisLabelsRotation' => -90,
            'xAxislabelsX' => 5,
            'xAxisLabelsY' => 20,
            'xAxisCategories' => $curso_nome,
            //'yAxisMin' 			=> 0,
            //'yAxisMaxPadding'			=> 0.2,
            //'yAxisEndOnTick'			=> FALSE,
            //'yAxisMinorGridLineWidth' 	=> 0,
            //'yAxisMinorTickInterval' 		=> 'auto',
            //'yAxisMinorTickLength' 		=> 1,
            //'yAxisTickLength'			=> 2,
            //'yAxisMinorTickWidth'		=> 1,
            'yAxisTitleText' => 'Estudantes',
            //'yAxisTitleAlign' 		=> 'high',
            //'yAxisTitleStyleFont' 		=> '14px Metrophobic, Arial, sans-serif',
            //'yAxisTitleRotation' 		=> 0,
            //'yAxisTitleX' 			=> 0,
            //'yAxisTitleY' 			=> -10,
            //'yAxisPlotLines' 			=> array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),
            // autostep options
            'enableAutoStep' => TRUE
                )
        );

        $series = $this->HighCharts->addChartSeries();

        $series->addName('Estudantes')
                ->addData($curso_float);

        $mychart->addSeries($series);
        $this->set(compact('estudantes_curso', 'curso_nome', 'curso_total'));
    }

    public function estudantes_por_ano_ingresso() {
        $this->loadModel('Aluno');
        $estudantes_curso = $this->Aluno->find('all', array('conditions' => array(), 'fields' => array('ano_ingresso', 'count(*) as total'), 'group' => 'ano_ingresso'));

        $chartName = 'Line Chart';

        $mychart = $this->HighCharts->create($chartName, 'line');

        $curso_nome = Hash::extract($estudantes_curso, '{n}.Aluno.ano_ingresso');
        $curso_total = Hash::extract($estudantes_curso, '{n}.0.total');

        $curso_float = array_map('floatval', $curso_total);

        $this->HighCharts->setChartParams(
        $chartName,
        array(
        'renderTo' => 'linewrapper', // div to display chart inside
        'chartWidth' => 1024,
        'chartHeight' => 800,
        'chartMarginTop' => 60,
        'chartMarginLeft' => 90,
        'chartMarginRight' => 30,
        'chartMarginBottom' => 110,
        'chartSpacingRight' => 10,
        'chartSpacingBottom' => 15,
        'chartSpacingLeft' => 0,
        'chartAlignTicks' => FALSE,
        'chartBackgroundColorLinearGradient' => array(0, 0, 0, 300),
        'chartBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
        'title' => 'Número de Estudantes por Ano de Ingresso',
        'titleAlign' => 'left',
        'titleFloating' => TRUE,
        'titleStyleFont' => '18px Metrophobic, Arial, sans-serif',
        'titleStyleColor' => '#0099ff',
        'titleX' => 20,
        'titleY' => 20,
        'legendEnabled' => TRUE,
        'legendLayout' => 'horizontal',
        'legendAlign' => 'center',
        'legendVerticalAlign ' => 'bottom',
        'legendItemStyle' => array('color' => '#222'),
        'legendBackgroundColorLinearGradient' => array(0, 0, 0, 25),
        'legendBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
        'tooltipEnabled' => TRUE,
        // 'tooltipBackgroundColorLinearGradient' 	=> array(0,0,0,50),   // triggers js error
        // 'tooltipBackgroundColorStops' 		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),
        //'plotOptionsLinePointStart' 		=> strtotime('-30 day') * 1000,
        //'plotOptionsLinePointInterval' 	=> 24 * 3600 * 1000,
        'plotOptionsLineDataLabelsEnabled' => true,
        //'xAxisType' 				=> 'datetime',
        //'xAxisTickInterval' 			=> 10,
        //'xAxisStartOnTick' 			=> TRUE,
        //'xAxisTickmarkPlacement' 		=> 'on',
        //'xAxisTickLength' 			=> 10,
        //'xAxisMinorTickLength' 		=> 5,

        'xAxisLabelsEnabled' => TRUE,
        'xAxisLabelsAlign' => 'right',
        'xAxisLabelsStep' => 1,
        'xAxisLabelsRotation' => -90,
        'xAxislabelsX' => 5,
        'xAxisLabelsY' => 20,
        'xAxisCategories' => $curso_nome,
        //'yAxisMin' 			=> 0,
        //'yAxisMaxPadding'			=> 0.2,
        //'yAxisEndOnTick'			=> FALSE,
        //'yAxisMinorGridLineWidth' 	=> 0,
        //'yAxisMinorTickInterval' 		=> 'auto',
        //'yAxisMinorTickLength' 		=> 1,
        //'yAxisTickLength'			=> 2,
        //'yAxisMinorTickWidth'		=> 1,


        'yAxisTitleText' => 'Estudantes',
        //'yAxisTitleAlign' 		=> 'high',
        //'yAxisTitleStyleFont' 		=> '14px Metrophobic, Arial, sans-serif',
        //'yAxisTitleRotation' 		=> 0,
        //'yAxisTitleX' 			=> 0,
        //'yAxisTitleY' 			=> -10,
        //'yAxisPlotLines' 			=> array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),
        // autostep options
        'enableAutoStep' => TRUE,
        'creditsText' =>'OpenSGA.org',
            'creditsURL'=>'http://millpaginas.com/opensga'
        )
        );

        $series = $this->HighCharts->addChartSeries();

        $series->addName('Estudantes')
                ->addData($curso_float);

        $mychart->addSeries($series);
        $this->set(compact('estudantes_curso', 'curso_nome', 'curso_total'));
    }
    
    public function requisicoes(){
        
        $this->loadModel('RequisicoesPedidos');
        
        
        //Total de Requisicoes. Total, Pendentes. Processamento. Despacho. Pronto. Entregue. Enviado a Faculdade
        //Certificados. Total. pendentes. Processamento.Despacho. Pronto. Entregue
        //declaracao. Total. pendentes. Processamento.Despacho. Pronto. Entregue
        //Cartao de Estudante 2a Via. Total. pendentes. Processamento.Despacho. Pronto. Entregue
        //Bolsas de Estudos. Processamento.Despacho. Pronto. Entregue
        //Novo Cartao de Estudante. Total. pendentes. Enviados a faculdade
        
        //Cartoes de Novos Ingressos
        $cartoes_novos_total = $this->RequisicoesPedidos->find('count',array('conditions'=>array('requisicoes_tipo_pedido_id'=>6)));
        $cartoes_novos_pendentes = $this->RequisicoesPedidos->find('count',array('conditions'=>array('requisicoes_tipo_pedido_id'=>6,'requisicoes_estado_pedido_id'=>1)));
        $cartoes_novos_enviados = $this->RequisicoesPedidos->find('count',array('conditions'=>array('requisicoes_tipo_pedido_id'=>6,'requisicoes_estado_pedido_id'=>6)));
        
        $this->set(compact('cartoes_novos_total','cartoes_novos_pendentes','cartoes_novos_enviados'));
        
        
        
                
    }

}

?>