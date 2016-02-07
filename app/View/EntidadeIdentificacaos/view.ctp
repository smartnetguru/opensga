<div class="entidadeIdentificacaos view">
    <h2><?php echo __('Entidade Identificacao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($entidadeIdentificacao['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $entidadeIdentificacao['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Documento Identificacao'); ?></dt>
        <dd>
            <?php echo $this->Html->link($entidadeIdentificacao['DocumentoIdentificacao']['name'], [
                    'controller' => 'documento_identificacaos',
                    'action'     => 'view',
                    $entidadeIdentificacao['DocumentoIdentificacao']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Emissao'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['data_emissao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Validade'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['data_validade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Numero'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['numero']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($entidadeIdentificacao['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $entidadeIdentificacao['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Local Emissao'); ?></dt>
        <dd>
            <?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['local_emissao']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Entidade Identificacao'),
                    ['action' => 'edit', $entidadeIdentificacao['EntidadeIdentificacao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Entidade Identificacao'),
                    ['action' => 'delete', $entidadeIdentificacao['EntidadeIdentificacao']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $entidadeIdentificacao['EntidadeIdentificacao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidade Identificacaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade Identificacao'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Documento Identificacaos'),
                    ['controller' => 'documento_identificacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Documento Identificacao'),
                    ['controller' => 'documento_identificacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
