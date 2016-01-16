<?php $this->extend('/Common/Inscricaos/ver_inscricoes_aluno')?>


<?php echo $this->start('main-actions')?>
<div class="col-sm-3">
    <?php if(isset($matricula['Matricula'])):?>
    <?php echo $this->Html->link($this->Html->image('icons/student/edit-student.png') . "<br />Nova Inscricao",
        [
            'controller' => 'inscricaos',
            'action'     => 'inscrever',
            'faculdade'  => true,
            $aluno['Aluno']['id'],
            $matricula['Matricula']['id']
        ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
</div>
    <div class="col-sm-3">
        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Imprimir Comprovativo",
            [
                'controller' => 'inscricaos',
                'action'     => 'print_comprovativo_inscricao',
                $aluno['Aluno']['id'],
                'faculdade'  => true
            ], ['target' => 'blank', 'escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
    <div class="col-sm-3">
        <?php echo $this->Html->link($this->Html->image('icons/student/edit-student.png') . "<br />Inscrever em outro Plano de Estudos",
            [
                'controller' => 'inscricaos',
                'action'     => 'inscrever_todos_planos_estudos',
                'faculdade'  => true,
                $aluno['Aluno']['id'],
                $matricula['Matricula']['id']
            ], ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
    </div>
<?php else:?>

<?php endif;?>

<?php echo $this->end()?>
