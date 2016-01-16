<?php
/**
 * Formulário de registro de dados do docente
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.docentes.view
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

<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Docentes"), array('controller' => 'docentes', 'action' => 'index'), array('escape' => false)) ?>
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

            <?php echo $this->Form->create('Docente', array('enctype' => 'multipart/form-data', 'class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>
            <fieldset>
                <legend><?php echo __('Informação Pessoal') ?></legend>
                <?php echo $this->Form->input('Entidade.apelido', array('label' => __('Apelido'), 'div' => '_25', 'class' => 'text')); ?>
                <?php echo $this->Form->input('Entidade.nomes', array('label' => __('Outros Nomes'), 'div' => '_50', 'class' => 'text')); ?>
                <?php echo $this->Form->input('Entidade.genero_id', array('label' => __('Sexo'), 'div' => '_25', 'data-placeholder' => 'Seleccione', 'empty' => true)); ?>
                <?php echo $this->Form->input('Entidade.data_nascimento', array('label' => __('Data de Nascimento'), 'div' => '_30', 'id' => 'dataNascimento', 'type' => 'text')); ?>
                <?php echo $this->Form->input('Entidade.nome_pai', array('label' => __('Nome do Pai'), 'div' => '_30', 'class' => 'text')); ?>
                <?php echo $this->Form->input('Entidade.nome_mae', array('label' => __('Nome da Mãe'), 'div' => '_30', 'class' => 'text')); ?>
                <?php echo $this->Form->input('Entidade.pais_nascimento', array('label' => __('Pais de Nascimento'), 'div' => '_30', 'default' => 152, 'id' => 'paisNascimento', 'options' => $paises)); ?>
                <?php echo $this->Form->input('Entidade.provincia_nascimento', array('label' => __('Província de Nascimento'), 'div' => '_30', 'id' => 'provinciaNascimento', 'empty' => true, 'options' => $provincias)); ?>
                <?php echo $this->Form->input('Entidade.cidad_nascimento', array('label' => 'Cidade de Nascimento', 'div' => '_30', 'id' => 'cidadeNascimento', 'empty' => true, 'options' => $cidades)); ?>
            </fieldset>


            <fieldset>
                <legend><?php echo __('Detalhes de Docência') ?></legend>
                <?php echo $this->Form->input('Docente.unidade_organica_id', array('label' => __('Unidade Orgânica'), 'div' => '_50', 'id' => 'cursoid')); ?>
                <?php echo $this->Form->input('Docente.docente_categoria_id', array('label' => __('Categoria Académica'), 'div' => '_50')); ?>
                <?php echo $this->Form->input('Docente.docente_funcao_id', array('label' => __('Função Profissional'), 'div' => '_50')); ?>
                <?php echo $this->Form->input('Docente.regime_trabalho_id', array('label' => __('Regime de Trabalho'), 'div' => '_50')); ?>
            </fieldset>

            <fieldset>
                <legend><?php echo __('Detalhes de Identificação') ?></legend>
                <?php echo $this->Form->input('EntidadeIdentificacao.documento_identificacao_id', array('label' => 'Tipo de Documento', 'div' => '_30', 'options' => $documento_identificacaos)); ?>
                <?php echo $this->Form->input('EntidadeIdentificacao.numero', array('label' => 'Número de Documento', 'div' => '_30', 'id' => 'documentoNumero')); ?>
                <?php echo $this->Form->input('EntidadeIdentificacao.local_emissao', array('label' => 'Local de Emissão', 'div' => '_30', 'id' => 'documentoLocalEmissao')); ?>
                <div class="clear"></div>
                <?php echo $this->Form->input('EntidadeIdentificacao.data_emissao', array('label' => 'Data de Emissão', 'div' => '_50', 'id' => 'documentoDataEmissao', 'type' => 'text')); ?>
                <?php echo $this->Form->input('EntidadeIdentificacao.data_validade', array('label' => 'Data de Validade', 'div' => '_50', 'id' => 'documentoDataValidade')); ?>
            </fieldset>
            <fieldset>
                <legend><?php echo __('Detalhes de domicilio') ?></legend>
                <?php echo $this->Form->input('EntidadeContacto.11', array('label' => 'País onde mora', 'div' => '_30', 'options' => $paises)); ?>
                <?php echo $this->Form->input('EntidadeContacto.10', array('label' => 'Província onde mora', 'div' => '_30', 'options' => $provincias)); ?>
                <?php echo $this->Form->input('EntidadeContacto.9', array('label' => 'Cidade onde mora', 'div' => '_30', 'options' => $cidades)); ?>
                <div class="clear"></div>
                <?php echo $this->Form->input('EntidadeContacto.6', array('label' => 'Bairro', 'div' => '_30', 'class' => 'txt')); ?>
                <?php echo $this->Form->input('EntidadeContacto.5', array('label' => 'Avenida/Rua', 'div' => '_30', 'class' => 'txt')); ?>
                <?php echo $this->Form->input('EntidadeContacto.8', array('label' => 'Caixa Postal', 'div' => '_30', 'class' => 'txt')); ?>
                <div class="clear"></div>
                <?php echo $this->Form->input('EntidadeContacto.4', array('label' => 'Telefone', 'div' => '_30', 'class' => 'txt')); ?>
                <?php echo $this->Form->input('EntidadeContacto.2', array('label' => 'Telemovel', 'div' => '_30', 'class' => 'txt')); ?>
                <?php echo $this->Form->input('EntidadeContacto.1', array('label' => 'Email Pessoal', 'div' => '_30', 'class' => 'txt')); ?>
            </fieldset>

            <fieldset>
                <legend><?php echo __('Observacoes') ?></legend>
                <?php echo $this->Form->input('Entidade.detalhes', array('label' => __('Detalhes adicionais'), 'div' => __('_100'), 'class' => 'text', 'cols' => 80)); ?>
            </fieldset>
            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Docentes'), array('controller' => 'docentes', 'action' => 'index'), array('class' => 'button red')) ?></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'button')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div>

<?php
$this->Js->get('#cursoID')->event('change', $this->Js->request(array(
            'controller' => 'planoestudos',
            'action' => 'getByCurso'
                ), array(
            'update' => '#planoestudoID',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);

$this->Js->get('#paisNascimentoID')->event('change', $this->Js->request(array(
            'controller' => 'provincias',
            'action' => 'getByPais'
                ), array(
            'update' => '#provinciaNascimentoID',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);

$this->Js->get('#provinciaNascimentoID')->event('change', $this->Js->request(array(
            'controller' => 'cidades',
            'action' => 'getByProvincia'
                ), array(
            'update' => '#cidadeNascimentoID',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>
<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>
$(function() {

$( "#dataNascimento" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
$( "#documentoDataEmissao" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
$( "#documentoDataValidade" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
});
<?php $this->Html->scriptEnd(); ?>