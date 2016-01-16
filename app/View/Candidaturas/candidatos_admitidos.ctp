<?php
$this->Html->addCrumb('Candidatos', '#');
$this->Html->addCrumb('Lista de Candidatos', '#');
?>




<div id="container12" class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Importar Candidatos"), array('controller' => 'candidaturas', 'action' => 'importar_candidatos'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png') . __("Imprimir"), array('controller' => 'candidaturas', 'action' => 'print_lista_admitidos'), array('escape' => false)) ?>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Candidatos Nao Matriculados') ?></h1><span></span>
            </div>
            <div class="block-content">
                <div id="tabelaAjax" class="dataTables_wrapper">
                    <table id="unidadeOrganicas" class="table">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('numero_candidato',__('Numero de Candidato')); ?></th>
                                <th><?php echo $this->Paginator->sort('numero_estudante',__('Numero de Estudante')); ?></th>
                                <th><?php echo $this->Paginator->sort('apelido',__('Apelido')); ?></th>
                                <th><?php echo $this->Paginator->sort('nomes',__('Nome')); ?></th>
                                <th><?php echo $this->Paginator->sort('aluno_via_admissao_id',__('Via de Admissao')); ?></th>
                                <th><?php echo $this->Paginator->sort('escola_nivel_medio_id',__('Instituicao de Origem')); ?></th>
                                <th><?php echo $this->Paginator->sort('curso_id',__('Curso de Ingresso')); ?></th>
                                <th><?php echo $this->Paginator->sort('unidade_organica_id',__('Unidade Organica')); ?></th>
                                <th><?php echo $this->Paginator->sort('genero_id',__('Sexo')); ?></th>
                                <th><?php echo $this->Paginator->sort('ano_conclusao_nivel_medio',__('Ano de Conclusao do Nivel Anterior')); ?></th>
                                <th><?php echo $this->Paginator->sort('provincia_id',__('Provincia de Origem')); ?></th>
                                <th><?php echo $this->Paginator->sort('ano_candidatura',__('Ano de Candidatura')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($candidaturas as $candidatura):
                                $class = "odd";
                                if ($i % 2 == 0)
                                    $class = "even";
                                $i++;
                                ?>
                                <tr class="<?php echo $class ?>">
                                    <td><?php echo h($candidatura['Candidatura']['numero_candidato']); ?>&nbsp;</td>
                                    <td><?php echo h($candidatura['Candidatura']['numero_estudante']); ?>&nbsp;</td>
                                    <td><?php echo h($candidatura['Candidatura']['apelido']); ?>&nbsp;</td>
                                    <td><?php echo h($candidatura['Candidatura']['nomes']); ?>&nbsp;</td>
                                    <td>
                                        <?php echo $this->Html->link($candidatura['AlunoViaAdmissao']['name'], array('controller' => 'aluno_via_admissaos', 'action' => 'view', $candidatura['AlunoViaAdmissao']['id'])); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($candidatura['EscolaNivelMedio']['name'], array('controller' => 'escola_nivel_medios', 'action' => 'view', $candidatura['EscolaNivelMedio']['id'])); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($candidatura['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $candidatura['Curso']['id'])); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($candidatura['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $candidatura['UnidadeOrganica']['id'])); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($candidatura['Genero']['name'], array('controller' => 'generos', 'action' => 'view', $candidatura['Genero']['id'])); ?>
                                    </td>
                                    
                                    <td><?php echo h($candidatura['Candidatura']['ano_conclusao_nivel_medio']); ?>&nbsp;</td>
                                    <td>
                                        <?php echo $this->Html->link($candidatura['Provincia']['name'], array('controller' => 'provincias', 'action' => 'view', $candidatura['Provincia']['id'])); ?>
                                    </td>
                                    <td><?php echo h($candidatura['Candidatura']['ano_candidatura']); ?>&nbsp;</td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <?php echo $this->element('table_footer') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div> <!--! end of #main-content -->