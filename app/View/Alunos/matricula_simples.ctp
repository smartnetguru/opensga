<?php
    /**
     * Formulário de registro de dados do estudante
     *
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.estudantes.view
     * @version       OpenSGA v 0.5.0
     * @since         OpenSGA v 0.1.0.0
     *
     */
?>

<?php
    /**
     * @todo Optimizar os select boxes
     * @todo Preencher os tipos de identificacao
     */
?>
<?php
    $grupo = $this->Session->read('Auth.User.group_id');
    $username = $this->Session->read('Auth.User.username');

    $this->Html->addCrumb('Alunos', '/alunos');
    $this->Html->addCrumb('Lista de Alunos', '/alunos/index');

?>

<div class="container_12">
    <!-- Formulario de Cadastro-->
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados do Estudante') ?></h1><span></span>
            </div>

            <?php echo $this->Form->create('Aluno', [
                    'enctype'       => 'multipart/form-data',
                    'class'         => 'block-content form',
                    'inputDefaults' => ['empty' => '---Seleccione---', 'error' => ['class' => 'error']],
            ]); ?>
            <fieldset>
                <legend>Informação Pessoal</legend>


                <div class="_50">
                    <p><label for="textfield">Nome Completo</label><?php echo $this->Form->input('Entidade.name', [
                                'label'    => false,
                                'div'      => false,
                                'class'    => 'required',
                                'disabled' => true,
                                'value'    => $aluno['Entidade']['name'],
                        ]); ?></p>
                </div>
                <div class="_25">
                    <p><label for="textfield">Número de
                            Estudante</label><?php echo $this->Form->input('Aluno.numero_estudante', [
                                'label'    => false,
                                'div'      => false,
                                'disabled' => true,
                                'value'    => $aluno['Aluno']['codigo'],
                        ]); ?></p>
                </div>
                <div class="clear"></div>
                <div class="_30">
                    <p><label for="textfield">Sexo</label><?php echo $this->Form->input('Entidade.genero_id',
                                ['label' => false, 'div' => false]); ?></p>
                </div>
                <div class="_30">
                    <p><label for="textfield">Data de
                            Nascimento</label><?php echo $this->Form->input('Entidade.data_nascimento',
                                ['label' => false, 'div' => false, 'id' => 'datanascimento', 'type' => 'text']); ?></p>
                </div>


                <div class="_30">
                    <p><label for="textfield">Telemovel</label><?php echo $this->Form->input('Entidade.telemovel',
                                ['label' => false, 'div' => false, 'id' => 'cidadeNascimentoID']); ?>
                </div>
                <div class="_30">
                    <p><label for="textfield">Telefone</label><?php echo $this->Form->input('Entidade.telefone',
                                ['label' => false, 'div' => false, 'id' => 'cidadeNascimentoID']); ?>
                </div>


                <div class="_30">
                    <p><label for="textfield">Telefone para
                            Emergencias</label><?php echo $this->Form->input('Aluno.telefone_emergencia',
                                ['label' => false, 'div' => false, 'id' => 'cidadeNascimentoID']); ?>
                </div>
                <div class="_30">
                    <p><label for="textfield">Telemovel para
                            Emergencias</label><?php echo $this->Form->input('Aluno.telemovel_emergencia',
                                ['label' => false, 'div' => false, 'id' => 'cidadeNascimentoID']); ?>
                </div>

            </fieldset>
            <fieldset>
                <legend>Detalhes de Ingresso</legend>
                <div class="_30">
                    <p><label for="textfield">Nome do Curso</label><?php echo $this->Form->input('curso_id',
                                ['label' => false, 'div' => false, 'id' => 'cursoID']); ?></p>
                </div>

                <div class="_30">
                    <p><label for="textfield">Data de Ingresso</label><?php echo $this->Form->input('dataingresso',
                                ['label' => false, 'div' => false, 'id' => 'dataingresso', 'type' => 'text']); ?>

                </div>

            </fieldset>

            <fieldset>
                <legend>Detalhes de Pagamento</legend>
                <div class="_50">
                    <p><label for="textfield">NUmero de Talao</label><?php echo $this->Form->input('lista',
                                ['label' => false, 'div' => false, 'id' => 'cursoID']); ?></p>
                </div>


            </fieldset>
            <fieldset>
                <legend>Detalhes de Identificação</legend>
                <div class="_25">
                    <p><label for="textfield">Tipo de
                            Documento</label><?php echo $this->Form->input('Entidade.documento_identificacao_id',
                                ['label' => false, 'div' => false, 'options' => $documento_identificacaos]); ?></p>
                </div>
                <div class="_25">
                    <p><label for="textfield">Número de
                            Documento</label><?php echo $this->Form->input('Entidade.documento_identificacao_num',
                                ['label' => false, 'div' => false, 'id' => 'cursoID']); ?></p>
                </div>
                <div class="_25">
                    <p><label for="textfield">Data de
                            Emissão</label><?php echo $this->Form->input('Entidade.documento_identificacao_data',
                                ['label' => false, 'div' => false, 'id' => 'dataemissao', 'type' => 'text']); ?></p>
                </div>
                <div class="_25">
                    <p><label for="textfield">Local de
                            Emissão</label><?php echo $this->Form->input('Entidade.documento_identificacao_local_emissao',
                                ['label' => false, 'div' => false, 'id' => 'cursoID']); ?></p>
                </div>
            </fieldset>

            <fieldset>
                <legend>Observacoes</legend>
                <table width="100%">
                    <tr>
                        <td width="100%">
                            <div class="row">
                                <label><?php echo __('Detalhes Adicionais:') ?></label>
                                <div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('detalhes',
                                                    ['label' => false, 'div' => false, 'class' => 'txt', 'cols' => 80]);
                                            ?>
                                            <?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>
										</span>

                                </div>
                            </div>
                            <!--[if !IE]>end row<![endif]-->
                        </td>
                    </tr>
                </table>
            </fieldset>


            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Imprimir Comprovativo'), [
                                'controller' => 'alunos',
                                'action'     => 'matricula_simples',
                                'ext'        => 'pdf',
                                $aluno['Aluno']['id'],
                        ], ['class' => 'button red', 'target' => 'blank']) ?></li>
                    <li><?php echo $this->Html->link(__('Novo Aluno'), ['controller' => 'alunos', 'action' => 'index'],
                                ['class' => 'button red', 'target' => 'blank']) ?></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?> </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div>

<?php
    $this->Js->get('#cursoID')->event('change',
            $this->Js->request([
                    'controller' => 'planoestudos',
                    'action'     => 'getByCurso',
            ], [
                    'update'         => '#planoestudoID',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );

    $this->Js->get('#paisNascimentoID')->event('change',
            $this->Js->request([
                    'controller' => 'provincias',
                    'action'     => 'getByPais',
            ], [
                    'update'         => '#provinciaNascimentoID',
                    'async'          => true,
                    'method'         => 'post',
                    'dataExpression' => true,
                    'data'           => $this->Js->serializeForm([
                            'isForm' => true,
                            'inline' => true,
                    ]),
            ])
    );

    $this->Js->get('#provinciaNascimentoID')->event('change',
            $this->Js->request([
                    'controller' => 'cidades',
                    'action'     => 'getByProvincia',
            ], [
                    'update'         => '#cidadeNascimentoID',
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

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
$(function() {

$( "#dataingresso" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
$( "#datanascimento" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
$( "#dataemissao" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
});
<?php $this->Html->scriptEnd(); ?>
