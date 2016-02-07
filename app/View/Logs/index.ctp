<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Logs do Sistema') ?></h1><span></span>
            </div>
            <div class="block-content">


                <table id="tabela-ajax" class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Responsavel</th>
                        <th>Tipo</th>
                        <th>Secção</th>
                        <th>Model</th>
                        <th>Data</th>
                        <th>Detalhes</th>

                    </tr>
                    </thead>
                    <tbody
                    <?php
                        foreach ($loggers as $logger):

                            ?>

                            <tr>
                                <td><?php echo $logger['Logger']['id']; ?></td>
                                <td><?php echo $this->Auditor->type($logger['Logger']['type']); ?></td>
                                <td><?php echo $logger['Logger']['model_alias']; ?></td>
                                <td><?php echo $logger['Logger']['model_id']; ?></td>
                                <td><?php echo $logger['Logger']['created']; ?></td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__d('auditable', 'View'),
                                            ['action' => 'view', $logger['Logger']['id']]); ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>