<?php
/**
 * Pagina inicial da Contabilidade
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0
 * @version       OpenSGA v 0.5.0

 * 
 */
?>
<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . "Novo Deposito", array('controller' => 'financeiro_depositos', 'action' => 'novo_deposito'), array('escape' => false)) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_8">

        <div class="block-border">
            <div class="block-header">
                <h1>Alunos</h1><span></span>
            </div>
            <div class="block-content form">
                <fieldset>
                    <legend>Relatório de Requisições</legend>
                    <table id="table" class="table">
                        <thead>
                            <tr>


                                <th>Total de Requisições</th>
                                <th>Novos Ingressos</th>
                                <th>Renovaram Matricula</th>
                                <th>Não Renovaram Matricula</th>
                                <th>Finalistas</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?php echo $total_alunos_activos ?>&nbsp;</td>
                                <td><?php echo $total_novos_ingressos ?>&nbsp;</td>
                                <td><?php echo $total_matriculas_renovadas ?>&nbsp;</td>
                                <td><?php echo $total_nao_matriculados ?>&nbsp;</td>
                                <td><?php echo 'Por Determinar' ?>&nbsp;</td>

                            </tr>


                        </tbody>
                    </table>
                </fieldset>
            </div>
            <div class="block-header">
                <h1>Certificados</h1><span></span>
            </div>
            <div class="block-content form">
                <fieldset>
                    <legend>Resumo </legend>
                    <table id="table" class="table">
                        <thead>
                            <tr>


                                <th>T. facturas</th>
                                <th>Facturas Pagas</th>
                                <th>Facturas Abertas</th>
                                <th>Valor Arrecadado</th>
                                <th>Valor em dívida</th>
                                <th>Depósitos Efectuados</th>
                                <th>Total Depositado</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?php echo $facturas_geradas ?>&nbsp;</td>
                                <td><?php echo $facturas_pagas ?>&nbsp;</td>
                                <td><?php echo $facturas_divida ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_arrecadado[0][0]['valor'], 'MZN') ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_divida[0][0]['valor'], 'MZN') ?>&nbsp;</td>
                                <td><?php echo $total_depositos ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_depositos[0][0]['valor'], 'MZN') ?>&nbsp;</td>

                            </tr>


                        </tbody>
                    </table>
                </fieldset>
            </div>
            <div class="block-header">
                <h1>Declarações</h1><span></span>
            </div>
            <div class="block-content form">
                <fieldset>
                    <legend>Resumo</legend>
                    <table id="table" class="table">
                        <thead>
                            <tr>


                                <th>Alunos Inscritos</th>
                                <th>Alunos Por se Inscrever</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?php echo $facturas_geradas ?>&nbsp;</td>
                                <td><?php echo $facturas_pagas ?>&nbsp;</td>
                                <td><?php echo $facturas_divida ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_arrecadado[0][0]['valor'], 'MZN') ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_divida[0][0]['valor'], 'MZN') ?>&nbsp;</td>

                            </tr>


                        </tbody>
                    </table>
                </fieldset>
            </div>
            <div class="block-header">
                <h1>Cartão de Estudante(Novo Ingresso)</h1><span></span>
            </div>
            <div class="block-content form">
                <fieldset>
                    <legend>Resumo</legend>
                    <table id="table" class="table">
                        <thead>
                            <tr>


                                <th>Total de Pedidos</th>
                                <th>Pendentes</th>
                                <th>Enviados á Faculdade</th>
                                <th>Entregues ao Estudante</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?php echo $cartoes_novos_total ?>&nbsp;</td>
                                <td><?php echo $cartoes_novos_pendentes ?>&nbsp;</td>
                                <td><?php echo $cartoes_novos_enviados ?>&nbsp;</td>
                                <td></td>
                                

                            </tr>


                        </tbody>
                    </table>
                </fieldset>
            </div>


            <div class="block-header">
                <h1>Cartão de Estudante(2a Via)</h1><span></span>
            </div>
            <div class="block-content form">
                <fieldset>
                    <legend>Resumo</legend>
                    <table id="table" class="table">
                        <thead>
                            <tr>


                                <th>Alunos Inscritos</th>
                                <th>Alunos Por se Inscrever</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?php echo $facturas_geradas ?>&nbsp;</td>
                                <td><?php echo $facturas_pagas ?>&nbsp;</td>
                                <td><?php echo $facturas_divida ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_arrecadado[0][0]['valor'], 'MZN') ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_divida[0][0]['valor'], 'MZN') ?>&nbsp;</td>

                            </tr>


                        </tbody>
                    </table>
                </fieldset>
            </div>


            <div class="block-header">
                <h1>Declarações</h1><span></span>
            </div>
            <div class="block-content form">
                <fieldset>
                    <legend>Resumo</legend>
                    <table id="table" class="table">
                        <thead>
                            <tr>


                                <th>Alunos Inscritos</th>
                                <th>Alunos Por se Inscrever</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?php echo $facturas_geradas ?>&nbsp;</td>
                                <td><?php echo $facturas_pagas ?>&nbsp;</td>
                                <td><?php echo $facturas_divida ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_arrecadado[0][0]['valor'], 'MZN') ?>&nbsp;</td>
                                <td><?php echo $this->Number->currency($valor_divida[0][0]['valor'], 'MZN') ?>&nbsp;</td>

                            </tr>


                        </tbody>
                    </table>
                </fieldset>
            </div>

        </div>

    </div>

    <div class="grid_4">
        <div class="block-border">
            <div class="block-header">
                <h1>Form with Fieldsets</h1><span></span>
            </div>

        </div>
    </div>


    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->

