<!-- BODY -->
<table class="body-wrap" bgcolor="">
    <tr>
        <td></td>
        <td class="container" align="" bgcolor="#FFFFFF">

            <!-- content -->
            <div class="content">
                <table>
                    <tr>
                        <td>

                            <h1>O SIGA em <?= $data['Email']['data_resumo']?></h1>
                            <p class="lead">Eis os dados de utilizacao do Sistema Integrado de Gestao Academica nas Ultimas 24 horas.</p>

                            <p>Outros detalhes serao acrescentados a este relatorio brevemente. </p>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <!-- Acessos -->
            <div class="content"><table bgcolor="">
                    <tr>
                        <td class="small" width="10%" style="vertical-align: top; padding-right:10px;background-color: #008000"></td>
                        <td>
                            <h4>Acessos<small>Acessos ao SIGA.</small></h4>
                            <p class=""><b><?= $data['Acessos']['global']?></b> Utilizadores acederam o SIGA. </p>


                        </td>
                    </tr>
                </table></div><!-- /Acessos -->

            <!-- content -->
            <div class="content">

                <table bgcolor="">
                    <tr>
                        <td class="small" width="10%" style="vertical-align: top; padding-right:10px;background-color: #008000"></td>
                        <td>
                            <h4>Matriculas <small>dados sobre Estudantes.</small></h4>
                            <p class=""><b><?= $data['Matriculas']['novo_ingresso']?></b> Novos Estudantes foram Matriculados. </p>
                            <p><b><?= $data['Matriculas']['renovacao']?></b> Estudantes Renovaram Matriculas</p>
                            <p><b><?= $data['Matriculas']['reingresso']?></b> Estudantes Fizeram Reingresso</p>

                        </td>
                    </tr>
                </table>

            </div><!-- /content -->

            <!-- content -->
            <div class="content"><table bgcolor="">
                    <tr>
                        <td>

                            <!-- Callout Panel -->
                            <p class="callout">Qualquer informacao reelevante pode ser colocada aqui. <a href="#">E um Link! &raquo;</a>	</p><!-- /callout panel -->

                        </td>
                    </tr>
                </table></div><!-- /content -->

            <!-- content -->
            <div class="content"><table bgcolor="">
                    <tr>
                        <td class="small" width="10%" style="vertical-align: top; padding-right:10px;background-color: #008000"></td>
                        <td>
                            <h4>Turmas<small>Actividades em Turmas na Universidade.</small></h4>
                            <p class=""><b><?= $data['Turmas']['fechadas']?></b> Turmas foram Fechadas. </p>
                            <p><b><?= $data['Turmas']['criadas']?></b> Turmas Foram Abertas</p>

                        </td>
                    </tr>
                </table></div><!-- /content -->




        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->