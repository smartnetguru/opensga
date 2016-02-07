<div class="escolaNivelMedios index">
    <h2><?php echo __('Escola Nivel Medios'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('distrito_id'); ?></th>
            <th><?php echo $this->Paginator->sort('provincia_id'); ?></th>
            <th><?php echo $this->Paginator->sort('pais_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($escolaNivelMedios as $escolaNivelMedio): ?>
                <tr>
                    <td><?php echo h($escolaNivelMedio['EscolaNivelMedio']['id']); ?>&nbsp;</td>
                    <td><?php echo h($escolaNivelMedio['EscolaNivelMedio']['name']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($escolaNivelMedio['Distrito']['name'], [
                                'controller' => 'cidades',
                                'action'     => 'view',
                                $escolaNivelMedio['Distrito']['id'],
                        ]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($escolaNivelMedio['Provincia']['name'], [
                                'controller' => 'provincias',
                                'action'     => 'view',
                                $escolaNivelMedio['Provincia']['id'],
                        ]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($escolaNivelMedio['Pais']['name'],
                                ['controller' => 'paises', 'action' => 'view', $escolaNivelMedio['Pais']['id']]); ?>
                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $escolaNivelMedio['EscolaNivelMedio']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $escolaNivelMedio['EscolaNivelMedio']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $escolaNivelMedio['EscolaNivelMedio']['id']], null,
                                __('Are you sure you want to delete # %s?',
                                        $escolaNivelMedio['EscolaNivelMedio']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
            ]);
        ?>    </p>

    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), [], null, ['class' => 'prev disabled']);
            echo $this->Paginator->numbers(['separator' => '']);
            echo $this->Paginator->next(__('next') . ' >', [], null, ['class' => 'next disabled']);
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Escola Nivel Medio'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Cidades'), ['controller' => 'cidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Distrito'), ['controller' => 'cidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Provincias'),
                    ['controller' => 'provincias', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Provincia'),
                    ['controller' => 'provincias', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Paises'), ['controller' => 'paises', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Pais'), ['controller' => 'paises', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Aluno Nivel Medios'),
                    ['controller' => 'aluno_nivel_medios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno Nivel Medio'),
                    ['controller' => 'aluno_nivel_medios', 'action' => 'add']); ?> </li>
    </ul>
</div>
