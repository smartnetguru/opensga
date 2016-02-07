<div class="disciplinaUnidadeOrganicas view">
    <h2><?php echo __('Disciplina Unidade Organica'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Disciplina'); ?></dt>
        <dd>
            <?php echo $this->Html->link($disciplinaUnidadeOrganica['Disciplina']['name'], [
                    'controller' => 'disciplinas',
                    'action'     => 'view',
                    $disciplinaUnidadeOrganica['Disciplina']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Unidade Organica'); ?></dt>
        <dd>
            <?php echo $this->Html->link($disciplinaUnidadeOrganica['UnidadeOrganica']['name'], [
                    'controller' => 'unidade_organicas',
                    'action'     => 'view',
                    $disciplinaUnidadeOrganica['UnidadeOrganica']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($disciplinaUnidadeOrganica['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $disciplinaUnidadeOrganica['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['modified_by']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Disciplina Unidade Organica'),
                    ['action' => 'edit', $disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Disciplina Unidade Organica'),
                    ['action' => 'delete', $disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['id']], [],
                    __('Are you sure you want to delete # %s?',
                            $disciplinaUnidadeOrganica['DisciplinaUnidadeOrganica']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Disciplina Unidade Organicas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Disciplina Unidade Organica'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Disciplinas'),
                    ['controller' => 'disciplinas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Disciplina'),
                    ['controller' => 'disciplinas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organicas'),
                    ['controller' => 'unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica'),
                    ['controller' => 'unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
