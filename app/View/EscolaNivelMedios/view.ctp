<div class="escolaNivelMedios view">
    <h2><?php echo __('Escola Nivel Medio'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($escolaNivelMedio['EscolaNivelMedio']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($escolaNivelMedio['EscolaNivelMedio']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Distrito'); ?></dt>
        <dd>
            <?php echo $this->Html->link($escolaNivelMedio['Distrito']['name'],
                    ['controller' => 'cidades', 'action' => 'view', $escolaNivelMedio['Distrito']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Provincia'); ?></dt>
        <dd>
            <?php echo $this->Html->link($escolaNivelMedio['Provincia']['name'],
                    ['controller' => 'provincias', 'action' => 'view', $escolaNivelMedio['Provincia']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pais'); ?></dt>
        <dd>
            <?php echo $this->Html->link($escolaNivelMedio['Pais']['name'],
                    ['controller' => 'paises', 'action' => 'view', $escolaNivelMedio['Pais']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Escola Nivel Medio'),
                    ['action' => 'edit', $escolaNivelMedio['EscolaNivelMedio']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Escola Nivel Medio'),
                    ['action' => 'delete', $escolaNivelMedio['EscolaNivelMedio']['id']], null,
                    __('Are you sure you want to delete # %s?', $escolaNivelMedio['EscolaNivelMedio']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Escola Nivel Medios'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Escola Nivel Medio'), ['action' => 'add']); ?> </li>
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
<div class="related">
    <h3><?php echo __('Related Aluno Nivel Medios'); ?></h3>
    <?php if (!empty($escolaNivelMedio['AlunoNivelMedio'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Aluno Id'); ?></th>
                <th><?php echo __('Escola Nivel Medio Id'); ?></th>
                <th><?php echo __('Ano Conclusao'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($escolaNivelMedio['AlunoNivelMedio'] as $alunoNivelMedio): ?>
                    <tr>
                        <td><?php echo $alunoNivelMedio['id']; ?></td>
                        <td><?php echo $alunoNivelMedio['aluno_id']; ?></td>
                        <td><?php echo $alunoNivelMedio['escola_nivel_medio_id']; ?></td>
                        <td><?php echo $alunoNivelMedio['ano_conclusao']; ?></td>
                        <td><?php echo $alunoNivelMedio['created']; ?></td>
                        <td><?php echo $alunoNivelMedio['modified']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'aluno_nivel_medios',
                                    'action'     => 'view',
                                    $alunoNivelMedio['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'aluno_nivel_medios',
                                    'action'     => 'edit',
                                    $alunoNivelMedio['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'aluno_nivel_medios',
                                    'action'     => 'delete',
                                    $alunoNivelMedio['id'],
                            ], null, __('Are you sure you want to delete # %s?', $alunoNivelMedio['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Aluno Nivel Medio'),
                        ['controller' => 'aluno_nivel_medios', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
