<div class="bolsaPedidos view">
    <h2><?php echo __('Bolsa Pedido'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Aluno'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bolsaPedido['Aluno']['id'],
                    ['controller' => 'alunos', 'action' => 'view', $bolsaPedido['Aluno']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Lectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bolsaPedido['AnoLectivo']['codigo'],
                    ['controller' => 'ano_lectivos', 'action' => 'view', $bolsaPedido['AnoLectivo']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Bolsa Bolsa'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bolsaPedido['BolsaBolsa']['id'],
                    ['controller' => 'bolsa_bolsas', 'action' => 'view', $bolsaPedido['BolsaBolsa']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bolsaPedido['EstadoObjecto']['name'],
                    ['controller' => 'estado_objectos', 'action' => 'view', $bolsaPedido['EstadoObjecto']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Bolsa Tipo Bolsa'); ?></dt>
        <dd>
            <?php echo $this->Html->link($bolsaPedido['BolsaTipoBolsa']['name'],
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'view', $bolsaPedido['BolsaTipoBolsa']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Pedido'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['data_pedido']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nivel Estudante'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['nivel_estudante']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipo Bolsa Actual'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['tipo_bolsa_actual']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Observacoes'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['observacoes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Agregado Familiar'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['agregado_familiar']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Irmaos Estudantes'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['irmaos_estudantes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Irmaos Trabalhadores'); ?></dt>
        <dd>
            <?php echo h($bolsaPedido['BolsaPedido']['irmaos_trabalhadores']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Bolsa Pedido'),
                    ['action' => 'edit', $bolsaPedido['BolsaPedido']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Bolsa Pedido'),
                    ['action' => 'delete', $bolsaPedido['BolsaPedido']['id']], [],
                    __('Are you sure you want to delete # %s?', $bolsaPedido['BolsaPedido']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Pedidos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Pedido'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Ano Lectivos'),
                    ['controller' => 'ano_lectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Ano Lectivo'),
                    ['controller' => 'ano_lectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Bolsas'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Bolsa'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Bolsa Bolsas'); ?></h3>
    <?php if (!empty($bolsaPedido['BolsaBolsa'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Aluno Id'); ?></th>
                <th><?php echo __('Bolsa Pedido Id'); ?></th>
                <th><?php echo __('Anolectivo Id'); ?></th>
                <th><?php echo __('Banco Id'); ?></th>
                <th><?php echo __('Nib'); ?></th>
                <th><?php echo __('Conta Bancaria'); ?></th>
                <th><?php echo __('Bolsa Fonte Bolsa Id'); ?></th>
                <th><?php echo __('Processo Bolsa'); ?></th>
                <th><?php echo __('Data Atribuicao'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Bolsa Criador Conta Id'); ?></th>
                <th><?php echo __('Bolsa Estado Bolsa Id'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('Bolsa Resultado Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($bolsaPedido['BolsaBolsa'] as $bolsaBolsa): ?>
                <tr>
                    <td><?php echo $bolsaBolsa['id']; ?></td>
                    <td><?php echo $bolsaBolsa['aluno_id']; ?></td>
                    <td><?php echo $bolsaBolsa['bolsa_pedido_id']; ?></td>
                    <td><?php echo $bolsaBolsa['anolectivo_id']; ?></td>
                    <td><?php echo $bolsaBolsa['banco_id']; ?></td>
                    <td><?php echo $bolsaBolsa['nib']; ?></td>
                    <td><?php echo $bolsaBolsa['conta_bancaria']; ?></td>
                    <td><?php echo $bolsaBolsa['bolsa_fonte_bolsa_id']; ?></td>
                    <td><?php echo $bolsaBolsa['processo_bolsa']; ?></td>
                    <td><?php echo $bolsaBolsa['data_atribuicao']; ?></td>
                    <td><?php echo $bolsaBolsa['created']; ?></td>
                    <td><?php echo $bolsaBolsa['modified']; ?></td>
                    <td><?php echo $bolsaBolsa['bolsa_criador_conta_id']; ?></td>
                    <td><?php echo $bolsaBolsa['bolsa_estado_bolsa_id']; ?></td>
                    <td><?php echo $bolsaBolsa['created_by']; ?></td>
                    <td><?php echo $bolsaBolsa['modified_by']; ?></td>
                    <td><?php echo $bolsaBolsa['codigo']; ?></td>
                    <td><?php echo $bolsaBolsa['bolsa_resultado_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'bolsa_bolsas', 'action' => 'view', $bolsaBolsa['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'bolsa_bolsas', 'action' => 'edit', $bolsaBolsa['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'bolsa_bolsas', 'action' => 'delete', $bolsaBolsa['id']], [],
                                __('Are you sure you want to delete # %s?', $bolsaBolsa['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Bolsa Bolsa'),
                        ['controller' => 'bolsa_bolsas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
