<?php
    /**
     * Pagina inicial da Contabilidade
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
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
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . "Novo Deposito",
                                ['controller' => 'financeiro_depositos', 'action' => 'novo_deposito'],
                                ['escape' => false]) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_8">

        <div class="block-border">
            <div class="block-header">
                <h1>Contabilidade e Finanças</h1><span></span>
            </div>
            <div class="block-content form">
                <fieldset>
                    <legend>Resumo Mensal</legend>
                    <table id="table" class="table">
                        <thead>
                        <tr>


                            <th>T. facturas</th>
                            <th>Facturas Pagas</th>
                            <th>Facturas Abertas</th>
                            <th>Valor Arrecadado</th>
                            <th>Valor em dívida</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>

                            <td><?php echo $facturas_geradas ?>&nbsp;</td>
                            <td><?php echo $facturas_pagas ?>&nbsp;</td>
                            <td><?php echo $facturas_divida ?>&nbsp;</td>
                            <td><?php echo $this->Number->currency($valor_arrecadado[0][0]['valor'], 'MZN') ?>
                                &nbsp;</td>
                            <td><?php echo $this->Number->currency($valor_divida[0][0]['valor'], 'MZN') ?>&nbsp;</td>

                        </tr>


                        </tbody>
                    </table>
                </fieldset>
            </div>
            <form id="validate-form" class="block-content form" action="" method="post">
                <div class="_100">
                    <p><label for="textfield">Textfield</label><input id="textfield" name="textfield" class="required"
                                                                      type="text" value=""/></p>
                </div>

                <div class="_100">
                    <p><label for="textarea">Textarea</label><textarea id="textarea" name="textarea" class="required"
                                                                       rows="5" cols="40"></textarea></p>
                </div>

                <div class="_100">
                    <p><label for="datepicker">Datepicker</label><input id="datepicker" name="datepicker"
                                                                        class="required" type="text" value=""/></p>
                </div>

                <div class="_100">
                    <p>
                        <label for="select">Select</label>
                        <select>
                            <option>Lorem Ipsum</option>
                            <option>Consetetur Sadipscing</option>
                            <option>Eirmod Tempor</option>
                        </select>
                    </p>
                </div>

                <div class="_100">
                    <p>
                        <label for="file">Upload a file</label>
                        <input type="file">
                    </p>
                </div>

                <div class="_50">
                    <p>
                        <span class="label">Radio-Buttons</span>
                        <label><input type="radio" name="radio"/> Dolor sit</label>
                        <label><input type="radio" name="radio"/> Et accusam</label>
                        <label><input type="radio" name="radio"/> Justo duo</label>
                    </p>
                </div>
                <div class="_50">
                    <p>
                        <span class="label">Checkboxes</span>
                        <label><input type="checkbox" name="checkbox"/> Check me</label>
                        <label><input type="checkbox"/> Or me</label>
                        <label><input type="checkbox"/> Lorem ipsum</label>
                    </p>
                </div>

                <div class="clear"></div>
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
                    </ul>
                    <ul class="actions-right">
                        <li><input type="submit" class="button" value="Click here to validate the form!"></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

    <div class="grid_4">
        <div class="block-border">
            <div class="block-header">
                <h1>Form with Fieldsets</h1><span></span>
            </div>
            <form id="form" class="block-content form" action="" method="post">
                <fieldset>
                    <legend>Fieldset #1</legend>
                    <div class="_50">
                        <p><label for="textfield1">Textfield #1</label><input id="textfield1" type="text" value=""/></p>
                    </div>

                    <div class="_50">
                        <p><label for="textfield2">Textfield #2</label><input id="textfield2" type="text" value=""/></p>
                    </div>

                    <div class="_100">
                        <p><label for="textfield2">Textfield #3</label><input id="textfield2" type="text" value=""/></p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Fieldset #2</legend>
                    <p class="inline-small-label">
                        <label for="field4">Textfield #4</label>
                        <input type="text" name="field4">
                    </p>
                    <p class="inline-small-label">
                        <label for="field5">Textfield #5</label>
                        <input type="text" name="field5">
                    </p>
                </fieldset>

                <fieldset>
                    <legend>Fieldset #3</legend>
                    <div class="_100">
                        <p class="inline-small-label">
                            <span class="label">Select #1</span>
                            <select>
                                <option>Lorem Ipsum</option>
                                <option>Consetetur Sadipscing</option>
                                <option>Eirmod Tempor</option>
                            </select>
                        </p>
                    </div>

                </fieldset>

                <div class="block-actions">
                    <ul class="actions-left">
                        <li><a class="close-toolbox button red" href="javascript:void(0);">Reset</a></li>
                    </ul>
                    <ul class="actions-right">
                        <li><a class="close-toolbox button" href="javascript:void(0);">Create it!</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>


    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->
 
 