<?php
$this->extend('/Common/index_common');
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Inscever Aluno', [
                'controller' => 'alunos',
                'action'     => 'pesquisa_aluno_action',
                'ver_inscricoes_aluno',
                'inscricaos',
            ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Inscever Aluno Externo', [
                'controller' => 'alunos',
                'action'     => 'pesquisa_aluno_externo_action',
                'inscrever_aluno_externo',
                'inscricaos',
            ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-bar-chart"></i>	Relatorios', [
                'controller' => 'inscricaos',
                'action'     => 'relatorios',
            ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Inscrições Activas')) ?>

<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo __('Número de Estudante'); ?></th>
        <th><?php echo __('Nome do Estudante'); ?></th>
        <th><?php echo __('Disciplina'); ?></th>
        <th><?php echo __('Curso'); ?></th>
        <th><?php echo __('Ano Lectivo'); ?></th>
        <th><?php echo __('Semestre'); ?></th>
        <th><?php echo __('Data'); ?></th>
        <th><?php echo __('Opções'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
foreach ($inscricaos as $inscricao):
    ?>
    <tr>


        <td><?php echo $this->Html->link($inscricao['Aluno']['codigo'], [
                'controller' => 'inscricaos',
                'action'     => 'ver_inscricoes_aluno',
                $inscricao['Aluno']['id']
            ]); ?>&nbsp;</td>
        <td><?php echo $inscricao['Aluno']['Entidade']['name']; ?>&nbsp;</td>
        <td><?php echo $inscricao['Turma']['Disciplina']['name']; ?>&nbsp;</td>
        <td><?php echo $inscricao['Turma']['Curso']['name']; ?>&nbsp;</td>
        <td><?php echo $inscricao['Turma']['AnoLectivo']['ano']; ?>&nbsp;</td>
        <td><?php echo $inscricao['Turma']['SemestreLectivo']['semestre']; ?>&nbsp;</td>
        <td><?php echo $this->Time->format('d-m-Y H:i:s', $inscricao['Inscricao']['data']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link('<i class="fa fa-eye"></i>Ver Detalhes',
                ['controller' => 'inscricaos', 'action' => 'ver_detalhes_inscricao', $inscricao['Inscricao']['id']],
                ['class' => 'btn btn btn-green', 'escape' => false])?>
            <?php if ($this->Time->isToday($inscricao['Inscricao']['created'])) {
                echo $this->Form->postLink(__('Apagar| '),
                    ['action' => 'apagar_inscricao', $inscricao['Inscricao']['id'], 'faculdade' => true], null,
                    __('Tem Certeza que pretende apagar a inscricao de   %s?',
                        $inscricao['Turma']['Disciplina']['name']));
            }?>
            <?php echo $this->Form->postLink(__('Anular ') . '| ',
                ['action' => 'anular_inscricao', $inscricao['Inscricao']['id'], 'faculdade' => true], null,
                __('Tem Certeza que pretende ANULAR a inscricao de   %s?', $inscricao['Turma']['Disciplina']['name']));
            ?>

        </td>

    </tr>
<?php
endforeach;
?>
<?php $this->end() ?>