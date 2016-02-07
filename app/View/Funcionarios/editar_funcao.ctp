<?php
    /**
     * View do Perfil do Aluno
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.estudantes
     * @version       OpenSGA v 0.5.0
     * @since         OpenSGA v 0.1.0
     *
     */
?>

<?php

    $this->Html->addCrumb(__('Funcionarios'), '/alunos');
    $this->Html->addCrumb($funcionario['Entidade']['name'], '#');
    $this->Html->addCrumb(__('Editar Função'), '#');
?>

<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/student/edit-student.png') . "Editar Perfil",
                                [
                                        'controller' => 'funcionarios',
                                        'action'     => 'editar_funcionario',
                                        $funcionario['Funcionario']['id'],
                                ], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "Alterar/Adicionar Função",
                                [
                                        'controller' => 'funcionarios',
                                        'action'     => 'editar_funcao',
                                        $funcionario['Funcionario']['id'],
                                ], ['escape' => false]) ?>
                    </li>

                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="grid_6">
        <div class="block-border" id="tab-panel-2">
            <?php echo $this->Form->create('Aluno',
                    ['enctype' => 'multipart/form-data', 'class' => 'block-content form']); ?>

            <fieldset>
                <legend>Informação Pessoal</legend>
                <div class="_30">
                    <p>
                        <label for="textfield">Nome Completo</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['name']); ?></span>

                    </p>
                </div>
                <div class="_30">
                    <p><label for="textfield">Data de Nascimento</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['data_nascimento']); ?></span>
                    </p>
                </div>
                <div class="_30">
                    <p><label for="textfield">Sexo</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['Genero']['name']); ?></span>
                    </p>
                </div>
                <div class="_50">
                    <p><label for="textfield">Nome do Pai</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['nome_pai']); ?></span>
                    </p>
                </div>
                <div class="_50">
                    <p><label for="textfield">Nome da mae</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['nome_mae']); ?></span>
                </div>
                <div class="_30">
                    <p><label for="textfield">Nacionalidade</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['PaisNascimento'],
                                    'name'); ?></span>
                </div>
                <div class="_30">
                    <p><label for="textfield">Provincia</label>
                        <span class="data-data">
                            <?php echo $this->Print->printField($funcionario['Entidade']['provincia_nascimento']);
                            ?>
                        </span>
                    </p>
                </div>
                <div class="_30">
                    <p><label for="textfield">Cidade</label>
                        <span class="data-data">
                            <?php echo $this->Print->printField($funcionario['Entidade']['cidade_nascimento']);
                            ?>
                        </span>
                    </p>
                </div>
                <div class="_30">
                    <p><label for="textfield">Tipo/Nr DocumentoIdentificacao de Identidade</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['DocumentoIdentificacao'],
                                            'name') . "/" . $this->Print->printField($funcionario['Entidade']['documento_identificacao_num']); ?></span>
                </div>
                <div class="_30">
                    <p><label for="textfield">Data de Emissao</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['documento_identificacao_data']); ?></span>
                    </p>
                </div>
                <div class="_30">
                    <p><label for="textfield">Local de Emissao</label>
                        <span class="data-data"><?php echo $this->Print->printField($funcionario['Entidade']['documento_identificacao_local_emissao']); ?></span>
                    </p>
                </div>
            </fieldset>
            <div class="clear"></div>
            </form>
        </div>
    </div>
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1>
                    <?php echo __('Dados da Requisição') ?>
                </h1>
                <span></span>
            </div>
            <?php echo $this->Form->create('FuncionariosFuncaoProfissional',
                    ['class' => 'block-content form', 'inputDefaults' => ['before' => '<p>', 'after' => '</p>']]); ?>
            <?php echo $this->Form->input('funcao_profissional_id', [
                    'label'   => __('Documento/Tipo de Requisição'),
                    'div'     => '_50',
                    'class'   => 'required',
                    'size'    => 45,
                    'default' => 1,
            ]); ?>
            <?php echo $this->Form->input('nova_funcao_funcionario',
                    ['label' => __('Outros tipos de Requisição'), 'div' => '_50', 'class' => 'text']); ?>


            <?php echo $this->Form->hidden('funcionario_id', ['value' => $funcionario['Funcionario']['id']]); ?>


            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Requisições'),
                                ['controller' => 'cursos', 'action' => 'index'], ['class' => 'button red']) ?>
                    </li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?>
                    </li>
                </ul>
            </div>
            </form>
        </div>
    </div>


</div>
<div class="clear height-fix"></div>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
/*
* Tabs
*/

$("#tab-panel-1").createTabs();

$('#table-ia').dataTable({"iDisplayLength": 5});
$('#table-iap').dataTable({"iDisplayLength": 5});
$('#table-tc').dataTable({
"bSort": false,
"iDisplayLength": 5,
"aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
});
<?php $this->Html->scriptEnd(); ?>
<?php //debug($todas_inscricoes); ?>

