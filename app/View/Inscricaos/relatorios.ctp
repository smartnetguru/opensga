<div class="row">
    <div class="action-list col-sm-12">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-bar-chart fa-2x"></i>Inscricoes deste Semestre',
                    ['controller' => 'inscricaos', 'action' => 'relatorio_inscricoes_semestre'], [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>
        </div>
    </div>
</div>
<div class="row">

    <div id="inscritos-semestre"></div>

    <?php $chart->printScripts(); ?>

    <script type="text/javascript">
        <?php echo $chart->render("chart");?>
    </script>
</div>
