<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Inscricoes Abertas<span class="badge badge-danger">' . $totalInscricoesAbertas . ' </span>',
                ['controller' => 'inscricaos', 'action' => 'manutencao_inscricoes_abertas'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
</div>