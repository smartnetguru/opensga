<?php
    /**
     * Formulário de registro de dados do docente
     *
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.docentes.view
     * @version       OpenSGA v 0.5.0
     * @since         OpenSGA v 0.1.0.0
     *
     */
    $this->Html->addCrumb('Pessoas', '/entidades');
    $this->Html->addCrumb('Docentes', '/docentes');
    $this->Html->addCrumb('Adicionar Docente', '/docentes/adicionar_docentes');
?>

<?php
    /**
     * @todo Optimizar os select boxes
     *
     */
?>

    <div class="container_12">
        <div class="grid_12">
            <div class="block-border">
                <div class="block-content">
                    <ul class="shortcut-list">
                        <li>
                            <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Docentes"),
                                    ['controller' => 'docentes', 'action' => 'index'], ['escape' => false]) ?>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- Formulario de Cadastro-->
        <div class="grid_12">
            <div class="block-border">
                <div class="block-header">
                    <h1><?php echo __('Registro de Novo Docente') ?></h1><span></span>
                </div>

                <?php echo $this->Form->create('Docente', [
                        'enctype'       => 'multipart/form-data',
                        'class'         => 'block-content form',
                        'inputDefaults' => ['before' => '<p>', 'after' => '</p>'],
                ]); ?>
                <fieldset>
                    <legend><?php echo __('Informação Pessoal') ?></legend>
                    <?php echo $this->Form->input('Entidade.apelido',
                            ['label' => __('Apelido'), 'div' => '_25', 'class' => 'text']); ?>
                    <?php echo $this->Form->input('Entidade.nomes',
                            ['label' => __('Outros Nomes'), 'div' => '_50', 'class' => 'text']); ?>
                    <?php echo $this->Form->input('Entidade.genero_id', [
                            'label'            => __('Sexo'),
                            'div'              => '_25',
                            'data-placeholder' => 'Seleccione',
                            'empty'            => true,
                    ]); ?>
                    <?php echo $this->Form->input('Entidade.data_nascimento', [
                            'label' => __('Data de Nascimento'),
                            'div'   => '_30',
                            'id'    => 'dataNascimento',
                            'type'  => 'text',
                    ]); ?>
                    <?php echo $this->Form->input('Entidade.nome_pai',
                            ['label' => __('Nome do Pai'), 'div' => '_30', 'class' => 'text']); ?>
                    <?php echo $this->Form->input('Entidade.nome_mae',
                            ['label' => __('Nome da Mãe'), 'div' => '_30', 'class' => 'text']); ?>
                    <?php echo $this->Form->input('Entidade.pais_nascimento', [
                            'label'   => __('Pais de Nascimento'),
                            'div'     => '_30',
                            'default' => 152,
                            'id'      => 'paisNascimento',
                            'options' => $paises,
                    ]); ?>
                    <?php echo $this->Form->input('Entidade.provincia_nascimento', [
                            'label'   => __('Província de Nascimento'),
                            'div'     => '_30',
                            'id'      => 'provinciaNascimento',
                            'empty'   => true,
                            'options' => $provincias,
                    ]); ?>
                    <?php echo $this->Form->input('Entidade.cidad_nascimento', [
                            'label'   => 'Cidade de Nascimento',
                            'div'     => '_30',
                            'id'      => 'cidadeNascimento',
                            'empty'   => true,
                            'options' => $cidades,
                    ]); ?>
                </fieldset>


                <fieldset>
                    <legend><?php echo __('Detalhes de Docência') ?></legend>
                    <?php echo $this->Form->input('Docente.unidade_organica_id',
                            ['label' => __('Unidade Orgânica'), 'div' => '_50', 'id' => 'cursoid']); ?>
                    <?php echo $this->Form->input('Docente.docente_categoria_id',
                            ['label' => __('Categoria Académica'), 'div' => '_50']); ?>
                    <?php echo $this->Form->input('Docente.docente_funcao_id',
                            ['label' => __('Função Profissional'), 'div' => '_50']); ?>
                    <?php echo $this->Form->input('Docente.regime_trabalho_id',
                            ['label' => __('Regime de Trabalho'), 'div' => '_50']); ?>
                </fieldset>

                <fieldset>
                    <legend><?php echo __('Detalhes de Identificação') ?></legend>
                    <?php echo $this->Form->input('EntidadeIdentificacao.documento_identificacao_id', [
                            'label'   => 'Tipo de Documento',
                            'div'     => '_30',
                            'options' => $documento_identificacaos,
                    ]); ?>
                    <?php echo $this->Form->input('EntidadeIdentificacao.numero',
                            ['label' => 'Número de Documento', 'div' => '_30', 'id' => 'documentoNumero']); ?>
                    <?php echo $this->Form->input('EntidadeIdentificacao.local_emissao',
                            ['label' => 'Local de Emissão', 'div' => '_30', 'id' => 'documentoLocalEmissao']); ?>
                    <div class="clear"></div>
                    <?php echo $this->Form->input('EntidadeIdentificacao.data_emissao', [
                            'label' => 'Data de Emissão',
                            'div'   => '_50',
                            'id'    => 'documentoDataEmissao',
                            'type'  => 'text',
                    ]); ?>
                    <?php echo $this->Form->input('EntidadeIdentificacao.data_validade',
                            ['label' => 'Data de Validade', 'div' => '_50', 'id' => 'documentoDataValidade']); ?>
                </fieldset>
                <fieldset>
                    <legend><?php echo __('Detalhes de domicilio') ?></legend>
                    <?php echo $this->Form->input('EntidadeContacto.11',
                            ['label' => 'País onde mora', 'div' => '_30', 'options' => $paises]); ?>
                    <?php echo $this->Form->input('EntidadeContacto.10',
                            ['label' => 'Província onde mora', 'div' => '_30', 'options' => $provincias]); ?>
                    <?php echo $this->Form->input('EntidadeContacto.9',
                            ['label' => 'Cidade onde mora', 'div' => '_30', 'options' => $cidades]); ?>
                    <div class="clear"></div>
                    <?php echo $this->Form->input('EntidadeContacto.6',
                            ['label' => 'Bairro', 'div' => '_30', 'class' => 'txt']); ?>
                    <?php echo $this->Form->input('EntidadeContacto.5',
                            ['label' => 'Avenida/Rua', 'div' => '_30', 'class' => 'txt']); ?>
                    <?php echo $this->Form->input('EntidadeContacto.8',
                            ['label' => 'Caixa Postal', 'div' => '_30', 'class' => 'txt']); ?>
                    <div class="clear"></div>
                    <?php echo $this->Form->input('EntidadeContacto.4',
                            ['label' => 'Telefone', 'div' => '_30', 'class' => 'txt']); ?>
                    <?php echo $this->Form->input('EntidadeContacto.2',
                            ['label' => 'Telemovel', 'div' => '_30', 'class' => 'txt']); ?>
                    <?php echo $this->Form->input('EntidadeContacto.1',
                            ['label' => 'Email Pessoal', 'div' => '_30', 'class' => 'txt']); ?>
                </fieldset>

                <fieldset>
                    <legend><?php echo __('Observacoes') ?></legend>
                    <?php echo $this->Form->input('Entidade.detalhes', [
                            'label' => __('Detalhes adicionais'),
                            'div'   => __('_100'),
                            'class' => 'text',
                            'cols'  => 80,
                    ]); ?>
                </fieldset>
                <div class="clear"></div>
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><?php echo $this->Html->link(__('Lista de Docentes'),
                                    ['controller' => 'docentes', 'action' => 'index'],
                                    ['class' => 'button red']) ?></li>
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
    $this->Js->get('#cursoID')->event('change', $this->Js->request([
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

    $this->Js->get('#paisNascimentoID')->event('change', $this->Js->request([
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

    $this->Js->get('#provinciaNascimentoID')->event('change', $this->Js->request([
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

    $( "#dataNascimento" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
    $( "#documentoDataEmissao" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
    $( "#documentoDataValidade" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
    });
<?php $this->Html->scriptEnd(); ?>