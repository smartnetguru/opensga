<div class="tipoFuncionarios view">
    <h2><?php echo __('Tipo Funcionario'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($tipoFuncionario['TipoFuncionario']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($tipoFuncionario['TipoFuncionario']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Tipo Funcionario'),
                    ['action' => 'edit', $tipoFuncionario['TipoFuncionario']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Tipo Funcionario'),
                    ['action' => 'delete', $tipoFuncionario['TipoFuncionario']['id']], [],
                    __('Are you sure you want to delete # %s?', $tipoFuncionario['TipoFuncionario']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipo Funcionarios'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Funcionario'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcionarios'),
                    ['controller' => 'funcionarios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcionario'),
                    ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Funcionarios'); ?></h3>
    <?php if (!empty($tipoFuncionario['Funcionario'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Grau Academico Id'); ?></th>
                <th><?php echo __('Cargo Id'); ?></th>
                <th><?php echo __('Superior Hierarquico'); ?></th>
                <th><?php echo __('Data Inicio'); ?></th>
                <th><?php echo __('Tipo Funcionario Id'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Unidade Organica Id'); ?></th>
                <th><?php echo __('Funcao Profissional Id'); ?></th>
                <th><?php echo __('Categoria Funcionario Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($tipoFuncionario['Funcionario'] as $funcionario): ?>
                <tr>
                    <td><?php echo $funcionario['id']; ?></td>
                    <td><?php echo $funcionario['user_id']; ?></td>
                    <td><?php echo $funcionario['grau_academico_id']; ?></td>
                    <td><?php echo $funcionario['cargo_id']; ?></td>
                    <td><?php echo $funcionario['superior_hierarquico']; ?></td>
                    <td><?php echo $funcionario['data_inicio']; ?></td>
                    <td><?php echo $funcionario['tipo_funcionario_id']; ?></td>
                    <td><?php echo $funcionario['codigo']; ?></td>
                    <td><?php echo $funcionario['created']; ?></td>
                    <td><?php echo $funcionario['modified']; ?></td>
                    <td><?php echo $funcionario['entidade_id']; ?></td>
                    <td><?php echo $funcionario['unidade_organica_id']; ?></td>
                    <td><?php echo $funcionario['funcao_profissional_id']; ?></td>
                    <td><?php echo $funcionario['categoria_funcionario_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'funcionarios', 'action' => 'view', $funcionario['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'funcionarios', 'action' => 'edit', $funcionario['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']], [],
                                __('Are you sure you want to delete # %s?', $funcionario['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Funcionario'),
                        ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
