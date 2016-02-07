<div class="container_12">
    <div class="grid_8">
        <div class="block-border">
            <div class="block-header">
                <h1>Ficha de Auto-Avaliação de Docentes</h1><span></span>
            </div>
            <?php echo $this->Form->create('SadeAutoAvaliacao',
                    ['class' => 'block-content form', 'id' => 'form', 'inputDefaults' => ['size' => 5]]); ?>

            <table class="tabela-notas">
                <tr>
                    <td style="padding:0px">
                        <table border="0" align="center" style="width: 100%">
                            <tr bgcolor="#C0C0C0">
                                <td colspan="2" scope="col" scope="row" class="even"><b>Indicadores</b></td>
                                <td colspan="2" scope="col" scope="row" class="even"><b>Par&acirc;metros</b></td>
                                <td width="64" scope="col" scope="row" class="even"><b>Quant.</b></td>
                                <td width="64" scope="col" scope="row" class="even"><b>Pontos</b></td>
                            </tr>

                            <tr>
                                <td width="39" rowspan="2" scope="col" scope="row" class="even">10</td>
                                <td width="120" rowspan="2" scope="col" scope="row" class="even"><span>N&#186;. de disciplinas que leccionou por ano</span>
                                </td>
                                <td width="27" scope="col" scope="row" class="even">101</td>
                                <td width="163" scope="col" scope="row" class="even"><span class="style8">De gradua&ccedil;&atilde;o</span>
                                </td>
                                <td scope="col" scope="row" class="even"><label>
                                        <?php echo $this->Form->input('101.resposta', [
                                                'div'      => false,
                                                'label'    => false,
                                                'onChange' => 'pontos(this)',
                                                'size'     => 5,
                                                'value'    => $auto_avaliacao[101]['resposta'],
                                                'id'       => 'q101',
                                        ]); ?>
                                    </label></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd101"><?php echo $this->Form->input('101.pontos_obtidos', [
                                                'div'      => false,
                                                'label'    => false,
                                                'disabled' => 'disabled',
                                                'value'    => $auto_avaliacao[101]['pontos_obtidos'],
                                                'id'       => 'p101',
                                        ]); ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">102</td>
                                <td width="163" scope="col" scope="row" class="even"><span class="style8">De p&oacute;s-gradua&ccedil;&atilde;o </span>
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('102.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[102]['resposta'],
                                            'id'       => 'q102',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd102"><?php echo $this->Form->input('102.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[102]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td rowspan="7" scope="col" scope="row" class="even">15</td>
                                <td rowspan="7" scope="col" scope="row" class="even">Supervis&atilde;o e coordena&ccedil;&atilde;o
                                    acad&ecirc;mica por ano.
                                </td>
                                <td scope="col" scope="row" class="even">151</td>
                                <td scope="col" scope="row" class="even">N&#186; de disserta&ccedil;&otilde;es
                                    orientadas de gradua&ccedil;&atilde;o
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('151.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[151]['resposta'],
                                            'id'       => 'q151',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd151"><?php echo $this->Form->input('151.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[151]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">152</td>
                                <td scope="col" scope="row" class="even">N&#186; de teste orientados de p&oacute;s-gradua&ccedil;&atilde;o</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('152.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[152]['resposta'],
                                            'id'       => 'q152',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd152"><?php echo $this->Form->input('152.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[152]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">153</td>
                                <td scope="col" scope="row" class="even">N&#186; de professores orientados</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('153.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[153]['resposta'],
                                            'id'       => 'q153',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd153"><?php echo $this->Form->input('153.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[153]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">154</td>
                                <td scope="col" scope="row" class="even">N&#186; de assistentes orientados</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('154.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[154]['resposta'],
                                            'id'       => 'q154',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd154"><?php echo $this->Form->input('154.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[154]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">155</td>
                                <td scope="col" scope="row" class="even">N&#186; de estagi&aacute;rios orientados</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('155.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[155]['resposta'],
                                            'id'       => 'q155',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd155"><?php echo $this->Form->input('155.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[155]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">156</td>
                                <td scope="col" scope="row" class="even">N&#186; de disciplinas de reg&ecirc;ncia</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('156.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[156]['resposta'],
                                            'id'       => 'q156',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd156"><?php echo $this->Form->input('156.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[156]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">157</td>
                                <td scope="col" scope="row" class="even">N&#186; de projectos coordenados</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('157.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[157]['resposta'],
                                            'id'       => 'q157',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd157"><?php echo $this->Form->input('157.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[157]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td rowspan="3" scope="col" scope="row" class="even">20</td>
                                <td rowspan="3" scope="col" scope="row" class="even">N&#186; de horas de doc&ecirc;ncia
                                    por semana.
                                </td>
                                <td scope="col" scope="row" class="even">201</td>
                                <td scope="col" scope="row" class="even">Aulas te&oacute;ricas</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('201.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[201]['resposta'],
                                            'id'       => 'q201',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd201"><?php echo $this->Form->input('201.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[201]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">202</td>
                                <td scope="col" scope="row" class="even">Aulas pr&aacute;ticas</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('202.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[202]['resposta'],
                                            'id'       => 'q202',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd202"><?php echo $this->Form->input('202.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[202]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">203</td>
                                <td scope="col" scope="row" class="even">Consulta para estudantes</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('203.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[203]['resposta'],
                                            'id'       => 'q203',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd203"><?php echo $this->Form->input('203.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[203]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td rowspan="5" scope="col" scope="row" class="even">25</td>
                                <td rowspan="5" scope="col" scope="row" class="even">Rendimento pedag&oacute;gico por
                                    ano
                                </td>
                                <td scope="col" scope="row" class="even">251</td>
                                <td scope="col" scope="row" class="even">N&#186; de estudantes de p&oacute;s-gradua&ccedil;&atilde;o</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('251.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[251]['resposta'],
                                            'id'       => 'q251',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd251"><?php echo $this->Form->input('251.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[251]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">252</td>
                                <td scope="col" scope="row" class="even">N&#186; de estudantes de gradua&ccedil;&atilde;o</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('252.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[252]['resposta'],
                                            'id'       => 'q252',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd252"><?php echo $this->Form->input('252.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[252]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">253-1</td>
                                <td scope="col" scope="row" class="even">N&#186; de estudantes de p&oacute;s-gradua&ccedil;&atilde;oAprovados</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('2531.resposta',
                                            [
                                                    'div'      => false,
                                                    'label'    => false,
                                                    'onChange' => 'calcula253(this)',
                                                    'value'    => $auto_avaliacao[2531]['resposta'],
                                                    'id'       => 'q2531',
                                            ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd2531"><?php echo $this->Form->input('2531.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[2531]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">253-2</td>
                                <td scope="col" scope="row" class="even">N&#186; de estudantes de gradua&ccedil;&atilde;o</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('2532.resposta',
                                            [
                                                    'div'      => false,
                                                    'label'    => false,
                                                    'onChange' => 'calcula253(this)',
                                                    'value'    => $auto_avaliacao[2532]['resposta'],
                                                    'id'       => 'q2532',
                                            ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd2532"><?php echo $this->Form->input('2532.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[2532]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">253</td>
                                <td scope="col" scope="row" class="even">Percentagem(%) de estudantes aprovados</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('253.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[253]['resposta'],
                                            'id'       => 'q253',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd253"><?php echo $this->Form->input('253.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[253]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td rowspan="2" scope="col" scope="row" class="even">30</td>
                                <td rowspan="2" scope="col" scope="row" class="even">N&#186; de material did&aacute;ctico
                                    produzido em tr&ecirc; anos
                                </td>
                                <td scope="col" scope="row" class="even">301</td>
                                <td scope="col" scope="row" class="even">N&#186; de manuais</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('301.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[301]['resposta'],
                                            'id'       => 'q301',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd301"><?php echo $this->Form->input('301.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[301]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">302</td>
                                <td scope="col" scope="row" class="even">N&#186; de textos de apoio</td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('302.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[302]['resposta'],
                                            'id'       => 'q302',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd302"><?php echo $this->Form->input('302.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[302]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td rowspan="6" scope="col" scope="row" class="even">35</td>
                                <td rowspan="6" scope="col" scope="row" class="even">Actividades de investiga&ccedil;&atilde;o
                                    cient&iacute;fica e divulga&ccedil;&atilde;o em tr&ecirc; anos
                                </td>
                                <td scope="col" scope="row" class="even">351</td>
                                <td scope="col" scope="row" class="even">N&#186; de projectos cient&iacute;ficos
                                    individuais realizados
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('351.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[351]['resposta'],
                                            'id'       => 'q351',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd351"><?php echo $this->Form->input('351.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[351]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">352</td>
                                <td scope="col" scope="row" class="even">N&#186; de projectos cient&iacute;ficos
                                    colectivos realizados
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('352.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[352]['resposta'],
                                            'id'       => 'q352',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd352"><?php echo $this->Form->input('352.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[352]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">353</td>
                                <td scope="col" scope="row" class="even">N&#186; de artigos ou cap&iacute;tulos
                                    publicados
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('353.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[353]['resposta'],
                                            'id'       => 'q353',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd353"><?php echo $this->Form->input('353.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[353]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">354</td>
                                <td scope="col" scope="row" class="even">N&#186; de comunica&ccedil;&otilde;es
                                    apresentadas em eventos cient&iacute;ficos
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('354.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[354]['resposta'],
                                            'id'       => 'q354',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd354"><?php echo $this->Form->input('354.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[354]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">355</td>
                                <td scope="col" scope="row" class="even">N&#186; de actividades cient&iacute;ficas
                                    realizadas
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('355.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[355]['resposta'],
                                            'id'       => 'q355',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd355"><?php echo $this->Form->input('355.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[355]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">356</td>
                                <td scope="col" scope="row" class="even">N&#186; de relat&oacute;rios cient&iacute;ficos
                                    produzidos
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('356.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[356]['resposta'],
                                            'id'       => 'q356',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd356"><?php echo $this->Form->input('356.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[356]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td rowspan="2" scope="col" scope="row" class="even">40</td>
                                <td rowspan="2" scope="col" scope="row" class="even">Actividade de extens&atilde;o em tr&ecirc;
                                    anos
                                </td>
                                <td scope="col" scope="row" class="even">401</td>
                                <td scope="col" scope="row" class="even">N&#186; de actividades de colabora&ccedil;&atilde;o
                                    com outras institui&ccedil;&otilde;es
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('401.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[401]['resposta'],
                                            'id'       => 'q401',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd401"><?php echo $this->Form->input('401.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[401]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">402</td>
                                <td scope="col" scope="row" class="even">N&#186; de equipes de trabalho institucionais
                                    em que fez parte
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('402.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[402]['resposta'],
                                            'id'       => 'q402',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd402"><?php echo $this->Form->input('402.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[402]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even">45</td>
                                <td colspan="2" scope="col" scope="row" class="even">N&#186; de horas despendidas em
                                    actividades de administra&ccedil;&atilde;o e gest&atilde;o universit&aacute;ria por
                                    semana.
                                </td>
                                <td scope="col" scope="row" class="even"><select name="variacao45">
                                        <option>Direc&ccedil;&atilde;o Faculdade/org&atilde;o central/centro</option>
                                        <option>Chefia Departamento</option>
                                        <option> Coordena&ccedil;&atilde;o curso e chefia sec&ccedil;&atilde;o</option>
                                        <option>Outro</option>
                                    </select></td>

                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('45.resposta', [
                                            'div'      => false,
                                            'label'    => false,
                                            'onChange' => 'pontos(this)',
                                            'value'    => $auto_avaliacao[45]['resposta'],
                                            'id'       => 'q45',
                                    ]); ?></td>
                                <td scope="col" scope="row" class="even">
                                    <div id="pd45"><?php echo $this->Form->input('45.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[45]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col" scope="row" class="even" colspan="4">
                                    <center><b>Total de pontos Obtidos</b></center>
                                </td>
                                <td scope="col" scope="row" class="even"><?php echo $this->Form->input('0.resposta', [
                                            'type'     => 'text',
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[0]['resposta'],
                                            'id'       => 'q101',
                                    ]); ?></td>
                                <td scope="col" scope="row"
                                    class="even"><?php echo $this->Form->input('0.pontos_obtidos', [
                                            'div'      => false,
                                            'label'    => false,
                                            'disabled' => 'disabled',
                                            'value'    => $auto_avaliacao[0]['pontos_obtidos'],
                                    ]); ?></td>
                            </tr>
                            <tr>
                                <td colspan="6" scope="col" scope="row" class="foot">
                                    <div align="center">
                                        <input name="submeter" type="checkbox" id="cbSubmeter" value="submeter"/><label
                                                style="color:red;font-weight:bold">Marque esta caixa para submeter a
                                            ficha ao Avaliador</label>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="6" scope="col" scope="row" class="foot">
                                    <div align="center">
                                        <input type="hidden" name="op" value="gravar">
                                    </div>
                                </td>

                            </tr>
                        </table>


                    </td>
                </tr>
            </table>

            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Cancelar</a></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?> </li>
                </ul>
            </div>
            </form>
        </div>
    </div>

    <div class="clear height-fix"></div>
</div>
<?php
    $this->Js->get('#q101')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd101',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])


    );
    $this->Js->get('#q102')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd102',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q151')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd151',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q152')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd152',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q153')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd153',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q154')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd154',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q155')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd155',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q156')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update' => '#pd156',
                    'async'  => true,

                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q157')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd157',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q201')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd201',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q202')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd202',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q203')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd203',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q251')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd251',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q252')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd252',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q253')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd253',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q2531')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd2531',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q2532')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd2532',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q301')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd301',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q302')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd302',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q351')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd351',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q352')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd352',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q353')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd353',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q354')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd354',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q355')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd355',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q356')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd356',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q401')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd401',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q402')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd402',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );
    $this->Js->get('#q45')->event('change',
            $this->Js->request([
                    'controller' => 'sade_auto_avaliacaos',
                    'action'     => 'update_form',
            ], [
                    'update'         => '#pd45',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );


?>
<script>
    function pontos(ponto) {

    }
</script>
    