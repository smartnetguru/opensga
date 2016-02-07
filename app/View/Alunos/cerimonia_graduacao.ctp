<?php
    /**
     * OpenSGA - Sistema de Gestão Académica
     *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
     *
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
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
                    <li><?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Lista de Cursos"),
                                ['controller' => 'cursos', 'action' => 'index'], ['escape' => false]) ?>
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
            <?php echo $this->Form->create('RequisicaoPedido',
                    ['class' => 'block-content form', 'inputDefaults' => ['before' => '<p>', 'after' => '</p>']]); ?>
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
            <div class="_50">
                <p>
                    <label for="textfield"><?php echo __('Data de Nascimento') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Entidade']['data_nascimento']); ?></span>

                </p>
            </div>
            <div class="_50">
                <p>
                    <label for="textfield"><?php echo __('Sexo') ?></label>
                    <span class="data-data"><?php echo $this->Print->printField($aluno['Entidade']['Genero']['name']); ?></span>

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
                    <li><?php echo $this->Html->link(__('Nova Requisição'), [
                                'plugin'     => 'requisicoes',
                                'controller' => 'requisicoes_pedidos',
                                'action'     => 'nova_requisicao',
                        ], ['class' => 'button red']) ?>
                    </li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Html->link(__('Renovar Matricula'), [
                                'plugin'     => false,
                                'controller' => 'alunos',
                                'action'     => 'renovar_matricula',
                                $aluno['Aluno']['id'],
                        ], ['class' => 'button blue']) ?></li>
                    <li><?php echo $this->Html->link(__('Concluir Nivel'), [
                                'plugin'     => false,
                                'controller' => 'alunos',
                                'action'     => 'concluir_nivel',
                                $aluno['Aluno']['id'],
                        ], ['class' => 'button blue']) ?></li>
                </ul>
            </div>
            </form>
        </div>
    </div>

    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1>
                    <?php echo __('Dados do Candidato') ?>
                </h1>
                <span></span>
            </div>

            <?php echo $this->Form->create('CandidatoGraduacao', [
                    'enctype'       => 'multipart/form-data',
                    'class'         => 'block-content form',
                    'inputDefaults' => ['before' => '<p>', 'after' => '</p>'],
            ]); ?>

            <?php echo $this->Form->input('ano_conclusao', [
                    'type'  => 'text',
                    'label' => __('Ano de Conclusão da Parte Curricular'),
                    'div'   => '_30',
                    'class' => 'text',
            ]); ?>
            <?php echo $this->Form->input('data_defesa', [
                    'type'  => 'text',
                    'label' => __('Data da Defesa'),
                    'div'   => '_30',
                    'class' => 'required',
                    'id'    => 'dataDefesa',
            ]); ?>
            <?php echo $this->Form->input('media_defesa',
                    ['label' => __('Média'), 'div' => '_30', 'class' => 'text']); ?>
            <div class="clear"></div>
            <?php echo $this->Form->input('data_nascimento', [
                    'type'    => 'text',
                    'label'   => __('Data de Nascimento'),
                    'div'     => '_30',
                    'class'   => 'required',
                    'id'      => 'dataNascimento',
                    'default' => $aluno['Entidade']['data_nascimento'],
            ]); ?>
            <?php echo $this->Form->input('genero_id', [
                    'options' => $generos,
                    'label'   => __('Sexo'),
                    'div'     => '_30',
                    'class'   => 'required',
                    'default' => $aluno['Entidade']['genero_id'],
            ]); ?>
            <?php echo $this->Form->input('estado_civil_id', [
                    'options' => $estado_civil,
                    'label'   => __('Estado Civil'),
                    'div'     => '_30',
                    'class'   => 'required',
                    'default' => $aluno['Entidade']['estado_civil'],
            ]); ?>
            <div class="clear"></div>
            <?php echo $this->Form->input('pais_nascimento', [
                    'options' => $paises,
                    'label'   => __('Pais de Nascimento'),
                    'div'     => '_30',
                    'class'   => 'required',
                    'default' => $aluno['Entidade']['pais_nascimento'],
            ]); ?>
            <?php echo $this->Form->input('provincia_nascimento', [
                    'options' => $provincias,
                    'label'   => __('Provincia de Nascimento'),
                    'div'     => '_30',
                    'class'   => 'required',
                    'default' => $aluno['Entidade']['provincia_nascimento'],
            ]); ?>
            <?php echo $this->Form->input('distrito_nascimento', [
                    'options' => $cidades,
                    'label'   => __('Distrito de Nascimento'),
                    'div'     => '_30',
                    'class'   => 'required',
                    'default' => $aluno['Entidade']['cidade_nascimento'],
            ]); ?>
            <div class="clear"></div>
            <?php echo $this->Form->input('regime_estudo_id',
                    ['label' => __('Tipo de Estudante'), 'div' => '_30', 'class' => 'required']); ?>
            <?php echo $this->Form->input('regalia_social_id',
                    ['label' => __('Regalia Social'), 'div' => '_30', 'class' => 'required']); ?>
            <?php echo $this->Form->input('telemovel', [
                    'label'   => __('Telemóvel'),
                    'div'     => '_30',
                    'class'   => 'required',
                    'default' => $aluno['Entidade']['telemovel'],
            ]); ?>

            <?php echo $this->Form->input('data_candidatura', [
                    'type'  => 'text',
                    'label' => __('Data de Candidatura'),
                    'div'   => '_50',
                    'class' => 'required',
                    'id'    => 'dataCandidatura',
            ]); ?>
            <?php echo $this->Form->input('cerimonia_graduacao_id',
                    ['label' => __('Cerimónia de Graduação'), 'div' => '_50', 'class' => 'required']); ?>



            <?php echo $this->Form->hidden('aluno_id', ['value' => $aluno['Aluno']['id']]); ?>
            <?php echo $this->Form->hidden('funcionario_id', ['value' => $funcionario['Funcionario']['id']]); ?>


            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Voltar ao Perfil do Aluno'),
                                ['controller' => 'alunos', 'action' => 'perfil_estudante', $aluno['Aluno']['id']],
                                ['class' => 'button red']) ?></li>
                </ul>
                <ul class="actions-right">


                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?></li>

                </ul>
            </div>
            </form>
        </div>
    </div>


    <div class="clear height-fix"></div>

</div>
<!--! end of #main-content -->


<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
$(function() {

$( "#dataDefesa" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
$( "#dataNascimento" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });
$( "#dataCandidatura" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-100:c+1" });

});
<?php $this->Html->scriptEnd(); ?>
