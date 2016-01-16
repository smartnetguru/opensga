<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.5.0.0

 *
 */
?>


<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li><?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Cursos"), array('controller' => 'cursos', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1>
                    <?php echo __('Dados do Estudante') ?>
                </h1>
                <span></span>
            </div>
            <?php echo $this->Form->create('RequisicaoPedido', array('class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>
            <div class="_50">
                <p>
                    <label for="textfield"><?php echo __('Número de Estudante') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Aluno']['codigo']); ?></span>

                </p>
            </div>
            <div class="_50">
                <p>
                    <label for="textfield"><?php echo __('Nome Completo') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Entidade']['name']); ?></span>

                </p>
            </div>
            <div class="_30">
                <p>
                    <label for="textfield"><?php echo __('Data de Nascimento') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Entidade']['data_nascimento']); ?></span>

                </p>
            </div>
            <div class="_30">
                <p>
                    <label for="textfield"><?php echo __('Sexo') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Entidade']['Genero']['name']); ?></span>

                </p>
            </div>
            <div class="_30">
                <p>
                    <label for="textfield"><?php echo __('Telemóvel') ?></label>
                    <span class="data-data"><?php echo $celular ?></span>

                </p>
            </div>
            <div class="_30">
                <p>
                    <label for="textfield"><?php echo __('Faculdade/Departamento') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Curso']['UnidadeOrganica']['name']); ?></span>

                </p>
            </div>
            <div class="_30">
                <p>
                    <label for="textfield"><?php echo __('Curso') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Curso']['name']); ?></span>

                </p>
            </div>
            <div class="_30">
                <p>
                    <label for="textfield"><?php echo __('Ano de Ingresso') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Aluno']['ano_ingresso']); ?></span>

                </p>
            </div>
            <div class="_100">
                <p>
                    <label for="textfield"><?php echo __('Estado Actual') ?></label>
                    <?php
                    foreach ($is_regular as $ir) {
                        ?>
                        <span class="<?php echo $classe_estado ?>"><?php echo $this->Print->printField($ir['mensagem']); ?></span>
                        <?php
                    }
                    ?>


                </p>
            </div>

            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Adicionar/Editar Contactos'), array('plugin' => 'requisicoes', 'controller' => 'requisicoes_pedidos', 'action' => 'nova_requisicao'), array('class' => 'button red')) ?>
                    </li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Html->link(__('Renovar Matricula'), array('plugin' => false, 'controller' => 'alunos', 'action' => 'renovar_matricula', $aluno['Aluno']['id']), array('class' => 'button blue')) ?></li>
                    <li><?php echo $this->Html->link(__('Concluir Nivel'), array('plugin' => false, 'controller' => 'alunos', 'action' => 'concluir_nivel', $aluno['Aluno']['id']), array('class' => 'button blue')) ?></li>
                </ul>
            </div>
            </form>
        </div>
    </div>
    <?php if ($celular) { ?>
        <div class="grid_6">
            <div class="block-border">
                <div class="block-header">
                    <h1>
                        <?php echo __('Dados da SMS') ?>
                    </h1>
                    <span></span>
                </div>

                <?php echo $this->Form->create('Aluno', array('enctype' => 'multipart/form-data', 'class' => 'block-content form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>

                <?php echo $this->Form->input('mensagem', array('type' => 'textarea', 'label' => __('Mensagem'), 'div' => '_100', 'class' => 'required','maxlength'=>160)); ?>

                <?php echo $this->Form->unlockField('mudanca_via_exame'); ?>
                <?php echo $this->Form->hidden('aluno_id', array('value' => $aluno['Aluno']['id'])); ?>
                <?php echo $this->Form->hidden('funcionario_id', array('value' => $funcionario['Funcionario']['id'])); ?>



                <div class="clear"></div>
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><?php echo $this->Html->link(__('Voltar ao Perfil do Aluno'), array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno['Aluno']['id']), array('class' => 'button red')) ?></li>
                    </ul>
                    <ul class="actions-right">


                        <li><?php echo $this->Form->end(array('label' => __('ENVIAR', true), 'class' => 'button')); ?></li>

                    </ul>
                </div>
                </form>
            </div>
        </div>
    <?php } ?>


    <div class="clear height-fix"></div>

</div>
<!--! end of #main-content -->


<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>
$(function() {

$( "#dataMudanca" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });

});
<?php $this->Html->scriptEnd(); ?>
